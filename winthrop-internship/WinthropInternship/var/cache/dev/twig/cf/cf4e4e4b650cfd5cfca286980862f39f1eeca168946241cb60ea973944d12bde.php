<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_f9e91d66ca095c6559422c91b96093056f6d51af25416850ec125b3925167111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f2ad5d034f2849432981115b7bbd8487dfc92610a06e1ad2b8849396ea72bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f2ad5d034f2849432981115b7bbd8487dfc92610a06e1ad2b8849396ea72bb1->enter($__internal_8f2ad5d034f2849432981115b7bbd8487dfc92610a06e1ad2b8849396ea72bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_cf211409f28d8208f707deeb997328d323fde2e07658e2fa9f4c6d27a01e3c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf211409f28d8208f707deeb997328d323fde2e07658e2fa9f4c6d27a01e3c94->enter($__internal_cf211409f28d8208f707deeb997328d323fde2e07658e2fa9f4c6d27a01e3c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8f2ad5d034f2849432981115b7bbd8487dfc92610a06e1ad2b8849396ea72bb1->leave($__internal_8f2ad5d034f2849432981115b7bbd8487dfc92610a06e1ad2b8849396ea72bb1_prof);

        
        $__internal_cf211409f28d8208f707deeb997328d323fde2e07658e2fa9f4c6d27a01e3c94->leave($__internal_cf211409f28d8208f707deeb997328d323fde2e07658e2fa9f4c6d27a01e3c94_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e164535afc81cdbab50232262542633afa39bd18e6c6ad7e235b43133cae9587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e164535afc81cdbab50232262542633afa39bd18e6c6ad7e235b43133cae9587->enter($__internal_e164535afc81cdbab50232262542633afa39bd18e6c6ad7e235b43133cae9587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bd6b3a452e84a69fb30b4fce486ea31cf479d38d83daebcba5ced1e001797d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6b3a452e84a69fb30b4fce486ea31cf479d38d83daebcba5ced1e001797d39->enter($__internal_bd6b3a452e84a69fb30b4fce486ea31cf479d38d83daebcba5ced1e001797d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bd6b3a452e84a69fb30b4fce486ea31cf479d38d83daebcba5ced1e001797d39->leave($__internal_bd6b3a452e84a69fb30b4fce486ea31cf479d38d83daebcba5ced1e001797d39_prof);

        
        $__internal_e164535afc81cdbab50232262542633afa39bd18e6c6ad7e235b43133cae9587->leave($__internal_e164535afc81cdbab50232262542633afa39bd18e6c6ad7e235b43133cae9587_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ab84db1ca93e678dda9d0507d8b4200d305d3b587b1ff0f59ff908b55122f488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab84db1ca93e678dda9d0507d8b4200d305d3b587b1ff0f59ff908b55122f488->enter($__internal_ab84db1ca93e678dda9d0507d8b4200d305d3b587b1ff0f59ff908b55122f488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4668c00704c411882f673491c052c9642542deb87db6f8ef7b12d4740ecf5961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4668c00704c411882f673491c052c9642542deb87db6f8ef7b12d4740ecf5961->enter($__internal_4668c00704c411882f673491c052c9642542deb87db6f8ef7b12d4740ecf5961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4668c00704c411882f673491c052c9642542deb87db6f8ef7b12d4740ecf5961->leave($__internal_4668c00704c411882f673491c052c9642542deb87db6f8ef7b12d4740ecf5961_prof);

        
        $__internal_ab84db1ca93e678dda9d0507d8b4200d305d3b587b1ff0f59ff908b55122f488->leave($__internal_ab84db1ca93e678dda9d0507d8b4200d305d3b587b1ff0f59ff908b55122f488_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_30f85b34d9d1f296adb8542c499b94765f10e34428d83ced28a113b3d1a4c5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f85b34d9d1f296adb8542c499b94765f10e34428d83ced28a113b3d1a4c5da->enter($__internal_30f85b34d9d1f296adb8542c499b94765f10e34428d83ced28a113b3d1a4c5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a3482590ef49d1dbf3d04a39a079246acb550e71bc869edf7a27d81ad129f558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3482590ef49d1dbf3d04a39a079246acb550e71bc869edf7a27d81ad129f558->enter($__internal_a3482590ef49d1dbf3d04a39a079246acb550e71bc869edf7a27d81ad129f558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a3482590ef49d1dbf3d04a39a079246acb550e71bc869edf7a27d81ad129f558->leave($__internal_a3482590ef49d1dbf3d04a39a079246acb550e71bc869edf7a27d81ad129f558_prof);

        
        $__internal_30f85b34d9d1f296adb8542c499b94765f10e34428d83ced28a113b3d1a4c5da->leave($__internal_30f85b34d9d1f296adb8542c499b94765f10e34428d83ced28a113b3d1a4c5da_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  72 => 9,  63 => 7,  51 => 4,  42 => 2,  32 => 12,  30 => 7,  28 => 2,);
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
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
