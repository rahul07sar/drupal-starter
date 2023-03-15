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

/* @server_theme/server-theme-carousel-base.html.twig */
class __TwigTemplate_95f392cba9ea184a5a885000fbc3b379226e4c9a488246dbc3d516178e96640b extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("server_theme/slick"), "html", null, true);
        echo "
";
        // line 2
        if ( !twig_test_empty(($context["items"] ?? null))) {
            // line 3
            echo "  <div class=\"carousel-wrapper\"
       data-carousel-dots=\"";
            // line 4
            (((array_key_exists("dots", $context) &&  !(null === ($context["dots"] ?? null)))) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dots"] ?? null), "html", null, true))) : (print ("false")));
            echo "\"
       data-carousel-arrows=\"";
            // line 5
            (((array_key_exists("arrows", $context) &&  !(null === ($context["arrows"] ?? null)))) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["arrows"] ?? null), "html", null, true))) : (print ("false")));
            echo "\"
       data-carousel-fixed-width-on-mobile=\"";
            // line 6
            (((array_key_exists("fixed_width_on_mobile", $context) &&  !(null === ($context["fixed_width_on_mobile"] ?? null)))) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["fixed_width_on_mobile"] ?? null), "html", null, true))) : (print ("false")));
            echo "\"
       data-carousel-center-mode-mobile=\"";
            // line 7
            (((array_key_exists("center_mode_mobile", $context) &&  !(null === ($context["center_mode_mobile"] ?? null)))) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["center_mode_mobile"] ?? null), "html", null, true))) : (print ("false")));
            echo "\"
       data-carousel-responsive=\"";
            // line 8
            (((array_key_exists("responsive", $context) &&  !(null === ($context["responsive"] ?? null)))) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["responsive"] ?? null), "html", null, true))) : (print ("true")));
            echo "\"
       data-carousel-single-slide=\"";
            // line 9
            (((array_key_exists("single_slide", $context) &&  !(null === ($context["single_slide"] ?? null)))) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["single_slide"] ?? null), "html", null, true))) : (print ("false")));
            echo "\"
       data-slides-to-scroll=\"";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("slides_to_scroll", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["slides_to_scroll"] ?? null), 10, $this->source), "1")) : ("1")), "html", null, true);
            echo "\"
       ";
            // line 11
            if (($context["slides_laptop"] ?? null)) {
                echo "data-slides-laptop=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slides_laptop"] ?? null), 11, $this->source), "html", null, true);
                echo "\"";
            }
            // line 12
            echo "       ";
            if (($context["slides_tablet"] ?? null)) {
                echo "data-slides-tablet=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slides_tablet"] ?? null), 12, $this->source), "html", null, true);
                echo "\"";
            }
            // line 13
            echo "       ";
            if (($context["slides_desktop"] ?? null)) {
                echo "data-slides-desktop=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slides_desktop"] ?? null), 13, $this->source), "html", null, true);
                echo "\"";
            }
            // line 14
            echo "  >
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 16
                echo "      <div class=\"carousel-slide sm:mx-3\">";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 17, $this->source), "html", null, true);
                // line 18
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@server_theme/server-theme-carousel-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 20,  107 => 18,  105 => 17,  103 => 16,  99 => 15,  96 => 14,  89 => 13,  82 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  45 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('server_theme/slick') }}
{% if items is not empty %}
  <div class=\"carousel-wrapper\"
       data-carousel-dots=\"{{ dots ?? 'false' }}\"
       data-carousel-arrows=\"{{ arrows ?? 'false' }}\"
       data-carousel-fixed-width-on-mobile=\"{{ fixed_width_on_mobile ?? 'false' }}\"
       data-carousel-center-mode-mobile=\"{{ center_mode_mobile ?? 'false' }}\"
       data-carousel-responsive=\"{{ responsive ?? 'true' }}\"
       data-carousel-single-slide=\"{{ single_slide ?? 'false' }}\"
       data-slides-to-scroll=\"{{ slides_to_scroll|default('1') }}\"
       {% if slides_laptop %}data-slides-laptop=\"{{ slides_laptop }}\"{% endif %}
       {% if slides_tablet %}data-slides-tablet=\"{{ slides_tablet }}\"{% endif %}
       {% if slides_desktop %}data-slides-desktop=\"{{ slides_desktop }}\"{% endif %}
  >
    {% for item in items %}
      <div class=\"carousel-slide sm:mx-3\">
        {{- item -}}
      </div>
    {% endfor %}
  </div>
{% endif %}
", "@server_theme/server-theme-carousel-base.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-carousel-base.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 15);
        static $filters = array("escape" => 1, "default" => 10);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'default'],
                ['attach_library']
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
