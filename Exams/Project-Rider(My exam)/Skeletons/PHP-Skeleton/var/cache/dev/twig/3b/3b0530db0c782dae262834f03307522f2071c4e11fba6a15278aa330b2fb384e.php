<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
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
        $__internal_0c04739201c66bab397445ed40197b3886447c4c4f7dd9acf7b8b2c592b12adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c04739201c66bab397445ed40197b3886447c4c4f7dd9acf7b8b2c592b12adc->enter($__internal_0c04739201c66bab397445ed40197b3886447c4c4f7dd9acf7b8b2c592b12adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c200fa8dda81553ef1e5dd6f147383d68502ef19d61203574d277641dd250232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c200fa8dda81553ef1e5dd6f147383d68502ef19d61203574d277641dd250232->enter($__internal_c200fa8dda81553ef1e5dd6f147383d68502ef19d61203574d277641dd250232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c04739201c66bab397445ed40197b3886447c4c4f7dd9acf7b8b2c592b12adc->leave($__internal_0c04739201c66bab397445ed40197b3886447c4c4f7dd9acf7b8b2c592b12adc_prof);

        
        $__internal_c200fa8dda81553ef1e5dd6f147383d68502ef19d61203574d277641dd250232->leave($__internal_c200fa8dda81553ef1e5dd6f147383d68502ef19d61203574d277641dd250232_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9c232227fd59a797a35fd2bff2dd99017c90138844b6d31f2fe156a7560d10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c232227fd59a797a35fd2bff2dd99017c90138844b6d31f2fe156a7560d10c->enter($__internal_d9c232227fd59a797a35fd2bff2dd99017c90138844b6d31f2fe156a7560d10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7e4d59bf201fad3b6e340f47622816ef4b28ecc9e0e4dc026c24295d2844c36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4d59bf201fad3b6e340f47622816ef4b28ecc9e0e4dc026c24295d2844c36b->enter($__internal_7e4d59bf201fad3b6e340f47622816ef4b28ecc9e0e4dc026c24295d2844c36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7e4d59bf201fad3b6e340f47622816ef4b28ecc9e0e4dc026c24295d2844c36b->leave($__internal_7e4d59bf201fad3b6e340f47622816ef4b28ecc9e0e4dc026c24295d2844c36b_prof);

        
        $__internal_d9c232227fd59a797a35fd2bff2dd99017c90138844b6d31f2fe156a7560d10c->leave($__internal_d9c232227fd59a797a35fd2bff2dd99017c90138844b6d31f2fe156a7560d10c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d03c86bc53f95b0c7ccc61aaddf16ab5a1d672d8c1351c848842fa0da3a925f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d03c86bc53f95b0c7ccc61aaddf16ab5a1d672d8c1351c848842fa0da3a925f->enter($__internal_8d03c86bc53f95b0c7ccc61aaddf16ab5a1d672d8c1351c848842fa0da3a925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb54049379e7dfdd4826f005118c2050decdb438dfa7bba1a06ec664aaa97d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb54049379e7dfdd4826f005118c2050decdb438dfa7bba1a06ec664aaa97d76->enter($__internal_cb54049379e7dfdd4826f005118c2050decdb438dfa7bba1a06ec664aaa97d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cb54049379e7dfdd4826f005118c2050decdb438dfa7bba1a06ec664aaa97d76->leave($__internal_cb54049379e7dfdd4826f005118c2050decdb438dfa7bba1a06ec664aaa97d76_prof);

        
        $__internal_8d03c86bc53f95b0c7ccc61aaddf16ab5a1d672d8c1351c848842fa0da3a925f->leave($__internal_8d03c86bc53f95b0c7ccc61aaddf16ab5a1d672d8c1351c848842fa0da3a925f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3b581bd301d73d518a6887375d8268a7ad6c55ff857d249ebd66ff2b9ca9033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b581bd301d73d518a6887375d8268a7ad6c55ff857d249ebd66ff2b9ca9033->enter($__internal_a3b581bd301d73d518a6887375d8268a7ad6c55ff857d249ebd66ff2b9ca9033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9fe0e41039510bf736b8eabedc93995928bb5bf4dae6e215d991abebca982b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe0e41039510bf736b8eabedc93995928bb5bf4dae6e215d991abebca982b63->enter($__internal_9fe0e41039510bf736b8eabedc93995928bb5bf4dae6e215d991abebca982b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9fe0e41039510bf736b8eabedc93995928bb5bf4dae6e215d991abebca982b63->leave($__internal_9fe0e41039510bf736b8eabedc93995928bb5bf4dae6e215d991abebca982b63_prof);

        
        $__internal_a3b581bd301d73d518a6887375d8268a7ad6c55ff857d249ebd66ff2b9ca9033->leave($__internal_a3b581bd301d73d518a6887375d8268a7ad6c55ff857d249ebd66ff2b9ca9033_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Lyubo\\Desktop\\exam\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
