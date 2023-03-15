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

/* themes/custom/server_theme/templates/server-theme-social-share-button.html.twig */
class __TwigTemplate_22ad4f913d614ede307c0de90b6c4f27aee789830f0c7c6bd6d2a79157dc0c0c extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((($context["service"] ?? null) == "email")) {
            // line 2
            echo "  ";
            $context["shareUrl"] = ((("mailto:?subject=" . twig_urlencode_filter($this->sandbox->ensureToStringAllowed(($context["email_subject"] ?? null), 2, $this->source))) . "&body=Check out this site ") . twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["url"] ?? null), "toString", [], "method", false, false, true, 2), 2, $this->source)));
            // line 3
            echo "  ";
            $context["title"] = t("Share by Email");
        } elseif ((        // line 4
($context["service"] ?? null) == "facebook")) {
            // line 5
            echo "  ";
            $context["shareUrl"] = ("https://www.facebook.com/share.php?u=" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["url"] ?? null), "toString", [], "method", false, false, true, 5), 5, $this->source));
            // line 6
            echo "  ";
            $context["title"] = t("Share on Facebook");
        } elseif ((        // line 7
($context["service"] ?? null) == "linkedin")) {
            // line 8
            echo "  ";
            $context["shareUrl"] = ("https://www.linkedin.com/sharing/share-offsite/?url=" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["url"] ?? null), "toString", [], "method", false, false, true, 8), 8, $this->source));
            // line 9
            echo "  ";
            $context["title"] = t("Share on LinkedIn");
        } elseif ((        // line 10
($context["service"] ?? null) == "twitter")) {
            // line 11
            echo "  ";
            $context["shareUrl"] = ("https://twitter.com/intent/tweet?url=" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["url"] ?? null), "toString", [], "method", false, false, true, 11), 11, $this->source));
            // line 12
            echo "  ";
            $context["title"] = t("Share on Twitter");
        }
        // line 14
        echo "
";
        // line 50
        echo "
<a href=\"";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["shareUrl"] ?? null), 51, $this->source), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 51, $this->source), "html", null, true);
        echo "\" class=\"block w-8 h-8 text-gray-600 hover:text-gray-800 focus:text-gray-800\">
  ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_getIcon", [($context["service"] ?? null)], 52, $context, $this->getSourceContext()));
        echo "
