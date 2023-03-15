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

/* themes/custom/server_theme/templates/server-theme-image-with-credit-overlay.html.twig */
class __TwigTemplate_3ae68ea13c6358e62290ef64b1d36df498eaedb86d65168b835f08393030463a extends \Twig\Template
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
        echo "<div class=\"relative\">
  <figure class=\"child-object-cover w-full overflow-hidden\">
    ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 3, $this->source), "html", null, true);
        echo "
  </figure>

  ";
        // line 6
        if (($context["credit"] ?? null)) {
            // line 7
            echo "    <div class=\"text-xs absolute left-0 rtl:left-auto rtl:right-0 bottom-0 bg-white opacity-70 p-2\">© ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["credit"] ?? null), 7, $this->source), "html", null, true);
            echo "</div>
  ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-image-with-credit-overlay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 7,  49 => 6,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"relative\">
  <figure class=\"child-object-cover w-full overflow-hidden\">
    {{ image }}
  </figure>

  {% if credit %}
    <div class=\"text-xs absolute left-0 rtl:left-auto rtl:right-0 bottom-0 bg-white opacity-70 p-2\">© {{ credit }}</div>
  {% endif %}
</div>
", "themes/custom/server_theme/templates/server-theme-image-with-credit-overlay.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-image-with-credit-overlay.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
