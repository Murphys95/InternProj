<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8187eb901f293c0033de3db03cb916586251f6cb36471a3c99da5b08e4a2cf74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_007e9ef6780b170a13689d341f54c76c83679b53f4a2ff68f96ce94a9320cd1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007e9ef6780b170a13689d341f54c76c83679b53f4a2ff68f96ce94a9320cd1e->enter($__internal_007e9ef6780b170a13689d341f54c76c83679b53f4a2ff68f96ce94a9320cd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_2e0873829e549cee5d7a9adb93ff3f34e84addd2327fe7d217e8867f0a40f503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0873829e549cee5d7a9adb93ff3f34e84addd2327fe7d217e8867f0a40f503->enter($__internal_2e0873829e549cee5d7a9adb93ff3f34e84addd2327fe7d217e8867f0a40f503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_007e9ef6780b170a13689d341f54c76c83679b53f4a2ff68f96ce94a9320cd1e->leave($__internal_007e9ef6780b170a13689d341f54c76c83679b53f4a2ff68f96ce94a9320cd1e_prof);

        
        $__internal_2e0873829e549cee5d7a9adb93ff3f34e84addd2327fe7d217e8867f0a40f503->leave($__internal_2e0873829e549cee5d7a9adb93ff3f34e84addd2327fe7d217e8867f0a40f503_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efc639d909872e63113b7710142774c814028a3d699a35c4eaf1b212ade2ff4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc639d909872e63113b7710142774c814028a3d699a35c4eaf1b212ade2ff4f->enter($__internal_efc639d909872e63113b7710142774c814028a3d699a35c4eaf1b212ade2ff4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6c56d70581589a521c90e32c013c5cc286ed3619588839b77c4b177121d64e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c56d70581589a521c90e32c013c5cc286ed3619588839b77c4b177121d64e4e->enter($__internal_6c56d70581589a521c90e32c013c5cc286ed3619588839b77c4b177121d64e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo twig_include($this->env, $context, "@FOSUser/Registration/register_content.html.twig");
        echo "
";
        
        $__internal_6c56d70581589a521c90e32c013c5cc286ed3619588839b77c4b177121d64e4e->leave($__internal_6c56d70581589a521c90e32c013c5cc286ed3619588839b77c4b177121d64e4e_prof);

        
        $__internal_efc639d909872e63113b7710142774c814028a3d699a35c4eaf1b212ade2ff4f->leave($__internal_efc639d909872e63113b7710142774c814028a3d699a35c4eaf1b212ade2ff4f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{{ include('@FOSUser/Registration/register_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
