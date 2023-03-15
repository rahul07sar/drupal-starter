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

/* themes/custom/server_theme/templates/server-theme-text-decoration--font-color.html.twig */
class __TwigTemplate_357637a824775e6fc37e6def19e52c86cd02678cf8b2060949587ca52bdcf9d6 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((($context["color"] ?? null) == "light-gray")) {
            // line 2
            echo "  ";
            $context["color_class"] = "text-gray-400";
        } elseif ((        // line 3
($context["color"] ?? null) == "gray")) {
            // line 4
            echo "  ";
            $context["color_class"] = "text-gray-500";
        } elseif ((        // line 5
($context["color"] ?? null) == "dark-gray")) {
            // line 6
            echo "  ";
            $context["color_class"] = "text-gray-700";
        }
        // line 8
        echo "
<div class=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_class"] ?? null), 9, $this->source), "html", null, true);
        echo "\">
  ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 10, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-text-decoration--font-color.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  58 => 9,  55 => 8,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if color == 'light-gray' %}
  {% set color_class = 'text-gray-400' %}
{% elseif color == 'gray' %}
  {% set color_class = 'text-gray-500' %}
{% elseif color == 'dark-gray' %}
  {% set color_class = 'text-gray-700' %}
{% endif %}

<div class=\"{{ color_class }}\">
  {{ element }}
</div>
", "themes/custom/server_theme/templates/server-theme-text-decoration--font-color.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-text-decoration--font-color.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
