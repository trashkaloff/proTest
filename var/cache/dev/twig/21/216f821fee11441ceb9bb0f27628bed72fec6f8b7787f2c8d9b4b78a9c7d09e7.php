<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bbc52713541d035994e8865cb299655a6527c2d9a87235596b02f0d9ec8ee303 extends Twig_Template
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
        $__internal_9229eda18b0758e846fbb72313543b90e496512f5d3009852a73992bea304b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9229eda18b0758e846fbb72313543b90e496512f5d3009852a73992bea304b05->enter($__internal_9229eda18b0758e846fbb72313543b90e496512f5d3009852a73992bea304b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_32cabbbef1bd69e0f95aef9224d80578964f58ab9a3ed50be3e659ff2972aaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cabbbef1bd69e0f95aef9224d80578964f58ab9a3ed50be3e659ff2972aaf4->enter($__internal_32cabbbef1bd69e0f95aef9224d80578964f58ab9a3ed50be3e659ff2972aaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9229eda18b0758e846fbb72313543b90e496512f5d3009852a73992bea304b05->leave($__internal_9229eda18b0758e846fbb72313543b90e496512f5d3009852a73992bea304b05_prof);

        
        $__internal_32cabbbef1bd69e0f95aef9224d80578964f58ab9a3ed50be3e659ff2972aaf4->leave($__internal_32cabbbef1bd69e0f95aef9224d80578964f58ab9a3ed50be3e659ff2972aaf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
