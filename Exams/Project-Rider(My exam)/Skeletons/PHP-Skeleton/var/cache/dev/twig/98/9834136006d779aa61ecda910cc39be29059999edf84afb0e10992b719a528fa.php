<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_36158502f34151ca36248af55ab143cf46b8be4acd3bdad905ce9f1c8086b6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36158502f34151ca36248af55ab143cf46b8be4acd3bdad905ce9f1c8086b6fd->enter($__internal_36158502f34151ca36248af55ab143cf46b8be4acd3bdad905ce9f1c8086b6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_823c57a68ff0161b6f40023c7951862df98e726c6d6488a19809c94b9c3e1f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823c57a68ff0161b6f40023c7951862df98e726c6d6488a19809c94b9c3e1f4b->enter($__internal_823c57a68ff0161b6f40023c7951862df98e726c6d6488a19809c94b9c3e1f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36158502f34151ca36248af55ab143cf46b8be4acd3bdad905ce9f1c8086b6fd->leave($__internal_36158502f34151ca36248af55ab143cf46b8be4acd3bdad905ce9f1c8086b6fd_prof);

        
        $__internal_823c57a68ff0161b6f40023c7951862df98e726c6d6488a19809c94b9c3e1f4b->leave($__internal_823c57a68ff0161b6f40023c7951862df98e726c6d6488a19809c94b9c3e1f4b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6cb1a4b489eb7ee0e81d50107f7c7020a33d72bd71faf0375cbbcf410c9b0d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb1a4b489eb7ee0e81d50107f7c7020a33d72bd71faf0375cbbcf410c9b0d83->enter($__internal_6cb1a4b489eb7ee0e81d50107f7c7020a33d72bd71faf0375cbbcf410c9b0d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3cb9cfc4efd2358a8129ca9efb1e0e7b1a072baa870eb080ac92d2a3119bdd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb9cfc4efd2358a8129ca9efb1e0e7b1a072baa870eb080ac92d2a3119bdd30->enter($__internal_3cb9cfc4efd2358a8129ca9efb1e0e7b1a072baa870eb080ac92d2a3119bdd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3cb9cfc4efd2358a8129ca9efb1e0e7b1a072baa870eb080ac92d2a3119bdd30->leave($__internal_3cb9cfc4efd2358a8129ca9efb1e0e7b1a072baa870eb080ac92d2a3119bdd30_prof);

        
        $__internal_6cb1a4b489eb7ee0e81d50107f7c7020a33d72bd71faf0375cbbcf410c9b0d83->leave($__internal_6cb1a4b489eb7ee0e81d50107f7c7020a33d72bd71faf0375cbbcf410c9b0d83_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87059b7078dcb0368a16173b89c5662deded6c8dbb7cb648237a45f6a0eeee14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87059b7078dcb0368a16173b89c5662deded6c8dbb7cb648237a45f6a0eeee14->enter($__internal_87059b7078dcb0368a16173b89c5662deded6c8dbb7cb648237a45f6a0eeee14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b41ba2f2e84e16a4cad48da7e2867773d64a354f78d5caa559510782bff0fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b41ba2f2e84e16a4cad48da7e2867773d64a354f78d5caa559510782bff0fa1->enter($__internal_5b41ba2f2e84e16a4cad48da7e2867773d64a354f78d5caa559510782bff0fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b41ba2f2e84e16a4cad48da7e2867773d64a354f78d5caa559510782bff0fa1->leave($__internal_5b41ba2f2e84e16a4cad48da7e2867773d64a354f78d5caa559510782bff0fa1_prof);

        
        $__internal_87059b7078dcb0368a16173b89c5662deded6c8dbb7cb648237a45f6a0eeee14->leave($__internal_87059b7078dcb0368a16173b89c5662deded6c8dbb7cb648237a45f6a0eeee14_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d73a3f85e267acd43291388e37c474cd4920d6d44d0b4b205b1e0a01333c814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d73a3f85e267acd43291388e37c474cd4920d6d44d0b4b205b1e0a01333c814->enter($__internal_6d73a3f85e267acd43291388e37c474cd4920d6d44d0b4b205b1e0a01333c814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_484a7e672280c0e5a214d94f0c40bd80536b86d8b0bc565aa6c32db50e694681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484a7e672280c0e5a214d94f0c40bd80536b86d8b0bc565aa6c32db50e694681->enter($__internal_484a7e672280c0e5a214d94f0c40bd80536b86d8b0bc565aa6c32db50e694681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_484a7e672280c0e5a214d94f0c40bd80536b86d8b0bc565aa6c32db50e694681->leave($__internal_484a7e672280c0e5a214d94f0c40bd80536b86d8b0bc565aa6c32db50e694681_prof);

        
        $__internal_6d73a3f85e267acd43291388e37c474cd4920d6d44d0b4b205b1e0a01333c814->leave($__internal_6d73a3f85e267acd43291388e37c474cd4920d6d44d0b4b205b1e0a01333c814_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Lyubo\\Desktop\\exam\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
