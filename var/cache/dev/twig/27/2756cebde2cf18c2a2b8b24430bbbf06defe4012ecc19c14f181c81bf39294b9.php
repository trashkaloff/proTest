<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a4e254d99350e31e2f1320a6b3258f61bc6876a0452cf5602c2a2eef09494fc extends Twig_Template
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
        $__internal_bfa6b4ba6d1e63ab56122549a75e42f0e47e56497287892e242d97d79fced0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa6b4ba6d1e63ab56122549a75e42f0e47e56497287892e242d97d79fced0b7->enter($__internal_bfa6b4ba6d1e63ab56122549a75e42f0e47e56497287892e242d97d79fced0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4dce44b4dbc342b6a4de82fd4aacd25cebbe5082d399de8ee27565f8a9aa0ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dce44b4dbc342b6a4de82fd4aacd25cebbe5082d399de8ee27565f8a9aa0ff5->enter($__internal_4dce44b4dbc342b6a4de82fd4aacd25cebbe5082d399de8ee27565f8a9aa0ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_bfa6b4ba6d1e63ab56122549a75e42f0e47e56497287892e242d97d79fced0b7->leave($__internal_bfa6b4ba6d1e63ab56122549a75e42f0e47e56497287892e242d97d79fced0b7_prof);

        
        $__internal_4dce44b4dbc342b6a4de82fd4aacd25cebbe5082d399de8ee27565f8a9aa0ff5->leave($__internal_4dce44b4dbc342b6a4de82fd4aacd25cebbe5082d399de8ee27565f8a9aa0ff5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
