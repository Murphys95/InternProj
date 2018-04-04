<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_14d3d8ba891d22e8095fdf5e384162de2c41e69ac79c94734c896b2ad67e0f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3d74de186ced2505518dece4723e4d892ae4e4e7188b09dbb87e126e6207442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d74de186ced2505518dece4723e4d892ae4e4e7188b09dbb87e126e6207442->enter($__internal_b3d74de186ced2505518dece4723e4d892ae4e4e7188b09dbb87e126e6207442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b1d1c92fa4fb3664d913986bbb8e6d59286e1af70bd2d48bfbe346f3cbe7b9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d1c92fa4fb3664d913986bbb8e6d59286e1af70bd2d48bfbe346f3cbe7b9af->enter($__internal_b1d1c92fa4fb3664d913986bbb8e6d59286e1af70bd2d48bfbe346f3cbe7b9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3d74de186ced2505518dece4723e4d892ae4e4e7188b09dbb87e126e6207442->leave($__internal_b3d74de186ced2505518dece4723e4d892ae4e4e7188b09dbb87e126e6207442_prof);

        
        $__internal_b1d1c92fa4fb3664d913986bbb8e6d59286e1af70bd2d48bfbe346f3cbe7b9af->leave($__internal_b1d1c92fa4fb3664d913986bbb8e6d59286e1af70bd2d48bfbe346f3cbe7b9af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_286b5e73098992db477cfeb021770762bd3fc4cc84a9d143d077bab15563ad68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286b5e73098992db477cfeb021770762bd3fc4cc84a9d143d077bab15563ad68->enter($__internal_286b5e73098992db477cfeb021770762bd3fc4cc84a9d143d077bab15563ad68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8400a47cefb2d496c68749d1f9bd78ea789103f5995f8b81888ab3b9da6c16e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8400a47cefb2d496c68749d1f9bd78ea789103f5995f8b81888ab3b9da6c16e5->enter($__internal_8400a47cefb2d496c68749d1f9bd78ea789103f5995f8b81888ab3b9da6c16e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8400a47cefb2d496c68749d1f9bd78ea789103f5995f8b81888ab3b9da6c16e5->leave($__internal_8400a47cefb2d496c68749d1f9bd78ea789103f5995f8b81888ab3b9da6c16e5_prof);

        
        $__internal_286b5e73098992db477cfeb021770762bd3fc4cc84a9d143d077bab15563ad68->leave($__internal_286b5e73098992db477cfeb021770762bd3fc4cc84a9d143d077bab15563ad68_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f627d8006496ce424356113948550d78beb12b7757f0ac3e4e722e908f58258c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f627d8006496ce424356113948550d78beb12b7757f0ac3e4e722e908f58258c->enter($__internal_f627d8006496ce424356113948550d78beb12b7757f0ac3e4e722e908f58258c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_568bc82498f990a9a299401570f7c92d3bb7f028bad66a9d437da9f9ee2f24f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568bc82498f990a9a299401570f7c92d3bb7f028bad66a9d437da9f9ee2f24f3->enter($__internal_568bc82498f990a9a299401570f7c92d3bb7f028bad66a9d437da9f9ee2f24f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_568bc82498f990a9a299401570f7c92d3bb7f028bad66a9d437da9f9ee2f24f3->leave($__internal_568bc82498f990a9a299401570f7c92d3bb7f028bad66a9d437da9f9ee2f24f3_prof);

        
        $__internal_f627d8006496ce424356113948550d78beb12b7757f0ac3e4e722e908f58258c->leave($__internal_f627d8006496ce424356113948550d78beb12b7757f0ac3e4e722e908f58258c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_26d692df9e0b3c3fa8bc906e069df1c812f5a6ba981281bdeed1464c640e73cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d692df9e0b3c3fa8bc906e069df1c812f5a6ba981281bdeed1464c640e73cd->enter($__internal_26d692df9e0b3c3fa8bc906e069df1c812f5a6ba981281bdeed1464c640e73cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da47c58e66464204eb554fd593c0abb88b37252ba8e0982abf7a9ec188ef23ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da47c58e66464204eb554fd593c0abb88b37252ba8e0982abf7a9ec188ef23ae->enter($__internal_da47c58e66464204eb554fd593c0abb88b37252ba8e0982abf7a9ec188ef23ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_da47c58e66464204eb554fd593c0abb88b37252ba8e0982abf7a9ec188ef23ae->leave($__internal_da47c58e66464204eb554fd593c0abb88b37252ba8e0982abf7a9ec188ef23ae_prof);

        
        $__internal_26d692df9e0b3c3fa8bc906e069df1c812f5a6ba981281bdeed1464c640e73cd->leave($__internal_26d692df9e0b3c3fa8bc906e069df1c812f5a6ba981281bdeed1464c640e73cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
