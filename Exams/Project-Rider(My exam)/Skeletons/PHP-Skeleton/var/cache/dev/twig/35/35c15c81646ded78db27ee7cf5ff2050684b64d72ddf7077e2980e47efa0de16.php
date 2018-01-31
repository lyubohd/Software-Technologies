<?php

/* :project:delete.html.twig */
class __TwigTemplate_c075bb65d92646ff69ef39d8bd1197147c8f0224228900ab3f50dae18c5aa66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:delete.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16c969dfde0a0de4397ac65b8b690002f23c6a94765eee924c270c6ca398651f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c969dfde0a0de4397ac65b8b690002f23c6a94765eee924c270c6ca398651f->enter($__internal_16c969dfde0a0de4397ac65b8b690002f23c6a94765eee924c270c6ca398651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:delete.html.twig"));

        $__internal_a1ff48c874b38f42bcc5fba9bf25a021257fb3ff340ec8b6283e1ecd7f9bc119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ff48c874b38f42bcc5fba9bf25a021257fb3ff340ec8b6283e1ecd7f9bc119->enter($__internal_a1ff48c874b38f42bcc5fba9bf25a021257fb3ff340ec8b6283e1ecd7f9bc119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c969dfde0a0de4397ac65b8b690002f23c6a94765eee924c270c6ca398651f->leave($__internal_16c969dfde0a0de4397ac65b8b690002f23c6a94765eee924c270c6ca398651f_prof);

        
        $__internal_a1ff48c874b38f42bcc5fba9bf25a021257fb3ff340ec8b6283e1ecd7f9bc119->leave($__internal_a1ff48c874b38f42bcc5fba9bf25a021257fb3ff340ec8b6283e1ecd7f9bc119_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_38adc50d737604f54346e4cab9952efff1456789bc45fa26c1f3a09e1bd3946b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38adc50d737604f54346e4cab9952efff1456789bc45fa26c1f3a09e1bd3946b->enter($__internal_38adc50d737604f54346e4cab9952efff1456789bc45fa26c1f3a09e1bd3946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8b390cf78eb8274dff40ecbd1983943f4ffb21e7e52cb15cab7ae63525b1555a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b390cf78eb8274dff40ecbd1983943f4ffb21e7e52cb15cab7ae63525b1555a->enter($__internal_8b390cf78eb8274dff40ecbd1983943f4ffb21e7e52cb15cab7ae63525b1555a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "title", array()), "html", null, true);
        echo "\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_8b390cf78eb8274dff40ecbd1983943f4ffb21e7e52cb15cab7ae63525b1555a->leave($__internal_8b390cf78eb8274dff40ecbd1983943f4ffb21e7e52cb15cab7ae63525b1555a_prof);

        
        $__internal_38adc50d737604f54346e4cab9952efff1456789bc45fa26c1f3a09e1bd3946b->leave($__internal_38adc50d737604f54346e4cab9952efff1456789bc45fa26c1f3a09e1bd3946b_prof);

    }

    public function getTemplateName()
    {
        return ":project:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  73 => 20,  66 => 16,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", ":project:delete.html.twig", "C:\\Users\\Lyubo\\Desktop\\exam\\Skeletons\\PHP-Skeleton\\app/Resources\\views/project/delete.html.twig");
    }
}
