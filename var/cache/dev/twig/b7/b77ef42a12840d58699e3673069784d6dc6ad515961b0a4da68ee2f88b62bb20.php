<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_93e6d97fe1779f5e1ad3aeb45ba946d842a23dff8c07c99deb961e708599fd1c extends Twig_Template
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
        $__internal_e659a393b7100648e8723ac5fd70809166f5a190fdb3788d85229d285f4a69fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e659a393b7100648e8723ac5fd70809166f5a190fdb3788d85229d285f4a69fc->enter($__internal_e659a393b7100648e8723ac5fd70809166f5a190fdb3788d85229d285f4a69fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c9d7f51f769e39d9c546463c9095304ab312f73f94f977c5fad0c00bb7ffd4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d7f51f769e39d9c546463c9095304ab312f73f94f977c5fad0c00bb7ffd4c0->enter($__internal_c9d7f51f769e39d9c546463c9095304ab312f73f94f977c5fad0c00bb7ffd4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e659a393b7100648e8723ac5fd70809166f5a190fdb3788d85229d285f4a69fc->leave($__internal_e659a393b7100648e8723ac5fd70809166f5a190fdb3788d85229d285f4a69fc_prof);

        
        $__internal_c9d7f51f769e39d9c546463c9095304ab312f73f94f977c5fad0c00bb7ffd4c0->leave($__internal_c9d7f51f769e39d9c546463c9095304ab312f73f94f977c5fad0c00bb7ffd4c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
