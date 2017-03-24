<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a3115c01f0f98af2e3fa2fd019f03553964fb6866ffe8d8c011a7e57ec5b13ac extends Twig_Template
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
        $__internal_4245c4c9f330f20d4a396348e6aa9fd1a5e2b9900261dde525980903dac8ce94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4245c4c9f330f20d4a396348e6aa9fd1a5e2b9900261dde525980903dac8ce94->enter($__internal_4245c4c9f330f20d4a396348e6aa9fd1a5e2b9900261dde525980903dac8ce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6c6fa472988cc62d00c78539154c008260d5e7f036fe8d22492b6aba4c07035d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6fa472988cc62d00c78539154c008260d5e7f036fe8d22492b6aba4c07035d->enter($__internal_6c6fa472988cc62d00c78539154c008260d5e7f036fe8d22492b6aba4c07035d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4245c4c9f330f20d4a396348e6aa9fd1a5e2b9900261dde525980903dac8ce94->leave($__internal_4245c4c9f330f20d4a396348e6aa9fd1a5e2b9900261dde525980903dac8ce94_prof);

        
        $__internal_6c6fa472988cc62d00c78539154c008260d5e7f036fe8d22492b6aba4c07035d->leave($__internal_6c6fa472988cc62d00c78539154c008260d5e7f036fe8d22492b6aba4c07035d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
