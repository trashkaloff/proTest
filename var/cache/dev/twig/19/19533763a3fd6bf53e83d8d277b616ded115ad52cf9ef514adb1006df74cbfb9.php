<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_95d7afa5dccedf33d5c5855dd7cff6cece12ad2c9179c95e5f380d3d7bc24e66 extends Twig_Template
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
        $__internal_e7e8923b7292da1071c6a1f1021e1e4c43e303910d9910bde56c03e957b25316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e8923b7292da1071c6a1f1021e1e4c43e303910d9910bde56c03e957b25316->enter($__internal_e7e8923b7292da1071c6a1f1021e1e4c43e303910d9910bde56c03e957b25316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_13c845b030c50d2d28aa7046cf54f105536e8bcd637ad3ad080b7831e04a58be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c845b030c50d2d28aa7046cf54f105536e8bcd637ad3ad080b7831e04a58be->enter($__internal_13c845b030c50d2d28aa7046cf54f105536e8bcd637ad3ad080b7831e04a58be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e7e8923b7292da1071c6a1f1021e1e4c43e303910d9910bde56c03e957b25316->leave($__internal_e7e8923b7292da1071c6a1f1021e1e4c43e303910d9910bde56c03e957b25316_prof);

        
        $__internal_13c845b030c50d2d28aa7046cf54f105536e8bcd637ad3ad080b7831e04a58be->leave($__internal_13c845b030c50d2d28aa7046cf54f105536e8bcd637ad3ad080b7831e04a58be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
