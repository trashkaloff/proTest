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
        $__internal_98af188b2a8076c4eb986cd8589fb16997e78674f99fc22c4765d5193b78faef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98af188b2a8076c4eb986cd8589fb16997e78674f99fc22c4765d5193b78faef->enter($__internal_98af188b2a8076c4eb986cd8589fb16997e78674f99fc22c4765d5193b78faef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entity/index.html.twig"));

        $__internal_c069b7f2b2a5cea35895a4a51945edd6350f940d8ec0dc869f245a9c68bdab86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c069b7f2b2a5cea35895a4a51945edd6350f940d8ec0dc869f245a9c68bdab86->enter($__internal_c069b7f2b2a5cea35895a4a51945edd6350f940d8ec0dc869f245a9c68bdab86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entity/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98af188b2a8076c4eb986cd8589fb16997e78674f99fc22c4765d5193b78faef->leave($__internal_98af188b2a8076c4eb986cd8589fb16997e78674f99fc22c4765d5193b78faef_prof);

        
        $__internal_c069b7f2b2a5cea35895a4a51945edd6350f940d8ec0dc869f245a9c68bdab86->leave($__internal_c069b7f2b2a5cea35895a4a51945edd6350f940d8ec0dc869f245a9c68bdab86_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d38366a1da4aa3c4dc917351353401eaf0f3bb5d6600c641c86a4baf44ddb32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38366a1da4aa3c4dc917351353401eaf0f3bb5d6600c641c86a4baf44ddb32d->enter($__internal_d38366a1da4aa3c4dc917351353401eaf0f3bb5d6600c641c86a4baf44ddb32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a60259c5c72a0c3724e75ae37ddbb99255a980061f57883d3696e2e37823055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a60259c5c72a0c3724e75ae37ddbb99255a980061f57883d3696e2e37823055->enter($__internal_9a60259c5c72a0c3724e75ae37ddbb99255a980061f57883d3696e2e37823055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">delete</a>
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
        
        $__internal_9a60259c5c72a0c3724e75ae37ddbb99255a980061f57883d3696e2e37823055->leave($__internal_9a60259c5c72a0c3724e75ae37ddbb99255a980061f57883d3696e2e37823055_prof);

        
        $__internal_d38366a1da4aa3c4dc917351353401eaf0f3bb5d6600c641c86a4baf44ddb32d->leave($__internal_d38366a1da4aa3c4dc917351353401eaf0f3bb5d6600c641c86a4baf44ddb32d_prof);

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
                            <a href=\"{{ path('entity_delete', { 'id': entity.id }) }}\">delete</a>
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
