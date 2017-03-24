<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_150ca7d995468e02789c19d70f5a82365301ecebc21b38fde8bc2214e9f04740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a83095f4614a0a808e90b1712acdc4b6f475e6d7dfdff0a2afbdcb2f129890d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a83095f4614a0a808e90b1712acdc4b6f475e6d7dfdff0a2afbdcb2f129890d->enter($__internal_7a83095f4614a0a808e90b1712acdc4b6f475e6d7dfdff0a2afbdcb2f129890d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9ca7f9466a63a54b8890401a291a9833bd0d08e7d620f8bed958d07df8cbec37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca7f9466a63a54b8890401a291a9833bd0d08e7d620f8bed958d07df8cbec37->enter($__internal_9ca7f9466a63a54b8890401a291a9833bd0d08e7d620f8bed958d07df8cbec37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a83095f4614a0a808e90b1712acdc4b6f475e6d7dfdff0a2afbdcb2f129890d->leave($__internal_7a83095f4614a0a808e90b1712acdc4b6f475e6d7dfdff0a2afbdcb2f129890d_prof);

        
        $__internal_9ca7f9466a63a54b8890401a291a9833bd0d08e7d620f8bed958d07df8cbec37->leave($__internal_9ca7f9466a63a54b8890401a291a9833bd0d08e7d620f8bed958d07df8cbec37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc1defe3cbc86778087ac58c8e29cbf310ee254e6150f4fb384748d5276416a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1defe3cbc86778087ac58c8e29cbf310ee254e6150f4fb384748d5276416a6->enter($__internal_fc1defe3cbc86778087ac58c8e29cbf310ee254e6150f4fb384748d5276416a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa5ba1ec0e18f110400aae688c4ab272f0b0bfb8a8ac1f0ff48637960f633c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5ba1ec0e18f110400aae688c4ab272f0b0bfb8a8ac1f0ff48637960f633c6f->enter($__internal_aa5ba1ec0e18f110400aae688c4ab272f0b0bfb8a8ac1f0ff48637960f633c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_aa5ba1ec0e18f110400aae688c4ab272f0b0bfb8a8ac1f0ff48637960f633c6f->leave($__internal_aa5ba1ec0e18f110400aae688c4ab272f0b0bfb8a8ac1f0ff48637960f633c6f_prof);

        
        $__internal_fc1defe3cbc86778087ac58c8e29cbf310ee254e6150f4fb384748d5276416a6->leave($__internal_fc1defe3cbc86778087ac58c8e29cbf310ee254e6150f4fb384748d5276416a6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ec189ff8c496721e5f0c3d39c00a254c952ced8b0567b2d4e412d408b1fcd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec189ff8c496721e5f0c3d39c00a254c952ced8b0567b2d4e412d408b1fcd2e->enter($__internal_9ec189ff8c496721e5f0c3d39c00a254c952ced8b0567b2d4e412d408b1fcd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f95669af739a11d60162d7264ebb8ec78a430e587125dd49b0935f33b428487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f95669af739a11d60162d7264ebb8ec78a430e587125dd49b0935f33b428487->enter($__internal_0f95669af739a11d60162d7264ebb8ec78a430e587125dd49b0935f33b428487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0f95669af739a11d60162d7264ebb8ec78a430e587125dd49b0935f33b428487->leave($__internal_0f95669af739a11d60162d7264ebb8ec78a430e587125dd49b0935f33b428487_prof);

        
        $__internal_9ec189ff8c496721e5f0c3d39c00a254c952ced8b0567b2d4e412d408b1fcd2e->leave($__internal_9ec189ff8c496721e5f0c3d39c00a254c952ced8b0567b2d4e412d408b1fcd2e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
