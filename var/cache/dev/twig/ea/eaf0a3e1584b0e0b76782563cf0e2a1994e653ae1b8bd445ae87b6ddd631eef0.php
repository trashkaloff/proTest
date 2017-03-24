<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf98befa34d6fd83c86761236c260b9a9d3e7c2c68dd45d3cce13b4178408a30 extends Twig_Template
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
        $__internal_25818f18da08869deb20b61047ef587b7c7210ab8db0ed86511b23ee51a450a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25818f18da08869deb20b61047ef587b7c7210ab8db0ed86511b23ee51a450a3->enter($__internal_25818f18da08869deb20b61047ef587b7c7210ab8db0ed86511b23ee51a450a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_34e564147900a3136d17c53cc4d5c41844ad2a6cfb5ac57465133e7c1b0092ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e564147900a3136d17c53cc4d5c41844ad2a6cfb5ac57465133e7c1b0092ad->enter($__internal_34e564147900a3136d17c53cc4d5c41844ad2a6cfb5ac57465133e7c1b0092ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_25818f18da08869deb20b61047ef587b7c7210ab8db0ed86511b23ee51a450a3->leave($__internal_25818f18da08869deb20b61047ef587b7c7210ab8db0ed86511b23ee51a450a3_prof);

        
        $__internal_34e564147900a3136d17c53cc4d5c41844ad2a6cfb5ac57465133e7c1b0092ad->leave($__internal_34e564147900a3136d17c53cc4d5c41844ad2a6cfb5ac57465133e7c1b0092ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
