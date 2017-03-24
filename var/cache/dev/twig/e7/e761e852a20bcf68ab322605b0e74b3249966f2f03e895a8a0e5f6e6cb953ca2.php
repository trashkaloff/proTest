<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2ace783b508e2369b5be6fdb8cc26a46e20f9bb55f0df8c9256f2d9027f272e5 extends Twig_Template
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
        $__internal_0478d6fe3c9da645ec0cd1d4fb0514b5ad603eec33e2ce83c320919f06b8c64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0478d6fe3c9da645ec0cd1d4fb0514b5ad603eec33e2ce83c320919f06b8c64c->enter($__internal_0478d6fe3c9da645ec0cd1d4fb0514b5ad603eec33e2ce83c320919f06b8c64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_8911c4a458106e09b9e45afe80ed065ee179645f3dd69be9ce1d418f7f17b3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8911c4a458106e09b9e45afe80ed065ee179645f3dd69be9ce1d418f7f17b3af->enter($__internal_8911c4a458106e09b9e45afe80ed065ee179645f3dd69be9ce1d418f7f17b3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0478d6fe3c9da645ec0cd1d4fb0514b5ad603eec33e2ce83c320919f06b8c64c->leave($__internal_0478d6fe3c9da645ec0cd1d4fb0514b5ad603eec33e2ce83c320919f06b8c64c_prof);

        
        $__internal_8911c4a458106e09b9e45afe80ed065ee179645f3dd69be9ce1d418f7f17b3af->leave($__internal_8911c4a458106e09b9e45afe80ed065ee179645f3dd69be9ce1d418f7f17b3af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
