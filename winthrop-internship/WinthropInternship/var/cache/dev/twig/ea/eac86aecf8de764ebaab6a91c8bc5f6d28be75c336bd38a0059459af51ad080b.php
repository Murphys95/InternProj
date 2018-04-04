<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_7ae854b56c6f75abcbcd82745561cefd7af161a420a8cfa0de33ba62b78890d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_6cb441b39e2356e3ad34e70d379310c387fdcc2db5362584810ca023e5317695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb441b39e2356e3ad34e70d379310c387fdcc2db5362584810ca023e5317695->enter($__internal_6cb441b39e2356e3ad34e70d379310c387fdcc2db5362584810ca023e5317695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_d2f174d182710ce3a8b8921797a339e659dd47ee16a71cd6d01d895f64ff70bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f174d182710ce3a8b8921797a339e659dd47ee16a71cd6d01d895f64ff70bd->enter($__internal_d2f174d182710ce3a8b8921797a339e659dd47ee16a71cd6d01d895f64ff70bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cb441b39e2356e3ad34e70d379310c387fdcc2db5362584810ca023e5317695->leave($__internal_6cb441b39e2356e3ad34e70d379310c387fdcc2db5362584810ca023e5317695_prof);

        
        $__internal_d2f174d182710ce3a8b8921797a339e659dd47ee16a71cd6d01d895f64ff70bd->leave($__internal_d2f174d182710ce3a8b8921797a339e659dd47ee16a71cd6d01d895f64ff70bd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3e754f90a1ba7da472a2c51cc382ea7b7b827aa8384f7390251b7ef2927369c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e754f90a1ba7da472a2c51cc382ea7b7b827aa8384f7390251b7ef2927369c->enter($__internal_c3e754f90a1ba7da472a2c51cc382ea7b7b827aa8384f7390251b7ef2927369c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_67127d94b1b1b381f35111d78899f03d1b1d388a7801cbdf65133ab39fca10d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67127d94b1b1b381f35111d78899f03d1b1d388a7801cbdf65133ab39fca10d2->enter($__internal_67127d94b1b1b381f35111d78899f03d1b1d388a7801cbdf65133ab39fca10d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_67127d94b1b1b381f35111d78899f03d1b1d388a7801cbdf65133ab39fca10d2->leave($__internal_67127d94b1b1b381f35111d78899f03d1b1d388a7801cbdf65133ab39fca10d2_prof);

        
        $__internal_c3e754f90a1ba7da472a2c51cc382ea7b7b827aa8384f7390251b7ef2927369c->leave($__internal_c3e754f90a1ba7da472a2c51cc382ea7b7b827aa8384f7390251b7ef2927369c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
