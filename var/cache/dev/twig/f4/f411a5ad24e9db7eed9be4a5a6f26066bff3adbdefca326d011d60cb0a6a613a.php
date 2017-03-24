<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0798e37c38d513bea7b709472f00287adf735e9290f5e482edd74f4ecf2ed013 extends Twig_Template
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
        $__internal_c4212e6faf65d65a3f959dd37b29a5314a6558cd7b136dbb952486cce56abad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4212e6faf65d65a3f959dd37b29a5314a6558cd7b136dbb952486cce56abad5->enter($__internal_c4212e6faf65d65a3f959dd37b29a5314a6558cd7b136dbb952486cce56abad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a0fab10bc83ea14654cacc5dc78776f79425a5970f044fb0a32889bc9fbca2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0fab10bc83ea14654cacc5dc78776f79425a5970f044fb0a32889bc9fbca2fe->enter($__internal_a0fab10bc83ea14654cacc5dc78776f79425a5970f044fb0a32889bc9fbca2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c4212e6faf65d65a3f959dd37b29a5314a6558cd7b136dbb952486cce56abad5->leave($__internal_c4212e6faf65d65a3f959dd37b29a5314a6558cd7b136dbb952486cce56abad5_prof);

        
        $__internal_a0fab10bc83ea14654cacc5dc78776f79425a5970f044fb0a32889bc9fbca2fe->leave($__internal_a0fab10bc83ea14654cacc5dc78776f79425a5970f044fb0a32889bc9fbca2fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
