<?php

/* default/index.html.twig */
class __TwigTemplate_1863b1875ffdc5a39cf8936e17d0e88437ddf135d7bd88f1469018adc08634ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e6d0ad46a93b493602c004af71768144a3a15efa037edd622b27b20554a7b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6d0ad46a93b493602c004af71768144a3a15efa037edd622b27b20554a7b62->enter($__internal_7e6d0ad46a93b493602c004af71768144a3a15efa037edd622b27b20554a7b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_531a62093bead832414c5894fdaf3a98c575b9eb2410269aba55ed90374b3c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531a62093bead832414c5894fdaf3a98c575b9eb2410269aba55ed90374b3c5b->enter($__internal_531a62093bead832414c5894fdaf3a98c575b9eb2410269aba55ed90374b3c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e6d0ad46a93b493602c004af71768144a3a15efa037edd622b27b20554a7b62->leave($__internal_7e6d0ad46a93b493602c004af71768144a3a15efa037edd622b27b20554a7b62_prof);

        
        $__internal_531a62093bead832414c5894fdaf3a98c575b9eb2410269aba55ed90374b3c5b->leave($__internal_531a62093bead832414c5894fdaf3a98c575b9eb2410269aba55ed90374b3c5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_271ed310aecd7f301e6d792a313136a5c28c048f684b8e96fa246c8944e4afef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271ed310aecd7f301e6d792a313136a5c28c048f684b8e96fa246c8944e4afef->enter($__internal_271ed310aecd7f301e6d792a313136a5c28c048f684b8e96fa246c8944e4afef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_326f6d9dca92111031239de8162093bb6da9fbf422e3f75041c72f7b5e3aac83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326f6d9dca92111031239de8162093bb6da9fbf422e3f75041c72f7b5e3aac83->enter($__internal_326f6d9dca92111031239de8162093bb6da9fbf422e3f75041c72f7b5e3aac83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_326f6d9dca92111031239de8162093bb6da9fbf422e3f75041c72f7b5e3aac83->leave($__internal_326f6d9dca92111031239de8162093bb6da9fbf422e3f75041c72f7b5e3aac83_prof);

        
        $__internal_271ed310aecd7f301e6d792a313136a5c28c048f684b8e96fa246c8944e4afef->leave($__internal_271ed310aecd7f301e6d792a313136a5c28c048f684b8e96fa246c8944e4afef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b11cfbac5a76bff0ec1bc12a5eaf8d11a60f5663113a277f4ee16475f4e1777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b11cfbac5a76bff0ec1bc12a5eaf8d11a60f5663113a277f4ee16475f4e1777->enter($__internal_8b11cfbac5a76bff0ec1bc12a5eaf8d11a60f5663113a277f4ee16475f4e1777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce86590a76e0458ec66ffc51a3636292a50be6934b212e53d76fdfc31984a211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce86590a76e0458ec66ffc51a3636292a50be6934b212e53d76fdfc31984a211->enter($__internal_ce86590a76e0458ec66ffc51a3636292a50be6934b212e53d76fdfc31984a211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div class=\"index-background-image\">
\t\t<div class=\"transparent\">
    \t\t<div class=\"center-text\">
           \t\t<h1>Winthrop Internship Learning Experience Portal</h1>
           \t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"><h2>Login</h2></a>
           \t</div>
        </div>
\t</div>
";
        
        $__internal_ce86590a76e0458ec66ffc51a3636292a50be6934b212e53d76fdfc31984a211->leave($__internal_ce86590a76e0458ec66ffc51a3636292a50be6934b212e53d76fdfc31984a211_prof);

        
        $__internal_8b11cfbac5a76bff0ec1bc12a5eaf8d11a60f5663113a277f4ee16475f4e1777->leave($__internal_8b11cfbac5a76bff0ec1bc12a5eaf8d11a60f5663113a277f4ee16475f4e1777_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24c6b2d91cd859efa247beff4a7414e26bf30a170803bfc532b0101b8f1252ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c6b2d91cd859efa247beff4a7414e26bf30a170803bfc532b0101b8f1252ac->enter($__internal_24c6b2d91cd859efa247beff4a7414e26bf30a170803bfc532b0101b8f1252ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_60ae3e4a81a26d0bb45e41f89b06c0bc6a79f901b5dbe836824e4fccf16ce61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ae3e4a81a26d0bb45e41f89b06c0bc6a79f901b5dbe836824e4fccf16ce61a->enter($__internal_60ae3e4a81a26d0bb45e41f89b06c0bc6a79f901b5dbe836824e4fccf16ce61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/styles.css\">
";
        
        $__internal_60ae3e4a81a26d0bb45e41f89b06c0bc6a79f901b5dbe836824e4fccf16ce61a->leave($__internal_60ae3e4a81a26d0bb45e41f89b06c0bc6a79f901b5dbe836824e4fccf16ce61a_prof);

        
        $__internal_24c6b2d91cd859efa247beff4a7414e26bf30a170803bfc532b0101b8f1252ac->leave($__internal_24c6b2d91cd859efa247beff4a7414e26bf30a170803bfc532b0101b8f1252ac_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  90 => 16,  75 => 10,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Home{% endblock %}

{% block body %}
\t<div class=\"index-background-image\">
\t\t<div class=\"transparent\">
    \t\t<div class=\"center-text\">
           \t\t<h1>Winthrop Internship Learning Experience Portal</h1>
           \t\t<a href=\"{{path('fos_user_security_login')}}\"><h2>Login</h2></a>
           \t</div>
        </div>
\t</div>
{% endblock %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/styles.css\">
{% endblock %}", "default/index.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/views/default/index.html.twig");
    }
}
