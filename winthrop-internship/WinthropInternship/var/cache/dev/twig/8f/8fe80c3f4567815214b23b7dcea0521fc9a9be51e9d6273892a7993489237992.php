<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_cd5e8193fb3064e7cea16eb3b11b4d9dfcf51bdc07d54b4d599e5c73f09b3134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0efb1b0a11bebceffe7d43aae42fc6260a1630711fab6ed15cacab214b141b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0efb1b0a11bebceffe7d43aae42fc6260a1630711fab6ed15cacab214b141b4c->enter($__internal_0efb1b0a11bebceffe7d43aae42fc6260a1630711fab6ed15cacab214b141b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_42af7c767834fde32eb88e273eee6f5a33609492a1117bf63356061fd8179e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42af7c767834fde32eb88e273eee6f5a33609492a1117bf63356061fd8179e9a->enter($__internal_42af7c767834fde32eb88e273eee6f5a33609492a1117bf63356061fd8179e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0efb1b0a11bebceffe7d43aae42fc6260a1630711fab6ed15cacab214b141b4c->leave($__internal_0efb1b0a11bebceffe7d43aae42fc6260a1630711fab6ed15cacab214b141b4c_prof);

        
        $__internal_42af7c767834fde32eb88e273eee6f5a33609492a1117bf63356061fd8179e9a->leave($__internal_42af7c767834fde32eb88e273eee6f5a33609492a1117bf63356061fd8179e9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3ad4f19cc9c4fa721b7a9ba16eb831ee5673da697db4026a62dd100981080ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ad4f19cc9c4fa721b7a9ba16eb831ee5673da697db4026a62dd100981080ae->enter($__internal_c3ad4f19cc9c4fa721b7a9ba16eb831ee5673da697db4026a62dd100981080ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9b2c3efd00b73f4b6d9cb27c94ff8b7511d0f2a1da7a8ba5788dec4fffd92ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b2c3efd00b73f4b6d9cb27c94ff8b7511d0f2a1da7a8ba5788dec4fffd92ef->enter($__internal_b9b2c3efd00b73f4b6d9cb27c94ff8b7511d0f2a1da7a8ba5788dec4fffd92ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_b9b2c3efd00b73f4b6d9cb27c94ff8b7511d0f2a1da7a8ba5788dec4fffd92ef->leave($__internal_b9b2c3efd00b73f4b6d9cb27c94ff8b7511d0f2a1da7a8ba5788dec4fffd92ef_prof);

        
        $__internal_c3ad4f19cc9c4fa721b7a9ba16eb831ee5673da697db4026a62dd100981080ae->leave($__internal_c3ad4f19cc9c4fa721b7a9ba16eb831ee5673da697db4026a62dd100981080ae_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a26e6e2706a04b754add7f7c05118d06086f3e175569dab16268032601fad960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26e6e2706a04b754add7f7c05118d06086f3e175569dab16268032601fad960->enter($__internal_a26e6e2706a04b754add7f7c05118d06086f3e175569dab16268032601fad960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_037861222f1449dfc0f960badf405a037e241265c67bce0e57ca39bd0c1fc903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037861222f1449dfc0f960badf405a037e241265c67bce0e57ca39bd0c1fc903->enter($__internal_037861222f1449dfc0f960badf405a037e241265c67bce0e57ca39bd0c1fc903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_037861222f1449dfc0f960badf405a037e241265c67bce0e57ca39bd0c1fc903->leave($__internal_037861222f1449dfc0f960badf405a037e241265c67bce0e57ca39bd0c1fc903_prof);

        
        $__internal_a26e6e2706a04b754add7f7c05118d06086f3e175569dab16268032601fad960->leave($__internal_a26e6e2706a04b754add7f7c05118d06086f3e175569dab16268032601fad960_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Login{% endblock %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
