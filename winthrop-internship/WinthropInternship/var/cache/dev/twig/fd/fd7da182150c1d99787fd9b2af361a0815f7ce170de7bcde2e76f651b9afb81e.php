<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6b78197bad7a98b74146672501aab43406486cb35ca5cee7922dba408a0119f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dafa633a464e066fc2794e88fb207124f2cdf7f2eab116fb08653660bbfb0f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafa633a464e066fc2794e88fb207124f2cdf7f2eab116fb08653660bbfb0f03->enter($__internal_dafa633a464e066fc2794e88fb207124f2cdf7f2eab116fb08653660bbfb0f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_73fb52ed969fb8055379731e6c557a89c84171fc018f1569ed023cb20a74de2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fb52ed969fb8055379731e6c557a89c84171fc018f1569ed023cb20a74de2e->enter($__internal_73fb52ed969fb8055379731e6c557a89c84171fc018f1569ed023cb20a74de2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dafa633a464e066fc2794e88fb207124f2cdf7f2eab116fb08653660bbfb0f03->leave($__internal_dafa633a464e066fc2794e88fb207124f2cdf7f2eab116fb08653660bbfb0f03_prof);

        
        $__internal_73fb52ed969fb8055379731e6c557a89c84171fc018f1569ed023cb20a74de2e->leave($__internal_73fb52ed969fb8055379731e6c557a89c84171fc018f1569ed023cb20a74de2e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f532a9710a3ece2763d8880b63c4fc2c792b46f9dc7c0a8db1d10e33d61e559d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f532a9710a3ece2763d8880b63c4fc2c792b46f9dc7c0a8db1d10e33d61e559d->enter($__internal_f532a9710a3ece2763d8880b63c4fc2c792b46f9dc7c0a8db1d10e33d61e559d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_728db8f1d0fa7a47e149c3b431d150befbd25a797c081bf4943b77ecefee8aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728db8f1d0fa7a47e149c3b431d150befbd25a797c081bf4943b77ecefee8aca->enter($__internal_728db8f1d0fa7a47e149c3b431d150befbd25a797c081bf4943b77ecefee8aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"index-background-image\">
\t\t<div class=\"transparent\">

\t\t\t<div class=\"center-text\">
    \t\t\t<div class=\"login-page\">
                    <h1>Winthrop Internship Learning Experience</h1>
            
                    ";
        // line 12
        echo "                    ";
        // line 13
        echo "                    ";
        // line 14
        echo "                    ";
        // line 15
        echo "                    ";
        // line 16
        echo "                    ";
        // line 17
        echo "                    ";
        // line 18
        echo "                    ";
        // line 19
        echo "                    ";
        // line 20
        echo "                    ";
        // line 21
        echo "        
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "                            <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                                ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                    <div>
                        ";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "                    </div>
                    

                    ";
        // line 37
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_728db8f1d0fa7a47e149c3b431d150befbd25a797c081bf4943b77ecefee8aca->leave($__internal_728db8f1d0fa7a47e149c3b431d150befbd25a797c081bf4943b77ecefee8aca_prof);

        
        $__internal_f532a9710a3ece2763d8880b63c4fc2c792b46f9dc7c0a8db1d10e33d61e559d->leave($__internal_f532a9710a3ece2763d8880b63c4fc2c792b46f9dc7c0a8db1d10e33d61e559d_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9094e966ec8363f061f3c3276953d2f0e3099e50c65d46230d45cbb09c7bee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9094e966ec8363f061f3c3276953d2f0e3099e50c65d46230d45cbb09c7bee7->enter($__internal_c9094e966ec8363f061f3c3276953d2f0e3099e50c65d46230d45cbb09c7bee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_50d1ba89dbf8cd6d251955fc7a08c0b2d9ec2ef81443d84f3c490fd6a657367c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d1ba89dbf8cd6d251955fc7a08c0b2d9ec2ef81443d84f3c490fd6a657367c->enter($__internal_50d1ba89dbf8cd6d251955fc7a08c0b2d9ec2ef81443d84f3c490fd6a657367c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "                        ";
        
        $__internal_50d1ba89dbf8cd6d251955fc7a08c0b2d9ec2ef81443d84f3c490fd6a657367c->leave($__internal_50d1ba89dbf8cd6d251955fc7a08c0b2d9ec2ef81443d84f3c490fd6a657367c_prof);

        
        $__internal_c9094e966ec8363f061f3c3276953d2f0e3099e50c65d46230d45cbb09c7bee7->leave($__internal_c9094e966ec8363f061f3c3276953d2f0e3099e50c65d46230d45cbb09c7bee7_prof);

    }

    // line 44
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b22330e2d4afa888605fc8dd0d5c0fc496afb171552c146e18a6b384f298659e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22330e2d4afa888605fc8dd0d5c0fc496afb171552c146e18a6b384f298659e->enter($__internal_b22330e2d4afa888605fc8dd0d5c0fc496afb171552c146e18a6b384f298659e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_308c010726a293d1bd18581dccbe5e6ca3f99d13a2adc4aa30d85b6fb61a22e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308c010726a293d1bd18581dccbe5e6ca3f99d13a2adc4aa30d85b6fb61a22e8->enter($__internal_308c010726a293d1bd18581dccbe5e6ca3f99d13a2adc4aa30d85b6fb61a22e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 45
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/reset.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/styles.css\">
";
        
        $__internal_308c010726a293d1bd18581dccbe5e6ca3f99d13a2adc4aa30d85b6fb61a22e8->leave($__internal_308c010726a293d1bd18581dccbe5e6ca3f99d13a2adc4aa30d85b6fb61a22e8_prof);

        
        $__internal_b22330e2d4afa888605fc8dd0d5c0fc496afb171552c146e18a6b384f298659e->leave($__internal_b22330e2d4afa888605fc8dd0d5c0fc496afb171552c146e18a6b384f298659e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 45,  154 => 44,  144 => 32,  135 => 31,  121 => 37,  116 => 33,  114 => 31,  110 => 29,  104 => 28,  95 => 25,  90 => 24,  85 => 23,  81 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  51 => 4,  42 => 3,  11 => 1,);
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
    <div class=\"index-background-image\">
\t\t<div class=\"transparent\">

\t\t\t<div class=\"center-text\">
    \t\t\t<div class=\"login-page\">
                    <h1>Winthrop Internship Learning Experience</h1>
            
                    {#<div>#}
                    {#    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
                    {#        {{ 'Logged in as:'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
                    {#        <a href=\"{{ path('fos_user_security_logout') }}\">#}
                    {#            {{ 'Logout'|trans({}, 'FOSUserBundle') }}#}
                    {#        </a>#}
                    {#    {% else %}#}
                    {#        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}
                    {#    {% endif %}#}
                    {#</div>#}
        
                    {% for type, messages in app.session.flashBag.all %}
                        {% for message in messages %}
                            <div class=\"{{ type }}\">
                                {{ message|trans({}, 'FOSUserBundle') }}
                            </div>
                        {% endfor %}
                    {% endfor %}

                    <div>
                        {% block fos_user_content %}
                        {% endblock fos_user_content %}
                    </div>
                    

                    {#<a href=\"/resetting/request\"><h2 id=\"reset-button\">Reset Password</h2></a>#}
                </div>
            </div>
        </div>
    </div>
{% endblock %}


{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/reset.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/main.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/styles.css\">
{% endblock %}

{#<!DOCTYPE html>#}
{#<html>#}
{#<head>#}
{#    <meta charset=\"UTF-8\" />#}
{#    <title>{% block title %}Login{% endblock %} | Winthrop Internship Learning Experience</title>#}
{#    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/reset.css\">#}
{#    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/main.css\">#}
{#    <link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/styles.css\">#}
{#    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />#}
{#    <script src=\"//code.jquery.com/jquery-1.11.3.js\"></script>#}

{#</head>#}
{#<body>#}
{#    <div class=\"index-background-image\">#}
{#\t\t<div class=\"transparent\">#}

{#\t\t\t<div class=\"center-text\">#}
{#    \t\t\t<div class=\"login-page\">#}
{#                    <h1>Winthrop Internship Learning Experience</h1>#}
            
{#                    <div>#}
{#                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
{#                            {{ 'Logged in as:'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
{#                            <a href=\"{{ path('fos_user_security_logout') }}\">#}
{#                                {{ 'Logout'|trans({}, 'FOSUserBundle') }}#}
{#                            </a>#}
                        {#{% else %}#}
                        {#    <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}
{#                        {% endif %}#}
{#                    </div>#}
        
{#                    {% for type, messages in app.session.flashBag.all %}#}
{#                        {% for message in messages %}#}
{#                            <div class=\"{{ type }}\">#}
{#                                {{ message|trans({}, 'FOSUserBundle') }}#}
{#                            </div>#}
{#                        {% endfor %}#}
{#                    {% endfor %}#}

{#                    <div>#}
{#                {% block fos_user_content %}#}
{#                {% endblock fos_user_content %}#}
{#            </div>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#    </div>#}
{#</body>#}
{#</html>#}", "@FOSUser/layout.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
