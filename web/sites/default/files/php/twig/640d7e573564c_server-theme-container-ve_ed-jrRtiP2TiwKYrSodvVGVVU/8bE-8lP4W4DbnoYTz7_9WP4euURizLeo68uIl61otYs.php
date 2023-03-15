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

/* themes/custom/server_theme/templates/server-theme-container-vertical-spacing-tiny.html.twig */
class __TwigTemplate_f917234ebce747539da3d59e1c2ab3d22a1012c65814a5211fc2c13e67c078dd extends \Twig\Template
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
        $context["classes"] = twig_trim_filter(twig_join_filter([0 => "flex flex-col gap-y-2", 1 => (((        // line 3
($context["align"] ?? null) == "start")) ? ("items-start") : ("")), 2 => (((        // line 4
($context["align"] ?? null) == "center")) ? ("items-center") : ("")), 3 => (((        // line 5
($context["align"] ?? null) == "end")) ? ("items-end") : (""))], " "));
        // line 7
        echo "
<div class=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 8, $this->source), "html", null, true);
        echo "\">
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 9, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-container-vertical-spacing-tiny.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  47 => 8,  44 => 7,  42 => 5,  41 => 4,  40 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set classes = [
  'flex flex-col gap-y-2',
  align == 'start' ? 'items-start',
  align == 'center' ? 'items-center',
  align == 'end' ? 'items-end',
] | join(' ') | trim %}

<div class=\"{{ classes }}\">
  {{ items }}
</div>
", "themes/custom/server_theme/templates/server-theme-container-vertical-spacing-tiny.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-container-vertical-spacing-tiny.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("trim" => 6, "join" => 6, "escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
