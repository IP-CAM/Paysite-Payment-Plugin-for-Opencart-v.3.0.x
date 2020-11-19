<?php
class ControllerExtensionPaymentPaysite extends Controller {
	public function index() {
        $this->language->load('payment/PaysiteOpencart');

        $data['button_confirm'] = $this->language->get('button_confirm');
        $
        $this->load->model('checkout/order');

        $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
        
		$config = array (
			'app_id'               => $this->config->get('payment_paysite_user_email'),
			'merchant_private_key' => $this->config->get('payment_paysite_user_password'),
			'notify_url'           => HTTPS_SERVER . "payment_callback/paysite",
			'return_url'           => $this->url->link('checkout/success'),
			'charset'              => "UTF-8",
			'sign_type'            => "RSA2",
			'gateway_url'          => $this->config->get('payment_alipay_test') == "sandbox" ? "http://paysite-env.eba-rhpmprji.us-east-1.elasticbeanstalk.com/api/v1/webpay/getcredential" : "https://openapi.alipay.com/gateway.do",
			'alipay_public_key'    => $this->config->get('payment_alipay_alipay_public_key'),
        );

        $uniqueRef = uniqid();
        $transactionId = $uniqueRef . '_' . $order_info['order_id'];
        $callbackUrl = $config['notify_url'];

		$total_amount = trim($this->currency->format($order_info['total'], 'CNY', '', false));

        $this->load->model('extension/payment/alipay'); 
        $initTranx = $this->getCredentials($config);

        $order_totalKobo = $total_amount  * 100;
        $computeHash = hash('sha512', $initTranx['merchRef'] . $transactionId . $initTranx['hashkey'] . $order_totalKobo . $callbackUrl);

        $email = $config['app_id'];
        $password = $config['merchant_private_key'];
        $str = $email . ":" . $password;
        $credential = base64_encode($str);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $config['gateway_url'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POSTFIELDS => json_encode([
                'transRef' => $transactionId,
                'merchRef' => $initTranx['merchRef'],
                'description' => "Transaction Payment",
                // 'custName' => trim($order->billing_first_name . ' ' . $order->billing_last_name),
                'hashkey' => $initTranx['hashkey'],
                // 'cust_id' => trim($order->billing_email),
                'submittedHash' => $computeHash,
                'currencyCode' => "566",
                'callback' => $callbackUrl,
                'amount' => $order_totalKobo,
            ]),
            CURLOPT_HTTPHEADER => [
                "Authorization: Basic " . $credential,
                "content-type: application/json",
                "cache-control: no-cache"
            ],
        ));

        $response = curl_exec($curl);
        $initTranx = json_decode($response, true);
        header('Location: '.$initTranx['transurl']);

        return $this->load->view('extension/payment/PaysiteOpencart', $data);
	}

    private function getCredentials($config){
        $email = $config['app_id'];
        $password = $config['merchant_private_key'];
        $str = $email . ":" . $password;
        $credential = base64_encode($str);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $config['gateway_url'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POSTFIELDS => json_encode([
                'email' => $email,
                'password' => $password,
            ]),
            CURLOPT_HTTPHEADER => [
                "Authorization: Basic " . $credential,
                "content-type: application/json",
                "cache-control: no-cache"
            ],
        ));

        $response = curl_exec($curl);
        $initTranx = json_decode($response, true);

        return $initTranx;
    }
    
	public function callback() {
		$this->log->write('alipay pay notify:');
		$arr = $_POST;
		$config = array (
			'app_id'               => $this->config->get('payment_alipay_app_id'),
			'merchant_private_key' => $this->config->get('payment_alipay_merchant_private_key'),
			'notify_url'           => HTTPS_SERVER . "payment_callback/alipay",
			'return_url'           => $this->url->link('checkout/success'),
			'charset'              => "UTF-8",
			'sign_type'            => "RSA2",
			'gateway_url'          => $this->config->get('payment_alipay_test') == "sandbox" ? "https://openapi.alipaydev.com/gateway.do" : "https://openapi.alipay.com/gateway.do",
			'alipay_public_key'    => $this->config->get('payment_alipay_alipay_public_key'),
		);
		$this->load->model('extension/payment/alipay');
		$this->log->write('POST' . var_export($_POST,true));
		$result = $this->model_extension_payment_alipay->check($arr, $config);

		if($result) {//check successed
			$this->log->write('Alipay check successed');
			$order_id = $_POST['out_trade_no'];
			if($_POST['trade_status'] == 'TRADE_FINISHED') {
			}
			else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
				$this->load->model('checkout/order');
				$this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_alipay_order_status_id'));
			}
			echo "success";	//Do not modified or deleted
		}else {
			$this->log->write('Alipay check failed');
			//chedk failed
			echo "fail";

		}
	}
}