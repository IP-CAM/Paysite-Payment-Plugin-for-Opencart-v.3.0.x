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

/* extension/payment/alipay.twig */
class __TwigTemplate_d858db3ccbb7f6ec0210941ffe02948f5e7d5dce1d59b38dfc6c17ff4df22181 extends \Twig\Template
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
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <div class=\"tab-content\">
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-app-id\">";
        // line 30
        echo ($context["entry_app_id"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_alipay_app_id\" value=\"";
        // line 32
        echo ($context["payment_alipay_app_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_app_id"] ?? null);
        echo "\" id=\"entry-app-id\" class=\"form-control\"/>
                ";
        // line 33
        if (($context["error_app_id"] ?? null)) {
            // line 34
            echo "                <div class=\"text-danger\">";
            echo ($context["error_app_id"] ?? null);
            echo "</div>
                ";
        }
        // line 36
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-merchant-private-key\">";
        // line 39
        echo ($context["entry_merchant_private_key"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"payment_alipay_merchant_private_key\" rows=\"10\" placeholder=\"";
        // line 41
        echo ($context["entry_merchant_private_key"] ?? null);
        echo "\" id=\"entry-merchant-private-key\" class=\"form-control\">";
        echo ($context["payment_alipay_merchant_private_key"] ?? null);
        echo "</textarea>
                ";
        // line 42
        if (($context["error_merchant_private_key"] ?? null)) {
            // line 43
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_merchant_private_key"] ?? null);
            echo "</div>
                ";
        }
        // line 45
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-alipay-public-key\">";
        // line 48
        echo ($context["entry_alipay_public_key"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"payment_alipay_alipay_public_key\" rows=\"5\" placeholder=\"";
        // line 50
        echo ($context["entry_alipay_public_key"] ?? null);
        echo "\" id=\"entry-alipay-public-key\" class=\"form-control\">";
        echo ($context["payment_alipay_alipay_public_key"] ?? null);
        echo "</textarea>
                ";
        // line 51
        if (($context["error_alipay_public_key"] ?? null)) {
            // line 52
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_alipay_public_key"] ?? null);
            echo "</div>
                ";
        }
        // line 54
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 57
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_alipay_total\" value=\"";
        // line 59
        echo ($context["payment_alipay_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 63
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_alipay_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                  ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 67
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 67) == ($context["payment_alipay_order_status_id"] ?? null))) {
                // line 68
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 68);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 68);
                echo "</option>
                    ";
            } else {
                // line 70
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 70);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 70);
                echo "</option>
                    ";
            }
            // line 72
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 77
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_alipay_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                  <option value=\"0\">";
        // line 80
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                  ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 82
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 82) == ($context["payment_alipay_geo_zone_id"] ?? null))) {
                // line 83
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 83);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 83);
                echo "</option>
                  ";
            } else {
                // line 85
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 85);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 85);
                echo "</option>
                  ";
            }
            // line 87
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-test\"><span data-toggle=\"tooltip\" title=\"";
        // line 92
        echo ($context["help_test"] ?? null);
        echo "\">";
        echo ($context["entry_test"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <select name=\"payment_alipay_test\" id=\"input-test\" class=\"form-control\">
                  ";
        // line 95
        if ((($context["payment_alipay_test"] ?? null) == "sandbox")) {
            // line 96
            echo "                    <option value=\"sandbox\" selected=\"selected\">";
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 98
            echo "                    <option value=\"sandbox\">";
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
                  ";
        }
        // line 100
        echo "                  ";
        if ((($context["payment_alipay_test"] ?? null) == "live")) {
            // line 101
            echo "                    <option value=\"live\" selected=\"selected\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 103
            echo "                    <option value=\"live\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
                  ";
        }
        // line 105
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 109
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_alipay_status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 112
        if (($context["payment_alipay_status"] ?? null)) {
            // line 113
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 114
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 116
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 117
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 119
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 123
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_alipay_sort_order\" value=\"";
        // line 125
        echo ($context["payment_alipay_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </div>
        </form>
        <div class=\"alert alert-info\">";
        // line 130
        echo ($context["help_alipay_setup"] ?? null);
        echo "</div>
      </div>
    </div>
  </div>
</div>
";
        // line 135
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/alipay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 135,  374 => 130,  364 => 125,  359 => 123,  353 => 119,  348 => 117,  343 => 116,  338 => 114,  333 => 113,  331 => 112,  325 => 109,  319 => 105,  313 => 103,  307 => 101,  304 => 100,  298 => 98,  292 => 96,  290 => 95,  282 => 92,  276 => 88,  270 => 87,  262 => 85,  254 => 83,  251 => 82,  247 => 81,  243 => 80,  237 => 77,  231 => 73,  225 => 72,  217 => 70,  209 => 68,  206 => 67,  202 => 66,  196 => 63,  187 => 59,  180 => 57,  175 => 54,  169 => 52,  167 => 51,  161 => 50,  156 => 48,  151 => 45,  145 => 43,  143 => 42,  137 => 41,  132 => 39,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/alipay.twig", "");
    }
}
