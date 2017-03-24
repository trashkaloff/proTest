<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8a72aa64d0b831e00b010149ab4ce976eb1e3850427d11304701fa2c6628539c extends Twig_Template
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
        $__internal_b9b1664bcec5a2440fac44af716f213868bcb33dbc7a70d4ae1e9077bbb56ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b1664bcec5a2440fac44af716f213868bcb33dbc7a70d4ae1e9077bbb56ae6->enter($__internal_b9b1664bcec5a2440fac44af716f213868bcb33dbc7a70d4ae1e9077bbb56ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0adde73c65672dc89412b19eef4af94c92b23accaecd12e3cca797424e1a38dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adde73c65672dc89412b19eef4af94c92b23accaecd12e3cca797424e1a38dc->enter($__internal_0adde73c65672dc89412b19eef4af94c92b23accaecd12e3cca797424e1a38dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b9b1664bcec5a2440fac44af716f213868bcb33dbc7a70d4ae1e9077bbb56ae6->leave($__internal_b9b1664bcec5a2440fac44af716f213868bcb33dbc7a70d4ae1e9077bbb56ae6_prof);

        
        $__internal_0adde73c65672dc89412b19eef4af94c92b23accaecd12e3cca797424e1a38dc->leave($__internal_0adde73c65672dc89412b19eef4af94c92b23accaecd12e3cca797424e1a38dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
