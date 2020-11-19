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

/* default/template/extension/payment/pp_standard.twig */
class __TwigTemplate_234c67cc7f9e4e5b6bba7d88ff7965165879ec7dadbee310b0ac156d3fc4e8cd extends \Twig\Template
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
        if (($context["testmode"] ?? null)) {
            // line 2
            echo "<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["text_testmode"] ?? null);
            echo "</div>
";
        }
        // line 4
        echo "<form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
  <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
  <input type=\"hidden\" name=\"upload\" value=\"1\" />
  <input type=\"hidden\" name=\"business\" value=\"";
        // line 7
        echo ($context["business"] ?? null);
        echo "\" />
  ";
        // line 8
        $context["i"] = 1;
        // line 9
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "  <input type=\"hidden\" name=\"item_name_";
            echo ($context["i"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            echo "\" />
  <input type=\"hidden\" name=\"item_number_";
            // line 11
            echo ($context["i"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 11);
            echo "\" />
  <input type=\"hidden\" name=\"amount_";
            // line 12
            echo ($context["i"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 12);
            echo "\" />
  <input type=\"hidden\" name=\"quantity_";
            // line 13
            echo ($context["i"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 13);
            echo "\" />
  <input type=\"hidden\" name=\"weight_";
            // line 14
            echo ($context["i"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 14);
            echo "\" />
  ";
            // line 15
            $context["j"] = 0;
            // line 16
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 17
                echo "  <input type=\"hidden\" name=\"on";
                echo ($context["j"] ?? null);
                echo "_";
                echo ($context["i"] ?? null);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 17);
                echo "\" />
  <input type=\"hidden\" name=\"os";
                // line 18
                echo ($context["j"] ?? null);
                echo "_";
                echo ($context["i"] ?? null);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 18);
                echo "\" />
  ";
                // line 19
                $context["j"] = (($context["j"] ?? null) + 1);
                // line 20
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "  ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 22
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  ";
        if (($context["discount_amount_cart"] ?? null)) {
            // line 24
            echo "  <input type=\"hidden\" name=\"discount_amount_cart\" value=\"";
            echo ($context["discount_amount_cart"] ?? null);
            echo "\" />
  ";
        }
        // line 26
        echo "  <input type=\"hidden\" name=\"currency_code\" value=\"";
        echo ($context["currency_code"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"first_name\" value=\"";
        // line 27
        echo ($context["first_name"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"last_name\" value=\"";
        // line 28
        echo ($context["last_name"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"address1\" value=\"";
        // line 29
        echo ($context["address1"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"address2\" value=\"";
        // line 30
        echo ($context["address2"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"city\" value=\"";
        // line 31
        echo ($context["city"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"zip\" value=\"";
        // line 32
        echo ($context["zip"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"country\" value=\"";
        // line 33
        echo ($context["country"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"address_override\" value=\"0\" />
  <input type=\"hidden\" name=\"email\" value=\"";
        // line 35
        echo ($context["email"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"invoice\" value=\"";
        // line 36
        echo ($context["invoice"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"lc\" value=\"";
        // line 37
        echo ($context["lc"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"rm\" value=\"1\" />
  <input type=\"hidden\" name=\"no_note\" value=\"1\" />
  <input type=\"hidden\" name=\"no_shipping\" value=\"1\" />
  <input type=\"hidden\" name=\"charset\" value=\"utf-8\" />
  <input type=\"hidden\" name=\"return\" value=\"";
        // line 42
        echo ($context["return"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"notify_url\" value=\"";
        // line 43
        echo ($context["notify_url"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"cancel_return\" value=\"";
        // line 44
        echo ($context["cancel_return"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"paymentaction\" value=\"";
        // line 45
        echo ($context["paymentaction"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"custom\" value=\"";
        // line 46
        echo ($context["custom"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"bn\" value=\"OpenCart_2.0_WPS\" />
  <div class=\"buttons\">
    <div class=\"pull-right\">
      <input type=\"submit\" value=\"";
        // line 50
        echo ($context["button_confirm"] ?? null);
        echo "\" class=\"btn btn-primary\" />
    </div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/pp_standard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 50,  210 => 46,  206 => 45,  202 => 44,  198 => 43,  194 => 42,  186 => 37,  182 => 36,  178 => 35,  173 => 33,  169 => 32,  165 => 31,  161 => 30,  157 => 29,  153 => 28,  149 => 27,  144 => 26,  138 => 24,  135 => 23,  129 => 22,  126 => 21,  120 => 20,  118 => 19,  110 => 18,  101 => 17,  96 => 16,  94 => 15,  88 => 14,  82 => 13,  76 => 12,  70 => 11,  63 => 10,  58 => 9,  56 => 8,  52 => 7,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/pp_standard.twig", "");
    }
}
