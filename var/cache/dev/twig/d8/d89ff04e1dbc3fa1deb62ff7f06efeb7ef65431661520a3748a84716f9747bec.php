<?php

/* entity/index.html.twig */
class __TwigTemplate_41cd67254297733e858940836811d627a696c2594536cf7646f58486ef57b285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "entity/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b78911a1b0f5ab4f7b80b9003a7ef48209a2929312dd3682c1f091313d197f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78911a1b0f5ab4f7b80b9003a7ef48209a2929312dd3682c1f091313d197f97->enter($__internal_b78911a1b0f5ab4f7b80b9003a7ef48209a2929312dd3682c1f091313d197f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entity/index.html.twig"));

        $__internal_fd1726a3f413c855c4c58dfacb08fb019bb3895f89e54e8a94ebccd79028fdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1726a3f413c855c4c58dfacb08fb019bb3895f89e54e8a94ebccd79028fdba->enter($__internal_fd1726a3f413c855c4c58dfacb08fb019bb3895f89e54e8a94ebccd79028fdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entity/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b78911a1b0f5ab4f7b80b9003a7ef48209a2929312dd3682c1f091313d197f97->leave($__internal_b78911a1b0f5ab4f7b80b9003a7ef48209a2929312dd3682c1f091313d197f97_prof);

        
        $__internal_fd1726a3f413c855c4c58dfacb08fb019bb3895f89e54e8a94ebccd79028fdba->leave($__internal_fd1726a3f413c855c4c58dfacb08fb019bb3895f89e54e8a94ebccd79028fdba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b21ae091fcc761aa5ff635f14bb08190f8693cc960bf1a6d7de123f635cd43f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b21ae091fcc761aa5ff635f14bb08190f8693cc960bf1a6d7de123f635cd43f->enter($__internal_9b21ae091fcc761aa5ff635f14bb08190f8693cc960bf1a6d7de123f635cd43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccad389c119e817557326a5203c25c49405c8d82ee34abfcb8e6329853eb36cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccad389c119e817557326a5203c25c49405c8d82ee34abfcb8e6329853eb36cf->enter($__internal_ccad389c119e817557326a5203c25c49405c8d82ee34abfcb8e6329853eb36cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Entities list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["entity"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_new");
        echo "\">Create a new entity</a>
        </li>
    </ul>
";
        
        $__internal_ccad389c119e817557326a5203c25c49405c8d82ee34abfcb8e6329853eb36cf->leave($__internal_ccad389c119e817557326a5203c25c49405c8d82ee34abfcb8e6329853eb36cf_prof);

        
        $__internal_9b21ae091fcc761aa5ff635f14bb08190f8693cc960bf1a6d7de123f635cd43f->leave($__internal_9b21ae091fcc761aa5ff635f14bb08190f8693cc960bf1a6d7de123f635cd43f_prof);

    }

    public function getTemplateName()
    {
        return "entity/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 35,  100 => 29,  94 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Entities list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in articles %}
            <tr>
                <td><a href=\"{{ path('entity_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.name }}</td>
                <td>{{ entity.description }}</td>
                <td>{% if entity.createdAt %}{{ entity.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('entity_show', { 'id': entity.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('entity_edit', { 'id': entity.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('entity_new') }}\">Create a new entity</a>
        </li>
    </ul>
{% endblock %}
", "entity/index.html.twig", "/home/trashkaloff/www/proTest/app/Resources/views/entity/index.html.twig");
    }
}
