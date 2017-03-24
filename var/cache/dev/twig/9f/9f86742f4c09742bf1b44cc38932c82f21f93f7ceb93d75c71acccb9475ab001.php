<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d09f5d001bdfae6a908da2fca527dcc57f94534cbb2a2fd4d8c1f862b601f725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cd78ba4b83423e947c855a0d7c5f58b8288a99ace9cd7613cb84ce624a3401c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd78ba4b83423e947c855a0d7c5f58b8288a99ace9cd7613cb84ce624a3401c->enter($__internal_5cd78ba4b83423e947c855a0d7c5f58b8288a99ace9cd7613cb84ce624a3401c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c2e272639bd27e81985ad4fb1fa8e2609d36d4ca5920e942dba6e5d77d9ce648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e272639bd27e81985ad4fb1fa8e2609d36d4ca5920e942dba6e5d77d9ce648->enter($__internal_c2e272639bd27e81985ad4fb1fa8e2609d36d4ca5920e942dba6e5d77d9ce648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cd78ba4b83423e947c855a0d7c5f58b8288a99ace9cd7613cb84ce624a3401c->leave($__internal_5cd78ba4b83423e947c855a0d7c5f58b8288a99ace9cd7613cb84ce624a3401c_prof);

        
        $__internal_c2e272639bd27e81985ad4fb1fa8e2609d36d4ca5920e942dba6e5d77d9ce648->leave($__internal_c2e272639bd27e81985ad4fb1fa8e2609d36d4ca5920e942dba6e5d77d9ce648_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f27c70b2cf34bb5b9dc2667b7f2561a6b930cfabd2314b4f5541864765a936cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27c70b2cf34bb5b9dc2667b7f2561a6b930cfabd2314b4f5541864765a936cb->enter($__internal_f27c70b2cf34bb5b9dc2667b7f2561a6b930cfabd2314b4f5541864765a936cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_63a84d39d058ca294b8d7d65c2742608bd2a602b05e7ff6da3545c3571bc1721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a84d39d058ca294b8d7d65c2742608bd2a602b05e7ff6da3545c3571bc1721->enter($__internal_63a84d39d058ca294b8d7d65c2742608bd2a602b05e7ff6da3545c3571bc1721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_63a84d39d058ca294b8d7d65c2742608bd2a602b05e7ff6da3545c3571bc1721->leave($__internal_63a84d39d058ca294b8d7d65c2742608bd2a602b05e7ff6da3545c3571bc1721_prof);

        
        $__internal_f27c70b2cf34bb5b9dc2667b7f2561a6b930cfabd2314b4f5541864765a936cb->leave($__internal_f27c70b2cf34bb5b9dc2667b7f2561a6b930cfabd2314b4f5541864765a936cb_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cebc0ce2d78d56f58f5867d46cbb09ef4efecb82ab757bc73b3bb080c4cdc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cebc0ce2d78d56f58f5867d46cbb09ef4efecb82ab757bc73b3bb080c4cdc21->enter($__internal_3cebc0ce2d78d56f58f5867d46cbb09ef4efecb82ab757bc73b3bb080c4cdc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c6e9009eca97b57267f9420af5b1990d875eba5c64ea5f7c55b8c731e562c3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e9009eca97b57267f9420af5b1990d875eba5c64ea5f7c55b8c731e562c3e8->enter($__internal_c6e9009eca97b57267f9420af5b1990d875eba5c64ea5f7c55b8c731e562c3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c6e9009eca97b57267f9420af5b1990d875eba5c64ea5f7c55b8c731e562c3e8->leave($__internal_c6e9009eca97b57267f9420af5b1990d875eba5c64ea5f7c55b8c731e562c3e8_prof);

        
        $__internal_3cebc0ce2d78d56f58f5867d46cbb09ef4efecb82ab757bc73b3bb080c4cdc21->leave($__internal_3cebc0ce2d78d56f58f5867d46cbb09ef4efecb82ab757bc73b3bb080c4cdc21_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
