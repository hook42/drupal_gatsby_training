<?php

/* core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig */
class __TwigTemplate_0eb30bc5a4925154eed0bec928f0acf477e92240cf4e9ecb6cff94386c83ec48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 69
        $this->parent = $this->loadTemplate("node--card-common.html.twig", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", 69);
        $this->blocks = [
            'libraries' => [$this, 'block_libraries'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "node--card-common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = [];
        $filters = [];
        $functions = ["attach_library" => 72];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                [],
                [],
                ['attach_library']
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 71
    public function block_libraries($context, array $blocks = [])
    {
        // line 72
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("umami/view-mode-card-common-alt"), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 72,  52 => 71,  11 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", "/app/web/core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig");
    }
}
