<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff714e260d3ad5d37238b106ce8ae7cfab95c34c9eb5aea1fdbe429df36402a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff714e260d3ad5d37238b106ce8ae7cfab95c34c9eb5aea1fdbe429df36402a6->enter($__internal_ff714e260d3ad5d37238b106ce8ae7cfab95c34c9eb5aea1fdbe429df36402a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f784493db7a995d8dad93752f3d30f8bd1c67eb80bcd243369ba85e4f6b9edf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f784493db7a995d8dad93752f3d30f8bd1c67eb80bcd243369ba85e4f6b9edf3->enter($__internal_f784493db7a995d8dad93752f3d30f8bd1c67eb80bcd243369ba85e4f6b9edf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff714e260d3ad5d37238b106ce8ae7cfab95c34c9eb5aea1fdbe429df36402a6->leave($__internal_ff714e260d3ad5d37238b106ce8ae7cfab95c34c9eb5aea1fdbe429df36402a6_prof);

        
        $__internal_f784493db7a995d8dad93752f3d30f8bd1c67eb80bcd243369ba85e4f6b9edf3->leave($__internal_f784493db7a995d8dad93752f3d30f8bd1c67eb80bcd243369ba85e4f6b9edf3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e2be8223325ac97eca0efca6f09282409ae101e7fafb9251208a46daed18154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2be8223325ac97eca0efca6f09282409ae101e7fafb9251208a46daed18154->enter($__internal_3e2be8223325ac97eca0efca6f09282409ae101e7fafb9251208a46daed18154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb1e1093f6a76c9d8b19c7285373034893fc8fb848aa11965226ee95172f00b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1e1093f6a76c9d8b19c7285373034893fc8fb848aa11965226ee95172f00b1->enter($__internal_fb1e1093f6a76c9d8b19c7285373034893fc8fb848aa11965226ee95172f00b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fb1e1093f6a76c9d8b19c7285373034893fc8fb848aa11965226ee95172f00b1->leave($__internal_fb1e1093f6a76c9d8b19c7285373034893fc8fb848aa11965226ee95172f00b1_prof);

        
        $__internal_3e2be8223325ac97eca0efca6f09282409ae101e7fafb9251208a46daed18154->leave($__internal_3e2be8223325ac97eca0efca6f09282409ae101e7fafb9251208a46daed18154_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbc382131db3d1096d14013a079c11b74d5f9ac13cdf0ed8b629399c3c883c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc382131db3d1096d14013a079c11b74d5f9ac13cdf0ed8b629399c3c883c6a->enter($__internal_bbc382131db3d1096d14013a079c11b74d5f9ac13cdf0ed8b629399c3c883c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6605b38a26a7968a97a0542c529f56acd0b9cf64be2fd34a83227a22c3d5f712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6605b38a26a7968a97a0542c529f56acd0b9cf64be2fd34a83227a22c3d5f712->enter($__internal_6605b38a26a7968a97a0542c529f56acd0b9cf64be2fd34a83227a22c3d5f712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6605b38a26a7968a97a0542c529f56acd0b9cf64be2fd34a83227a22c3d5f712->leave($__internal_6605b38a26a7968a97a0542c529f56acd0b9cf64be2fd34a83227a22c3d5f712_prof);

        
        $__internal_bbc382131db3d1096d14013a079c11b74d5f9ac13cdf0ed8b629399c3c883c6a->leave($__internal_bbc382131db3d1096d14013a079c11b74d5f9ac13cdf0ed8b629399c3c883c6a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
