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

/* themes/custom/server_theme/templates/server-theme-link.html.twig */
class __TwigTemplate_dfe297ec023b9f38b3105317dbbc0870670b8e518e600e55d45635f822aabb57 extends \Twig\Template
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
        if ((($context["lines_clamp"] ?? null) == "1")) {
            // line 2
            echo "  ";
            $context["lines_clamp_class"] = "line-clamp-1";
        } elseif ((        // line 3
($context["lines_clamp"] ?? null) == "2")) {
            // line 4
            echo "  ";
            $context["lines_clamp_class"] = "line-clamp-2";
        } elseif ((        // line 5
($context["lines_clamp"] ?? null) == "3")) {
            // line 6
            echo "  ";
            $context["lines_clamp_class"] = "line-clamp-3";
        } elseif ((        // line 7
($context["lines_clamp"] ?? null) == "4")) {
            // line 8
            echo "  ";
            $context["lines_clamp_class"] = "line-clamp-4";
        }
        // line 10
        echo "

<a href=\"";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 12, $this->source), "html", null, true);
        echo "\" class=\"flex flex-row gap-1 items-center\">
  <span class=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lines_clamp_class"] ?? null), 13, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 13, $this->source), "html", null, true);
        echo "</span>
  ";
        // line 14
        if ((($context["show_external_icon"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["url"] ?? null), "isExternal", [], "method", false, false, true, 14))) {
            // line 15
            echo "    ";
            // line 16
            echo "    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-4 h-4 rtl-flip\">
      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25\" />
    </svg>
  ";
        }
        // line 20
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  78 => 16,  76 => 15,  74 => 14,  68 => 13,  64 => 12,  60 => 10,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if lines_clamp == '1' %}
  {% set lines_clamp_class = 'line-clamp-1' %}
{% elseif lines_clamp == '2' %}
  {% set lines_clamp_class = 'line-clamp-2' %}
{% elseif lines_clamp == '3' %}
  {% set lines_clamp_class = 'line-clamp-3' %}
{% elseif lines_clamp == '4' %}
  {% set lines_clamp_class = 'line-clamp-4' %}
{% endif %}


<a href=\"{{ url }}\" class=\"flex flex-row gap-1 items-center\">
  <span class=\"{{ lines_clamp_class }}\">{{ title }}</span>
  {% if show_external_icon and url.isExternal() %}
    {# Heroicons: arrow-top-right-on-square #}
    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-4 h-4 rtl-flip\">
      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25\" />
    </svg>
  {% endif %}
</a>
", "themes/custom/server_theme/templates/server-theme-link.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-link.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("escape" => 12);
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
