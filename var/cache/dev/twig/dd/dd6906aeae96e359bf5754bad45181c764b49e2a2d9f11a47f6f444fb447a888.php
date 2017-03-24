<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9553fa96834c0ab4dcb8de3e70f72131636b26386dd26bde3b020531765d74b9 extends Twig_Template
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
        $__internal_0e41d4c009e3bdbfca7da5715131f7dc4ae9241a6aab8e08b0746e8160701fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e41d4c009e3bdbfca7da5715131f7dc4ae9241a6aab8e08b0746e8160701fb0->enter($__internal_0e41d4c009e3bdbfca7da5715131f7dc4ae9241a6aab8e08b0746e8160701fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4fcfd318c483f83f4d5156115f23b5c58e39471148dc5d79dc12aa057202f431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcfd318c483f83f4d5156115f23b5c58e39471148dc5d79dc12aa057202f431->enter($__internal_4fcfd318c483f83f4d5156115f23b5c58e39471148dc5d79dc12aa057202f431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0e41d4c009e3bdbfca7da5715131f7dc4ae9241a6aab8e08b0746e8160701fb0->leave($__internal_0e41d4c009e3bdbfca7da5715131f7dc4ae9241a6aab8e08b0746e8160701fb0_prof);

        
        $__internal_4fcfd318c483f83f4d5156115f23b5c58e39471148dc5d79dc12aa057202f431->leave($__internal_4fcfd318c483f83f4d5156115f23b5c58e39471148dc5d79dc12aa057202f431_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
