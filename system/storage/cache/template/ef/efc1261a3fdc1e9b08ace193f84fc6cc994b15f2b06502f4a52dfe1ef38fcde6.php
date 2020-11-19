<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/payment/paysite_opencart.twig */
class __TwigTemplate_36b064cad66bdc9b6ca574998baa9f750c3ad78854cd11bc4d2f290dbf2a6f51 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">

  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
          <i class=\"fa fa-reply\"></i>
        </a>
      </div>

      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>

      <ul class=\"breadcrumb\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      </ul>

    </div>
  </div>

  <div class=\"container-fluid\">

    ";
        // line 26
        if (($context["error_warning"] ?? null)) {
            // line 27
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 31
        echo "
    <div class=\"panel panel-default\">

      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 35
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>

      <div class=\"panel-body\">
        <form action=\"";
        // line 39
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <div class=\"tab-content\">
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-app-id\">";
        // line 42
        echo ($context["entry_app_id"] ?? null);
        echo "</label>

              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_paysite_user_email\" value=\"";
        // line 45
        echo ($context["payment_paysite_user_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_app_id"] ?? null);
        echo "\" id=\"entry-app-id\" class=\"form-control\"/>
                
                ";
        // line 47
        if (($context["error_app_id"] ?? null)) {
            // line 48
            echo "                <div class=\"text-danger\">";
            echo ($context["error_app_id"] ?? null);
            echo "</div>
                ";
        }
        // line 50
        echo "              </div>

            </div>

            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-merchant-private-key\">";
        // line 55
        echo ($context["entry_merchant_private_key"] ?? null);
        echo "</label>
              
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"payment_paysite_user_password\" value=\"";
        // line 58
        echo ($context["payment_paysite_user_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_merchant_private_key"] ?? null);
        echo "\" id=\"entry-merchant-private-key\" class=\"form-control\"/>
                
                ";
        // line 60
        if (($context["error_app_key"] ?? null)) {
            // line 61
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_app_key"] ?? null);
            echo "</div>
                ";
        }
        // line 63
        echo "              </div>

            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 68
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
              
              <div class=\"col-sm-10\">
                <select name=\"payment_paysite_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                  ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 73
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 73) == ($context["payment_paysite_order_status_id"] ?? null))) {
                // line 74
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 74);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 74);
                echo "</option>
                    ";
            } else {
                // line 76
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 76);
                echo "</option>
                    ";
            }
            // line 78
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </select>
              </div>

            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-test\"><span data-toggle=\"tooltip\" title=\"";
        // line 85
        echo ($context["help_test"] ?? null);
        echo "\">";
        echo ($context["entry_test"] ?? null);
        echo "</span></label>
              
              <div class=\"col-sm-10\">
                <select name=\"payment_paysite_test\" id=\"input-test\" class=\"form-control\">
                  ";
        // line 89
        if ((($context["payment_paysite_test"] ?? null) == "sandbox")) {
            // line 90
            echo "                    <option value=\"sandbox\" selected=\"selected\">";
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 92
            echo "                    <option value=\"sandbox\">";
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
                  ";
        }
        // line 94
        echo "                  ";
        if ((($context["payment_paysite_test"] ?? null) == "live")) {
            // line 95
            echo "                    <option value=\"live\" selected=\"selected\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 97
            echo "                    <option value=\"live\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
                  ";
        }
        // line 99
        echo "                </select>
              </div>

            </div>

            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 105
        echo ($context["entry_status"] ?? null);
        echo "</label>
             
              <div class=\"col-sm-10\">
                <select name=\"payment_paysite_status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 109
        if (($context["payment_paysite_status"] ?? null)) {
            // line 110
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 111
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 113
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 114
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 116
        echo "                </select>
              </div>

            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 127
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/paysite_opencart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 127,  295 => 116,  290 => 114,  285 => 113,  280 => 111,  275 => 110,  273 => 109,  266 => 105,  258 => 99,  252 => 97,  246 => 95,  243 => 94,  237 => 92,  231 => 90,  229 => 89,  220 => 85,  212 => 79,  206 => 78,  198 => 76,  190 => 74,  187 => 73,  183 => 72,  176 => 68,  169 => 63,  163 => 61,  161 => 60,  154 => 58,  148 => 55,  141 => 50,  135 => 48,  133 => 47,  126 => 45,  120 => 42,  114 => 39,  107 => 35,  101 => 31,  93 => 27,  91 => 26,  82 => 19,  71 => 17,  67 => 16,  61 => 13,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/paysite_opencart.twig", "");
    }
}
