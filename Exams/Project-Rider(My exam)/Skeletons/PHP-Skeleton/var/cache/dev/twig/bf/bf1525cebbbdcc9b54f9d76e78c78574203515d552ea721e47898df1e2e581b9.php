<?php

/* project/create.html.twig */
class __TwigTemplate_2a1b5d707aa72104692b6ffa1a05c4fb1e74d1bf350d67ef9d0e176233c33cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/create.html.twig", 1);
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
        $__internal_414e7a51b0b459a5a41b62c510cfdf6c475420c7bfbcc247884ee2cd9720d0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414e7a51b0b459a5a41b62c510cfdf6c475420c7bfbcc247884ee2cd9720d0d4->enter($__internal_414e7a51b0b459a5a41b62c510cfdf6c475420c7bfbcc247884ee2cd9720d0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $__internal_e95cc4a56601c73c731d0bd340cb161398956e4a3d7b957faa05e7af3bc5fdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95cc4a56601c73c731d0bd340cb161398956e4a3d7b957faa05e7af3bc5fdd7->enter($__internal_e95cc4a56601c73c731d0bd340cb161398956e4a3d7b957faa05e7af3bc5fdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_414e7a51b0b459a5a41b62c510cfdf6c475420c7bfbcc247884ee2cd9720d0d4->leave($__internal_414e7a51b0b459a5a41b62c510cfdf6c475420c7bfbcc247884ee2cd9720d0d4_prof);

        
        $__internal_e95cc4a56601c73c731d0bd340cb161398956e4a3d7b957faa05e7af3bc5fdd7->leave($__internal_e95cc4a56601c73c731d0bd340cb161398956e4a3d7b957faa05e7af3bc5fdd7_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_45278970feeca58df1cea36ccacd8121067caff198ae12fcf3b74df0925b5d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45278970feeca58df1cea36ccacd8121067caff198ae12fcf3b74df0925b5d2d->enter($__internal_45278970feeca58df1cea36ccacd8121067caff198ae12fcf3b74df0925b5d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_cf65db39bb30d8c29a8aa0bf6acdcdd6b8a8ae27140221642c8aeb154d62d85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf65db39bb30d8c29a8aa0bf6acdcdd6b8a8ae27140221642c8aeb154d62d85e->enter($__internal_cf65db39bb30d8c29a8aa0bf6acdcdd6b8a8ae27140221642c8aeb154d62d85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_cf65db39bb30d8c29a8aa0bf6acdcdd6b8a8ae27140221642c8aeb154d62d85e->leave($__internal_cf65db39bb30d8c29a8aa0bf6acdcdd6b8a8ae27140221642c8aeb154d62d85e_prof);

        
        $__internal_45278970feeca58df1cea36ccacd8121067caff198ae12fcf3b74df0925b5d2d->leave($__internal_45278970feeca58df1cea36ccacd8121067caff198ae12fcf3b74df0925b5d2d_prof);

    }

    public function getTemplateName()
    {
        return "project/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", "project/create.html.twig", "C:\\Users\\Lyubo\\Desktop\\exam\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\project\\create.html.twig");
    }
}
