<?php

/* core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig */
class __TwigTemplate_8b481e3c75a54025a6fd3b9fe088624ab6a63d451f2d0ac2bb01683193f2ae8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["if" => 47];
        $filters = ["trim" => 47, "striptags" => 47, "render" => 47];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if'],
                ['trim', 'striptags', 'render'],
                []
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 45
        echo "<div class=\"layout-container\">

  ";
        // line 47
        if (( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "pre_header", []))))) ||  !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(        // line 48
($context["page"] ?? null), "header", []))))))) {
            // line 49
            echo "    <header class=\"layout-header\" role=\"banner\">
      <div class=\"container\">
        ";
            // line 51
            if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "pre_header", [])))))) {
                // line 52
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pre_header", []), "html", null, true));
                echo "
        ";
            }
            // line 54
            echo "        ";
            if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "header", [])))))) {
                // line 55
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", []), "html", null, true));
                echo "
        ";
            }
            // line 57
            echo "      </div>
    </header>
  ";
        }
        // line 60
        echo "

  <div class=\"layout-highlighted\">
    ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", []), "html", null, true));
        echo "
  </div>


  ";
        // line 67
        if ($this->getAttribute(($context["page"] ?? null), "tabs", [])) {
            // line 68
            echo "  <div class=\"layout-tabs\">
    <div class=\"container\">
      ";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tabs", []), "html", null, true));
            echo "
    </div>
  </div>
  ";
        }
        // line 74
        echo "
  ";
        // line 75
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "banner_top", [])))))) {
            // line 76
            echo "    <div class=\"layout-banner-top\">
      ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner_top", []), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 80
        echo "
  ";
        // line 81
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])))))) {
            // line 82
            echo "  <div class=\"layout-breadcrumbs\">
    <div class=\"container\">
      ";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumbs", []), "html", null, true));
            echo "
    </div>
  </div>
  ";
        }
        // line 88
        echo "
  ";
        // line 89
        if ( !($context["node"] ?? null)) {
            // line 90
            echo "    ";
            if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "page_title", [])))))) {
                // line 91
                echo "      <div class=\"layout-page-title\">
        ";
                // line 92
                if (($context["is_front"] ?? null)) {
                    // line 93
                    echo "          <div class=\"is-front container\">
            ";
                    // line 94
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", []), "html", null, true));
                    echo "
          </div>
          ";
                } else {
                    // line 97
                    echo "          <div class=\"container\">
            ";
                    // line 98
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", []), "html", null, true));
                    echo "
          </div>
        ";
                }
                // line 101
                echo "      </div>
    ";
            }
            // line 103
            echo "  ";
        }
        // line 104
        echo "
  <main role=\"main\" class=\"main container\">

    <div class=\"layout-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 109
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "html", null, true));
        echo "
    </div>";
        // line 111
        echo "
    ";
        // line 112
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar", [])))))) {
            // line 113
            echo "      <aside class=\"layout-sidebar\" role=\"complementary\">
        ";
            // line 114
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar", []), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 117
        echo "
  </main>

  ";
        // line 120
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "content_bottom", [])))))) {
            // line 121
            echo "    <div class=\"layout-content-bottom\">
      ";
            // line 122
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", []), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 125
        echo "
  ";
        // line 126
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", [])))))) {
            // line 127
            echo "  <div class=\"layout-footer\">
    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 130
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", []), "html", null, true));
            echo "
      </div>
    </footer>
  </div>
  ";
        }
        // line 135
        echo "
  ";
        // line 136
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "bottom", [])))))) {
            // line 137
            echo "    <div class=\"layout-bottom\">
      <div class=\"container\">
        ";
            // line 139
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom", []), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 143
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 143,  237 => 139,  233 => 137,  231 => 136,  228 => 135,  220 => 130,  215 => 127,  213 => 126,  210 => 125,  204 => 122,  201 => 121,  199 => 120,  194 => 117,  188 => 114,  185 => 113,  183 => 112,  180 => 111,  175 => 109,  169 => 104,  166 => 103,  162 => 101,  156 => 98,  153 => 97,  147 => 94,  144 => 93,  142 => 92,  139 => 91,  136 => 90,  134 => 89,  131 => 88,  124 => 84,  120 => 82,  118 => 81,  115 => 80,  109 => 77,  106 => 76,  104 => 75,  101 => 74,  94 => 70,  90 => 68,  88 => 67,  81 => 63,  76 => 60,  71 => 57,  65 => 55,  62 => 54,  56 => 52,  54 => 51,  50 => 49,  48 => 48,  47 => 47,  43 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig", "/app/web/core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig");
    }
}
