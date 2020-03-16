<?php

/* install/step_4.twig */
class __TwigTemplate_1baa31482978f0f0a98d626a7cfc68896e9653de9955ed2e17f0cc5f7f9aed5b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">4
          <small>/4</small>
        </h1>
        <h3>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "
          <br>
          <small>";
        // line 11
        echo ($context["text_step_4"] ?? null);
        echo "</small>
        </h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\"/></div>
      </div>
    </div>
  </header>
  ";
        // line 19
        if (($context["success"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-success alert-dismissible\">";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 22
        echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
        echo ($context["error_warning"] ?? null);
        echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  <div class=\"visit\">
    <div class=\"row\">
      <div class=\"col-sm-5 col-sm-offset-1 text-center\">
        <p><i class=\"fa fa-shopping-cart fa-5x\"></i></p>
        <a href=\"../\" class=\"btn btn-secondary\">";
        // line 29
        echo ($context["text_catalog"] ?? null);
        echo "</a></div>
      <div class=\"col-sm-5 text-center\">
        <p><i class=\"fa fa-cog fa-5x white\"></i></p>
        <a href=\"../admin/\" class=\"btn btn-secondary\">";
        // line 32
        echo ($context["text_admin"] ?? null);
        echo "</a></div>
    </div>
  </div>
  <div class=\"modules\">
    <div class=\"row\">
      <div class=\"col-sm-12 text-center\"><a href=\"https://www.opencart.com/index.php?route=marketplace/extension&utm_source=opencart_install&utm_medium=store_link&utm_campaign=opencart_install\" target=\"_BLANK\" class=\"btn btn-default\">";
        // line 37
        echo ($context["text_extension"] ?? null);
        echo "</a></div>
    </div>
  </div>
  <div class=\"mailing\">
    <div class=\"row\">
      <div class=\"col-sm-12\"><i class=\"fa fa-envelope-o fa-5x\"></i>
        <h3>";
        // line 43
        echo ($context["text_mail"] ?? null);
        echo "
          <br>
          <small>";
        // line 45
        echo ($context["text_mail_description"] ?? null);
        echo "</small>
        </h3>
        <a href=\"http://newsletter.opencart.com/h/r/B660EBBE4980C85C\" target=\"_BLANK\" class=\"btn btn-secondary\">";
        // line 47
        echo ($context["button_mail"] ?? null);
        echo "</a></div>
    </div>
  </div>
  <div class=\"core-modules\">
    <div class=\"row\">
      <div class=\"col-sm-12 text-center\"><img src=\"view/image/maxmind.gif\"/>
        <p>";
        // line 53
        echo ($context["text_maxmind"] ?? null);
        echo "</p>
        <a class=\"btn btn-primary\" href=\"";
        // line 54
        echo ($context["maxmind"] ?? null);
        echo "\">";
        echo ($context["button_setup"] ?? null);
        echo "</a>
      </div>
    </div>
  </div>
  <div class=\"support text-center\">
    <div class=\"row\">
      <div class=\"col-sm-4\"><a href=\"https://www.facebook.com/opencart/\" class=\"icon transition\"><i class=\"fa fa-facebook fa-4x\"></i></a>
        <h3>";
        // line 61
        echo ($context["text_facebook"] ?? null);
        echo "</h3>
        <p>";
        // line 62
        echo ($context["text_facebook_description"] ?? null);
        echo "</p>
        <a href=\"https://www.facebook.com/opencart/\">";
        // line 63
        echo ($context["text_facebook_visit"] ?? null);
        echo "</a></div>
      <div class=\"col-sm-4\"><a href=\"https://forum.opencart.com/?utm_source=opencart_install&utm_medium=forum_link&utm_campaign=opencart_install\" class=\"icon transition\"><i class=\"fa fa-comments fa-4x\"></i></a>
        <h3>";
        // line 65
        echo ($context["text_forum"] ?? null);
        echo "</h3>
        <p>";
        // line 66
        echo ($context["text_forum_description"] ?? null);
        echo "</p>
        <a href=\"https://forum.opencart.com/?utm_source=opencart_install&utm_medium=forum_link&utm_campaign=opencart_install\">";
        // line 67
        echo ($context["text_forum_visit"] ?? null);
        echo "</a></div>
      <div class=\"col-sm-4\"><a href=\"https://www.opencart.com/index.php?route=support/partner&utm_source=opencart_install&utm_medium=partner_link&utm_campaign=opencart_install\" class=\"icon transition\"><i class=\"fa fa-user fa-4x\"></i></a>
        <h3>";
        // line 69
        echo ($context["text_commercial"] ?? null);
        echo "</h3>
        <p>";
        // line 70
        echo ($context["text_commercial_description"] ?? null);
        echo "</p>
        <a href=\"https://www.opencart.com/index.php?route=support/partner&utm_source=opencart_install&utm_medium=partner_link&utm_campaign=opencart_install\" target=\"_BLANK\">";
        // line 71
        echo ($context["text_commercial_visit"] ?? null);
        echo "</a></div>
    </div>
  </div>
</div>
";
        // line 75
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "install/step_4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 75,  161 => 71,  157 => 70,  153 => 69,  148 => 67,  144 => 66,  140 => 65,  135 => 63,  131 => 62,  127 => 61,  115 => 54,  111 => 53,  102 => 47,  97 => 45,  92 => 43,  83 => 37,  75 => 32,  69 => 29,  58 => 22,  52 => 20,  50 => 19,  39 => 11,  34 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "install/step_4.twig", "");
    }
}
