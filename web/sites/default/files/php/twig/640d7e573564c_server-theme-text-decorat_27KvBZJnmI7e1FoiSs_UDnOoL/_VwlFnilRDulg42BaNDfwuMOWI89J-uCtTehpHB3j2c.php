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

/* themes/custom/server_theme/templates/server-theme-text-decoration--line-clamp.html.twig */
class __TwigTemplate_1b7972fe617f7e8f22ebe67cd43c95ac602c74e7f79557da87de11a0ea00b5ee extends \Twig\Template
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
        if ((($context["lines"] ?? null) == "1")) {
            // line 2
            echo "  ";
            $context["lines_class"] = "line-clamp-1";
        } elseif ((        // line 3
($context["lines"] ?? null) == "2")) {
            // line 4
            echo "  ";
            $context["lines_class"] = "line-clamp-2";
        } elseif ((        // line 5
($context["lines"] ?? null) == "3")) {
            // line 6
            echo "  ";
            $context["lines_class"] = "line-clamp-3";
        } elseif ((        // line 7
($context["lines"] ?? null) == "4")) {
            // line 8
            echo "  ";
            $context["lines_class"] = "line-clamp-4";
        }
        // line 10
        echo "
<div class=\"";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lines_class"] ?? null), 11, $this->source), "html", null, true);
        echo "\">
  ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 12, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-text-decoration--line-clamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  63 => 11,  60 => 10,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if lines == '1' %}
  {% set lines_class = 'line-clamp-1' %}
{% elseif lines == '2' %}
  {% set lines_class = 'line-clamp-2' %}
{% elseif lines == '3' %}
  {% set lines_class = 'line-clamp-3' %}
{% elseif lines == '4' %}
  {% set lines_class = 'line-clamp-4' %}
{% endif %}

<div class=\"{{ lines_class }}\">
  {{ element }}
</div>
", "themes/custom/server_theme/templates/server-theme-text-decoration--line-clamp.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-text-decoration--line-clamp.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("escape" => 11);
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
