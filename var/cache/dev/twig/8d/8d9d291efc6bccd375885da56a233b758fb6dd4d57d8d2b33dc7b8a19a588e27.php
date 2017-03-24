<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9ee74711064f84c8aafc5e578c9732d32ad9184033e0190a76f6eb7e38ed4620 extends Twig_Template
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
        $__internal_d38c53b19b108b6018eb879306214ea24c7bcbdefb5b4bb8973e3f75081a4a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38c53b19b108b6018eb879306214ea24c7bcbdefb5b4bb8973e3f75081a4a59->enter($__internal_d38c53b19b108b6018eb879306214ea24c7bcbdefb5b4bb8973e3f75081a4a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_488c251762ed4306a195189e439bcafc50d872cfb52a72837d7c95b4d792362d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488c251762ed4306a195189e439bcafc50d872cfb52a72837d7c95b4d792362d->enter($__internal_488c251762ed4306a195189e439bcafc50d872cfb52a72837d7c95b4d792362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d38c53b19b108b6018eb879306214ea24c7bcbdefb5b4bb8973e3f75081a4a59->leave($__internal_d38c53b19b108b6018eb879306214ea24c7bcbdefb5b4bb8973e3f75081a4a59_prof);

        
        $__internal_488c251762ed4306a195189e439bcafc50d872cfb52a72837d7c95b4d792362d->leave($__internal_488c251762ed4306a195189e439bcafc50d872cfb52a72837d7c95b4d792362d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
