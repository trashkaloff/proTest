<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4637bdf881b03616502cff663e952e1de11fb13ee777e5412be7d6c409e8894f extends Twig_Template
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
        $__internal_e58a50d86a4c89ccb9b18761ec05a599566aa8e15534e89b283bf58b52bf3b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58a50d86a4c89ccb9b18761ec05a599566aa8e15534e89b283bf58b52bf3b62->enter($__internal_e58a50d86a4c89ccb9b18761ec05a599566aa8e15534e89b283bf58b52bf3b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d6ac40cb81a28e08e9098fa1df785dc4a2cfd021639e1bcbef8780b17d240d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ac40cb81a28e08e9098fa1df785dc4a2cfd021639e1bcbef8780b17d240d59->enter($__internal_d6ac40cb81a28e08e9098fa1df785dc4a2cfd021639e1bcbef8780b17d240d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e58a50d86a4c89ccb9b18761ec05a599566aa8e15534e89b283bf58b52bf3b62->leave($__internal_e58a50d86a4c89ccb9b18761ec05a599566aa8e15534e89b283bf58b52bf3b62_prof);

        
        $__internal_d6ac40cb81a28e08e9098fa1df785dc4a2cfd021639e1bcbef8780b17d240d59->leave($__internal_d6ac40cb81a28e08e9098fa1df785dc4a2cfd021639e1bcbef8780b17d240d59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
