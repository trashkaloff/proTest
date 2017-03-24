<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e604c17d60b9bbb8f9cac0322a678f018970625992eb1bc06a579c5eff88914b extends Twig_Template
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
        $__internal_3e77d6148190d8babbc05808eba738de0b58d338f934913e8b7919d3b6c2020b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e77d6148190d8babbc05808eba738de0b58d338f934913e8b7919d3b6c2020b->enter($__internal_3e77d6148190d8babbc05808eba738de0b58d338f934913e8b7919d3b6c2020b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_49ddb719bc5bb9f3033d3e59cb22a8a86d5afe0487a231225bf6368575369777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ddb719bc5bb9f3033d3e59cb22a8a86d5afe0487a231225bf6368575369777->enter($__internal_49ddb719bc5bb9f3033d3e59cb22a8a86d5afe0487a231225bf6368575369777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3e77d6148190d8babbc05808eba738de0b58d338f934913e8b7919d3b6c2020b->leave($__internal_3e77d6148190d8babbc05808eba738de0b58d338f934913e8b7919d3b6c2020b_prof);

        
        $__internal_49ddb719bc5bb9f3033d3e59cb22a8a86d5afe0487a231225bf6368575369777->leave($__internal_49ddb719bc5bb9f3033d3e59cb22a8a86d5afe0487a231225bf6368575369777_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
