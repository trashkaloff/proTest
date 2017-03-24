<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_3c823171a7055ca7ea8177e5e8086b8cc54f06469ba2968fa83ee1d6eba22e92 extends Twig_Template
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
        $__internal_a3aa22692c0d30ea11c6588427852c16952aca02651c0881b34621ee9d689e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3aa22692c0d30ea11c6588427852c16952aca02651c0881b34621ee9d689e27->enter($__internal_a3aa22692c0d30ea11c6588427852c16952aca02651c0881b34621ee9d689e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_e86c32d345651215f50cdba2e15eccc5d1fbad6b405d170dd6bc4aecff3d0c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86c32d345651215f50cdba2e15eccc5d1fbad6b405d170dd6bc4aecff3d0c44->enter($__internal_e86c32d345651215f50cdba2e15eccc5d1fbad6b405d170dd6bc4aecff3d0c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_a3aa22692c0d30ea11c6588427852c16952aca02651c0881b34621ee9d689e27->leave($__internal_a3aa22692c0d30ea11c6588427852c16952aca02651c0881b34621ee9d689e27_prof);

        
        $__internal_e86c32d345651215f50cdba2e15eccc5d1fbad6b405d170dd6bc4aecff3d0c44->leave($__internal_e86c32d345651215f50cdba2e15eccc5d1fbad6b405d170dd6bc4aecff3d0c44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
