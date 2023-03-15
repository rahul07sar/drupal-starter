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

/* themes/custom/server_theme/templates/server-theme-header.html.twig */
class __TwigTemplate_ea8edcb1720948ce5fe00d289c72ef216a03d85ca584e8496e45deff4a97fb14 extends \Twig\Template
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
        echo "<div class=\"container-wide flex flex-col gap-y-5\">

  <div class=\"flex items-center justify-between\">

    <a href=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\" rel=\"home\" class=\"flex gap-x-2 items-center\">
      <img class=\"h-16 w-16\" src=\"/";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 6, $this->source), "html", null, true);
        echo "/dist/images/logo.svg\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 6, $this->source), "html", null, true);
        echo "\">
    </a>

    <div class=\"w-1/2 text-right\">
      <div class=\"language-block-dropdown block sm:hidden\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["language_block_dropdown"] ?? null), 10, $this->source), "html", null, true);
        echo "</div>
      <div class=\"language-block-links hidden sm:block\">";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["language_block_links"] ?? null), 11, $this->source), "html", null, true);
        echo "</div>
    </div>
  </div>

  <div class=\"flex flex-row-reverse sm:flex-row justify-between items-center\">

    ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu"] ?? null), 17, $this->source), "html", null, true);
        echo "

    ";
        // line 20
        echo "    <button class=\"block sm:hidden w-7 js-mobile-menu-button js-hide-mobile-menu-trigger\">
      <img src=\"/";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 21, $this->source), "html", null, true);
        echo "/dist/images/menu.svg\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
        echo "\">
    </button>

    ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_block"] ?? null), 24, $this->source), "html", null, true);
        echo "

  </div>

  ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 28, $this->source), "html", null, true);
        echo "


</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  87 => 24,  79 => 21,  76 => 20,  71 => 17,  62 => 11,  58 => 10,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-wide flex flex-col gap-y-5\">

  <div class=\"flex items-center justify-between\">

    <a href=\"{{ path('<front>') }}\" rel=\"home\" class=\"flex gap-x-2 items-center\">
      <img class=\"h-16 w-16\" src=\"/{{ directory }}/dist/images/logo.svg\" alt=\"{{ site_name }}\">
    </a>

    <div class=\"w-1/2 text-right\">
      <div class=\"language-block-dropdown block sm:hidden\">{{ language_block_dropdown }}</div>
      <div class=\"language-block-links hidden sm:block\">{{ language_block_links }}</div>
    </div>
  </div>

  <div class=\"flex flex-row-reverse sm:flex-row justify-between items-center\">

    {{ menu }}

    {# The hamburger icon and menu that would appear on mobile devices #}
    <button class=\"block sm:hidden w-7 js-mobile-menu-button js-hide-mobile-menu-trigger\">
      <img src=\"/{{ directory }}/dist/images/menu.svg\" alt=\"{{ 'Menu'|t }}\">
    </button>

    {{ search_block }}

  </div>

  {{ messages }}


</div>
", "themes/custom/server_theme/templates/server-theme-header.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6, "t" => 21);
        static $functions = array("path" => 5);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
                ['path']
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
