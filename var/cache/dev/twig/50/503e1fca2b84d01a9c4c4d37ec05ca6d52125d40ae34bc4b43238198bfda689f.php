<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7dbf3db3bb7bed2a3f4feef7501c2394c961991fa14539e0d0c8dba0b6de77c extends Twig_Template
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
        $__internal_e3b89d315351e126a0d8d50938f5afd4cacf166ef133a4b65ad0a64a8beeac5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b89d315351e126a0d8d50938f5afd4cacf166ef133a4b65ad0a64a8beeac5c->enter($__internal_e3b89d315351e126a0d8d50938f5afd4cacf166ef133a4b65ad0a64a8beeac5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6174d0079fe3e5495cce35fed3c1dc8918e374184503911c64995344b935ee49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6174d0079fe3e5495cce35fed3c1dc8918e374184503911c64995344b935ee49->enter($__internal_6174d0079fe3e5495cce35fed3c1dc8918e374184503911c64995344b935ee49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e3b89d315351e126a0d8d50938f5afd4cacf166ef133a4b65ad0a64a8beeac5c->leave($__internal_e3b89d315351e126a0d8d50938f5afd4cacf166ef133a4b65ad0a64a8beeac5c_prof);

        
        $__internal_6174d0079fe3e5495cce35fed3c1dc8918e374184503911c64995344b935ee49->leave($__internal_6174d0079fe3e5495cce35fed3c1dc8918e374184503911c64995344b935ee49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
