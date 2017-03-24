<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_309d080f5974df84644bd4e4095d9e0c79c337c730538a651b6f3c6c15f236eb extends Twig_Template
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
        $__internal_1013d4d1771be9857a604b6213b7b0ccd6ab72ff2d652f1b0e4e796377426455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1013d4d1771be9857a604b6213b7b0ccd6ab72ff2d652f1b0e4e796377426455->enter($__internal_1013d4d1771be9857a604b6213b7b0ccd6ab72ff2d652f1b0e4e796377426455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_6725562ee8eae54c383ef0dbcd6b6a7e074dac5afda8fa0b667b3dc5fd7117f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6725562ee8eae54c383ef0dbcd6b6a7e074dac5afda8fa0b667b3dc5fd7117f3->enter($__internal_6725562ee8eae54c383ef0dbcd6b6a7e074dac5afda8fa0b667b3dc5fd7117f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1013d4d1771be9857a604b6213b7b0ccd6ab72ff2d652f1b0e4e796377426455->leave($__internal_1013d4d1771be9857a604b6213b7b0ccd6ab72ff2d652f1b0e4e796377426455_prof);

        
        $__internal_6725562ee8eae54c383ef0dbcd6b6a7e074dac5afda8fa0b667b3dc5fd7117f3->leave($__internal_6725562ee8eae54c383ef0dbcd6b6a7e074dac5afda8fa0b667b3dc5fd7117f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
