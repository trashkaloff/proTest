<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ca285f51b5370ebd0e275586e847e1530eafa096ae931c8b09873b59b0ae4b49 extends Twig_Template
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
        $__internal_336884cdc9c44b7d353c61c788d6e32f4885347743bbaff853beae1458f12cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_336884cdc9c44b7d353c61c788d6e32f4885347743bbaff853beae1458f12cca->enter($__internal_336884cdc9c44b7d353c61c788d6e32f4885347743bbaff853beae1458f12cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_026eddd3fdeda5168c975910e9c3ff4fcaa11aa40fe4ba9ba36be90ee16ce6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026eddd3fdeda5168c975910e9c3ff4fcaa11aa40fe4ba9ba36be90ee16ce6ec->enter($__internal_026eddd3fdeda5168c975910e9c3ff4fcaa11aa40fe4ba9ba36be90ee16ce6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_336884cdc9c44b7d353c61c788d6e32f4885347743bbaff853beae1458f12cca->leave($__internal_336884cdc9c44b7d353c61c788d6e32f4885347743bbaff853beae1458f12cca_prof);

        
        $__internal_026eddd3fdeda5168c975910e9c3ff4fcaa11aa40fe4ba9ba36be90ee16ce6ec->leave($__internal_026eddd3fdeda5168c975910e9c3ff4fcaa11aa40fe4ba9ba36be90ee16ce6ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
