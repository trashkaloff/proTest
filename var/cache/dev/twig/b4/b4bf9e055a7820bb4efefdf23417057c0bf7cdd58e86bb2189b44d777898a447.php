<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fea3a793720e7e3ca582497db3bcbbd044a3fdefbfd6759e0bc06bfffe26ad1b extends Twig_Template
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
        $__internal_15cba2f550c82afbda8afee13ab5bed2b7bba9c7dcd25fb62b9c4b5c035c96e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15cba2f550c82afbda8afee13ab5bed2b7bba9c7dcd25fb62b9c4b5c035c96e2->enter($__internal_15cba2f550c82afbda8afee13ab5bed2b7bba9c7dcd25fb62b9c4b5c035c96e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_4a49b340b453514cc75759f2420fe2baba0ff06598f0e8f9325fa9b52a9741ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a49b340b453514cc75759f2420fe2baba0ff06598f0e8f9325fa9b52a9741ea->enter($__internal_4a49b340b453514cc75759f2420fe2baba0ff06598f0e8f9325fa9b52a9741ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_15cba2f550c82afbda8afee13ab5bed2b7bba9c7dcd25fb62b9c4b5c035c96e2->leave($__internal_15cba2f550c82afbda8afee13ab5bed2b7bba9c7dcd25fb62b9c4b5c035c96e2_prof);

        
        $__internal_4a49b340b453514cc75759f2420fe2baba0ff06598f0e8f9325fa9b52a9741ea->leave($__internal_4a49b340b453514cc75759f2420fe2baba0ff06598f0e8f9325fa9b52a9741ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
