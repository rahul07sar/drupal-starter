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

/* themes/custom/server_theme/templates/server-theme-card-layout--with-image-horizontal.html.twig */
class __TwigTemplate_812410fe3e7d1e1638c77de7d8416238b94f0c12ac1e1b60afccd9bee70d3d41 extends \Twig\Template
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
        $macros["base"] = $this->macros["base"] = $this->loadTemplate("@server_theme/templates/server-theme-card-layout-base.html.twig", "themes/custom/server_theme/templates/server-theme-card-layout--with-image-horizontal.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["base"], "macro_getBaseClasses", [], 3, $context, $this->getSourceContext()));
        echo " flex flex-col md:flex-row gap-8 md:gap-10 p-4 overflow-hidden bg-white\">

  <a href=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 5, $this->source), "html", null, true);
        echo "\" class=\"rounded-lg overflow-hidden w-full md:w-1/3 max-h-56 h-fit\">
    <figure class=\"child-object-cover w-full\">
        ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 7, $this->source), "html", null, true);
        echo "
    </figure>
  </a>

  <div class=\"md:w-2/3\">
  ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 12, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-card-layout--with-image-horizontal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  54 => 7,  49 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@server_theme/templates/server-theme-card-layout-base.html.twig' as base %}

<div class=\"{{ base.getBaseClasses() }} flex flex-col md:flex-row gap-8 md:gap-10 p-4 overflow-hidden bg-white\">

  <a href=\"{{ url }}\" class=\"rounded-lg overflow-hidden w-full md:w-1/3 max-h-56 h-fit\">
    <figure class=\"child-object-cover w-full\">
        {{ image }}
    </figure>
  </a>

  <div class=\"md:w-2/3\">
  {{ items }}
  </div>
</div>
", "themes/custom/server_theme/templates/server-theme-card-layout--with-image-horizontal.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-card-layout--with-image-horizontal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import'],
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
