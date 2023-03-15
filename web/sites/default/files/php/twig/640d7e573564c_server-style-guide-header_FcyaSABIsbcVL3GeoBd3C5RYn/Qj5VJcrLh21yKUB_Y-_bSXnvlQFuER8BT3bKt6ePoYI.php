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

/* modules/custom/server_style_guide/templates/server-style-guide-header.html.twig */
class __TwigTemplate_71b745f6b98751468f60d26e3e6c6a00c39a09b79387e25ad38180195ada56b3 extends \Twig\Template
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
        echo "<dt class=\"container-wide my-6\">
  <a class=\"title-wrapper text-blue-500 text-2xl hover:underline\" href=\"#";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unique_id"] ?? null), 2, $this->source), "html", null, true);
        echo "\" id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unique_id"] ?? null), 2, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 2, $this->source), "html", null, true);
        echo "</a>

  ";
        // line 4
        if (($context["link"] ?? null)) {
            // line 5
            echo "    <div class=\"ml-4\">
      <a class=\"text-sm\" href=\"";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 6, $this->source), "html", null, true);
            echo "\" target=\"_blank\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("See design"));
            echo "</a>
    </div>
  ";
        }
        // line 9
        echo "</dt>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/server_style_guide/templates/server-style-guide-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  56 => 6,  53 => 5,  51 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<dt class=\"container-wide my-6\">
  <a class=\"title-wrapper text-blue-500 text-2xl hover:underline\" href=\"#{{ unique_id }}\" id=\"{{ unique_id }}\">{{ title }}</a>

  {% if link %}
    <div class=\"ml-4\">
      <a class=\"text-sm\" href=\"{{ link }}\" target=\"_blank\">{{ 'See design'|t }}</a>
    </div>
  {% endif %}
</dt>
", "modules/custom/server_style_guide/templates/server-style-guide-header.html.twig", "/var/www/html/web/modules/custom/server_style_guide/templates/server-style-guide-header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 2, "t" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
