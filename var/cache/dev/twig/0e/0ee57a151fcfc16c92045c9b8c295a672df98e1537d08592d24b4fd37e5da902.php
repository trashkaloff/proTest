<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_05e4ba2fd294fdec1729ead3147bccf54b5ac9a204e9543a8a9ab09d10e5ee8d extends Twig_Template
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
        $__internal_5b81bf342bd4b30637fcbd7efef8c18372ca29a181bece52c74f47c80a7f3612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b81bf342bd4b30637fcbd7efef8c18372ca29a181bece52c74f47c80a7f3612->enter($__internal_5b81bf342bd4b30637fcbd7efef8c18372ca29a181bece52c74f47c80a7f3612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_47adca4b53318d64c2b7a9a3d57f8377298dd9f943641df1387313c4d3a226fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47adca4b53318d64c2b7a9a3d57f8377298dd9f943641df1387313c4d3a226fb->enter($__internal_47adca4b53318d64c2b7a9a3d57f8377298dd9f943641df1387313c4d3a226fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5b81bf342bd4b30637fcbd7efef8c18372ca29a181bece52c74f47c80a7f3612->leave($__internal_5b81bf342bd4b30637fcbd7efef8c18372ca29a181bece52c74f47c80a7f3612_prof);

        
        $__internal_47adca4b53318d64c2b7a9a3d57f8377298dd9f943641df1387313c4d3a226fb->leave($__internal_47adca4b53318d64c2b7a9a3d57f8377298dd9f943641df1387313c4d3a226fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
