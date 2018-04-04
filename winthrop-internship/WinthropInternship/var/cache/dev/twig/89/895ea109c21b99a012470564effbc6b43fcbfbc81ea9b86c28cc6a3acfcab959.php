<?php

/* hrform/index.html.twig */
class __TwigTemplate_4e3e72f77d3493488e7c7f7c486064fd041680191e4c6589767d1e3c28563972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "hrform/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "innerbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35d4bbd3947559648742ca0eec5cd5ca7083ca9ebdcc975e5785f712e49635bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d4bbd3947559648742ca0eec5cd5ca7083ca9ebdcc975e5785f712e49635bd->enter($__internal_35d4bbd3947559648742ca0eec5cd5ca7083ca9ebdcc975e5785f712e49635bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hrform/index.html.twig"));

        $__internal_b9a3d5035c45667236f9c7b34a7a7c0e30b98649c037c471bb4acb2ddc3cae25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a3d5035c45667236f9c7b34a7a7c0e30b98649c037c471bb4acb2ddc3cae25->enter($__internal_b9a3d5035c45667236f9c7b34a7a7c0e30b98649c037c471bb4acb2ddc3cae25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hrform/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35d4bbd3947559648742ca0eec5cd5ca7083ca9ebdcc975e5785f712e49635bd->leave($__internal_35d4bbd3947559648742ca0eec5cd5ca7083ca9ebdcc975e5785f712e49635bd_prof);

        
        $__internal_b9a3d5035c45667236f9c7b34a7a7c0e30b98649c037c471bb4acb2ddc3cae25->leave($__internal_b9a3d5035c45667236f9c7b34a7a7c0e30b98649c037c471bb4acb2ddc3cae25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa8699a2b17bc098aa814c4a2a47d10c78dff41d2d4c652412cd20bf3bd164ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8699a2b17bc098aa814c4a2a47d10c78dff41d2d4c652412cd20bf3bd164ea->enter($__internal_fa8699a2b17bc098aa814c4a2a47d10c78dff41d2d4c652412cd20bf3bd164ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed01556be5748a6566646a2b2592accb11ca267dc765465a908008c8353aac67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed01556be5748a6566646a2b2592accb11ca267dc765465a908008c8353aac67->enter($__internal_ed01556be5748a6566646a2b2592accb11ca267dc765465a908008c8353aac67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"header center\">Hrform list</h1>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\">
                ";
        // line 10
        echo "                    <thead>
                        <tr>
                            <th class=\"mdl-data-table__cell--non-numeric\">Firstname</th>
                            ";
        // line 14
        echo "                            <th>Lastname</th>
                            <th>Username</th>
                            <th>Cwid</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["studentFormOnes"] ?? $this->getContext($context, "studentFormOnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["studentFormOne"]) {
            // line 22
            echo "                        <tr>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_show", array("id" => $this->getAttribute($context["studentFormOne"], "id", array()))), "html", null, true);
            echo "\">
                            <td class=\"mdl-data-table__cell--non-numeric\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "firstName", array()), "html", null, true);
            echo "</td>
                            ";
            // line 26
            echo "                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "userName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["studentFormOne"], "cWID", array()), "html", null, true);
            echo "</td>
                            </a>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_show", array("id" => $this->getAttribute($context["studentFormOne"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_edit", array("id" => $this->getAttribute($context["studentFormOne"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['studentFormOne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        // line 48
        echo "    ";
        // line 49
        echo "    ";
        // line 50
        echo "    ";
        // line 51
        echo "    ";
        // line 52
        echo "    ";
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        // line 56
        echo "    ";
        // line 57
        echo "    ";
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        // line 60
        echo "    ";
        // line 61
        echo "    ";
        // line 62
        echo "    ";
        // line 63
        echo "    ";
        // line 64
        echo "    ";
        // line 65
        echo "    ";
        // line 66
        echo "    ";
        // line 67
        echo "    ";
        // line 68
        echo "    ";
        // line 69
        echo "    ";
        // line 70
        echo "    ";
        // line 71
        echo "    ";
        // line 72
        echo "    ";
        // line 73
        echo "    ";
        // line 74
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hrform_new");
        echo "\">Create a new hRForm</a>
        </li>
    </ul>
";
        
        $__internal_ed01556be5748a6566646a2b2592accb11ca267dc765465a908008c8353aac67->leave($__internal_ed01556be5748a6566646a2b2592accb11ca267dc765465a908008c8353aac67_prof);

        
        $__internal_fa8699a2b17bc098aa814c4a2a47d10c78dff41d2d4c652412cd20bf3bd164ea->leave($__internal_fa8699a2b17bc098aa814c4a2a47d10c78dff41d2d4c652412cd20bf3bd164ea_prof);

    }

    public function getTemplateName()
    {
        return "hrform/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 77,  179 => 74,  177 => 73,  175 => 72,  173 => 71,  171 => 70,  169 => 69,  167 => 68,  165 => 67,  163 => 66,  161 => 65,  159 => 64,  157 => 63,  155 => 62,  153 => 61,  151 => 60,  149 => 59,  147 => 58,  145 => 57,  143 => 56,  141 => 55,  139 => 54,  137 => 53,  135 => 52,  133 => 51,  131 => 50,  129 => 49,  127 => 48,  120 => 42,  108 => 36,  102 => 33,  94 => 28,  90 => 27,  85 => 26,  81 => 24,  77 => 23,  74 => 22,  70 => 21,  61 => 14,  56 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'innerbase.html.twig' %}

{% block body %}
    <h1 class=\"header center\">Hrform list</h1>
    <div class=\"section no-pad-bot\" id=\"index-banner\">
        <div class=\"container\">
            <div class=\"card-panel\">
                <table class=\"mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp\">
                {#<table>#}
                    <thead>
                        <tr>
                            <th class=\"mdl-data-table__cell--non-numeric\">Firstname</th>
                            {#<th>Firstname</th>#}
                            <th>Lastname</th>
                            <th>Username</th>
                            <th>Cwid</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for studentFormOne in studentFormOnes %}
                        <tr>
                            <a href=\"{{ path('studentformone_show', { 'id': studentFormOne.id }) }}\">
                            <td class=\"mdl-data-table__cell--non-numeric\">{{ studentFormOne.firstName }}</td>
                            {#<td>{{ studentFormOne.firstName }}</td>#}
                            <td>{{ studentFormOne.lastName }}</td>
                            <td>{{ studentFormOne.userName }}</td>
                            <td>{{ studentFormOne.cWID }}</td>
                            </a>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('studentformone_show', { 'id': studentFormOne.id }) }}\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('studentformone_edit', { 'id': studentFormOne.id }) }}\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {#<table>#}
    {#    <thead>#}
    {#        <tr>#}
    {#            <th>Id</th>#}
    {#            <th>Completedtitleix</th>#}
    {#            <th>Actions</th>#}
    {#        </tr>#}
    {#    </thead>#}
    {#    <tbody>#}
    {#    {% for hRForm in hRForms %}#}
    {#        <tr>#}
    {#            <td><a href=\"{{ path('hrform_show', { 'id': hRForm.id }) }}\">{{ hRForm.id }}</a></td>#}
    {#            <td>{% if hRForm.completedTitleIX %}Yes{% else %}No{% endif %}</td>#}
    {#            <td>#}
    {#                <ul>#}
    {#                    <li>#}
    {#                        <a href=\"{{ path('hrform_show', { 'id': hRForm.id }) }}\">show</a>#}
    {#                    </li>#}
    {#                    <li>#}
    {#                        <a href=\"{{ path('hrform_edit', { 'id': hRForm.id }) }}\">edit</a>#}
    {#                    </li>#}
    {#                </ul>#}
    {#            </td>#}
    {#        </tr>#}
    {#    {% endfor %}#}
    {#    </tbody>#}
    {#</table>#}

    <ul>
        <li>
            <a href=\"{{ path('hrform_new') }}\">Create a new hRForm</a>
        </li>
    </ul>
{% endblock %}
", "hrform/index.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/views/hrform/index.html.twig");
    }
}
