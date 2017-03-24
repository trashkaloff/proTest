<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fe527007acf5d27a058d7cc714e187ad085376dff826d0e7e109bf7efeaf0710 extends Twig_Template
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
        $__internal_3e321326b9dd9c0f19024629e2a38926a0c2eed026901408419246cd0901d5ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e321326b9dd9c0f19024629e2a38926a0c2eed026901408419246cd0901d5ab->enter($__internal_3e321326b9dd9c0f19024629e2a38926a0c2eed026901408419246cd0901d5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_653d0713d948d42afd7f714a5cb24533adc6f2dff7e2b76213ef117f1854ed9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653d0713d948d42afd7f714a5cb24533adc6f2dff7e2b76213ef117f1854ed9f->enter($__internal_653d0713d948d42afd7f714a5cb24533adc6f2dff7e2b76213ef117f1854ed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3e321326b9dd9c0f19024629e2a38926a0c2eed026901408419246cd0901d5ab->leave($__internal_3e321326b9dd9c0f19024629e2a38926a0c2eed026901408419246cd0901d5ab_prof);

        
        $__internal_653d0713d948d42afd7f714a5cb24533adc6f2dff7e2b76213ef117f1854ed9f->leave($__internal_653d0713d948d42afd7f714a5cb24533adc6f2dff7e2b76213ef117f1854ed9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
