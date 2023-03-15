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

/* themes/custom/server_theme/templates/server-theme-carousel.html.twig */
class __TwigTemplate_3ff86b29c5dab8467f805f96d604958e48105589d5dda4b2063e2e1141d182d4 extends \Twig\Template
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
        echo "<div class=\"bg-gray-100 py-4 md:py-5\">
  <div class=\"container-wide flex flex-col gap-6 md:gap-8 lg:gap-10\">
    ";
        // line 3
        if (($context["title"] ?? null)) {
            // line 4
            echo "      <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
            echo "</h2>
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("themes/custom/server_theme/templates/server-theme-carousel.html.twig", "themes/custom/server_theme/templates/server-theme-carousel.html.twig", 7, "1721498631")->display($context);
        // line 15
        echo "
    ";
        // line 16
        if (($context["button"] ?? null)) {
            // line 17
            echo "    <div class=\"flex justify-center pb-10\">
      ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button"] ?? null), 18, $this->source), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 21
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  64 => 18,  61 => 17,  59 => 16,  56 => 15,  54 => 7,  51 => 6,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-gray-100 py-4 md:py-5\">
  <div class=\"container-wide flex flex-col gap-6 md:gap-8 lg:gap-10\">
    {% if title %}
      <h2>{{ title }}</h2>
    {% endif %}

    {% embed '@server_theme/server-theme-carousel-base.html.twig' %}
      {% set dots = 'true' %}
      {% if is_featured %}
        {% set slides_laptop = 1 %}
        {% set slides_tablet = 1 %}
        {% set slides_desktop = 1 %}
      {% endif %}
    {% endembed %}

    {% if button %}
    <div class=\"flex justify-center pb-10\">
      {{ button }}
    </div>
    {% endif %}
  </div>
</div>
", "themes/custom/server_theme/templates/server-theme-carousel.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "embed" => 7);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'embed'],
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


/* themes/custom/server_theme/templates/server-theme-carousel.html.twig */
class __TwigTemplate_3ff86b29c5dab8467f805f96d604958e48105589d5dda4b2063e2e1141d182d4___1721498631 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "@server_theme/server-theme-carousel-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["dots"] = "true";
        // line 9
        if (($context["is_featured"] ?? null)) {
            // line 10
            $context["slides_laptop"] = 1;
            // line 11
            $context["slides_tablet"] = 1;
            // line 12
            $context["slides_desktop"] = 1;
        }
        // line 7
        $this->parent = $this->loadTemplate("@server_theme/server-theme-carousel-base.html.twig", "themes/custom/server_theme/templates/server-theme-carousel.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 7,  183 => 12,  181 => 11,  179 => 10,  177 => 9,  175 => 8,  168 => 7,  70 => 21,  64 => 18,  61 => 17,  59 => 16,  56 => 15,  54 => 7,  51 => 6,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-gray-100 py-4 md:py-5\">
  <div class=\"container-wide flex flex-col gap-6 md:gap-8 lg:gap-10\">
    {% if title %}
      <h2>{{ title }}</h2>
    {% endif %}

    {% embed '@server_theme/server-theme-carousel-base.html.twig' %}
      {% set dots = 'true' %}
      {% if is_featured %}
        {% set slides_laptop = 1 %}
        {% set slides_tablet = 1 %}
        {% set slides_desktop = 1 %}
      {% endif %}
    {% endembed %}

    {% if button %}
    <div class=\"flex justify-center pb-10\">
      {{ button }}
    </div>
    {% endif %}
  </div>
</div>
", "themes/custom/server_theme/templates/server-theme-carousel.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 9);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
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
