<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5b92c25c5c9b2f32d8bbc27cab807545e111bb03e7b13183f129d14b34485e3a extends Twig_Template
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
        $__internal_37a69581d1f9862c08c29667a963432ed586409dd914e5f44fe03366a05368db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a69581d1f9862c08c29667a963432ed586409dd914e5f44fe03366a05368db->enter($__internal_37a69581d1f9862c08c29667a963432ed586409dd914e5f44fe03366a05368db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_58902d0325a977aceffdfbc017a5742af3210477866ed17133f78c5b55de5ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58902d0325a977aceffdfbc017a5742af3210477866ed17133f78c5b55de5ce5->enter($__internal_58902d0325a977aceffdfbc017a5742af3210477866ed17133f78c5b55de5ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_37a69581d1f9862c08c29667a963432ed586409dd914e5f44fe03366a05368db->leave($__internal_37a69581d1f9862c08c29667a963432ed586409dd914e5f44fe03366a05368db_prof);

        
        $__internal_58902d0325a977aceffdfbc017a5742af3210477866ed17133f78c5b55de5ce5->leave($__internal_58902d0325a977aceffdfbc017a5742af3210477866ed17133f78c5b55de5ce5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
