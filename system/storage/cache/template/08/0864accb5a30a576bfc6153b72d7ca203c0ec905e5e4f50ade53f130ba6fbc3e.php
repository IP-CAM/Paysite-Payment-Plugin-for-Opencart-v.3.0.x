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
class __TwigTemplate_c19d4a1d1b7a860efa06e855c91383e1a18dd02008646984ba2a88071ce2996e extends \Twig\Template
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
        echo "<?php echo \$header; ?>
<div id=\"content\">
  <div class=\"box\">
    <div class=\"heading\">
      <h1><img src=\"view/image/paysite.png\" alt=\"\" /> <?php echo \$heading_title; ?></h1>
      <div class=\"buttons\"><a onclick=\"\$('#form').submit();\" class=\"button\"><?php echo \$button_save; ?></a><a href=\"<?php echo \$cancel; ?>\" class=\"button\"><?php echo \$button_cancel; ?></a></div>
    </div>
    <div class=\"content\">
      <form action=\"<?php echo \$action; ?>\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
        <table class=\"form\">
          <tr>
            <td><?php echo \$entry_order_status; ?></td>
            <td><select name=\"custom_order_status_id\">
                <?php foreach (\$order_statuses as \$order_status) { ?>
                <?php if (\$order_status['order_status_id'] == \$custom_order_status_id) { ?>
                <option value=\"<?php echo \$order_status['order_status_id']; ?>\" selected=\"selected\"><?php echo \$order_status['name']; ?></option>
                <?php } else { ?>
                <option value=\"<?php echo \$order_status['order_status_id']; ?>\"><?php echo \$order_status['name']; ?></option>
                <?php } ?>
                <?php } ?>
              </select></td>
          </tr>
           
          <tr>
            <td><?php echo \$entry_text_config_one; ?></td>
            <td><input type=\"text\" name=\"text_config_one\" value=\"<?php echo \$text_config_one; ?>\" size=\"10\" /></td>
          </tr>
           
          <tr>
            <td><?php echo \$entry_text_config_two; ?></td>
            <td><input type=\"password\" name=\"text_config_two\" value=\"<?php echo \$text_config_two; ?>\" size=\"10\" /></td>
          </tr>
           
          <tr>
            <td><?php echo \$entry_status; ?></td>
            <td><select name=\"custom_status\">
                <?php if (\$custom_status) { ?>
                <option value=\"1\" selected=\"selected\"><?php echo \$text_enabled; ?></option>
                <option value=\"0\"><?php echo \$text_disabled; ?></option>
                <?php } else { ?>
                <option value=\"1\"><?php echo \$text_enabled; ?></option>
                <option value=\"0\" selected=\"selected\"><?php echo \$text_disabled; ?></option>
                <?php } ?>
              </select></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
<?php echo \$footer; ?>";
    }

    public function getTemplateName()
    {
        return "extension/payment/paysite_opencart.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/paysite_opencart.twig", "");
    }
}
