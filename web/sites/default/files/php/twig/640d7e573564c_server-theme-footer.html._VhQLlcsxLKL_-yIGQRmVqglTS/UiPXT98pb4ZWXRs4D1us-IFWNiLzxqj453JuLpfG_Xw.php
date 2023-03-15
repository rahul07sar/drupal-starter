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

/* themes/custom/server_theme/templates/server-theme-footer.html.twig */
class __TwigTemplate_236c1051940257deb41677464c734e04a10fb2439bce23262fcd62ab5e03e23d extends \Twig\Template
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
        // line 6
        echo "
";
        // line 12
        echo "
<footer class=\"bg-black text-white\">
  <div class=\"container-wide flex flex-col-reverse md:flex-row flex-wrap py-6 justify-between items-center uppercase\">
    <div class=\"flex flex-col\">
      <div class=\"text-center sm:text-left\">©";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Your company</div>
      <div class=\"text-center sm:text-left\">All Rights Reserved</div>
    </div>

    <div class=\"flex flex-col items-center mt-6 items-baseline\">
      <div class=\"flex flex-row mb-2 space-x-2\">
        ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_socialMedia", ["facebook", "https://facebook.com/"], 22, $context, $this->getSourceContext()));
        echo "
        ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_socialMedia", ["instagram", "https://instagram.com/"], 23, $context, $this->getSourceContext()));
        echo "
        ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_socialMedia", ["twitter", "https://twitter.com/"], 24, $context, $this->getSourceContext()));
        echo "
      </div>

      ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_internalLink", ["Privacy", "/privacy"], 27, $context, $this->getSourceContext()));
        echo "
      ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_internalLink", ["About", "/about"], 28, $context, $this->getSourceContext()));
        echo "

    </div>

  </div>
</footer>
";
    }

    // line 1
    public function macro_socialMedia($__name__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 2, $this->source), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo t("Share on @name", array("@name" => ($context["name"] ?? null), ));
            echo "\">
    <i class=\"fa fa-lg fa-";
            // line 3
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 3, $this->source), "html", null, true);
            echo "\"></i>
  </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_internalLink($__name__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 8
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 8, $this->source), "html", null, true);
            echo "\" class=\"font-bold\">
    ";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 9, $this->source), "html", null, true);
            echo "
  </a>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 9,  134 => 8,  120 => 7,  108 => 3,  101 => 2,  87 => 1,  76 => 28,  72 => 27,  66 => 24,  62 => 23,  58 => 22,  49 => 16,  43 => 12,  40 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro socialMedia(name, url) %}
  <a href=\"{{ url }}\" target=\"_blank\" title=\"{% trans %}Share on {{ name }}{% endtrans %}\">
    <i class=\"fa fa-lg fa-{{ name }}\"></i>
  </a>
{% endmacro %}

{% macro internalLink(name, url) %}
  <a href=\"{{ url }}\" class=\"font-bold\">
    {{ name }}
  </a>
{% endmacro %}

<footer class=\"bg-black text-white\">
  <div class=\"container-wide flex flex-col-reverse md:flex-row flex-wrap py-6 justify-between items-center uppercase\">
    <div class=\"flex flex-col\">
      <div class=\"text-center sm:text-left\">©{{ 'now'|date('Y') }} Your company</div>
      <div class=\"text-center sm:text-left\">All Rights Reserved</div>
    </div>

    <div class=\"flex flex-col items-center mt-6 items-baseline\">
      <div class=\"flex flex-row mb-2 space-x-2\">
        {{ _self.socialMedia('facebook', 'https://facebook.com/') }}
        {{ _self.socialMedia('instagram', 'https://instagram.com/') }}
        {{ _self.socialMedia('twitter', 'https://twitter.com/') }}
      </div>

      {{ _self.internalLink('Privacy', '/privacy') }}
      {{ _self.internalLink('About', '/about') }}

    </div>

  </div>
</footer>
", "themes/custom/server_theme/templates/server-theme-footer.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("macro" => 1, "trans" => 2);
        static $filters = array("escape" => 16, "date" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'trans', 'import'],
                ['escape', 'date'],
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
