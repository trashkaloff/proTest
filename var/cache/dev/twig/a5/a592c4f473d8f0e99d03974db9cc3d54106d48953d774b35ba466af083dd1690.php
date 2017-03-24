<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0bf77a47730e02fcf23c94ec7e89c784ea00fe6ec14f2c3a6da988c62afea9a4 extends Twig_Template
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
        $__internal_1283ce7dd0d904b8503f8cd115ca44178d80babb3fdc7c0b3b09d01fe98511bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1283ce7dd0d904b8503f8cd115ca44178d80babb3fdc7c0b3b09d01fe98511bf->enter($__internal_1283ce7dd0d904b8503f8cd115ca44178d80babb3fdc7c0b3b09d01fe98511bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_865f03170ad27dfe73b08c946079cc97c732125919e27fd31b4bf77e24f408e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865f03170ad27dfe73b08c946079cc97c732125919e27fd31b4bf77e24f408e3->enter($__internal_865f03170ad27dfe73b08c946079cc97c732125919e27fd31b4bf77e24f408e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1283ce7dd0d904b8503f8cd115ca44178d80babb3fdc7c0b3b09d01fe98511bf->leave($__internal_1283ce7dd0d904b8503f8cd115ca44178d80babb3fdc7c0b3b09d01fe98511bf_prof);

        
        $__internal_865f03170ad27dfe73b08c946079cc97c732125919e27fd31b4bf77e24f408e3->leave($__internal_865f03170ad27dfe73b08c946079cc97c732125919e27fd31b4bf77e24f408e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
