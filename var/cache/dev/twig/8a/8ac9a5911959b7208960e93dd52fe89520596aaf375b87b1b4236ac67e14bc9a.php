<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03afb8c6d01493fc465ea633676bb61cc1b59d894788580cf536c9b4557d0777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03afb8c6d01493fc465ea633676bb61cc1b59d894788580cf536c9b4557d0777->enter($__internal_03afb8c6d01493fc465ea633676bb61cc1b59d894788580cf536c9b4557d0777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bd2f6a473777946536635491c450908056230696bee2c758180c974650541df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2f6a473777946536635491c450908056230696bee2c758180c974650541df4->enter($__internal_bd2f6a473777946536635491c450908056230696bee2c758180c974650541df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03afb8c6d01493fc465ea633676bb61cc1b59d894788580cf536c9b4557d0777->leave($__internal_03afb8c6d01493fc465ea633676bb61cc1b59d894788580cf536c9b4557d0777_prof);

        
        $__internal_bd2f6a473777946536635491c450908056230696bee2c758180c974650541df4->leave($__internal_bd2f6a473777946536635491c450908056230696bee2c758180c974650541df4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18ed2fab42c9a99b7e41375d2487bee4ff66ab47f329a0d9ff03e2db6f8e253f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ed2fab42c9a99b7e41375d2487bee4ff66ab47f329a0d9ff03e2db6f8e253f->enter($__internal_18ed2fab42c9a99b7e41375d2487bee4ff66ab47f329a0d9ff03e2db6f8e253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f200d1e8f221a18a9cdf59f0f56d7a162c0c1568dd63704fbdfc00029211556a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f200d1e8f221a18a9cdf59f0f56d7a162c0c1568dd63704fbdfc00029211556a->enter($__internal_f200d1e8f221a18a9cdf59f0f56d7a162c0c1568dd63704fbdfc00029211556a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f200d1e8f221a18a9cdf59f0f56d7a162c0c1568dd63704fbdfc00029211556a->leave($__internal_f200d1e8f221a18a9cdf59f0f56d7a162c0c1568dd63704fbdfc00029211556a_prof);

        
        $__internal_18ed2fab42c9a99b7e41375d2487bee4ff66ab47f329a0d9ff03e2db6f8e253f->leave($__internal_18ed2fab42c9a99b7e41375d2487bee4ff66ab47f329a0d9ff03e2db6f8e253f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0fcdf1ab5c32041ccd2e3563859186d7b514eae28a476f6f2caa9500870127d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fcdf1ab5c32041ccd2e3563859186d7b514eae28a476f6f2caa9500870127d->enter($__internal_d0fcdf1ab5c32041ccd2e3563859186d7b514eae28a476f6f2caa9500870127d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_44e13cafab311ea05ab7a3f1019670cb2db378b1ac51ae1e0e0280da37639f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e13cafab311ea05ab7a3f1019670cb2db378b1ac51ae1e0e0280da37639f74->enter($__internal_44e13cafab311ea05ab7a3f1019670cb2db378b1ac51ae1e0e0280da37639f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_44e13cafab311ea05ab7a3f1019670cb2db378b1ac51ae1e0e0280da37639f74->leave($__internal_44e13cafab311ea05ab7a3f1019670cb2db378b1ac51ae1e0e0280da37639f74_prof);

        
        $__internal_d0fcdf1ab5c32041ccd2e3563859186d7b514eae28a476f6f2caa9500870127d->leave($__internal_d0fcdf1ab5c32041ccd2e3563859186d7b514eae28a476f6f2caa9500870127d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12492b1a5228ee2368f87ab59d31a6395d502a427f4220f9ff95b928a2d2d63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12492b1a5228ee2368f87ab59d31a6395d502a427f4220f9ff95b928a2d2d63e->enter($__internal_12492b1a5228ee2368f87ab59d31a6395d502a427f4220f9ff95b928a2d2d63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48dee1fcc3bb787ed04d44262d6296b43130fea9ebde0f0bb728243bea97101c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dee1fcc3bb787ed04d44262d6296b43130fea9ebde0f0bb728243bea97101c->enter($__internal_48dee1fcc3bb787ed04d44262d6296b43130fea9ebde0f0bb728243bea97101c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_48dee1fcc3bb787ed04d44262d6296b43130fea9ebde0f0bb728243bea97101c->leave($__internal_48dee1fcc3bb787ed04d44262d6296b43130fea9ebde0f0bb728243bea97101c_prof);

        
        $__internal_12492b1a5228ee2368f87ab59d31a6395d502a427f4220f9ff95b928a2d2d63e->leave($__internal_12492b1a5228ee2368f87ab59d31a6395d502a427f4220f9ff95b928a2d2d63e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
