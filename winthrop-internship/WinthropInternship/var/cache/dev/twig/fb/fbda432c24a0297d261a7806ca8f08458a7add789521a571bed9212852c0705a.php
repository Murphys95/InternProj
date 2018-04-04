<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a6d5f47775eae9850b0e5f541b5c0dcb4b38377a11f553de088e708b28b9c897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_dc26a830ed569aeaa4bee72bf909ca3ebbe30ccc87b6d1a7e507945d6a428ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc26a830ed569aeaa4bee72bf909ca3ebbe30ccc87b6d1a7e507945d6a428ca0->enter($__internal_dc26a830ed569aeaa4bee72bf909ca3ebbe30ccc87b6d1a7e507945d6a428ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2d74f03b1544b98202237e15c02e8821161f25fddc57275a0eed0c85411f3dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d74f03b1544b98202237e15c02e8821161f25fddc57275a0eed0c85411f3dc8->enter($__internal_2d74f03b1544b98202237e15c02e8821161f25fddc57275a0eed0c85411f3dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc26a830ed569aeaa4bee72bf909ca3ebbe30ccc87b6d1a7e507945d6a428ca0->leave($__internal_dc26a830ed569aeaa4bee72bf909ca3ebbe30ccc87b6d1a7e507945d6a428ca0_prof);

        
        $__internal_2d74f03b1544b98202237e15c02e8821161f25fddc57275a0eed0c85411f3dc8->leave($__internal_2d74f03b1544b98202237e15c02e8821161f25fddc57275a0eed0c85411f3dc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e230e347113465a81c86f071cd0ab64db5981311bd57d0ab18e97568c313d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e230e347113465a81c86f071cd0ab64db5981311bd57d0ab18e97568c313d48->enter($__internal_0e230e347113465a81c86f071cd0ab64db5981311bd57d0ab18e97568c313d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_631e803da3a55cce81d4a749a8cba9c4ab3a83671391b8ad00790186db12329d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631e803da3a55cce81d4a749a8cba9c4ab3a83671391b8ad00790186db12329d->enter($__internal_631e803da3a55cce81d4a749a8cba9c4ab3a83671391b8ad00790186db12329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_631e803da3a55cce81d4a749a8cba9c4ab3a83671391b8ad00790186db12329d->leave($__internal_631e803da3a55cce81d4a749a8cba9c4ab3a83671391b8ad00790186db12329d_prof);

        
        $__internal_0e230e347113465a81c86f071cd0ab64db5981311bd57d0ab18e97568c313d48->leave($__internal_0e230e347113465a81c86f071cd0ab64db5981311bd57d0ab18e97568c313d48_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10a8779a2a6065cafcb45ba2f276489ff5f2cbf8cb6bc58dd088b473bc97ba8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a8779a2a6065cafcb45ba2f276489ff5f2cbf8cb6bc58dd088b473bc97ba8f->enter($__internal_10a8779a2a6065cafcb45ba2f276489ff5f2cbf8cb6bc58dd088b473bc97ba8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_034ca8cddc36566036ad1f11da866dd4bad1fc938ca1c90c2c81425bcc3f5af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034ca8cddc36566036ad1f11da866dd4bad1fc938ca1c90c2c81425bcc3f5af2->enter($__internal_034ca8cddc36566036ad1f11da866dd4bad1fc938ca1c90c2c81425bcc3f5af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_034ca8cddc36566036ad1f11da866dd4bad1fc938ca1c90c2c81425bcc3f5af2->leave($__internal_034ca8cddc36566036ad1f11da866dd4bad1fc938ca1c90c2c81425bcc3f5af2_prof);

        
        $__internal_10a8779a2a6065cafcb45ba2f276489ff5f2cbf8cb6bc58dd088b473bc97ba8f->leave($__internal_10a8779a2a6065cafcb45ba2f276489ff5f2cbf8cb6bc58dd088b473bc97ba8f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f8d31998012de55c2693189b6cc3a46b24be77dfc087d00bc2611c05f36d001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8d31998012de55c2693189b6cc3a46b24be77dfc087d00bc2611c05f36d001->enter($__internal_5f8d31998012de55c2693189b6cc3a46b24be77dfc087d00bc2611c05f36d001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d052f47c838b62804c307c72c2f3a481b5aa8d0b3d679677e88df3e87dc9da40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d052f47c838b62804c307c72c2f3a481b5aa8d0b3d679677e88df3e87dc9da40->enter($__internal_d052f47c838b62804c307c72c2f3a481b5aa8d0b3d679677e88df3e87dc9da40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d052f47c838b62804c307c72c2f3a481b5aa8d0b3d679677e88df3e87dc9da40->leave($__internal_d052f47c838b62804c307c72c2f3a481b5aa8d0b3d679677e88df3e87dc9da40_prof);

        
        $__internal_5f8d31998012de55c2693189b6cc3a46b24be77dfc087d00bc2611c05f36d001->leave($__internal_5f8d31998012de55c2693189b6cc3a46b24be77dfc087d00bc2611c05f36d001_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
