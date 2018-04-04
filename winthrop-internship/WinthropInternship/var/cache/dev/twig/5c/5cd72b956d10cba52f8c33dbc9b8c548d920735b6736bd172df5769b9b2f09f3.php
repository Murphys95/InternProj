<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60d323e41511724e9a0795bfebea260f337c41c0c6ad284d1e6b781ac0094084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7b1b801e1f3a186524b717f1ef7601e7418c494c7a27356fd055c215ba2fc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b1b801e1f3a186524b717f1ef7601e7418c494c7a27356fd055c215ba2fc1e->enter($__internal_a7b1b801e1f3a186524b717f1ef7601e7418c494c7a27356fd055c215ba2fc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b3d8275361fb2591d26258528d1c53bf3c43f4920074dfea18e009eb0c46d079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d8275361fb2591d26258528d1c53bf3c43f4920074dfea18e009eb0c46d079->enter($__internal_b3d8275361fb2591d26258528d1c53bf3c43f4920074dfea18e009eb0c46d079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7b1b801e1f3a186524b717f1ef7601e7418c494c7a27356fd055c215ba2fc1e->leave($__internal_a7b1b801e1f3a186524b717f1ef7601e7418c494c7a27356fd055c215ba2fc1e_prof);

        
        $__internal_b3d8275361fb2591d26258528d1c53bf3c43f4920074dfea18e009eb0c46d079->leave($__internal_b3d8275361fb2591d26258528d1c53bf3c43f4920074dfea18e009eb0c46d079_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b5fa716613852a9b29c7b27965fc29998811a4a1eadea389591afecf06920a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5fa716613852a9b29c7b27965fc29998811a4a1eadea389591afecf06920a0->enter($__internal_3b5fa716613852a9b29c7b27965fc29998811a4a1eadea389591afecf06920a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1b167fb915c4e5666b6de561981c89e83e5df9f155b7344957d663bd537b7926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b167fb915c4e5666b6de561981c89e83e5df9f155b7344957d663bd537b7926->enter($__internal_1b167fb915c4e5666b6de561981c89e83e5df9f155b7344957d663bd537b7926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b167fb915c4e5666b6de561981c89e83e5df9f155b7344957d663bd537b7926->leave($__internal_1b167fb915c4e5666b6de561981c89e83e5df9f155b7344957d663bd537b7926_prof);

        
        $__internal_3b5fa716613852a9b29c7b27965fc29998811a4a1eadea389591afecf06920a0->leave($__internal_3b5fa716613852a9b29c7b27965fc29998811a4a1eadea389591afecf06920a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db373ab0b8bd54543c576105d12a7fee4b154bbe181f94a57810a6154b31fc6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db373ab0b8bd54543c576105d12a7fee4b154bbe181f94a57810a6154b31fc6d->enter($__internal_db373ab0b8bd54543c576105d12a7fee4b154bbe181f94a57810a6154b31fc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68dfd09230e69e086905beb2546ba050542c00253c8e567e513049d274532903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dfd09230e69e086905beb2546ba050542c00253c8e567e513049d274532903->enter($__internal_68dfd09230e69e086905beb2546ba050542c00253c8e567e513049d274532903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68dfd09230e69e086905beb2546ba050542c00253c8e567e513049d274532903->leave($__internal_68dfd09230e69e086905beb2546ba050542c00253c8e567e513049d274532903_prof);

        
        $__internal_db373ab0b8bd54543c576105d12a7fee4b154bbe181f94a57810a6154b31fc6d->leave($__internal_db373ab0b8bd54543c576105d12a7fee4b154bbe181f94a57810a6154b31fc6d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_251c8ad2ffc08401b7410fd5caf712d21531a6742c00aab2babee02a04c28615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251c8ad2ffc08401b7410fd5caf712d21531a6742c00aab2babee02a04c28615->enter($__internal_251c8ad2ffc08401b7410fd5caf712d21531a6742c00aab2babee02a04c28615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57cb337717b7405b4409aead7b6993323c40744ab03ed089f0978fd224750d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57cb337717b7405b4409aead7b6993323c40744ab03ed089f0978fd224750d5e->enter($__internal_57cb337717b7405b4409aead7b6993323c40744ab03ed089f0978fd224750d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57cb337717b7405b4409aead7b6993323c40744ab03ed089f0978fd224750d5e->leave($__internal_57cb337717b7405b4409aead7b6993323c40744ab03ed089f0978fd224750d5e_prof);

        
        $__internal_251c8ad2ffc08401b7410fd5caf712d21531a6742c00aab2babee02a04c28615->leave($__internal_251c8ad2ffc08401b7410fd5caf712d21531a6742c00aab2babee02a04c28615_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
