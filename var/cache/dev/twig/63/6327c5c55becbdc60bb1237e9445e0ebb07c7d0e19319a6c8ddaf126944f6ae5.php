<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3778406ef85a6637d2a2a0be9d378272396e22464ec59695638d364213c2a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eadfa4147e7abe733e62ecf5c70bfd80b20c265653c40b3faad27b181c3014d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadfa4147e7abe733e62ecf5c70bfd80b20c265653c40b3faad27b181c3014d3->enter($__internal_eadfa4147e7abe733e62ecf5c70bfd80b20c265653c40b3faad27b181c3014d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3fc07fe5c52bbbea13c13653f842d83160ab68f06e1a20a8389a5a9e185924f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc07fe5c52bbbea13c13653f842d83160ab68f06e1a20a8389a5a9e185924f5->enter($__internal_3fc07fe5c52bbbea13c13653f842d83160ab68f06e1a20a8389a5a9e185924f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eadfa4147e7abe733e62ecf5c70bfd80b20c265653c40b3faad27b181c3014d3->leave($__internal_eadfa4147e7abe733e62ecf5c70bfd80b20c265653c40b3faad27b181c3014d3_prof);

        
        $__internal_3fc07fe5c52bbbea13c13653f842d83160ab68f06e1a20a8389a5a9e185924f5->leave($__internal_3fc07fe5c52bbbea13c13653f842d83160ab68f06e1a20a8389a5a9e185924f5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1696bfb8b03b4fca0429d0b112ccb48569d91b77ebea06a1959bc711ee3a9001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1696bfb8b03b4fca0429d0b112ccb48569d91b77ebea06a1959bc711ee3a9001->enter($__internal_1696bfb8b03b4fca0429d0b112ccb48569d91b77ebea06a1959bc711ee3a9001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8516da3292f6d81ccc3d3cac7ef29b8732484285de984dae227230d27204acbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8516da3292f6d81ccc3d3cac7ef29b8732484285de984dae227230d27204acbb->enter($__internal_8516da3292f6d81ccc3d3cac7ef29b8732484285de984dae227230d27204acbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8516da3292f6d81ccc3d3cac7ef29b8732484285de984dae227230d27204acbb->leave($__internal_8516da3292f6d81ccc3d3cac7ef29b8732484285de984dae227230d27204acbb_prof);

        
        $__internal_1696bfb8b03b4fca0429d0b112ccb48569d91b77ebea06a1959bc711ee3a9001->leave($__internal_1696bfb8b03b4fca0429d0b112ccb48569d91b77ebea06a1959bc711ee3a9001_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
