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

/* themes/custom/server_theme/templates/server-theme-button.html.twig */
class __TwigTemplate_6c8df6f5067ef773936d1f3bb417c0efd62f69292f740276ccdb709dcaafc99c extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
";
        // line 10
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "flex flex-row items-center gap-x-4 rounded-lg px-6 py-3 text-xl border-2 border-blue-500 hover:bg-blue-600 w-fit", 1 => ((        // line 12
($context["is_primary"] ?? null)) ? ("bg-blue-500 text-white") : ("text-blue-900 bg-white hover:text-white"))], " "));
        // line 14
        echo "
";
        // line 15
        $context["target"] = ((($context["open_new_tab"] ?? null)) ? ("_blank") : ("_self"));
        // line 16
        echo "
<div class=\"inline-block button-wrapper\">
  <a class=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 18, $this->source), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 18, $this->source), "html", null, true);
        echo "\" target=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target"] ?? null), 18, $this->source), "html", null, true);
        echo "\">
    ";
        // line 19
        if (($context["icon"] ?? null)) {
            // line 20
            echo "      <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
        ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_getIconPath", [($context["icon"] ?? null)], 21, $context, $this->getSourceContext()));
            echo "
      </svg>
    ";
        }
        // line 24
        echo "    <div>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 24, $this->source), "html", null, true);
        echo "</div>
  </a>
</div>
";
    }

    // line 4
    public function macro_getIconPath($__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 5
            echo "  ";
            if ((($context["icon"] ?? null) == "download")) {
                // line 6
                echo "    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3\" />
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 6,  96 => 5,  83 => 4,  74 => 24,  68 => 21,  65 => 20,  63 => 19,  55 => 18,  51 => 16,  49 => 15,  46 => 14,  44 => 12,  43 => 10,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{# If we want to add an icon, we have to get the SVG here. We don't use <img>
   As we can't apply color to svg loaded through the img tag.
#}
{% macro getIconPath(icon) %}
  {% if icon == 'download' %}
    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3\" />
  {% endif %}
{% endmacro %}

{% set classes = [
  'flex flex-row items-center gap-x-4 rounded-lg px-6 py-3 text-xl border-2 border-blue-500 hover:bg-blue-600 w-fit',
  is_primary ? 'bg-blue-500 text-white' : 'text-blue-900 bg-white hover:text-white',
] | join(' ') | trim %}

{% set target = open_new_tab ? '_blank' : '_self' %}

<div class=\"inline-block button-wrapper\">
  <a class=\"{{ classes }}\" href=\"{{ url }}\" target=\"{{ target }}\">
    {% if icon %}
      <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
        {{ _self.getIconPath(icon) }}
      </svg>
    {% endif %}
    <div>{{ title }}</div>
  </a>
</div>
", "themes/custom/server_theme/templates/server-theme-button.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-button.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "if" => 19, "macro" => 4);
        static $filters = array("trim" => 13, "join" => 13, "escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'macro', 'import'],
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
