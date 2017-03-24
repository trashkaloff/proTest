<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1babc699651978b36e072d15ab6d3e370ff62d9367e6aff85e4701d8da4a7608 extends Twig_Template
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
        $__internal_20aed92a0ed50d593820c56d9250b0c03679a9dc40eb57fcaee4620554515b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20aed92a0ed50d593820c56d9250b0c03679a9dc40eb57fcaee4620554515b3c->enter($__internal_20aed92a0ed50d593820c56d9250b0c03679a9dc40eb57fcaee4620554515b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_81e15a25097f804a4e94db241b793bb8448444a7b1650d4cad409930307e4d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e15a25097f804a4e94db241b793bb8448444a7b1650d4cad409930307e4d54->enter($__internal_81e15a25097f804a4e94db241b793bb8448444a7b1650d4cad409930307e4d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_20aed92a0ed50d593820c56d9250b0c03679a9dc40eb57fcaee4620554515b3c->leave($__internal_20aed92a0ed50d593820c56d9250b0c03679a9dc40eb57fcaee4620554515b3c_prof);

        
        $__internal_81e15a25097f804a4e94db241b793bb8448444a7b1650d4cad409930307e4d54->leave($__internal_81e15a25097f804a4e94db241b793bb8448444a7b1650d4cad409930307e4d54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
