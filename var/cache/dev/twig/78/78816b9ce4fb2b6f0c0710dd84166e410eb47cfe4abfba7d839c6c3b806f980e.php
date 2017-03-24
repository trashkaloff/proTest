<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_65cb3bc12bd1b53dab53bf8e0ca50a6d93882bad2bd31d200cde2cb8bf1ab86c extends Twig_Template
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
        $__internal_b9dd77b3915e55ddd041fd7875468d2f99bca2b833ef9fb28513973b1a39a7a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9dd77b3915e55ddd041fd7875468d2f99bca2b833ef9fb28513973b1a39a7a7->enter($__internal_b9dd77b3915e55ddd041fd7875468d2f99bca2b833ef9fb28513973b1a39a7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_9315a2a2a71b0a721cd171b2c13cce619cbf3c693fe927bb383780b4d09ae5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9315a2a2a71b0a721cd171b2c13cce619cbf3c693fe927bb383780b4d09ae5eb->enter($__internal_9315a2a2a71b0a721cd171b2c13cce619cbf3c693fe927bb383780b4d09ae5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b9dd77b3915e55ddd041fd7875468d2f99bca2b833ef9fb28513973b1a39a7a7->leave($__internal_b9dd77b3915e55ddd041fd7875468d2f99bca2b833ef9fb28513973b1a39a7a7_prof);

        
        $__internal_9315a2a2a71b0a721cd171b2c13cce619cbf3c693fe927bb383780b4d09ae5eb->leave($__internal_9315a2a2a71b0a721cd171b2c13cce619cbf3c693fe927bb383780b4d09ae5eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
