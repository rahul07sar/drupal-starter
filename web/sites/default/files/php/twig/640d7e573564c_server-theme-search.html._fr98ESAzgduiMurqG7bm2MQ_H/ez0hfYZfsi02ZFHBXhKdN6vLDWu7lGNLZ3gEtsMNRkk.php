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

/* themes/custom/server_theme/templates/server-theme-search.html.twig */
class __TwigTemplate_1d59de982c71394ee4d1eb8c704d7dbfba666e63d7e32ca00c5b948f51bb6ad7 extends \Twig\Template
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
        echo "<form action=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_url"] ?? null), 1, $this->source), "html", null, true);
        echo "\" method=\"get\" id=\"main-search-form\" accept-charset=\"UTF-8\" class=\"flex flex-row gap-x-3 md:gap-x-5 shrink-0\">

  <div>
    <label class=\"sr-only\" for=\"search-input\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search"));
        echo "</label>
    <input class=\"text-ellipsis w-full text-gray-900 border-t-0 border-l-0 border-r-0\" id=\"search-input\" placeholder=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search"));
        echo "\" type=\"text\" name=\"key\" value=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_term"] ?? null), 5, $this->source), "html", null, true);
        echo "\">
  </div>

  <button>
    <img class=\"h-5 w-5 cursor-pointer\" src=\"/";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 9, $this->source), "html", null, true);
        echo "/dist/images/search-icon.svg\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search icon"));
        echo "\">
  </button>
</form>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  50 => 5,  46 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ search_url }}\" method=\"get\" id=\"main-search-form\" accept-charset=\"UTF-8\" class=\"flex flex-row gap-x-3 md:gap-x-5 shrink-0\">

  <div>
    <label class=\"sr-only\" for=\"search-input\">{{ 'Search'|t }}</label>
    <input class=\"text-ellipsis w-full text-gray-900 border-t-0 border-l-0 border-r-0\" id=\"search-input\" placeholder=\"{{ 'Search'| t }}\" type=\"text\" name=\"key\" value=\"{{ search_term }}\">
  </div>

  <button>
    <img class=\"h-5 w-5 cursor-pointer\" src=\"/{{ directory }}/dist/images/search-icon.svg\" alt=\"{{ 'Search icon'|t }}\">
  </button>
</form>
", "themes/custom/server_theme/templates/server-theme-search.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-search.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "t" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
