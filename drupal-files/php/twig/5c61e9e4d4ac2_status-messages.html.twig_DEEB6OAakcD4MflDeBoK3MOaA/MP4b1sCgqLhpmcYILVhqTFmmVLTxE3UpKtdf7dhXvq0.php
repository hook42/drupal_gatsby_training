<?php

/* core/profiles/demo_umami/themes/umami/templates/components/messages/status-messages.html.twig */
class __TwigTemplate_55221fc627eed09d4dbd99767fa0e46e9e349f911c3d0b35a3fc0de6aa427c14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["block" => 22, "for" => 23, "set" => 25, "if" => 32];
        $filters = ["without" => 30, "length" => 38, "first" => 45];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['without', 'length', 'first'],
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

        // line 22
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = [])
    {
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 24
            echo "  ";
            // line 25
            $context["classes"] = [0 => "messages", 1 => ("messages--" .             // line 27
$context["type"])];
            // line 30
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array"), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "role", "aria-label"), "html", null, true));
            echo ">
    <div class=\"messages__content container\">
      ";
            // line 32
            if (($context["type"] == "error")) {
                // line 33
                echo "        <div role=\"alert\">
      ";
            }
            // line 35
            echo "        ";
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                // line 36
                echo "          <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array"), "html", null, true));
                echo "</h2>
        ";
            }
            // line 38
            echo "        ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 39
                echo "          <ul class=\"messages__list\">
            ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 41
                    echo "              <li class=\"messages__item\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "          </ul>
        ";
            } else {
                // line 45
                echo "          <span class=\"messages__item\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "</span>
        ";
            }
            // line 47
            echo "      ";
            if (($context["type"] == "error")) {
                // line 48
                echo "        </div>
      ";
            }
            // line 50
            echo "    </div>
  </div>
  ";
            // line 53
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/messages/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 53,  118 => 50,  114 => 48,  111 => 47,  105 => 45,  101 => 43,  92 => 41,  88 => 40,  85 => 39,  82 => 38,  76 => 36,  73 => 35,  69 => 33,  67 => 32,  59 => 30,  57 => 27,  56 => 25,  54 => 24,  50 => 23,  44 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/profiles/demo_umami/themes/umami/templates/components/messages/status-messages.html.twig", "/app/web/core/profiles/demo_umami/themes/umami/templates/components/messages/status-messages.html.twig");
    }
}
