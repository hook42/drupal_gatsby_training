<?php

/* core/profiles/demo_umami/themes/umami/templates/components/navigation/block--umami-main-menu.html.twig */
class __TwigTemplate_6ecb7b3fb66dfdf1a5132e7f1214dea2634f7a33b0de036b663504fe711c6241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["set" => 35, "include" => 44, "if" => 50, "block" => 58];
        $filters = ["clean_class" => 39, "clean_id" => 47, "without" => 48];
        $functions = ["active_theme_path" => 44];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'include', 'if', 'block'],
                ['clean_class', 'clean_id', 'without'],
                ['active_theme_path']
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

        // line 35
        $context["classes"] = [0 => "block", 1 => "block-menu", 2 => "navigation", 3 => (("menu-" . \Drupal\Component\Utility\Html::getClass(        // line 39
($context["derivative_plugin_id"] ?? null))) . "__wrapper")];
        // line 42
        echo "
<div class=\"menu-main-togglewrap\">
  <button type=\"button\" name=\"menu_toggle\" class=\"menu-main-toggle\" data-drupal-selector=\"menu-main-toggle\" aria-label=\"Toggle the menu\">";
        // line 44
        $this->loadTemplate(($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath() . "/images/svg/menu-icon.svg"), "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--umami-main-menu.html.twig", 44)->display($context);
        echo "</button>
</div>

";
        // line 47
        $context["heading_id"] = ($this->getAttribute(($context["attributes"] ?? null), "id", []) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 48
        echo "<nav role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "role", "aria-labelledby"), "html", null, true));
        echo ">
  ";
        // line 50
        echo "  ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", [])) {
            // line 51
            echo "    ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method");
            // line 52
            echo "  ";
        }
        // line 53
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  <h2";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["heading_id"] ?? null)], "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["configuration"] ?? null), "label", []), "html", null, true));
        echo "</h2>
  ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 58
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "</nav>
";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        // line 59
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--umami-main-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 59,  99 => 58,  94 => 61,  91 => 58,  86 => 55,  80 => 54,  75 => 53,  72 => 52,  69 => 51,  66 => 50,  59 => 48,  57 => 47,  51 => 44,  47 => 42,  45 => 39,  44 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--umami-main-menu.html.twig", "/app/web/core/profiles/demo_umami/themes/umami/templates/components/navigation/block--umami-main-menu.html.twig");
    }
}
