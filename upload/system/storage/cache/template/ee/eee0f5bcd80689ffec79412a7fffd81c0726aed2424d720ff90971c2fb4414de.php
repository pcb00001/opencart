<?php

/* extension/dashboard/activity_info.twig */
class __TwigTemplate_9f79e377b749559668f9e9477efff91121d9efd2d397a385931e1c75c93bd271 extends Twig_Template
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
        echo "<div class=\"card mb-3\">
  <div class=\"card-header\"><i class=\"fas fa-calendar\"></i> ";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <ul class=\"list-group list-group-flush\">
    ";
        // line 4
        if (($context["activities"] ?? null)) {
            // line 5
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["activities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 6
                echo "        <li class=\"list-group-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["activity"], "comment", []);
                echo "
          <br/>
          <small class=\"text-muted\"><i class=\"fas fa-clock\"></i> ";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["activity"], "date_added", []);
                echo "</small>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "      <li class=\"list-group-item text-center\">";
            echo ($context["text_no_results"] ?? null);
            echo "</li>
    ";
        }
        // line 14
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/activity_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  56 => 12,  53 => 11,  44 => 8,  38 => 6,  33 => 5,  31 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "extension/dashboard/activity_info.twig", "");
    }
}
