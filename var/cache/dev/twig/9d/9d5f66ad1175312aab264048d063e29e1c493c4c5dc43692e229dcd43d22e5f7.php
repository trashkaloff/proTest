<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cff7c0cc64ef764129ceb6e270e4d39cdc90d0ccbd85c6103cb8e17855821d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cff7c0cc64ef764129ceb6e270e4d39cdc90d0ccbd85c6103cb8e17855821d6->enter($__internal_0cff7c0cc64ef764129ceb6e270e4d39cdc90d0ccbd85c6103cb8e17855821d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e015ee249fa996597dbf2edc9a2594edf01470eaf0e28974d877de8c62de70fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e015ee249fa996597dbf2edc9a2594edf01470eaf0e28974d877de8c62de70fb->enter($__internal_e015ee249fa996597dbf2edc9a2594edf01470eaf0e28974d877de8c62de70fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0cff7c0cc64ef764129ceb6e270e4d39cdc90d0ccbd85c6103cb8e17855821d6->leave($__internal_0cff7c0cc64ef764129ceb6e270e4d39cdc90d0ccbd85c6103cb8e17855821d6_prof);

        
        $__internal_e015ee249fa996597dbf2edc9a2594edf01470eaf0e28974d877de8c62de70fb->leave($__internal_e015ee249fa996597dbf2edc9a2594edf01470eaf0e28974d877de8c62de70fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_97bc1e4f5dc1b41d27fbcec9e7fab01f1a5d63aed6ae1f1e3e61698c01b013e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97bc1e4f5dc1b41d27fbcec9e7fab01f1a5d63aed6ae1f1e3e61698c01b013e6->enter($__internal_97bc1e4f5dc1b41d27fbcec9e7fab01f1a5d63aed6ae1f1e3e61698c01b013e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34f6b7fffac044cef1539adde8856daf731dc67b54e5f1560b8762d965025767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f6b7fffac044cef1539adde8856daf731dc67b54e5f1560b8762d965025767->enter($__internal_34f6b7fffac044cef1539adde8856daf731dc67b54e5f1560b8762d965025767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_34f6b7fffac044cef1539adde8856daf731dc67b54e5f1560b8762d965025767->leave($__internal_34f6b7fffac044cef1539adde8856daf731dc67b54e5f1560b8762d965025767_prof);

        
        $__internal_97bc1e4f5dc1b41d27fbcec9e7fab01f1a5d63aed6ae1f1e3e61698c01b013e6->leave($__internal_97bc1e4f5dc1b41d27fbcec9e7fab01f1a5d63aed6ae1f1e3e61698c01b013e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95bfad6be05ebc43b1228f4ab29893d4e0b06f01368d99e4398a95639be8379f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bfad6be05ebc43b1228f4ab29893d4e0b06f01368d99e4398a95639be8379f->enter($__internal_95bfad6be05ebc43b1228f4ab29893d4e0b06f01368d99e4398a95639be8379f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_415b00d88506079de3ca1ef0be7598f04f955032ec3d3f603fd7af91ce6f3d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415b00d88506079de3ca1ef0be7598f04f955032ec3d3f603fd7af91ce6f3d14->enter($__internal_415b00d88506079de3ca1ef0be7598f04f955032ec3d3f603fd7af91ce6f3d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_415b00d88506079de3ca1ef0be7598f04f955032ec3d3f603fd7af91ce6f3d14->leave($__internal_415b00d88506079de3ca1ef0be7598f04f955032ec3d3f603fd7af91ce6f3d14_prof);

        
        $__internal_95bfad6be05ebc43b1228f4ab29893d4e0b06f01368d99e4398a95639be8379f->leave($__internal_95bfad6be05ebc43b1228f4ab29893d4e0b06f01368d99e4398a95639be8379f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbde1be3de322c028ba4e96d9831771f67562777c2245d04144e495128607454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbde1be3de322c028ba4e96d9831771f67562777c2245d04144e495128607454->enter($__internal_fbde1be3de322c028ba4e96d9831771f67562777c2245d04144e495128607454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6d8930f7f21a87d194d5ceba7b487981c68ae746e1811e0081c50a1e0f1cd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d8930f7f21a87d194d5ceba7b487981c68ae746e1811e0081c50a1e0f1cd09->enter($__internal_b6d8930f7f21a87d194d5ceba7b487981c68ae746e1811e0081c50a1e0f1cd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6d8930f7f21a87d194d5ceba7b487981c68ae746e1811e0081c50a1e0f1cd09->leave($__internal_b6d8930f7f21a87d194d5ceba7b487981c68ae746e1811e0081c50a1e0f1cd09_prof);

        
        $__internal_fbde1be3de322c028ba4e96d9831771f67562777c2245d04144e495128607454->leave($__internal_fbde1be3de322c028ba4e96d9831771f67562777c2245d04144e495128607454_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12b4616290615f62880111a123f126024ead127c881013c650d0479ce29f2cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b4616290615f62880111a123f126024ead127c881013c650d0479ce29f2cb5->enter($__internal_12b4616290615f62880111a123f126024ead127c881013c650d0479ce29f2cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6bcdd2aecc782bde5e44fbaf82080dbd4c1c67a5c223bec083fe12104eca155d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bcdd2aecc782bde5e44fbaf82080dbd4c1c67a5c223bec083fe12104eca155d->enter($__internal_6bcdd2aecc782bde5e44fbaf82080dbd4c1c67a5c223bec083fe12104eca155d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6bcdd2aecc782bde5e44fbaf82080dbd4c1c67a5c223bec083fe12104eca155d->leave($__internal_6bcdd2aecc782bde5e44fbaf82080dbd4c1c67a5c223bec083fe12104eca155d_prof);

        
        $__internal_12b4616290615f62880111a123f126024ead127c881013c650d0479ce29f2cb5->leave($__internal_12b4616290615f62880111a123f126024ead127c881013c650d0479ce29f2cb5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/trashkaloff/www/proTest/app/Resources/views/base.html.twig");
    }
}
