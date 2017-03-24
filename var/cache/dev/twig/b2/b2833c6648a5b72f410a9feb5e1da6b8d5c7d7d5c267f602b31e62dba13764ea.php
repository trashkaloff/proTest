<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7beac7d31780cb9333f3c34bf4f70d1009b4d3940a094783de49923ab018d8f3 extends Twig_Template
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
        $__internal_3f0ea04fa791b7661f8ea1100a0acdc348533ea00ef20a9c40014e0b4850f526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0ea04fa791b7661f8ea1100a0acdc348533ea00ef20a9c40014e0b4850f526->enter($__internal_3f0ea04fa791b7661f8ea1100a0acdc348533ea00ef20a9c40014e0b4850f526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_06ba95a48db65eee771c4dc373b15247a061bcc37194dce214bdaf227111bdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ba95a48db65eee771c4dc373b15247a061bcc37194dce214bdaf227111bdf1->enter($__internal_06ba95a48db65eee771c4dc373b15247a061bcc37194dce214bdaf227111bdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3f0ea04fa791b7661f8ea1100a0acdc348533ea00ef20a9c40014e0b4850f526->leave($__internal_3f0ea04fa791b7661f8ea1100a0acdc348533ea00ef20a9c40014e0b4850f526_prof);

        
        $__internal_06ba95a48db65eee771c4dc373b15247a061bcc37194dce214bdaf227111bdf1->leave($__internal_06ba95a48db65eee771c4dc373b15247a061bcc37194dce214bdaf227111bdf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
