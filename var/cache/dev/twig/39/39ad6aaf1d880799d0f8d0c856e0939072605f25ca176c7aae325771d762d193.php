<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3b5ec0524e6c87039bbe98e80026fade9ad6fb2f8dec838ca3d6b3163fbc4b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a33c3e15edce02aed28db7ff162ed4aedbd3219087c30dba7c05a08f50eb0a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33c3e15edce02aed28db7ff162ed4aedbd3219087c30dba7c05a08f50eb0a21->enter($__internal_a33c3e15edce02aed28db7ff162ed4aedbd3219087c30dba7c05a08f50eb0a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_535ee115f6b3b888f706be323db5a49bfaabb9dc4b5007abe31994634d256558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535ee115f6b3b888f706be323db5a49bfaabb9dc4b5007abe31994634d256558->enter($__internal_535ee115f6b3b888f706be323db5a49bfaabb9dc4b5007abe31994634d256558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a33c3e15edce02aed28db7ff162ed4aedbd3219087c30dba7c05a08f50eb0a21->leave($__internal_a33c3e15edce02aed28db7ff162ed4aedbd3219087c30dba7c05a08f50eb0a21_prof);

        
        $__internal_535ee115f6b3b888f706be323db5a49bfaabb9dc4b5007abe31994634d256558->leave($__internal_535ee115f6b3b888f706be323db5a49bfaabb9dc4b5007abe31994634d256558_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
