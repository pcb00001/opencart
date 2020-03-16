<?php

/* common/login.twig */
class __TwigTemplate_5c5932b18f115c16b5da1f8374ea801fe6b32d9110d466beb8bc3cb0cdd767b7 extends Twig_Template
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
<div id=\"content\">
  <div class=\"container-fluid\">
    <br/>
    <br/>
    <div class=\"row justify-content-sm-center\">
      <div class=\"col-sm-4 col-md-6\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-lock\"></i> ";
        // line 9
        echo ($context["text_login"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "              <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>
            ";
        }
        // line 16
        echo "            ";
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "              <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>
            ";
        }
        // line 21
        echo "            <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label for=\"input-username\" class=\"col-form-label\">";
        // line 23
        echo ($context["entry_username"] ?? null);
        echo "</label>
                <div class=\"input-group\">
                  <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                  </div>
                  <input type=\"text\" name=\"username\" value=\"";
        // line 28
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"input-password\" class=\"col-form-label\">";
        // line 32
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <div class=\"input-group mb-2\">
                  <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\"><i class=\"fas fa-lock\"></i></span>
                  </div>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 37
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                </div>
                ";
        // line 39
        if (($context["forgotten"] ?? null)) {
            // line 40
            echo "                  <div class=\"form-text\"><a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a></div>
                ";
        }
        // line 42
        echo "              </div>
              <div class=\"text-right\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-key\"></i> ";
        // line 44
        echo ($context["button_login"] ?? null);
        echo "</button>
              </div>
              ";
        // line 46
        if (($context["redirect"] ?? null)) {
            // line 47
            echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
              ";
        }
        // line 49
        echo "            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 56
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "common/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 56,  125 => 49,  119 => 47,  117 => 46,  112 => 44,  108 => 42,  100 => 40,  98 => 39,  91 => 37,  83 => 32,  74 => 28,  66 => 23,  60 => 21,  52 => 17,  49 => 16,  41 => 12,  39 => 11,  34 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/login.twig", "");
    }
}
