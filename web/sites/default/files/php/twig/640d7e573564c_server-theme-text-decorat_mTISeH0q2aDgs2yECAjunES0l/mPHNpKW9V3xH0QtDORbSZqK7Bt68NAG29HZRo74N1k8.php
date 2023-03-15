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

/* themes/custom/server_theme/templates/server-theme-text-decoration--link.html.twig */
class __TwigTemplate_852469330c1d1fc85b4102facddbd44579b7830a2d8733a5172dd3b1358546dd extends \Twig\Template
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
        if ((($context["color"] ?? null) == "gray")) {
            // line 2
            echo "  ";
            $context["color_class"] = "text-gray-500";
            // line 3
            echo "  ";
            $context["hover_color_class"] = "hover:text-gray-600";
        } elseif ((        // line 4
($context["color"] ?? null) == "dark-gray")) {
            // line 5
            echo "  ";
            $context["color_class"] = "text-gray-700";
            // line 6
            echo "  ";
            $context["hover_color_class"] = "hover:text-gray-800";
        }
        // line 8
        echo "
";
        // line 9
        $context["classes"] = twig_trim_filter(twig_join_filter([0 =>         // line 10
($context["color_class"] ?? null), 1 =>         // line 11
($context["hover_color_class"] ?? null), 2 => (((        // line 12
($context["underline"] ?? null) == "always")) ? ("underline") : ("")), 3 => (((        // line 13
($context["underline"] ?? null) == "hover")) ? ("hover:underline") : (""))], " "));
        // line 15
        echo "
<div class=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 16, $this->source), "html", null, true);
        echo "\">
  ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 17, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-text-decoration--link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  68 => 16,  65 => 15,  63 => 13,  62 => 12,  61 => 11,  60 => 10,  59 => 9,  56 => 8,  52 => 6,  49 => 5,  47 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if color == 'gray' %}
  {% set color_class = 'text-gray-500' %}
  {% set hover_color_class = 'hover:text-gray-600' %}
{% elseif color == 'dark-gray' %}
  {% set color_class = 'text-gray-700' %}
  {% set hover_color_class = 'hover:text-gray-800' %}
{% endif %}

{% set classes = [
  color_class,
  hover_color_class,
  underline == 'always' ? 'underline',
  underline == 'hover' ? 'hover:underline',
] | join(' ') | trim %}

<div class=\"{{ classes }}\">
  {{ element }}
</div>
", "themes/custom/server_theme/templates/server-theme-text-decoration--link.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-text-decoration--link.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("trim" => 14, "join" => 14, "escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['trim', 'join', 'escape'],
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
