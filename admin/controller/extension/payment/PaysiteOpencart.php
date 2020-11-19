<?php
class ControllerextensionpaymentPaysiteOpencart extends Controller {
  private $error = array();
 
  public function index() {
    $this->language->load('extension/payment/PaysiteOpencart');

    $this->document->setTitle($this->language->get('heading_title'));

    $this->load->model('setting/setting');
 
    if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

      $this->model_setting_setting->editSetting('payment_paysite', $this->request->post);

      $this->session->data['success'] = $this->language->get('text_success');

      $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
    }

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['app_id'])) {
			$data['error_app_id'] = $this->error['app_id'];
		} else {
			$data['error_app_id'] = '';
		}

		if (isset($this->error['error_app_key'])) {
			$data['error_app_key'] = $this->error['error_app_key'];
		} else {
			$data['error_app_key'] = '';
		}
    
    $data['breadcrumbs'] = array();

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_home'),
      'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
    );

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_extension'),
      'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
    );

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('heading_title'),
      'href' => $this->url->link('extension/payment/PaysiteOpencart', 'user_token=' . $this->session->data['user_token'], true)
    );
 
    $data['action'] = $this->url->link('extension/payment/PaysiteOpencart', 'user_token=' . $this->session->data['user_token'], true);

    $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);
 
    if (isset($this->request->post['payment_paysite_user_email'])) {
      $data['payment_paysite_user_email'] = $this->request->post['payment_paysite_user_email'];
    } else {
      $data['payment_paysite_user_email'] = $this->config->get('payment_paysite_user_email');
    }
        
    if (isset($this->request->post['payment_paysite_user_password'])) {
      $data['payment_paysite_user_password'] = $this->request->post['payment_paysite_user_password'];
    } else {
      $data['payment_paysite_user_password'] = $this->config->get('payment_paysite_user_password');
    }
            
    if (isset($this->request->post['payment_paysite_status'])) {
      $data['payment_paysite_status'] = $this->request->post['payment_paysite_status'];
    } else {
      $data['payment_paysite_status'] = $this->config->get('payment_paysite_status');
    }
        
    if (isset($this->request->post['payment_paysite_order_status_id'])) {
      $data['payment_paysite_order_status_id'] = $this->request->post['payment_paysite_order_status_id'];
    } else {
      $data['payment_paysite_order_status_id'] = $this->config->get('payment_paysite_order_status_id');
    }

    if (isset($this->request->post['payment_paysite_test'])) {
      $data['payment_paysite_test'] = $this->request->post['payment_paysite_test'];
    } else {
      $data['payment_paysite_test'] = $this->config->get('payment_paysite_test');
    }

 
    $this->load->model('localisation/order_status');

    $data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
    
    $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

    $this->response->setOutput($this->load->view('extension/payment/paysite_opencart', $data));
  }

  protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/PaysiteOpencart')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['payment_paysite_user_email']) {
			$this->error['app_id'] = $this->language->get('error_app_id');
		}

		if (!$this->request->post['payment_paysite_user_password']) {
			$this->error['error_app_key'] = $this->language->get('error_app_key');
		}

		return !$this->error;
	}
}