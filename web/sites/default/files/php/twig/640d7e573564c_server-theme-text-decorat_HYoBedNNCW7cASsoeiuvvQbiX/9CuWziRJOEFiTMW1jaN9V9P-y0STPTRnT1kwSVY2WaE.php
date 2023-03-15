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

/* themes/custom/server_theme/templates/server-theme-text-decoration--responsive-font-size.html.twig */
class __TwigTemplate_45a241ee946ee5ffeb50529d1cb165377047a3c8e07e741cd0891e9a240ce8d2 extends \Twig\Template
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
        if ((($context["size"] ?? null) == "xs")) {
            // line 2
            echo "  ";
            $context["size_classes"] = "text-xs";
        } elseif ((        // line 3
($context["size"] ?? null) == "sm")) {
            // line 4
            echo "  ";
            $context["size_classes"] = "text-xs md:text-sm";
        } elseif ((        // line 5
($context["size"] ?? null) == "base")) {
            // line 6
            echo "  ";
            $context["size_classes"] = "text-sm md:text-base";
        } elseif ((        // line 7
($context["size"] ?? null) == "lg")) {
            // line 8
            echo "  ";
            $context["size_classes"] = "md:text-lg";
        } elseif ((        // line 9
($context["size"] ?? null) == "xl")) {
            // line 10
            echo "  ";
            $context["size_classes"] = "text-lg md:text-xl";
        } elseif ((        // line 11
($context["size"] ?? null) == "3xl")) {
            // line 12
            echo "  ";
            $context["size_classes"] = "text-xl md:text-2xl lg:text-3xl";
        }
        // line 14
        echo "
<div class=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["size_classes"] ?? null), 15, $this->source), "html", null, true);
        echo "\">
  ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 16, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-text-decoration--responsive-font-size.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  73 => 15,  70 => 14,  66 => 12,  64 => 11,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if size == 'xs' %}
  {% set size_classes = 'text-xs' %}
{% elseif size == 'sm' %}
  {% set size_classes = 'text-xs md:text-sm' %}
{% elseif size == 'base' %}
  {% set size_classes = 'text-sm md:text-base' %}
{% elseif size == 'lg' %}
  {% set size_classes = 'md:text-lg' %}
{% elseif size == 'xl' %}
  {% set size_classes = 'text-lg md:text-xl' %}
{% elseif size == '3xl' %}
  {% set size_classes = 'text-xl md:text-2xl lg:text-3xl' %}
{% endif %}

<div class=\"{{ size_classes }}\">
  {{ element }}
</div>
", "themes/custom/server_theme/templates/server-theme-text-decoration--responsive-font-size.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-text-decoration--responsive-font-size.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("escape" => 15);
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
