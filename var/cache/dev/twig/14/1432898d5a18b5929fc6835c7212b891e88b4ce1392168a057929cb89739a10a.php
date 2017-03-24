<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c6f06d42be8bf90389e58359ef7b6d90c87b52f4126969fecd20e7ec7bc4287d extends Twig_Template
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
        $__internal_7c2be759937d532eeac16d7778303b8eb8536f6263e3c1d201a66a2f18861586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2be759937d532eeac16d7778303b8eb8536f6263e3c1d201a66a2f18861586->enter($__internal_7c2be759937d532eeac16d7778303b8eb8536f6263e3c1d201a66a2f18861586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_268dd7af145b0f7e90608deaee0da8d4424acd6ce290c7a0ef0e830a8dfb8f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268dd7af145b0f7e90608deaee0da8d4424acd6ce290c7a0ef0e830a8dfb8f41->enter($__internal_268dd7af145b0f7e90608deaee0da8d4424acd6ce290c7a0ef0e830a8dfb8f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7c2be759937d532eeac16d7778303b8eb8536f6263e3c1d201a66a2f18861586->leave($__internal_7c2be759937d532eeac16d7778303b8eb8536f6263e3c1d201a66a2f18861586_prof);

        
        $__internal_268dd7af145b0f7e90608deaee0da8d4424acd6ce290c7a0ef0e830a8dfb8f41->leave($__internal_268dd7af145b0f7e90608deaee0da8d4424acd6ce290c7a0ef0e830a8dfb8f41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
