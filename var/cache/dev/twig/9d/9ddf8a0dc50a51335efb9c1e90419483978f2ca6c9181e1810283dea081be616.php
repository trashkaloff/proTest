<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5c39970d0f62eebec53d6d8a047872f68deb9b53c68121b1736044beb2a3c477 extends Twig_Template
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
        $__internal_06df31d6e51d890d695fcfcc0a3096b0454d9843ed6716c4100e1a4e4e57c6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06df31d6e51d890d695fcfcc0a3096b0454d9843ed6716c4100e1a4e4e57c6ff->enter($__internal_06df31d6e51d890d695fcfcc0a3096b0454d9843ed6716c4100e1a4e4e57c6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_41774361564f534a4da236b213608755130ce6116c4750d6ace5b6b5c1fea30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41774361564f534a4da236b213608755130ce6116c4750d6ace5b6b5c1fea30f->enter($__internal_41774361564f534a4da236b213608755130ce6116c4750d6ace5b6b5c1fea30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_06df31d6e51d890d695fcfcc0a3096b0454d9843ed6716c4100e1a4e4e57c6ff->leave($__internal_06df31d6e51d890d695fcfcc0a3096b0454d9843ed6716c4100e1a4e4e57c6ff_prof);

        
        $__internal_41774361564f534a4da236b213608755130ce6116c4750d6ace5b6b5c1fea30f->leave($__internal_41774361564f534a4da236b213608755130ce6116c4750d6ace5b6b5c1fea30f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
