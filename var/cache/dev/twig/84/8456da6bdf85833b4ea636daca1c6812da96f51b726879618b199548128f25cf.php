<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_130f1aae5fb1f2edca868dca51bc325092dc39c0a8ac85fe6a9574f7ab9718a7 extends Twig_Template
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
        $__internal_a3e08f0ec9adbeff76d2130d4be552e605b669fa3273ffc3e5a80de8183758ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e08f0ec9adbeff76d2130d4be552e605b669fa3273ffc3e5a80de8183758ce->enter($__internal_a3e08f0ec9adbeff76d2130d4be552e605b669fa3273ffc3e5a80de8183758ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_31f299c7f3f490fa66cac87216500ef71fdf6fcf5ca7322db365a17a89cdd58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f299c7f3f490fa66cac87216500ef71fdf6fcf5ca7322db365a17a89cdd58e->enter($__internal_31f299c7f3f490fa66cac87216500ef71fdf6fcf5ca7322db365a17a89cdd58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a3e08f0ec9adbeff76d2130d4be552e605b669fa3273ffc3e5a80de8183758ce->leave($__internal_a3e08f0ec9adbeff76d2130d4be552e605b669fa3273ffc3e5a80de8183758ce_prof);

        
        $__internal_31f299c7f3f490fa66cac87216500ef71fdf6fcf5ca7322db365a17a89cdd58e->leave($__internal_31f299c7f3f490fa66cac87216500ef71fdf6fcf5ca7322db365a17a89cdd58e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
