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

/* themes/custom/server_theme/templates/server-theme-header-menu.html.twig */
class __TwigTemplate_975fa6ed18dbbdd7fa6f47d51498add20903550e26976ebd64e6cd3f12b2ea4d extends \Twig\Template
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
        // line 11
        echo "<div class=\"absolute right-0 w-full self-start mt-12 px-4 z-10 sm:static sm:mt-0 sm:px-0 sm:z-0 js-hide-mobile-menu hidden sm:flex flex-col gap-y-4 sm:flex-row gap-x-8 text-white sm:text-gray-700 bg-gray-700 sm:bg-transparent py-4 sm:py-0\">
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_internalLink", [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 13), twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 13), twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 13)], 13, $context, $this->getSourceContext()));
            echo "
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
";
    }

    // line 1
    public function macro_internalLink($__name__ = null, $__url__ = null, $__last__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "url" => $__url__,
            "last" => $__last__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 2, $this->source), "html", null, true);
            echo "\" class=\"border-b hover:border-b-gray-400 py-2\">
    ";
            // line 3
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 3, $this->source), "html", null, true);
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
        return "themes/custom/server_theme/templates/server-theme-header-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 3,  100 => 2,  85 => 1,  80 => 15,  63 => 13,  46 => 12,  43 => 11,  40 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro internalLink(name, url, last) %}
  <a href=\"{{ url }}\" class=\"border-b hover:border-b-gray-400 py-2\">
    {{ name }}
  </a>
{% endmacro %}

{# We will add the `flex` class via JS, when toggling the `hidden` class,
  when viewing on mobile. We still have `sm:flex` to make sure menu is visible
  on wider devices.
#}
<div class=\"absolute right-0 w-full self-start mt-12 px-4 z-10 sm:static sm:mt-0 sm:px-0 sm:z-0 js-hide-mobile-menu hidden sm:flex flex-col gap-y-4 sm:flex-row gap-x-8 text-white sm:text-gray-700 bg-gray-700 sm:bg-transparent py-4 sm:py-0\">
  {% for item in items %}
    {{ _self.internalLink(item.title, item.href, loop.last) }}
  {% endfor %}
</div>
", "themes/custom/server_theme/templates/server-theme-header-menu.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-header-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12, "macro" => 1);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'macro', 'import'],
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
