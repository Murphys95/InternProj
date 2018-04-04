<?php

/* base.html.twig */
class __TwigTemplate_58fcb55423d3274a662181a229734752e725144dd63773cc99fa1c7691dad048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4a1393aefffa46eea0e2fc39571b4e016a3fee2de7034f77ecc03a2e49cb4e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a1393aefffa46eea0e2fc39571b4e016a3fee2de7034f77ecc03a2e49cb4e3->enter($__internal_d4a1393aefffa46eea0e2fc39571b4e016a3fee2de7034f77ecc03a2e49cb4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1d1163fce94ef3f12155f0f2aedb29eb316c3c3c36f4abdaa03c9d36d4e210bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1163fce94ef3f12155f0f2aedb29eb316c3c3c36f4abdaa03c9d36d4e210bc->enter($__internal_1d1163fce94ef3f12155f0f2aedb29eb316c3c3c36f4abdaa03c9d36d4e210bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Winthrop Internship Learning Engagement</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/reset.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        ";
        // line 9
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"../web/assets/js/materialize.min.js\"></script>
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>";
        
        $__internal_d4a1393aefffa46eea0e2fc39571b4e016a3fee2de7034f77ecc03a2e49cb4e3->leave($__internal_d4a1393aefffa46eea0e2fc39571b4e016a3fee2de7034f77ecc03a2e49cb4e3_prof);

        
        $__internal_1d1163fce94ef3f12155f0f2aedb29eb316c3c3c36f4abdaa03c9d36d4e210bc->leave($__internal_1d1163fce94ef3f12155f0f2aedb29eb316c3c3c36f4abdaa03c9d36d4e210bc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0328287479a45ac01669ebc98129b364f160b312d976a90414ce824351f6ed7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0328287479a45ac01669ebc98129b364f160b312d976a90414ce824351f6ed7a->enter($__internal_0328287479a45ac01669ebc98129b364f160b312d976a90414ce824351f6ed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27a9daec61d4aa21d222a73d9b554cd5c72b80ec4f894a7b5ca763fef1eccaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a9daec61d4aa21d222a73d9b554cd5c72b80ec4f894a7b5ca763fef1eccaee->enter($__internal_27a9daec61d4aa21d222a73d9b554cd5c72b80ec4f894a7b5ca763fef1eccaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_27a9daec61d4aa21d222a73d9b554cd5c72b80ec4f894a7b5ca763fef1eccaee->leave($__internal_27a9daec61d4aa21d222a73d9b554cd5c72b80ec4f894a7b5ca763fef1eccaee_prof);

        
        $__internal_0328287479a45ac01669ebc98129b364f160b312d976a90414ce824351f6ed7a->leave($__internal_0328287479a45ac01669ebc98129b364f160b312d976a90414ce824351f6ed7a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54ea28292ebfacd2f6dfb34e8f090b84bc5148854f2a16723d4d12f69cb04e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ea28292ebfacd2f6dfb34e8f090b84bc5148854f2a16723d4d12f69cb04e29->enter($__internal_54ea28292ebfacd2f6dfb34e8f090b84bc5148854f2a16723d4d12f69cb04e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fe917a7837785853642c93caba759e3b5415a6e2554235db690439d115f2afa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe917a7837785853642c93caba759e3b5415a6e2554235db690439d115f2afa3->enter($__internal_fe917a7837785853642c93caba759e3b5415a6e2554235db690439d115f2afa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fe917a7837785853642c93caba759e3b5415a6e2554235db690439d115f2afa3->leave($__internal_fe917a7837785853642c93caba759e3b5415a6e2554235db690439d115f2afa3_prof);

        
        $__internal_54ea28292ebfacd2f6dfb34e8f090b84bc5148854f2a16723d4d12f69cb04e29->leave($__internal_54ea28292ebfacd2f6dfb34e8f090b84bc5148854f2a16723d4d12f69cb04e29_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_381c18d2c27466d0423875dd48827dbfb3eb0142b7a8c43be1428e10c2b0f12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381c18d2c27466d0423875dd48827dbfb3eb0142b7a8c43be1428e10c2b0f12d->enter($__internal_381c18d2c27466d0423875dd48827dbfb3eb0142b7a8c43be1428e10c2b0f12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e9ad720c18b3e7b4377ffacdebe549436b05558650ec419c6df5ba145827dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9ad720c18b3e7b4377ffacdebe549436b05558650ec419c6df5ba145827dfd->enter($__internal_3e9ad720c18b3e7b4377ffacdebe549436b05558650ec419c6df5ba145827dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3e9ad720c18b3e7b4377ffacdebe549436b05558650ec419c6df5ba145827dfd->leave($__internal_3e9ad720c18b3e7b4377ffacdebe549436b05558650ec419c6df5ba145827dfd_prof);

        
        $__internal_381c18d2c27466d0423875dd48827dbfb3eb0142b7a8c43be1428e10c2b0f12d->leave($__internal_381c18d2c27466d0423875dd48827dbfb3eb0142b7a8c43be1428e10c2b0f12d_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c0d4aa8a11a575af2ad592a3ef881855f6cee849ff5291f81cb7227919124b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0d4aa8a11a575af2ad592a3ef881855f6cee849ff5291f81cb7227919124b4->enter($__internal_1c0d4aa8a11a575af2ad592a3ef881855f6cee849ff5291f81cb7227919124b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_802498a0e011cc7ecc4696b121042e0288447650ae164153cea99b98c7e74e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802498a0e011cc7ecc4696b121042e0288447650ae164153cea99b98c7e74e1b->enter($__internal_802498a0e011cc7ecc4696b121042e0288447650ae164153cea99b98c7e74e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_802498a0e011cc7ecc4696b121042e0288447650ae164153cea99b98c7e74e1b->leave($__internal_802498a0e011cc7ecc4696b121042e0288447650ae164153cea99b98c7e74e1b_prof);

        
        $__internal_1c0d4aa8a11a575af2ad592a3ef881855f6cee849ff5291f81cb7227919124b4->leave($__internal_1c0d4aa8a11a575af2ad592a3ef881855f6cee849ff5291f81cb7227919124b4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 17,  105 => 16,  88 => 10,  71 => 5,  60 => 18,  57 => 17,  55 => 16,  46 => 11,  44 => 10,  41 => 9,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %} | Winthrop Internship Learning Engagement</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/reset.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        {#<link type=\"text/css\" rel=\"stylesheet\" href=\"../assets/css/materialize.min.css\"  media=\"screen,projection\"/>#}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"../web/assets/js/materialize.min.js\"></script>
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/views/base.html.twig");
    }
}
