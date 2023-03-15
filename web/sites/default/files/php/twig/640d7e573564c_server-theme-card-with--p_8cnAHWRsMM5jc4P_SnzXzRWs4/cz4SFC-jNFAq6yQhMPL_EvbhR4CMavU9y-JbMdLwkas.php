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

/* themes/custom/server_theme/templates/server-theme-card-with--personal.html.twig */
class __TwigTemplate_c13649dca4163be2e0f6825d166eb932961d7d702cf53e90d7ac6cf8e6a3af3b extends \Twig\Template
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
        $macros["base"] = $this->macros["base"] = $this->loadTemplate("@server_theme/templates/server-theme-card-layout-base.html.twig", "themes/custom/server_theme/templates/server-theme-card-with--personal.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["base"], "macro_getBaseClasses", [], 3, $context, $this->getSourceContext()));
        echo " pt-5 grid place-items-center\">
  ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null), 4, $this->source), "html", null, true);
        echo "

  <div class=\"w-full h-full flex border-t\">
    <a href=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "link", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\" class=\"w-1/2 border border-t-0 border-l-0 p-4 text-center\">
      <img class=\"inline-block p-2\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABUUlEQVR4nO2UO0sDURCF10ejgp2FjWAvFhb+AEFQSJtCbKwWvZONmbmC5ZkQBUEsBBtby7QW+ge0SWNvE2MviDaiErl5bWCzcdcIWmRgYHfvnfMNZ4b1vGH8myAprhKjSqL1QdKIPjitCMAwzgYVpzBLEQCAUbLwjejzj4UZT07D87yRWKv8wsEsMS7SW4NyEBzO9JmBXpEgE74jk3Am9zmLlY7VoptGtNIL0OyE9TKfx5z7xnwyQQw1rG+RjlnfSfTU2uMpdzdnS/OGcd0+jwU0i/FKrPvZbHnMne3sYdEIbkOv9WbbYqE1u3ES3SXRl26NvoCulatQAUvtJTCiGy7dc6NrxrIR3PWqTQRoWfFpWM+DANOdRfAxaQRHJPiIq0sMoHAFa0aw1UjWx+/upwdIuhwC6qktSjI4Sv5PqkUAOVtc/xUIo2YYaxHAMP4svgCm6KqMIWgbrAAAAABJRU5ErkJggg==\">
      ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "text", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["phn"] ?? null), "link", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\" class=\"w-1/2 p-4 text-center\">
      <img class=\"inline-block p-2\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABOklEQVR4nO2Vv0oDQRDGV7ASSyWVID6F+A76BBqsTm/WxMxYaPeNhHT6COIjGMVaaxFTWFj5BNoZCyP4h70/8fQOMedelw+m2mV+O7Pz7Roz1igi1ksr+pEGsQ7C1v6yT8AgC4gDB94AlvUxB2A99gYg0eufABK98QZwp80BWN+IMO0FQIL1ogoATHoBNBqdWSt4zVzwXbPZqRmfsoJu3BrcO6DxrU3GYgJ43tjGvKlClnGetKhbCSBsYcGK9hMf7FYC2WKsJlW8046uFe1x0xUEmCoNsaLtIUSwl11zA0CMXuQTRs95iFgPrWBlFMbEFyQy3Wko7bkoueA2/2453+ClXLsYT0mSvhvhouRpmPIXj7PfEv8LkCoULBHryXfHewSkCgQzIaNuWY9I9IoED/F/govhprHMH/QJyQ4R2UWj+4wAAAAASUVORK5CYII=\">
      ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["phn"] ?? null), "text", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-card-with--personal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  64 => 11,  59 => 9,  54 => 7,  48 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@server_theme/templates/server-theme-card-layout-base.html.twig' as base %}

<div class=\"{{ base.getBaseClasses() }} pt-5 grid place-items-center\">
  {{ item }}

  <div class=\"w-full h-full flex border-t\">
    <a href=\"{{ email.link }}\" class=\"w-1/2 border border-t-0 border-l-0 p-4 text-center\">
      <img class=\"inline-block p-2\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABUUlEQVR4nO2UO0sDURCF10ejgp2FjWAvFhb+AEFQSJtCbKwWvZONmbmC5ZkQBUEsBBtby7QW+ge0SWNvE2MviDaiErl5bWCzcdcIWmRgYHfvnfMNZ4b1vGH8myAprhKjSqL1QdKIPjitCMAwzgYVpzBLEQCAUbLwjejzj4UZT07D87yRWKv8wsEsMS7SW4NyEBzO9JmBXpEgE74jk3Am9zmLlY7VoptGtNIL0OyE9TKfx5z7xnwyQQw1rG+RjlnfSfTU2uMpdzdnS/OGcd0+jwU0i/FKrPvZbHnMne3sYdEIbkOv9WbbYqE1u3ES3SXRl26NvoCulatQAUvtJTCiGy7dc6NrxrIR3PWqTQRoWfFpWM+DANOdRfAxaQRHJPiIq0sMoHAFa0aw1UjWx+/upwdIuhwC6qktSjI4Sv5PqkUAOVtc/xUIo2YYaxHAMP4svgCm6KqMIWgbrAAAAABJRU5ErkJggg==\">
      {{ email.text }}
    </a>
    <a href=\"{{ phn.link }}\" class=\"w-1/2 p-4 text-center\">
      <img class=\"inline-block p-2\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAABOklEQVR4nO2Vv0oDQRDGV7ASSyWVID6F+A76BBqsTm/WxMxYaPeNhHT6COIjGMVaaxFTWFj5BNoZCyP4h70/8fQOMedelw+m2mV+O7Pz7Roz1igi1ksr+pEGsQ7C1v6yT8AgC4gDB94AlvUxB2A99gYg0eufABK98QZwp80BWN+IMO0FQIL1ogoATHoBNBqdWSt4zVzwXbPZqRmfsoJu3BrcO6DxrU3GYgJ43tjGvKlClnGetKhbCSBsYcGK9hMf7FYC2WKsJlW8046uFe1x0xUEmCoNsaLtIUSwl11zA0CMXuQTRs95iFgPrWBlFMbEFyQy3Wko7bkoueA2/2453+ClXLsYT0mSvhvhouRpmPIXj7PfEv8LkCoULBHryXfHewSkCgQzIaNuWY9I9IoED/F/govhprHMH/QJyQ4R2UWj+4wAAAAASUVORK5CYII=\">
      {{ phn.text }}
    </a>
  </div>
</div>
", "themes/custom/server_theme/templates/server-theme-card-with--personal.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-card-with--personal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1);
        static $filters = array("escape" => 4);
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
