<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c68e8f3556d491c6a7920c412510dd2829b44d6b0957808f7a1412d0e2a0a883 extends Twig_Template
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
        $__internal_183251df759ff665f3f6e1d357fbd8a4c599dc9cb665b24d57fa905b71ec99fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183251df759ff665f3f6e1d357fbd8a4c599dc9cb665b24d57fa905b71ec99fa->enter($__internal_183251df759ff665f3f6e1d357fbd8a4c599dc9cb665b24d57fa905b71ec99fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_96e3af83e5e2841591a8207d9206882c087896470d97dadddc06559830a805ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e3af83e5e2841591a8207d9206882c087896470d97dadddc06559830a805ed->enter($__internal_96e3af83e5e2841591a8207d9206882c087896470d97dadddc06559830a805ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_183251df759ff665f3f6e1d357fbd8a4c599dc9cb665b24d57fa905b71ec99fa->leave($__internal_183251df759ff665f3f6e1d357fbd8a4c599dc9cb665b24d57fa905b71ec99fa_prof);

        
        $__internal_96e3af83e5e2841591a8207d9206882c087896470d97dadddc06559830a805ed->leave($__internal_96e3af83e5e2841591a8207d9206882c087896470d97dadddc06559830a805ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/trashkaloff/www/proTest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
