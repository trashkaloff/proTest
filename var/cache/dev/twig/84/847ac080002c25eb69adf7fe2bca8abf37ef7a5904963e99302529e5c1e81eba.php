<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_43cfa4df6fa507a07dd290b4b81fca69b70f03cab0b64e18100a287cfa1b70c6 extends Twig_Template
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
        $__internal_ffd80df8a622366991910f41fbc0f9d46b3ebe745fddbf2538c2e6cb2036d9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd80df8a622366991910f41fbc0f9d46b3ebe745fddbf2538c2e6cb2036d9fe->enter($__internal_ffd80df8a622366991910f41fbc0f9d46b3ebe745fddbf2538c2e6cb2036d9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_608cb6e468d4e1ee4637707d7ee96b8b3112fb937036593497a53c4a73fd9948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608cb6e468d4e1ee4637707d7ee96b8b3112fb937036593497a53c4a73fd9948->enter($__internal_608cb6e468d4e1ee4637707d7ee96b8b3112fb937036593497a53c4a73fd9948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ffd80df8a622366991910f41fbc0f9d46b3ebe745fddbf2538c2e6cb2036d9fe->leave($__internal_ffd80df8a622366991910f41fbc0f9d46b3ebe745fddbf2538c2e6cb2036d9fe_prof);

        
        $__internal_608cb6e468d4e1ee4637707d7ee96b8b3112fb937036593497a53c4a73fd9948->leave($__internal_608cb6e468d4e1ee4637707d7ee96b8b3112fb937036593497a53c4a73fd9948_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
