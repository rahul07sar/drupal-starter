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

/* themes/custom/server_theme/templates/server-theme-text-decoration--font-weight.html.twig */
class __TwigTemplate_58abda068ddae6f990a5695508c9cefc7a321d1a8def09500f4c47d969b04c9a extends \Twig\Template
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
        if ((($context["font_weight"] ?? null) == "normal")) {
            // line 2
            echo "  ";
            $context["weight_class"] = "font-normal";
        } elseif ((        // line 3
($context["font_weight"] ?? null) == "medium")) {
            // line 4
            echo "  ";
            $context["weight_class"] = "font-medium";
        } elseif ((        // line 5
($context["font_weight"] ?? null) == "bold")) {
            // line 6
            echo "  ";
            $context["weight_class"] = "font-bold";
        }
        // line 8
        echo "
<div class=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["weight_class"] ?? null), 9, $this->source), "html", null, true);
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
        return "themes/custom/server_theme/templates/server-theme-text-decoration--font-weight.html.twig";
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
        return new Source("{% if font_weight == 'normal' %}
  {% set weight_class = 'font-normal' %}
{% elseif font_weight == 'medium' %}
  {% set weight_class = 'font-medium' %}
{% elseif font_weight == 'bold' %}
  {% set weight_class = 'font-bold' %}
{% endif %}

<div class=\"{{ weight_class }}\">
  {{ element }}
</div>
", "themes/custom/server_theme/templates/server-theme-text-decoration--font-weight.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-text-decoration--font-weight.html.twig");
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
