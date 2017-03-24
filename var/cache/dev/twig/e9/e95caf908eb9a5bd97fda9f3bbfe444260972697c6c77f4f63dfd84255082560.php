<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_72111f2bb34a4692c3c0a7e55cc41e467ad2b8c3530294bfd71f5611508f0b06 extends Twig_Template
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
        $__internal_d201ec1aad299da85110b117f5ca823e72b435c1fdd9e62ee2ecdcb520fe39bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d201ec1aad299da85110b117f5ca823e72b435c1fdd9e62ee2ecdcb520fe39bc->enter($__internal_d201ec1aad299da85110b117f5ca823e72b435c1fdd9e62ee2ecdcb520fe39bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f97d0cb2eb31c68a8cd64a57db6d4c7a3a622b694c3375aaf43723f5a7e3ef6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97d0cb2eb31c68a8cd64a57db6d4c7a3a622b694c3375aaf43723f5a7e3ef6e->enter($__internal_f97d0cb2eb31c68a8cd64a57db6d4c7a3a622b694c3375aaf43723f5a7e3ef6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d201ec1aad299da85110b117f5ca823e72b435c1fdd9e62ee2ecdcb520fe39bc->leave($__internal_d201ec1aad299da85110b117f5ca823e72b435c1fdd9e62ee2ecdcb520fe39bc_prof);

        
        $__internal_f97d0cb2eb31c68a8cd64a57db6d4c7a3a622b694c3375aaf43723f5a7e3ef6e->leave($__internal_f97d0cb2eb31c68a8cd64a57db6d4c7a3a622b694c3375aaf43723f5a7e3ef6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
