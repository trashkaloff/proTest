<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_928c700f1bd55e7d3ce8c237ede9f16eb961626e4bf9ade239529ad63438dae4 extends Twig_Template
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
        $__internal_4974134327f78812c1fcc92c59ae21d3f24af51d714c40f7632405312019cc78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4974134327f78812c1fcc92c59ae21d3f24af51d714c40f7632405312019cc78->enter($__internal_4974134327f78812c1fcc92c59ae21d3f24af51d714c40f7632405312019cc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_144f02d2556592e3888d8ff9268912b6414928874ffd36ac5433f0415d9638dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144f02d2556592e3888d8ff9268912b6414928874ffd36ac5433f0415d9638dc->enter($__internal_144f02d2556592e3888d8ff9268912b6414928874ffd36ac5433f0415d9638dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4974134327f78812c1fcc92c59ae21d3f24af51d714c40f7632405312019cc78->leave($__internal_4974134327f78812c1fcc92c59ae21d3f24af51d714c40f7632405312019cc78_prof);

        
        $__internal_144f02d2556592e3888d8ff9268912b6414928874ffd36ac5433f0415d9638dc->leave($__internal_144f02d2556592e3888d8ff9268912b6414928874ffd36ac5433f0415d9638dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
