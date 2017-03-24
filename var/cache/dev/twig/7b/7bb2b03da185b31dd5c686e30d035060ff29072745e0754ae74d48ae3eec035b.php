<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2860e5c2f8c997d9d0dcb582a6c488d9a51615957c5bde6e68a1c68889f2393e extends Twig_Template
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
        $__internal_901a12debeb232da37e1f4f5e47d6aa38f9eeb3555d900014dfa40541b922cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901a12debeb232da37e1f4f5e47d6aa38f9eeb3555d900014dfa40541b922cec->enter($__internal_901a12debeb232da37e1f4f5e47d6aa38f9eeb3555d900014dfa40541b922cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c55fe2e2f78ac2e9ddc557b1b90f76aa90070077344b1d11abf5b293ddae9c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55fe2e2f78ac2e9ddc557b1b90f76aa90070077344b1d11abf5b293ddae9c0c->enter($__internal_c55fe2e2f78ac2e9ddc557b1b90f76aa90070077344b1d11abf5b293ddae9c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_901a12debeb232da37e1f4f5e47d6aa38f9eeb3555d900014dfa40541b922cec->leave($__internal_901a12debeb232da37e1f4f5e47d6aa38f9eeb3555d900014dfa40541b922cec_prof);

        
        $__internal_c55fe2e2f78ac2e9ddc557b1b90f76aa90070077344b1d11abf5b293ddae9c0c->leave($__internal_c55fe2e2f78ac2e9ddc557b1b90f76aa90070077344b1d11abf5b293ddae9c0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
