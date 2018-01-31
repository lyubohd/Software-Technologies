<?php

/* :project:create.html.twig */
class __TwigTemplate_554ce2a565e3f40b5aec014ba1dafbebaf1d412fdc82eed325a73c6bf41a5acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:create.html.twig", 1);
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
        $__internal_c1f4edb2a24af8d4758db7d8614ec42faf37f24b079d24b643b0d09415926fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f4edb2a24af8d4758db7d8614ec42faf37f24b079d24b643b0d09415926fde->enter($__internal_c1f4edb2a24af8d4758db7d8614ec42faf37f24b079d24b643b0d09415926fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $__internal_666ca569d101790366afafa4d0d5c772897a5549725ab2bbb13606dc55dd675c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666ca569d101790366afafa4d0d5c772897a5549725ab2bbb13606dc55dd675c->enter($__internal_666ca569d101790366afafa4d0d5c772897a5549725ab2bbb13606dc55dd675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1f4edb2a24af8d4758db7d8614ec42faf37f24b079d24b643b0d09415926fde->leave($__internal_c1f4edb2a24af8d4758db7d8614ec42faf37f24b079d24b643b0d09415926fde_prof);

        
        $__internal_666ca569d101790366afafa4d0d5c772897a5549725ab2bbb13606dc55dd675c->leave($__internal_666ca569d101790366afafa4d0d5c772897a5549725ab2bbb13606dc55dd675c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_0c9534e2c478dd934c7f5f2b373c6e3e550bc2ca9497569479fdab230d16897c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9534e2c478dd934c7f5f2b373c6e3e550bc2ca9497569479fdab230d16897c->enter($__internal_0c9534e2c478dd934c7f5f2b373c6e3e550bc2ca9497569479fdab230d16897c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6b22916f98f396461e7ecd6866d7fce840e4d8b75087a1ea9d129044775278df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b22916f98f396461e7ecd6866d7fce840e4d8b75087a1ea9d129044775278df->enter($__internal_6b22916f98f396461e7ecd6866d7fce840e4d8b75087a1ea9d129044775278df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_6b22916f98f396461e7ecd6866d7fce840e4d8b75087a1ea9d129044775278df->leave($__internal_6b22916f98f396461e7ecd6866d7fce840e4d8b75087a1ea9d129044775278df_prof);

        
        $__internal_0c9534e2c478dd934c7f5f2b373c6e3e550bc2ca9497569479fdab230d16897c->leave($__internal_0c9534e2c478dd934c7f5f2b373c6e3e550bc2ca9497569479fdab230d16897c_prof);

    }

    public function getTemplateName()
    {
        return ":project:create.html.twig";
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
{% endblock %}", ":project:create.html.twig", "C:\\Users\\Lyubo\\Desktop\\exam\\Skeletons\\PHP-Skeleton\\app/Resources\\views/project/create.html.twig");
    }
}
