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

/* themes/custom/server_theme/templates/server-theme-element--hero-image.html.twig */
class __TwigTemplate_c98410af69f9afb81c6a1054d5ae072b526afb937e441aff1e09c4caebdf4326 extends \Twig\Template
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
        echo "<div class=\"grid grid-rows-1\">

  ";
        // line 7
        echo "  <figure class=\"row-start-1 col-start-1 child-object-cover\">
    ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 8, $this->source), "html", null, true);
        echo "
  </figure>

  <div class=\"row-start-1 col-start-1 z-10 flex flex-col justify-center\">
    <div class=\"container-wide w-full\">
      <div class=\"max-w-prose p-6 md:p-8 lg:p-10 bg-white/90 flex flex-col gap-3 md:gap-4 lg:gap-5 rounded-lg\">
        ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 14, $this->source), "html", null, true);
        echo "

      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-element--hero-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  46 => 8,  43 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"grid grid-rows-1\">

  {#
    We use grid and row/col start to position both the image and the text on
    the same cell.
  #}
  <figure class=\"row-start-1 col-start-1 child-object-cover\">
    {{ image }}
  </figure>

  <div class=\"row-start-1 col-start-1 z-10 flex flex-col justify-center\">
    <div class=\"container-wide w-full\">
      <div class=\"max-w-prose p-6 md:p-8 lg:p-10 bg-white/90 flex flex-col gap-3 md:gap-4 lg:gap-5 rounded-lg\">
        {{ items }}

      </div>
    </div>
  </div>
</div>
", "themes/custom/server_theme/templates/server-theme-element--hero-image.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-element--hero-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
