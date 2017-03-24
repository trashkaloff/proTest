<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_14006793ff0e0fc11971a0eb9ccd995c1b59242fb07f6c2c641d8b3cbcf95cac extends Twig_Template
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
        $__internal_765754690ec3c92fa38b10280690db8b8297504b806390c076898c8ec8df32df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765754690ec3c92fa38b10280690db8b8297504b806390c076898c8ec8df32df->enter($__internal_765754690ec3c92fa38b10280690db8b8297504b806390c076898c8ec8df32df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b8c543f71251c5e140f4256e4b3a83a317f80586129a34ef879eaa916a5cb786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c543f71251c5e140f4256e4b3a83a317f80586129a34ef879eaa916a5cb786->enter($__internal_b8c543f71251c5e140f4256e4b3a83a317f80586129a34ef879eaa916a5cb786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_765754690ec3c92fa38b10280690db8b8297504b806390c076898c8ec8df32df->leave($__internal_765754690ec3c92fa38b10280690db8b8297504b806390c076898c8ec8df32df_prof);

        
        $__internal_b8c543f71251c5e140f4256e4b3a83a317f80586129a34ef879eaa916a5cb786->leave($__internal_b8c543f71251c5e140f4256e4b3a83a317f80586129a34ef879eaa916a5cb786_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
