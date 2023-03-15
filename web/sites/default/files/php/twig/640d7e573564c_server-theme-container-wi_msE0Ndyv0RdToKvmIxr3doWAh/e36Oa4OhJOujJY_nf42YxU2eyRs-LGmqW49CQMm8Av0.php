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

/* themes/custom/server_theme/templates/server-theme-container-wide.html.twig */
class __TwigTemplate_f06c61fae34ba1973c02685075b8ba820e5bcf37644c993d8f7ba8bf348e3bfe extends \Twig\Template
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
            $context["color_class"] = "bg-gray-100";
            // line 3
            echo "  ";
            $context["py_class"] = "py-8 md:py-10";
        } else {
            // line 5
            echo "  ";
            $context["color_class"] = "bg-transparent";
            // line 6
            echo "  ";
            $context["py_class"] = "";
        }
        // line 8
        echo "
<div class=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_class"] ?? null), 9, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["py_class"] ?? null), 9, $this->source), "html", null, true);
        echo "\">
  <div class=\"container-wide w-full\">
    ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 11, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-container-wide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  58 => 9,  55 => 8,  51 => 6,  48 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if color == 'light-gray' %}
  {% set color_class = 'bg-gray-100' %}
  {% set py_class = 'py-8 md:py-10' %}
{% else %}
  {% set color_class = 'bg-transparent' %}
  {% set py_class = '' %}
{% endif %}

<div class=\"{{ color_class }} {{ py_class }}\">
  <div class=\"container-wide w-full\">
    {{ element }}
  </div>
</div>
", "themes/custom/server_theme/templates/server-theme-container-wide.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-container-wide.html.twig");
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
