<?php

/* innerbase.html.twig */
class __TwigTemplate_8e4df014f801489c4283f98645b51d6b9cd6cf814391aee8727849410d379093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b306544ced9780b0b2b0512a488a294cbbd46d778aa271f6ded5f5f4069c082b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b306544ced9780b0b2b0512a488a294cbbd46d778aa271f6ded5f5f4069c082b->enter($__internal_b306544ced9780b0b2b0512a488a294cbbd46d778aa271f6ded5f5f4069c082b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innerbase.html.twig"));

        $__internal_c5a18050eb07ec17785e7ed46c73f6c90bb17e5138d9be3e6cce0abccd9b6c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a18050eb07ec17785e7ed46c73f6c90bb17e5138d9be3e6cce0abccd9b6c5b->enter($__internal_c5a18050eb07ec17785e7ed46c73f6c90bb17e5138d9be3e6cce0abccd9b6c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "innerbase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Winthrop Internship Learning Engagement</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/reset.css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../../assets/css/materialize.min.css\"  media=\"screen,projection\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/styles.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"../../assets/js/materialize.min.js\"></script>
    ";
        // line 16
        echo "    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>
</head>
<body>
<nav role=\"navigation\">
    <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"brand-logo\">WILE</a>
        <ul class=\"right hide-on-med-and-down\">
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
        </ul>

        <ul id=\"nav-mobile\" class=\"sidenav\">
            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
        </ul>
        <a href=\"#\" data-target=\"nav-mobile\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
    </div>
</nav>
";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Company Bio</h5>
                <p class=\"grey-text text-lighten-4\">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


            </div>
            <div class=\"col l3 s12\">
                <h5 class=\"white-text\">Settings</h5>
                <ul>
                    <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
                </ul>
            </div>
            <div class=\"col l3 s12\">
                <h5 class=\"white-text\">Connect</h5>
                <ul>
                    <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
        </div>
    </div>
</footer>
</body>
</html>
";
        
        $__internal_b306544ced9780b0b2b0512a488a294cbbd46d778aa271f6ded5f5f4069c082b->leave($__internal_b306544ced9780b0b2b0512a488a294cbbd46d778aa271f6ded5f5f4069c082b_prof);

        
        $__internal_c5a18050eb07ec17785e7ed46c73f6c90bb17e5138d9be3e6cce0abccd9b6c5b->leave($__internal_c5a18050eb07ec17785e7ed46c73f6c90bb17e5138d9be3e6cce0abccd9b6c5b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_318e29d37611e16fad41c3a2cab2de83fcd10c424026217063fdeb63f9116760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318e29d37611e16fad41c3a2cab2de83fcd10c424026217063fdeb63f9116760->enter($__internal_318e29d37611e16fad41c3a2cab2de83fcd10c424026217063fdeb63f9116760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05f9ef7a822571a21475b3e36df4a5575b16c5ef096667871abc89c3d997ff1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f9ef7a822571a21475b3e36df4a5575b16c5ef096667871abc89c3d997ff1a->enter($__internal_05f9ef7a822571a21475b3e36df4a5575b16c5ef096667871abc89c3d997ff1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_05f9ef7a822571a21475b3e36df4a5575b16c5ef096667871abc89c3d997ff1a->leave($__internal_05f9ef7a822571a21475b3e36df4a5575b16c5ef096667871abc89c3d997ff1a_prof);

        
        $__internal_318e29d37611e16fad41c3a2cab2de83fcd10c424026217063fdeb63f9116760->leave($__internal_318e29d37611e16fad41c3a2cab2de83fcd10c424026217063fdeb63f9116760_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_550ec5a90877ca377fdb0d0b7d314e5c2de9b10feb78609a7f8c790aacd6327c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550ec5a90877ca377fdb0d0b7d314e5c2de9b10feb78609a7f8c790aacd6327c->enter($__internal_550ec5a90877ca377fdb0d0b7d314e5c2de9b10feb78609a7f8c790aacd6327c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_495778e2a70fd24db520b42811d61346a40f9810c1f012d31e0dd3e50bf8ffba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495778e2a70fd24db520b42811d61346a40f9810c1f012d31e0dd3e50bf8ffba->enter($__internal_495778e2a70fd24db520b42811d61346a40f9810c1f012d31e0dd3e50bf8ffba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_495778e2a70fd24db520b42811d61346a40f9810c1f012d31e0dd3e50bf8ffba->leave($__internal_495778e2a70fd24db520b42811d61346a40f9810c1f012d31e0dd3e50bf8ffba_prof);

        
        $__internal_550ec5a90877ca377fdb0d0b7d314e5c2de9b10feb78609a7f8c790aacd6327c->leave($__internal_550ec5a90877ca377fdb0d0b7d314e5c2de9b10feb78609a7f8c790aacd6327c_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_280578ef02bb24d21ddce27c5799ecdc27a402e323d08707a37b797e2599cc36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280578ef02bb24d21ddce27c5799ecdc27a402e323d08707a37b797e2599cc36->enter($__internal_280578ef02bb24d21ddce27c5799ecdc27a402e323d08707a37b797e2599cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d41326f9d9414c86ba9701ab34f5db8c946df8e302731c7cbec5e3b776456e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d41326f9d9414c86ba9701ab34f5db8c946df8e302731c7cbec5e3b776456e7->enter($__internal_1d41326f9d9414c86ba9701ab34f5db8c946df8e302731c7cbec5e3b776456e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d41326f9d9414c86ba9701ab34f5db8c946df8e302731c7cbec5e3b776456e7->leave($__internal_1d41326f9d9414c86ba9701ab34f5db8c946df8e302731c7cbec5e3b776456e7_prof);

        
        $__internal_280578ef02bb24d21ddce27c5799ecdc27a402e323d08707a37b797e2599cc36->leave($__internal_280578ef02bb24d21ddce27c5799ecdc27a402e323d08707a37b797e2599cc36_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2adee7ccd46bf39deb78dd384b5d4540b44386d02d4340a1f6858a93b8a854f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adee7ccd46bf39deb78dd384b5d4540b44386d02d4340a1f6858a93b8a854f5->enter($__internal_2adee7ccd46bf39deb78dd384b5d4540b44386d02d4340a1f6858a93b8a854f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6b118fc89e584815cbb41bf438adb7004c8fb60bb53008242298b5957fb311d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b118fc89e584815cbb41bf438adb7004c8fb60bb53008242298b5957fb311d7->enter($__internal_6b118fc89e584815cbb41bf438adb7004c8fb60bb53008242298b5957fb311d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6b118fc89e584815cbb41bf438adb7004c8fb60bb53008242298b5957fb311d7->leave($__internal_6b118fc89e584815cbb41bf438adb7004c8fb60bb53008242298b5957fb311d7_prof);

        
        $__internal_2adee7ccd46bf39deb78dd384b5d4540b44386d02d4340a1f6858a93b8a854f5->leave($__internal_2adee7ccd46bf39deb78dd384b5d4540b44386d02d4340a1f6858a93b8a854f5_prof);

    }

    public function getTemplateName()
    {
        return "innerbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 32,  164 => 31,  147 => 11,  130 => 5,  83 => 33,  81 => 32,  79 => 31,  71 => 26,  64 => 22,  59 => 20,  53 => 16,  46 => 12,  44 => 11,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}{% endblock %} | Winthrop Internship Learning Engagement</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/reset.css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../../assets/css/materialize.min.css\"  media=\"screen,projection\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../assets/css/styles.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"../../assets/js/materialize.min.js\"></script>
    {#<link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">#}
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>
</head>
<body>
<nav role=\"navigation\">
    <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"{{path('homepage') }}\" class=\"brand-logo\">WILE</a>
        <ul class=\"right hide-on-med-and-down\">
            <li><a href=\"{{path('fos_user_security_logout')}}\">Logout</a></li>
        </ul>

        <ul id=\"nav-mobile\" class=\"sidenav\">
            <li><a href=\"{{path('fos_user_security_logout')}}\">Logout</a></li>
        </ul>
        <a href=\"#\" data-target=\"nav-mobile\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
    </div>
</nav>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
<footer class=\"page-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Company Bio</h5>
                <p class=\"grey-text text-lighten-4\">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


            </div>
            <div class=\"col l3 s12\">
                <h5 class=\"white-text\">Settings</h5>
                <ul>
                    <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
                </ul>
            </div>
            <div class=\"col l3 s12\">
                <h5 class=\"white-text\">Connect</h5>
                <ul>
                    <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
        </div>
    </div>
</footer>
</body>
</html>
", "innerbase.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/views/innerbase.html.twig");
    }
}
