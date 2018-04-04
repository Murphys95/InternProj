<?php

/* studentformone/index.html.twig */
class __TwigTemplate_11401389a96b791bc285d66c43b53a1b08d6393f0bbab059d026ced827114da6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "studentformone/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "innerbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c20e7fd1f5718a81c32aa71aca6e2c5b469be086654ceef345af151381b5053c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20e7fd1f5718a81c32aa71aca6e2c5b469be086654ceef345af151381b5053c->enter($__internal_c20e7fd1f5718a81c32aa71aca6e2c5b469be086654ceef345af151381b5053c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/index.html.twig"));

        $__internal_c011139ec009fbf46b73da5aa615870482b959c06c97928509faceb0e9f2e4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c011139ec009fbf46b73da5aa615870482b959c06c97928509faceb0e9f2e4c3->enter($__internal_c011139ec009fbf46b73da5aa615870482b959c06c97928509faceb0e9f2e4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c20e7fd1f5718a81c32aa71aca6e2c5b469be086654ceef345af151381b5053c->leave($__internal_c20e7fd1f5718a81c32aa71aca6e2c5b469be086654ceef345af151381b5053c_prof);

        
        $__internal_c011139ec009fbf46b73da5aa615870482b959c06c97928509faceb0e9f2e4c3->leave($__internal_c011139ec009fbf46b73da5aa615870482b959c06c97928509faceb0e9f2e4c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4189d5db3b3c909dec6a482750623f95af07f8bde1ae7b56b97c9e7a8633c942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4189d5db3b3c909dec6a482750623f95af07f8bde1ae7b56b97c9e7a8633c942->enter($__internal_4189d5db3b3c909dec6a482750623f95af07f8bde1ae7b56b97c9e7a8633c942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_efaafa01dacd2c1e7e66f6c865ba47a94244686316754e33ab84cff164e86807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaafa01dacd2c1e7e66f6c865ba47a94244686316754e33ab84cff164e86807->enter($__internal_efaafa01dacd2c1e7e66f6c865ba47a94244686316754e33ab84cff164e86807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "'s Dashboard";
        
        $__internal_efaafa01dacd2c1e7e66f6c865ba47a94244686316754e33ab84cff164e86807->leave($__internal_efaafa01dacd2c1e7e66f6c865ba47a94244686316754e33ab84cff164e86807_prof);

        
        $__internal_4189d5db3b3c909dec6a482750623f95af07f8bde1ae7b56b97c9e7a8633c942->leave($__internal_4189d5db3b3c909dec6a482750623f95af07f8bde1ae7b56b97c9e7a8633c942_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_22ec557c0f0854ff15d8dfab54595903a31998963695f5e43d3350c1e5a9761b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ec557c0f0854ff15d8dfab54595903a31998963695f5e43d3350c1e5a9761b->enter($__internal_22ec557c0f0854ff15d8dfab54595903a31998963695f5e43d3350c1e5a9761b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3232acac7974055bb46af9fd0f750ab523c36d8cc2d57de0c0fd92a95e2e150a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3232acac7974055bb46af9fd0f750ab523c36d8cc2d57de0c0fd92a95e2e150a->enter($__internal_3232acac7974055bb46af9fd0f750ab523c36d8cc2d57de0c0fd92a95e2e150a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "            ";
        // line 9
        echo "
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <br><br>
            <h1 class=\"header center\">Welcome, ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "!</h1>
            <div class=\"row center\">
                <h5 class=\"header col s12 light\">You don't have any active Internship Learning Agreements</h5>
            </div>
            <div class=\"row center\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_new");
        echo "\" id=\"download-button\" class=\"btn-large waves-effect waves-light landing-btn-color\">Begin New Learning Agreement</a>
            </div>
            <br><br>

        </div>
    </div>
    ";
        // line 25
        echo "
    ";
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        // line 30
        echo "    ";
        // line 31
        echo "    ";
        // line 32
        echo "    ";
        // line 33
        echo "    ";
        // line 34
        echo "    ";
        // line 35
        echo "    ";
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        // line 45
        echo "    ";
        // line 46
        echo "    ";
        // line 47
        echo "    ";
        // line 48
        echo "    ";
        // line 49
        echo "    ";
        // line 50
        echo "    ";
        // line 51
        echo "    ";
        // line 52
        echo "    ";
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        // line 56
        echo "    ";
        // line 57
        echo "    ";
        // line 58
        echo "    ";
        // line 59
        echo "
    ";
        // line 61
        echo "    ";
        // line 62
        echo "    ";
        // line 63
        echo "    ";
        // line 64
        echo "    ";
        
        $__internal_3232acac7974055bb46af9fd0f750ab523c36d8cc2d57de0c0fd92a95e2e150a->leave($__internal_3232acac7974055bb46af9fd0f750ab523c36d8cc2d57de0c0fd92a95e2e150a_prof);

        
        $__internal_22ec557c0f0854ff15d8dfab54595903a31998963695f5e43d3350c1e5a9761b->leave($__internal_22ec557c0f0854ff15d8dfab54595903a31998963695f5e43d3350c1e5a9761b_prof);

    }

    public function getTemplateName()
    {
        return "studentformone/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 64,  171 => 63,  169 => 62,  167 => 61,  164 => 59,  162 => 58,  160 => 57,  158 => 56,  156 => 55,  154 => 54,  152 => 53,  150 => 52,  148 => 51,  146 => 50,  144 => 49,  142 => 48,  140 => 47,  138 => 46,  136 => 45,  134 => 44,  132 => 43,  130 => 42,  128 => 41,  126 => 40,  124 => 39,  122 => 38,  120 => 37,  118 => 36,  116 => 35,  114 => 34,  112 => 33,  110 => 32,  108 => 31,  106 => 30,  104 => 29,  102 => 28,  100 => 27,  97 => 25,  88 => 18,  80 => 13,  74 => 9,  72 => 8,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'innerbase.html.twig' %}

{% block title %}{{ app.user.username}}'s Dashboard{% endblock %}

{% block body %}

    {#    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
            {#{{ 'Logged in as:'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}

    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <br><br>
            <h1 class=\"header center\">Welcome, {{ app.user.username}}!</h1>
            <div class=\"row center\">
                <h5 class=\"header col s12 light\">You don't have any active Internship Learning Agreements</h5>
            </div>
            <div class=\"row center\">
                <a href=\"{{ path('studentformone_new') }}\" id=\"download-button\" class=\"btn-large waves-effect waves-light landing-btn-color\">Begin New Learning Agreement</a>
            </div>
            <br><br>

        </div>
    </div>
    {#<h1>Studentformones list</h1>#}

    {#<table>#}
    {#    <thead>#}
    {#        <tr>#}
    {#            <th>Firstname</th>#}
    {#            <th>Lastname</th>#}
    {#            <th>Username</th>#}
    {#            <th>Cwid</th>#}
    {#            <th>Actions</th>#}
    {#        </tr>#}
    {#    </thead>#}
    {#    <tbody>#}
    {#    {% for studentFormOne in studentFormOnes %}#}
    {#        <tr>#}
    {#            <a href=\"{{ path('studentformone_show', { 'id': studentFormOne.id }) }}\">#}
    {#            <td>{{ studentFormOne.firstName }}</td>#}
    {#            <td>{{ studentFormOne.lastName }}</td>#}
    {#            <td>{{ studentFormOne.userName }}</td>#}
    {#            <td>{{ studentFormOne.cWID }}</td>#}
    {#            </a>#}
    {#            <td>#}
    {#                <ul>#}
    {#                    <li>#}
    {#                        <a href=\"{{ path('studentformone_show', { 'id': studentFormOne.id }) }}\">show</a>#}
    {#                    </li>#}
    {#                    <li>#}
    {#                        <a href=\"{{ path('studentformone_edit', { 'id': studentFormOne.id }) }}\">edit</a>#}
    {#                    </li>#}
    {#                </ul>#}
    {#            </td>#}
    {#        </tr>#}
    {#    {% endfor %}#}
    {#    </tbody>#}
    {#</table>#}

    {#<ul>#}
    {#    <li>#}
    {#        <a href=\"{{ path('studentformone_new') }}\">Create a new studentFormOne</a>#}
    {#    </li>#}
    {#</ul>#}
{% endblock %}
", "studentformone/index.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/views/studentformone/index.html.twig");
    }
}
