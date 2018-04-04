<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_825e441c1edd7b1da46ac71a009f4d4f4445e1e7b3ce2a49fe14b205df8538f0 extends Twig_Template
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
        $__internal_1fa64bb00bb19470e9af1dc4524030fdfbea3de0f05094f290f4d071b4a07ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa64bb00bb19470e9af1dc4524030fdfbea3de0f05094f290f4d071b4a07ae3->enter($__internal_1fa64bb00bb19470e9af1dc4524030fdfbea3de0f05094f290f4d071b4a07ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_2a4776349459d05487904aff561ac2c2868e4ca08fe4662748cc76b6636a8937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4776349459d05487904aff561ac2c2868e4ca08fe4662748cc76b6636a8937->enter($__internal_2a4776349459d05487904aff561ac2c2868e4ca08fe4662748cc76b6636a8937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Winthrop Email\"/>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\"/>

    ";
        // line 13
        echo "    ";
        // line 14
        echo "
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Sign In\" />
</form>
<a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\"><h2 id=\"reset-button\">Reset Password</h2></a>
";
        
        $__internal_1fa64bb00bb19470e9af1dc4524030fdfbea3de0f05094f290f4d071b4a07ae3->leave($__internal_1fa64bb00bb19470e9af1dc4524030fdfbea3de0f05094f290f4d071b4a07ae3_prof);

        
        $__internal_2a4776349459d05487904aff561ac2c2868e4ca08fe4662748cc76b6636a8937->leave($__internal_2a4776349459d05487904aff561ac2c2868e4ca08fe4662748cc76b6636a8937_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  55 => 14,  53 => 13,  47 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    <input type=\"email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"Winthrop Email\"/>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\"/>

    {#<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />#}
    {#<label for=\"remember_me\">{{ 'Remember Me'|trans }}</label>#}

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Sign In\" />
</form>
<a href=\"{{path('fos_user_resetting_request')}}\"><h2 id=\"reset-button\">Reset Password</h2></a>
", "@FOSUser/Security/login_content.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
