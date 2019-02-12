<?php

/* core/profiles/demo_umami/themes/umami/templates/components/navigation/menu.html.twig */
class __TwigTemplate_9cdcab7abb45b641cc7d90ef631af0b85e901fea40dab53405c172d417315cc5 extends Twig_Template
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
        $tags = ["import" => 22, "macro" => 33, "set" => 37, "if" => 47, "for" => 53];
        $filters = ["clean_class" => 38];
        $functions = ["link" => 72];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['clean_class'],
                ['link']
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

        // line 21
        echo "
";
        // line 22
        $context["menus"] = $this;
        // line 23
        echo "
";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null))));
        echo " ";
        // line 32
        echo "
";
    }

    // line 33
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            echo " ";
            // line 34
            echo "  ";
            $context["menus"] = $this;
            // line 35
            echo "  ";
            // line 36
            echo "  ";
            // line 37
            $context["menu_classes"] = [0 => ("menu-" . \Drupal\Component\Utility\Html::getClass(            // line 38
($context["menu_name"] ?? null)))];
            // line 41
            echo "  ";
            // line 42
            echo "  ";
            // line 43
            $context["submenu_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass(            // line 44
($context["menu_name"] ?? null))) . "__submenu")];
            // line 47
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 48
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 49
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method"), "html", null, true));
                    echo "> ";
                    // line 50
                    echo "    ";
                } else {
                    // line 51
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["menu_classes"] ?? null)], "method"), "addClass", [0 => ($context["submenu_classes"] ?? null)], "method"), "html", null, true));
                    echo "> ";
                    // line 52
                    echo "    ";
                }
                // line 53
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 54
                    echo "      ";
                    // line 55
                    echo "      ";
                    // line 56
                    $context["item_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass(                    // line 57
($context["menu_name"] ?? null))) . "__item"), 1 => (($this->getAttribute(                    // line 58
$context["item"], "is_expanded", [])) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))) . "__item--expanded")) : ("")), 2 => (($this->getAttribute(                    // line 59
$context["item"], "is_collapsed", [])) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))) . "__item--collapsed")) : ("")), 3 => (($this->getAttribute(                    // line 60
$context["item"], "in_active_trail", [])) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))) . "__item--active-trail")) : (""))];
                    // line 63
                    echo "      ";
                    // line 64
                    echo "      ";
                    // line 65
                    $context["link_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass(                    // line 66
($context["menu_name"] ?? null))) . "__link")];
                    // line 69
                    echo "      <li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method"), "html", null, true));
                    echo ">";
                    // line 70
                    echo "        ";
                    // line 71
                    echo "        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute(                    // line 73
$context["item"], "title", []), $this->getAttribute(                    // line 74
$context["item"], "url", []), $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 75
$context["item"], "attributes", []), "removeClass", [0 => ($context["item_classes"] ?? null)], "method"), "addClass", [0 => ($context["link_classes"] ?? null)], "method")), "html", null, true));
                    // line 77
                    echo "
        ";
                    // line 78
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 79
                        echo "          ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null))));
                        echo " ";
                        // line 80
                        echo "        ";
                    }
                    // line 81
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 83,  158 => 81,  155 => 80,  151 => 79,  149 => 78,  146 => 77,  144 => 75,  143 => 74,  142 => 73,  140 => 71,  138 => 70,  134 => 69,  132 => 66,  131 => 65,  129 => 64,  127 => 63,  125 => 60,  124 => 59,  123 => 58,  122 => 57,  121 => 56,  119 => 55,  117 => 54,  112 => 53,  109 => 52,  105 => 51,  102 => 50,  98 => 49,  95 => 48,  92 => 47,  90 => 44,  89 => 43,  87 => 42,  85 => 41,  83 => 38,  82 => 37,  80 => 36,  78 => 35,  75 => 34,  59 => 33,  54 => 32,  51 => 31,  48 => 23,  46 => 22,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/profiles/demo_umami/themes/umami/templates/components/navigation/menu.html.twig", "/app/web/core/profiles/demo_umami/themes/umami/templates/components/navigation/menu.html.twig");
    }
}
