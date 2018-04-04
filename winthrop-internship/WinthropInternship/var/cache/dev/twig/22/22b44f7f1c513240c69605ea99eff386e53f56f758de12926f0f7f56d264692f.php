<?php

/* studentformone/edit.html.twig */
class __TwigTemplate_d5ece7b10d5528de9f549eab57b0f7cb00b2c1000f60bb740ba0af88e9f8e11f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "studentformone/edit.html.twig", 1);
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
        $__internal_0834e73b6ae704f617ac69760576e87fe3bce85fc2543c10a0dd9fb0f0e7c33d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0834e73b6ae704f617ac69760576e87fe3bce85fc2543c10a0dd9fb0f0e7c33d->enter($__internal_0834e73b6ae704f617ac69760576e87fe3bce85fc2543c10a0dd9fb0f0e7c33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/edit.html.twig"));

        $__internal_6e932aa4b71d64616dbcb321e2c9a4f2e00a4802022bf750ba233d7b8aaea399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e932aa4b71d64616dbcb321e2c9a4f2e00a4802022bf750ba233d7b8aaea399->enter($__internal_6e932aa4b71d64616dbcb321e2c9a4f2e00a4802022bf750ba233d7b8aaea399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0834e73b6ae704f617ac69760576e87fe3bce85fc2543c10a0dd9fb0f0e7c33d->leave($__internal_0834e73b6ae704f617ac69760576e87fe3bce85fc2543c10a0dd9fb0f0e7c33d_prof);

        
        $__internal_6e932aa4b71d64616dbcb321e2c9a4f2e00a4802022bf750ba233d7b8aaea399->leave($__internal_6e932aa4b71d64616dbcb321e2c9a4f2e00a4802022bf750ba233d7b8aaea399_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_117e057ff18c4f9f0ce76317e0e42769155d30ab03bd340818c064920b15d664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117e057ff18c4f9f0ce76317e0e42769155d30ab03bd340818c064920b15d664->enter($__internal_117e057ff18c4f9f0ce76317e0e42769155d30ab03bd340818c064920b15d664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44c32a6f372df2fd81480b284a72fa144b4ab58ac807abe88ae2cffa37e13917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c32a6f372df2fd81480b284a72fa144b4ab58ac807abe88ae2cffa37e13917->enter($__internal_44c32a6f372df2fd81480b284a72fa144b4ab58ac807abe88ae2cffa37e13917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studentformone edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_44c32a6f372df2fd81480b284a72fa144b4ab58ac807abe88ae2cffa37e13917->leave($__internal_44c32a6f372df2fd81480b284a72fa144b4ab58ac807abe88ae2cffa37e13917_prof);

        
        $__internal_117e057ff18c4f9f0ce76317e0e42769155d30ab03bd340818c064920b15d664->leave($__internal_117e057ff18c4f9f0ce76317e0e42769155d30ab03bd340818c064920b15d664_prof);

    }

    public function getTemplateName()
    {
        return "studentformone/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Studentformone edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('studentformone_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "studentformone/edit.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/views/studentformone/edit.html.twig");
    }
}
