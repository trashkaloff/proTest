<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3bad7450074ba7743855011c96717adf4a3b177996b5c74cc2aa439f6c0a2c28 extends Twig_Template
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
        $__internal_c3d2733fedccf4e4f687e559b41dbd09e5ba6152f1cb4df367cda1e3e9c3603a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d2733fedccf4e4f687e559b41dbd09e5ba6152f1cb4df367cda1e3e9c3603a->enter($__internal_c3d2733fedccf4e4f687e559b41dbd09e5ba6152f1cb4df367cda1e3e9c3603a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_c3dbc722dc69da587bccc574ecd732e3a0d87d3efcf480328db22f60b6c6b848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dbc722dc69da587bccc574ecd732e3a0d87d3efcf480328db22f60b6c6b848->enter($__internal_c3dbc722dc69da587bccc574ecd732e3a0d87d3efcf480328db22f60b6c6b848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c3d2733fedccf4e4f687e559b41dbd09e5ba6152f1cb4df367cda1e3e9c3603a->leave($__internal_c3d2733fedccf4e4f687e559b41dbd09e5ba6152f1cb4df367cda1e3e9c3603a_prof);

        
        $__internal_c3dbc722dc69da587bccc574ecd732e3a0d87d3efcf480328db22f60b6c6b848->leave($__internal_c3dbc722dc69da587bccc574ecd732e3a0d87d3efcf480328db22f60b6c6b848_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
