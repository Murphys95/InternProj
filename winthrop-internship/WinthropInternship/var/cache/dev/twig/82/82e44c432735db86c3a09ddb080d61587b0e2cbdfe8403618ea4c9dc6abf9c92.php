<?php

/* materialize_form_theme.html.twig */
class __TwigTemplate_78f4ec1948bbd46eba328d7c86c28f0a1b5b636db960dc381cf466a87ded3983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "materialize_form_theme.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'button_widget' => array($this, 'block_button_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35fff3a6f051bf536f5a555b513ff1f88bfe5a3cb4966c87c040bb77e222aafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35fff3a6f051bf536f5a555b513ff1f88bfe5a3cb4966c87c040bb77e222aafe->enter($__internal_35fff3a6f051bf536f5a555b513ff1f88bfe5a3cb4966c87c040bb77e222aafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materialize_form_theme.html.twig"));

        $__internal_7363ac8c6e0a3ef99adb52a85e3b13afdd05a59ae9c302ac785f6121b8bd1f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7363ac8c6e0a3ef99adb52a85e3b13afdd05a59ae9c302ac785f6121b8bd1f6c->enter($__internal_7363ac8c6e0a3ef99adb52a85e3b13afdd05a59ae9c302ac785f6121b8bd1f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "materialize_form_theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35fff3a6f051bf536f5a555b513ff1f88bfe5a3cb4966c87c040bb77e222aafe->leave($__internal_35fff3a6f051bf536f5a555b513ff1f88bfe5a3cb4966c87c040bb77e222aafe_prof);

        
        $__internal_7363ac8c6e0a3ef99adb52a85e3b13afdd05a59ae9c302ac785f6121b8bd1f6c->leave($__internal_7363ac8c6e0a3ef99adb52a85e3b13afdd05a59ae9c302ac785f6121b8bd1f6c_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_60796280414136376c9928c5b5bfa08b62feeab1ee0fdbb3a4d6b9eb2db52021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60796280414136376c9928c5b5bfa08b62feeab1ee0fdbb3a4d6b9eb2db52021->enter($__internal_60796280414136376c9928c5b5bfa08b62feeab1ee0fdbb3a4d6b9eb2db52021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1e47111d4f02a72b186f2966b84ed73bdbce1bd2a5690dd04e8feaa21d4d3fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e47111d4f02a72b186f2966b84ed73bdbce1bd2a5690dd04e8feaa21d4d3fed->enter($__internal_1e47111d4f02a72b186f2966b84ed73bdbce1bd2a5690dd04e8feaa21d4d3fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<div class=\"row";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"input-field col s12\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 9
        echo "</div>
    </div>";
        
        $__internal_1e47111d4f02a72b186f2966b84ed73bdbce1bd2a5690dd04e8feaa21d4d3fed->leave($__internal_1e47111d4f02a72b186f2966b84ed73bdbce1bd2a5690dd04e8feaa21d4d3fed_prof);

        
        $__internal_60796280414136376c9928c5b5bfa08b62feeab1ee0fdbb3a4d6b9eb2db52021->leave($__internal_60796280414136376c9928c5b5bfa08b62feeab1ee0fdbb3a4d6b9eb2db52021_prof);

    }

    // line 13
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ed73c91c044a93c6110e341d90c9821703775ad4bd80359c8b3cdbe9f2a5ce0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed73c91c044a93c6110e341d90c9821703775ad4bd80359c8b3cdbe9f2a5ce0b->enter($__internal_ed73c91c044a93c6110e341d90c9821703775ad4bd80359c8b3cdbe9f2a5ce0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0ffb6131a67dc6712c643343a30337649b78f7f3af07bcf4eec844a47f151e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffb6131a67dc6712c643343a30337649b78f7f3af07bcf4eec844a47f151e86->enter($__internal_0ffb6131a67dc6712c643343a30337649b78f7f3af07bcf4eec844a47f151e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 14
        echo "    ";
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")))));
        }
        // line 17
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 18
        if (array_key_exists("tooltip", $context)) {
            // line 19
            echo "        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "html", null, true);
            echo "\">error
        </span>
    ";
        }
        
        $__internal_0ffb6131a67dc6712c643343a30337649b78f7f3af07bcf4eec844a47f151e86->leave($__internal_0ffb6131a67dc6712c643343a30337649b78f7f3af07bcf4eec844a47f151e86_prof);

        
        $__internal_ed73c91c044a93c6110e341d90c9821703775ad4bd80359c8b3cdbe9f2a5ce0b->leave($__internal_ed73c91c044a93c6110e341d90c9821703775ad4bd80359c8b3cdbe9f2a5ce0b_prof);

    }

    // line 25
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f488bc212f19313fe07dc38032cfeaa4658319008ba8c0a5071cccb3e2240e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f488bc212f19313fe07dc38032cfeaa4658319008ba8c0a5071cccb3e2240e9a->enter($__internal_f488bc212f19313fe07dc38032cfeaa4658319008ba8c0a5071cccb3e2240e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_dfdb7bdaf3d430139c83fb2ac7f081df6c9cf7ded0d5541205ff4cbf53a6c6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdb7bdaf3d430139c83fb2ac7f081df6c9cf7ded0d5541205ff4cbf53a6c6ba->enter($__internal_dfdb7bdaf3d430139c83fb2ac7f081df6c9cf7ded0d5541205ff4cbf53a6c6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 26
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))));
        // line 27
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_dfdb7bdaf3d430139c83fb2ac7f081df6c9cf7ded0d5541205ff4cbf53a6c6ba->leave($__internal_dfdb7bdaf3d430139c83fb2ac7f081df6c9cf7ded0d5541205ff4cbf53a6c6ba_prof);

        
        $__internal_f488bc212f19313fe07dc38032cfeaa4658319008ba8c0a5071cccb3e2240e9a->leave($__internal_f488bc212f19313fe07dc38032cfeaa4658319008ba8c0a5071cccb3e2240e9a_prof);

    }

    // line 30
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_82acfbe85a4c2d7daf4cf7d5486ed1f82c81bf8bf7d466da522dbe877e5ef95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82acfbe85a4c2d7daf4cf7d5486ed1f82c81bf8bf7d466da522dbe877e5ef95c->enter($__internal_82acfbe85a4c2d7daf4cf7d5486ed1f82c81bf8bf7d466da522dbe877e5ef95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e69a34d101aac7cc60dad1d526d05d16aad261f0f4ca014a17c146b4c64d2eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69a34d101aac7cc60dad1d526d05d16aad261f0f4ca014a17c146b4c64d2eb7->enter($__internal_e69a34d101aac7cc60dad1d526d05d16aad261f0f4ca014a17c146b4c64d2eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 31
        echo "<div class=\"row ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 35
        echo "</div>";
        
        $__internal_e69a34d101aac7cc60dad1d526d05d16aad261f0f4ca014a17c146b4c64d2eb7->leave($__internal_e69a34d101aac7cc60dad1d526d05d16aad261f0f4ca014a17c146b4c64d2eb7_prof);

        
        $__internal_82acfbe85a4c2d7daf4cf7d5486ed1f82c81bf8bf7d466da522dbe877e5ef95c->leave($__internal_82acfbe85a4c2d7daf4cf7d5486ed1f82c81bf8bf7d466da522dbe877e5ef95c_prof);

    }

    // line 38
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8e456b2ce017dfd4a0824c61b7e22f9582b5e3691f01aa50c06089462c98fe60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e456b2ce017dfd4a0824c61b7e22f9582b5e3691f01aa50c06089462c98fe60->enter($__internal_8e456b2ce017dfd4a0824c61b7e22f9582b5e3691f01aa50c06089462c98fe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6a3e198490334660d90df4571a8fe70f9669645129b8ac90a69c987cd2e1b996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3e198490334660d90df4571a8fe70f9669645129b8ac90a69c987cd2e1b996->enter($__internal_6a3e198490334660d90df4571a8fe70f9669645129b8ac90a69c987cd2e1b996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 39
        echo "<input type=\"checkbox\" class=\"filled-in\"";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_6a3e198490334660d90df4571a8fe70f9669645129b8ac90a69c987cd2e1b996->leave($__internal_6a3e198490334660d90df4571a8fe70f9669645129b8ac90a69c987cd2e1b996_prof);

        
        $__internal_8e456b2ce017dfd4a0824c61b7e22f9582b5e3691f01aa50c06089462c98fe60->leave($__internal_8e456b2ce017dfd4a0824c61b7e22f9582b5e3691f01aa50c06089462c98fe60_prof);

    }

    // line 43
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c4f6e0e5542e8a566ea7db435240a3c274922d885210307dea8799d0883a9a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f6e0e5542e8a566ea7db435240a3c274922d885210307dea8799d0883a9a81->enter($__internal_c4f6e0e5542e8a566ea7db435240a3c274922d885210307dea8799d0883a9a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_229a60e4b2f91350bc0fe37a917b152fc1ec77085f0f53304e33db6094798964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229a60e4b2f91350bc0fe37a917b152fc1ec77085f0f53304e33db6094798964->enter($__internal_229a60e4b2f91350bc0fe37a917b152fc1ec77085f0f53304e33db6094798964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 44
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 45
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 46
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 48
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 49
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 51
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 52
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 53
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 54
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 55
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 58
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 61
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 62
            echo (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))));
            echo "
        </label>";
        }
        
        $__internal_229a60e4b2f91350bc0fe37a917b152fc1ec77085f0f53304e33db6094798964->leave($__internal_229a60e4b2f91350bc0fe37a917b152fc1ec77085f0f53304e33db6094798964_prof);

        
        $__internal_c4f6e0e5542e8a566ea7db435240a3c274922d885210307dea8799d0883a9a81->leave($__internal_c4f6e0e5542e8a566ea7db435240a3c274922d885210307dea8799d0883a9a81_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1b0cdee9896669b6bac09fbff875851aa55b9403d3314845b0aef25848cdde7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0cdee9896669b6bac09fbff875851aa55b9403d3314845b0aef25848cdde7c->enter($__internal_1b0cdee9896669b6bac09fbff875851aa55b9403d3314845b0aef25848cdde7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_68543dec8ff8049286f4463f6735205089a85b0f68fc9a975c0c09e37959f2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68543dec8ff8049286f4463f6735205089a85b0f68fc9a975c0c09e37959f2b6->enter($__internal_68543dec8ff8049286f4463f6735205089a85b0f68fc9a975c0c09e37959f2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "waves-effect waves-light")) : ("waves-effect waves-light")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_68543dec8ff8049286f4463f6735205089a85b0f68fc9a975c0c09e37959f2b6->leave($__internal_68543dec8ff8049286f4463f6735205089a85b0f68fc9a975c0c09e37959f2b6_prof);

        
        $__internal_1b0cdee9896669b6bac09fbff875851aa55b9403d3314845b0aef25848cdde7c->leave($__internal_1b0cdee9896669b6bac09fbff875851aa55b9403d3314845b0aef25848cdde7c_prof);

    }

    // line 72
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_779363a5396056faf21a8e7ad62fdd51402193d08655688a5961d95dedaab4f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779363a5396056faf21a8e7ad62fdd51402193d08655688a5961d95dedaab4f5->enter($__internal_779363a5396056faf21a8e7ad62fdd51402193d08655688a5961d95dedaab4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1615fcc882d8d893ac4a8fe7fc105e22bc25d83662158c13b9ec486a4e1eb080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1615fcc882d8d893ac4a8fe7fc105e22bc25d83662158c13b9ec486a4e1eb080->enter($__internal_1615fcc882d8d893ac4a8fe7fc105e22bc25d83662158c13b9ec486a4e1eb080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 73
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 74
            $context["required"] = false;
        }
        // line 76
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 77
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 78
            echo "<option value=\"\"";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                echo " disabled=\"disabled\" ";
                if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 80
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 81
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 82
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 83
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 84
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 87
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 88
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 89
        echo "</select>";
        
        $__internal_1615fcc882d8d893ac4a8fe7fc105e22bc25d83662158c13b9ec486a4e1eb080->leave($__internal_1615fcc882d8d893ac4a8fe7fc105e22bc25d83662158c13b9ec486a4e1eb080_prof);

        
        $__internal_779363a5396056faf21a8e7ad62fdd51402193d08655688a5961d95dedaab4f5->leave($__internal_779363a5396056faf21a8e7ad62fdd51402193d08655688a5961d95dedaab4f5_prof);

    }

    // line 92
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4201a7720a5247eef43b651daa7d5ddf8b2fdc03bbfd192f7e48889b5764e503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4201a7720a5247eef43b651daa7d5ddf8b2fdc03bbfd192f7e48889b5764e503->enter($__internal_4201a7720a5247eef43b651daa7d5ddf8b2fdc03bbfd192f7e48889b5764e503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_b1c2d6d1ef7af6abbb273091966b45c32102574d4daae1a7556fb8708e5f6128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c2d6d1ef7af6abbb273091966b45c32102574d4daae1a7556fb8708e5f6128->enter($__internal_b1c2d6d1ef7af6abbb273091966b45c32102574d4daae1a7556fb8708e5f6128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 93
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . "materialize-textarea"))));
        // line 94
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_b1c2d6d1ef7af6abbb273091966b45c32102574d4daae1a7556fb8708e5f6128->leave($__internal_b1c2d6d1ef7af6abbb273091966b45c32102574d4daae1a7556fb8708e5f6128_prof);

        
        $__internal_4201a7720a5247eef43b651daa7d5ddf8b2fdc03bbfd192f7e48889b5764e503->leave($__internal_4201a7720a5247eef43b651daa7d5ddf8b2fdc03bbfd192f7e48889b5764e503_prof);

    }

    // line 97
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_583b0a098e57b7cef1d1b12f4af283a26a86460eba4a9a6508061084b0d24946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583b0a098e57b7cef1d1b12f4af283a26a86460eba4a9a6508061084b0d24946->enter($__internal_583b0a098e57b7cef1d1b12f4af283a26a86460eba4a9a6508061084b0d24946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a028763e508ad445d9590d1393f78d3f8f3ca9dcb216c58cbeef4abd3a75925b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a028763e508ad445d9590d1393f78d3f8f3ca9dcb216c58cbeef4abd3a75925b->enter($__internal_a028763e508ad445d9590d1393f78d3f8f3ca9dcb216c58cbeef4abd3a75925b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 98
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 99
            echo "<ul>";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 101
                echo "<li class=\"error\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "</ul>";
        }
        
        $__internal_a028763e508ad445d9590d1393f78d3f8f3ca9dcb216c58cbeef4abd3a75925b->leave($__internal_a028763e508ad445d9590d1393f78d3f8f3ca9dcb216c58cbeef4abd3a75925b_prof);

        
        $__internal_583b0a098e57b7cef1d1b12f4af283a26a86460eba4a9a6508061084b0d24946->leave($__internal_583b0a098e57b7cef1d1b12f4af283a26a86460eba4a9a6508061084b0d24946_prof);

    }

    public function getTemplateName()
    {
        return "materialize_form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 103,  385 => 101,  381 => 100,  379 => 99,  377 => 98,  368 => 97,  357 => 94,  355 => 93,  346 => 92,  336 => 89,  334 => 88,  332 => 87,  326 => 84,  324 => 83,  322 => 82,  320 => 81,  318 => 80,  306 => 78,  304 => 77,  297 => 76,  294 => 74,  292 => 73,  283 => 72,  273 => 69,  271 => 68,  262 => 67,  249 => 62,  233 => 61,  229 => 58,  226 => 55,  225 => 54,  224 => 53,  222 => 52,  220 => 51,  217 => 49,  215 => 48,  212 => 46,  210 => 45,  208 => 44,  199 => 43,  179 => 39,  170 => 38,  160 => 35,  158 => 34,  156 => 33,  154 => 32,  148 => 31,  139 => 30,  129 => 27,  127 => 26,  118 => 25,  104 => 20,  101 => 19,  99 => 18,  97 => 17,  94 => 15,  91 => 14,  82 => 13,  71 => 9,  69 => 8,  67 => 7,  65 => 6,  58 => 4,  49 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block form_row -%}
    <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        <div class=\"input-field col s12\">
            {{- form_widget(form) -}}
            {{- form_label(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock form_row %}

{% block form_widget_simple %}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
    {% if tooltip is defined %}
        <span class=\"material-icons dp48 tooltipped\"
              data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"{{ tooltip }}\">error
        </span>
    {% endif %}
{% endblock form_widget_simple %}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default(''))|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_row -%}
    <div class=\"row {% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block checkbox_widget -%}
    <input type=\"checkbox\" class=\"filled-in\"{{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget %}

{# Checkbox label is raw here #}
{%- block checkbox_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ translation_domain is same as(false) ? label|raw : label|trans({}, translation_domain)|raw }}
        </label>
    {%- endif -%}
{%- endblock -%}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('waves-effect waves-light') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required %} disabled=\"disabled\" {% if value is empty %} selected=\"selected\"{% endif %}{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ 'materialize-textarea')|trim}) %}
    {{ parent() }}
{%- endblock -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        <ul>
            {%- for error in errors -%}
                <li class=\"error\">{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    {%- endif -%}
{%- endblock form_errors -%}", "materialize_form_theme.html.twig", "/home/ubuntu/Winthrop_Intern_2/winthrop-internship/WinthropInternship/app/Resources/views/materialize_form_theme.html.twig");
    }
}
