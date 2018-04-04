<?php

/* studentformone/show.html.twig */
class __TwigTemplate_2edb82cd91a4eee7b484126b980ec47217f37d226d759605454359291cc703d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("innerbase.html.twig", "studentformone/show.html.twig", 1);
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
        $__internal_711afaffb4f3af97b5ddfce946504e85a04f32b240121f2b5e7e2badb4a32d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711afaffb4f3af97b5ddfce946504e85a04f32b240121f2b5e7e2badb4a32d87->enter($__internal_711afaffb4f3af97b5ddfce946504e85a04f32b240121f2b5e7e2badb4a32d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/show.html.twig"));

        $__internal_626ba624ffc5ad120e1b2c11847936290c9f03caf2b5442e5a607e1a69613b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626ba624ffc5ad120e1b2c11847936290c9f03caf2b5442e5a607e1a69613b19->enter($__internal_626ba624ffc5ad120e1b2c11847936290c9f03caf2b5442e5a607e1a69613b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "studentformone/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711afaffb4f3af97b5ddfce946504e85a04f32b240121f2b5e7e2badb4a32d87->leave($__internal_711afaffb4f3af97b5ddfce946504e85a04f32b240121f2b5e7e2badb4a32d87_prof);

        
        $__internal_626ba624ffc5ad120e1b2c11847936290c9f03caf2b5442e5a607e1a69613b19->leave($__internal_626ba624ffc5ad120e1b2c11847936290c9f03caf2b5442e5a607e1a69613b19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f33346a20f0ca9f0c966375da1038c1d21377bed4adad44a7e7d5083671bc53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33346a20f0ca9f0c966375da1038c1d21377bed4adad44a7e7d5083671bc53b->enter($__internal_f33346a20f0ca9f0c966375da1038c1d21377bed4adad44a7e7d5083671bc53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac6cd05c5722258f3af059775d59b80a22d74d171e779f7f6a9821b9d36ad975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6cd05c5722258f3af059775d59b80a22d74d171e779f7f6a9821b9d36ad975->enter($__internal_ac6cd05c5722258f3af059775d59b80a22d74d171e779f7f6a9821b9d36ad975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Studentformone</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "userName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cwid</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "cWID", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Emailaddress</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "emailAddress", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Classenrolled</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "classEnrolled", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numcredits</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "numCredits", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "phoneNumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Legallyauthorized</th>
                <td>";
        // line 46
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "legallyAuthorized", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Futureworkauthorization</th>
                <td>";
        // line 50
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "futureWorkAuthorization", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Major</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "major", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Minor</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "minor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Facultyliaison</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "facultyLiaison", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Semesterenrolled</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "semesterEnrolled", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Yearenrolled</th>
                <td>";
        // line 70
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearEnrolled", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearEnrolled", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Semestergrad</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "semesterGrad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Yeargrad</th>
                <td>";
        // line 78
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearGrad", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "yearGrad", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 82
        if ($this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Sitesupername</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "siteSuperName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sitesuperemail</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "siteSuperEmail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sitesuperaccesscode</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "siteSuperAccessCode", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("studentformone_edit", array("id" => $this->getAttribute(($context["studentFormOne"] ?? $this->getContext($context, "studentFormOne")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ac6cd05c5722258f3af059775d59b80a22d74d171e779f7f6a9821b9d36ad975->leave($__internal_ac6cd05c5722258f3af059775d59b80a22d74d171e779f7f6a9821b9d36ad975_prof);

        
        $__internal_f33346a20f0ca9f0c966375da1038c1d21377bed4adad44a7e7d5083671bc53b->leave($__internal_f33346a20f0ca9f0c966375da1038c1d21377bed4adad44a7e7d5083671bc53b_prof);

    }

    public function getTemplateName()
    {
        return "studentformone/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 109,  240 => 107,  234 => 104,  228 => 101,  218 => 94,  211 => 90,  204 => 86,  195 => 82,  186 => 78,  179 => 74,  170 => 70,  163 => 66,  156 => 62,  149 => 58,  142 => 54,  131 => 50,  120 => 46,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Studentformone</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ studentFormOne.id }}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{ studentFormOne.firstName }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ studentFormOne.lastName }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ studentFormOne.userName }}</td>
            </tr>
            <tr>
                <th>Cwid</th>
                <td>{{ studentFormOne.cWID }}</td>
            </tr>
            <tr>
                <th>Emailaddress</th>
                <td>{{ studentFormOne.emailAddress }}</td>
            </tr>
            <tr>
                <th>Classenrolled</th>
                <td>{{ studentFormOne.classEnrolled }}</td>
            </tr>
            <tr>
                <th>Numcredits</th>
                <td>{{ studentFormOne.numCredits }}</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>{{ studentFormOne.phoneNumber }}</td>
            </tr>
            <tr>
                <th>Legallyauthorized</th>
                <td>{% if studentFormOne.legallyAuthorized %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Futureworkauthorization</th>
                <td>{% if studentFormOne.futureWorkAuthorization %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Major</th>
                <td>{{ studentFormOne.major }}</td>
            </tr>
            <tr>
                <th>Minor</th>
                <td>{{ studentFormOne.minor }}</td>
            </tr>
            <tr>
                <th>Facultyliaison</th>
                <td>{{ studentFormOne.facultyLiaison }}</td>
            </tr>
            <tr>
                <th>Semesterenrolled</th>
                <td>{{ studentFormOne.semesterEnrolled }}</td>
            </tr>
            <tr>
                <th>Yearenrolled</th>
                <td>{% if studentFormOne.yearEnrolled %}{{ studentFormOne.yearEnrolled|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Semestergrad</th>
                <td>{{ studentFormOne.semesterGrad }}</td>
            </tr>
            <tr>
                <th>Yeargrad</th>
                <td>{% if studentFormOne.yearGrad %}{{ studentFormOne.yearGrad|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if studentFormOne.date %}{{ studentFormOne.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Sitesupername</th>
                <td>{{ studentFormOne.siteSuperName }}</td>
            </tr>
            <tr>
                <th>Sitesuperemail</th>
                <td>{{ studentFormOne.siteSuperEmail }}</td>
            </tr>
            <tr>
                <th>Sitesuperaccesscode</th>
                <td>{{ studentFormOne.siteSuperAccessCode }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('studentformone_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('studentformone_edit', { 'id': studentFormOne.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "studentformone/show.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/views/studentformone/show.html.twig");
    }
}