</a>
";
    }

    // line 15
    public function macro_getIcon($__service__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "service" => $__service__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 16
            echo "  ";
            if ((($context["service"] ?? null) == "email")) {
                // line 17
                echo "    <svg width=\"32\" height=\"33\" viewBox=\"0 0.14 32 33\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <path d=\"M0 14.4958V27.5714C0 30.0962 2.0467 32.1429 4.57143 32.1429H27.4286C29.9533 32.1429 32 30.0962 32 27.5714V14.4958L18.3959 22.8675C16.9266 23.7717 15.0734 23.7717 13.6041 22.8675L0 14.4958Z\" fill=\"currentColor\"/>
      <path d=\"M32 11.8119V11.5714C32 9.0467 29.9533 7 27.4286 7H4.57143C2.0467 7 0 9.0467 0 11.5714V11.8119L14.8021 20.9209C15.5367 21.373 16.4633 21.373 17.1979 20.9209L32 11.8119Z\" fill=\"currentColor\"/>
    </svg>
  ";
            } elseif ((            // line 21
($context["service"] ?? null) == "twitter")) {
                // line 22
                echo "    <svg width=\"32\" height=\"32\" viewBox=\"0 0.43 32 33\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <mask id=\"mask0_3111_21476\" style=\"mask-type:alpha\" maskUnits=\"userSpaceOnUse\" x=\"0\" y=\"6\" width=\"32\" height=\"27\">
        <path d=\"M0 6H32V32.4348H0V6Z\" fill=\"white\"/>
      </mask>
      <g mask=\"url(#mask0_3111_21476)\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M32 9.12545C31.1118 10.4809 30.0242 11.6363 28.7407 12.5898V13.4558C28.7407 15.2385 28.4872 17.0211 27.9819 18.8028C27.4758 20.5864 26.6975 22.2996 25.648 23.9434C24.5985 25.5882 23.3461 27.0373 21.8888 28.2927C20.4316 29.5482 18.6854 30.5521 16.6484 31.3046C14.6115 32.0581 12.4203 32.4348 10.0748 32.4348C6.12415 32.4348 2.76557 31.5309 0 29.723C0.518545 29.7987 1.03709 29.8365 1.55564 29.8365C4.39478 29.8365 7.1116 28.7821 9.70433 26.6732C8.29672 26.6489 7.03094 26.2028 5.90787 25.3367C4.78391 24.4706 4.01274 23.3729 3.59347 22.0418C4.01274 22.1175 4.4196 22.1545 4.81494 22.1545C5.40794 22.1545 5.98765 22.0797 6.55583 21.9292C5.04983 21.6273 3.79646 20.8621 2.7966 19.632C1.79674 18.4018 1.29681 16.9833 1.29681 15.3764V15.3016C2.23462 15.8279 3.22296 16.1055 4.26005 16.1298C2.30908 14.7996 1.33404 12.9548 1.33404 10.5945C1.33404 9.48955 1.63009 8.40988 2.22221 7.35545C3.87624 9.38861 5.87064 11.0027 8.20365 12.1941C10.5375 13.3874 13.0496 14.0588 15.7407 14.2093C15.6423 13.7821 15.5927 13.2675 15.5927 12.6655C15.5927 10.8333 16.2282 9.26334 17.5002 7.95837C18.7713 6.65339 20.3208 6 22.1485 6C24.0242 6 25.6294 6.70296 26.9635 8.10887C28.4198 7.80786 29.8026 7.26803 31.1118 6.48937C30.6172 8.09625 29.6546 9.32733 28.2222 10.1799C29.4817 10.0294 30.7413 9.67791 32 9.12545Z\" fill=\"currentColor\"/>
      </g>
    </svg>
  ";
            } elseif ((            // line 30
($context["service"] ?? null) == "facebook")) {
                // line 31
                echo "    <svg width=\"32\" height=\"32\" viewBox=\"0 0 32 32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <mask id=\"mask0_3111_21486\" style=\"mask-type:alpha\" maskUnits=\"userSpaceOnUse\" x=\"8\" y=\"0\" width=\"16\" height=\"32\">
        <path d=\"M8 0H23.1579V32H8V0Z\" fill=\"white\"/>
      </mask>
      <g mask=\"url(#mask0_3111_21486)\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11.7891 32V17.3336H8V12.0001H11.7891V7.3332C11.7891 5.25991 12.4264 3.51902 13.7012 2.11141C14.976 0.703803 16.8646 0 19.368 0C19.9995 0 20.6319 0.0248193 21.2634 0.0744578C21.8949 0.124096 22.3626 0.172848 22.6666 0.222487L23.1579 0.296058L22.9471 5.33348H19.6838C18.7944 5.33348 18.2041 5.55597 17.9127 6.00006C17.6196 6.44414 17.4735 7.11072 17.4735 7.99978V12.0001H23.1579L22.7724 17.3336H17.4735V32H11.7891Z\" fill=\"currentColor\"/>
      </g>
    </svg>
  ";
            } elseif ((            // line 39
($context["service"] ?? null) == "linkedin")) {
                // line 40
                echo "    <svg width=\"32\" height=\"32\" viewBox=\"0 0 32 32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <mask id=\"mask0_3111_21481\" style=\"mask-type:alpha\" maskUnits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"32\" height=\"32\">
        <path d=\"M0 0H32V32H0V0Z\" fill=\"white\"/>
      </mask>
      <g mask=\"url(#mask0_3111_21481)\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M17.5002 32.3332V21.0991C17.5002 19.8975 17.8219 18.9731 18.4671 18.3258C19.1122 17.6786 19.9215 17.3549 20.8949 17.3549C21.8903 17.3549 22.6947 17.7134 23.3057 18.4296C23.9159 19.1457 24.2214 20.2444 24.2214 21.7231V32.3332H30.3333V21.0991C30.3333 18.3482 29.6597 16.2048 28.3134 14.6672C26.9662 13.1303 25.1957 12.3619 23.0002 12.3619C20.7592 12.3619 18.9262 13.4598 17.5002 15.6555L17.2962 12.9859H11.2875L11.3891 17.3549V32.3332H17.5002ZM1.61103 32.3332H7.7221V12.9859H1.61103V32.3332ZM4.63284 9.86498H4.59872C3.53511 9.86498 2.66895 9.53555 2.00186 8.87667C1.33395 8.21779 1 7.40374 1 6.43285C1 5.43872 1.33964 4.61886 2.01811 3.97077C2.69739 3.32434 3.59199 2.99988 4.70029 2.99988C5.78746 2.99988 6.65768 3.32434 7.31502 3.97077C7.97074 4.61886 8.31038 5.43872 8.33394 6.43285C8.33394 7.40374 7.9943 8.21779 7.31502 8.87667C6.63574 9.53555 5.74114 9.86498 4.63284 9.86498Z\" fill=\"currentColor\"/>
      </g>
    </svg>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/server_theme/templates/server-theme-social-share-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 40,  138 => 39,  128 => 31,  126 => 30,  116 => 22,  114 => 21,  108 => 17,  105 => 16,  92 => 15,  85 => 52,  79 => 51,  76 => 50,  73 => 14,  69 => 12,  66 => 11,  64 => 10,  61 => 9,  58 => 8,  56 => 7,  53 => 6,  50 => 5,  48 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if service == 'email' %}
  {% set shareUrl = \"mailto:?subject=\" ~ email_subject|url_encode ~ \"&body=Check out this site \" ~ url.toString()|url_encode %}
  {% set title = 'Share by Email'|t %}
{% elseif service == 'facebook' %}
  {% set shareUrl = \"https://www.facebook.com/share.php?u=\" ~ url.toString() %}
  {% set title = 'Share on Facebook'|t %}
{% elseif service == 'linkedin' %}
  {% set shareUrl = \"https://www.linkedin.com/sharing/share-offsite/?url=\" ~ url.toString() %}
  {% set title = 'Share on LinkedIn'|t %}
{% elseif service == 'twitter' %}
  {% set shareUrl = \"https://twitter.com/intent/tweet?url=\" ~ url.toString() %}
  {% set title = 'Share on Twitter'|t %}
{% endif %}

{% macro getIcon(service) %}
  {% if service == 'email' %}
    <svg width=\"32\" height=\"33\" viewBox=\"0 0.14 32 33\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <path d=\"M0 14.4958V27.5714C0 30.0962 2.0467 32.1429 4.57143 32.1429H27.4286C29.9533 32.1429 32 30.0962 32 27.5714V14.4958L18.3959 22.8675C16.9266 23.7717 15.0734 23.7717 13.6041 22.8675L0 14.4958Z\" fill=\"currentColor\"/>
      <path d=\"M32 11.8119V11.5714C32 9.0467 29.9533 7 27.4286 7H4.57143C2.0467 7 0 9.0467 0 11.5714V11.8119L14.8021 20.9209C15.5367 21.373 16.4633 21.373 17.1979 20.9209L32 11.8119Z\" fill=\"currentColor\"/>
    </svg>
  {% elseif service == 'twitter' %}
    <svg width=\"32\" height=\"32\" viewBox=\"0 0.43 32 33\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <mask id=\"mask0_3111_21476\" style=\"mask-type:alpha\" maskUnits=\"userSpaceOnUse\" x=\"0\" y=\"6\" width=\"32\" height=\"27\">
        <path d=\"M0 6H32V32.4348H0V6Z\" fill=\"white\"/>
      </mask>
      <g mask=\"url(#mask0_3111_21476)\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M32 9.12545C31.1118 10.4809 30.0242 11.6363 28.7407 12.5898V13.4558C28.7407 15.2385 28.4872 17.0211 27.9819 18.8028C27.4758 20.5864 26.6975 22.2996 25.648 23.9434C24.5985 25.5882 23.3461 27.0373 21.8888 28.2927C20.4316 29.5482 18.6854 30.5521 16.6484 31.3046C14.6115 32.0581 12.4203 32.4348 10.0748 32.4348C6.12415 32.4348 2.76557 31.5309 0 29.723C0.518545 29.7987 1.03709 29.8365 1.55564 29.8365C4.39478 29.8365 7.1116 28.7821 9.70433 26.6732C8.29672 26.6489 7.03094 26.2028 5.90787 25.3367C4.78391 24.4706 4.01274 23.3729 3.59347 22.0418C4.01274 22.1175 4.4196 22.1545 4.81494 22.1545C5.40794 22.1545 5.98765 22.0797 6.55583 21.9292C5.04983 21.6273 3.79646 20.8621 2.7966 19.632C1.79674 18.4018 1.29681 16.9833 1.29681 15.3764V15.3016C2.23462 15.8279 3.22296 16.1055 4.26005 16.1298C2.30908 14.7996 1.33404 12.9548 1.33404 10.5945C1.33404 9.48955 1.63009 8.40988 2.22221 7.35545C3.87624 9.38861 5.87064 11.0027 8.20365 12.1941C10.5375 13.3874 13.0496 14.0588 15.7407 14.2093C15.6423 13.7821 15.5927 13.2675 15.5927 12.6655C15.5927 10.8333 16.2282 9.26334 17.5002 7.95837C18.7713 6.65339 20.3208 6 22.1485 6C24.0242 6 25.6294 6.70296 26.9635 8.10887C28.4198 7.80786 29.8026 7.26803 31.1118 6.48937C30.6172 8.09625 29.6546 9.32733 28.2222 10.1799C29.4817 10.0294 30.7413 9.67791 32 9.12545Z\" fill=\"currentColor\"/>
      </g>
    </svg>
  {% elseif service == 'facebook' %}
    <svg width=\"32\" height=\"32\" viewBox=\"0 0 32 32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <mask id=\"mask0_3111_21486\" style=\"mask-type:alpha\" maskUnits=\"userSpaceOnUse\" x=\"8\" y=\"0\" width=\"16\" height=\"32\">
        <path d=\"M8 0H23.1579V32H8V0Z\" fill=\"white\"/>
      </mask>
      <g mask=\"url(#mask0_3111_21486)\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M11.7891 32V17.3336H8V12.0001H11.7891V7.3332C11.7891 5.25991 12.4264 3.51902 13.7012 2.11141C14.976 0.703803 16.8646 0 19.368 0C19.9995 0 20.6319 0.0248193 21.2634 0.0744578C21.8949 0.124096 22.3626 0.172848 22.6666 0.222487L23.1579 0.296058L22.9471 5.33348H19.6838C18.7944 5.33348 18.2041 5.55597 17.9127 6.00006C17.6196 6.44414 17.4735 7.11072 17.4735 7.99978V12.0001H23.1579L22.7724 17.3336H17.4735V32H11.7891Z\" fill=\"currentColor\"/>
      </g>
    </svg>
  {% elseif service == 'linkedin' %}
    <svg width=\"32\" height=\"32\" viewBox=\"0 0 32 32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <mask id=\"mask0_3111_21481\" style=\"mask-type:alpha\" maskUnits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"32\" height=\"32\">
        <path d=\"M0 0H32V32H0V0Z\" fill=\"white\"/>
      </mask>
      <g mask=\"url(#mask0_3111_21481)\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M17.5002 32.3332V21.0991C17.5002 19.8975 17.8219 18.9731 18.4671 18.3258C19.1122 17.6786 19.9215 17.3549 20.8949 17.3549C21.8903 17.3549 22.6947 17.7134 23.3057 18.4296C23.9159 19.1457 24.2214 20.2444 24.2214 21.7231V32.3332H30.3333V21.0991C30.3333 18.3482 29.6597 16.2048 28.3134 14.6672C26.9662 13.1303 25.1957 12.3619 23.0002 12.3619C20.7592 12.3619 18.9262 13.4598 17.5002 15.6555L17.2962 12.9859H11.2875L11.3891 17.3549V32.3332H17.5002ZM1.61103 32.3332H7.7221V12.9859H1.61103V32.3332ZM4.63284 9.86498H4.59872C3.53511 9.86498 2.66895 9.53555 2.00186 8.87667C1.33395 8.21779 1 7.40374 1 6.43285C1 5.43872 1.33964 4.61886 2.01811 3.97077C2.69739 3.32434 3.59199 2.99988 4.70029 2.99988C5.78746 2.99988 6.65768 3.32434 7.31502 3.97077C7.97074 4.61886 8.31038 5.43872 8.33394 6.43285C8.33394 7.40374 7.9943 8.21779 7.31502 8.87667C6.63574 9.53555 5.74114 9.86498 4.63284 9.86498Z\" fill=\"currentColor\"/>
      </g>
    </svg>
  {% endif %}
{% endmacro %}

<a href=\"{{ shareUrl }}\" target=\"_blank\" title=\"{{ title }}\" class=\"block w-8 h-8 text-gray-600 hover:text-gray-800 focus:text-gray-800\">
  {{ _self.getIcon(service) }}
</a>
", "themes/custom/server_theme/templates/server-theme-social-share-button.html.twig", "/var/www/html/web/themes/custom/server_theme/templates/server-theme-social-share-button.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2, "macro" => 15);
        static $filters = array("url_encode" => 2, "t" => 3, "escape" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'macro', 'import'],
                ['url_encode', 't', 'escape'],
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
