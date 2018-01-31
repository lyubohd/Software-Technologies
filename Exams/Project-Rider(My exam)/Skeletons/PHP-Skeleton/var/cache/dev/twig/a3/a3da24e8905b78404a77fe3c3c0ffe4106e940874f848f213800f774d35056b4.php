<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf57a76ad288984c4aefd7449195ef35916fee625feb7cf0c7d2cb3aac3d6265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf57a76ad288984c4aefd7449195ef35916fee625feb7cf0c7d2cb3aac3d6265->enter($__internal_bf57a76ad288984c4aefd7449195ef35916fee625feb7cf0c7d2cb3aac3d6265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_379901ad367f425708b5b303bfae6bacd39151a68bc95cfc73953b828962e5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379901ad367f425708b5b303bfae6bacd39151a68bc95cfc73953b828962e5b2->enter($__internal_379901ad367f425708b5b303bfae6bacd39151a68bc95cfc73953b828962e5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "</body>
</html>
";
        
        $__internal_bf57a76ad288984c4aefd7449195ef35916fee625feb7cf0c7d2cb3aac3d6265->leave($__internal_bf57a76ad288984c4aefd7449195ef35916fee625feb7cf0c7d2cb3aac3d6265_prof);

        
        $__internal_379901ad367f425708b5b303bfae6bacd39151a68bc95cfc73953b828962e5b2->leave($__internal_379901ad367f425708b5b303bfae6bacd39151a68bc95cfc73953b828962e5b2_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_83ab4b96fa8632edb4a25041f2222aab015d4c8cb5abadbac148a1a13fb28f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ab4b96fa8632edb4a25041f2222aab015d4c8cb5abadbac148a1a13fb28f3b->enter($__internal_83ab4b96fa8632edb4a25041f2222aab015d4c8cb5abadbac148a1a13fb28f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c614290a702844fb21266cd6b60fa13ced5c2a65aa52fd0ef5f22436ab3b423e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c614290a702844fb21266cd6b60fa13ced5c2a65aa52fd0ef5f22436ab3b423e->enter($__internal_c614290a702844fb21266cd6b60fa13ced5c2a65aa52fd0ef5f22436ab3b423e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project Rider";
        
        $__internal_c614290a702844fb21266cd6b60fa13ced5c2a65aa52fd0ef5f22436ab3b423e->leave($__internal_c614290a702844fb21266cd6b60fa13ced5c2a65aa52fd0ef5f22436ab3b423e_prof);

        
        $__internal_83ab4b96fa8632edb4a25041f2222aab015d4c8cb5abadbac148a1a13fb28f3b->leave($__internal_83ab4b96fa8632edb4a25041f2222aab015d4c8cb5abadbac148a1a13fb28f3b_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6e79554b4d2afe68e53040c0c4abc79a23dd4b9e8c4a2d02aec84ff4061aded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e79554b4d2afe68e53040c0c4abc79a23dd4b9e8c4a2d02aec84ff4061aded->enter($__internal_e6e79554b4d2afe68e53040c0c4abc79a23dd4b9e8c4a2d02aec84ff4061aded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6f5af5e6d465d097877c666721bf60a48db638d53c2b570141d60feb3ff21e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f5af5e6d465d097877c666721bf60a48db638d53c2b570141d60feb3ff21e7->enter($__internal_f6f5af5e6d465d097877c666721bf60a48db638d53c2b570141d60feb3ff21e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/create-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_f6f5af5e6d465d097877c666721bf60a48db638d53c2b570141d60feb3ff21e7->leave($__internal_f6f5af5e6d465d097877c666721bf60a48db638d53c2b570141d60feb3ff21e7_prof);

        
        $__internal_e6e79554b4d2afe68e53040c0c4abc79a23dd4b9e8c4a2d02aec84ff4061aded->leave($__internal_e6e79554b4d2afe68e53040c0c4abc79a23dd4b9e8c4a2d02aec84ff4061aded_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_00652d9c67f08f590dd2637913ddd04ff06487610be9c8666ca03be3391b13ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00652d9c67f08f590dd2637913ddd04ff06487610be9c8666ca03be3391b13ec->enter($__internal_00652d9c67f08f590dd2637913ddd04ff06487610be9c8666ca03be3391b13ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_65ed8e9288b1a84161c2de81d15976b228d2491f256799b40a18096f80c10f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ed8e9288b1a84161c2de81d15976b228d2491f256799b40a18096f80c10f15->enter($__internal_65ed8e9288b1a84161c2de81d15976b228d2491f256799b40a18096f80c10f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_65ed8e9288b1a84161c2de81d15976b228d2491f256799b40a18096f80c10f15->leave($__internal_65ed8e9288b1a84161c2de81d15976b228d2491f256799b40a18096f80c10f15_prof);

        
        $__internal_00652d9c67f08f590dd2637913ddd04ff06487610be9c8666ca03be3391b13ec->leave($__internal_00652d9c67f08f590dd2637913ddd04ff06487610be9c8666ca03be3391b13ec_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae57765cb2dcf998df8617ac5da952d04215539701eb95c1e5146f86e88cd99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae57765cb2dcf998df8617ac5da952d04215539701eb95c1e5146f86e88cd99e->enter($__internal_ae57765cb2dcf998df8617ac5da952d04215539701eb95c1e5146f86e88cd99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b3595d1d128d3c2f2fb3b551eed10960f8b0ec6a6615a2e71d21d9837361aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3595d1d128d3c2f2fb3b551eed10960f8b0ec6a6615a2e71d21d9837361aa3->enter($__internal_8b3595d1d128d3c2f2fb3b551eed10960f8b0ec6a6615a2e71d21d9837361aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_8b3595d1d128d3c2f2fb3b551eed10960f8b0ec6a6615a2e71d21d9837361aa3->leave($__internal_8b3595d1d128d3c2f2fb3b551eed10960f8b0ec6a6615a2e71d21d9837361aa3_prof);

        
        $__internal_ae57765cb2dcf998df8617ac5da952d04215539701eb95c1e5146f86e88cd99e->leave($__internal_ae57765cb2dcf998df8617ac5da952d04215539701eb95c1e5146f86e88cd99e_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_ac02e623010a1b71c2a13386bd6821005c27eb4c6c090196cc48f4f09a487f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac02e623010a1b71c2a13386bd6821005c27eb4c6c090196cc48f4f09a487f52->enter($__internal_ac02e623010a1b71c2a13386bd6821005c27eb4c6c090196cc48f4f09a487f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0bd7d4ac1b61b322896744468f625ceb2696f21142158fc47e9631f17412b2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd7d4ac1b61b322896744468f625ceb2696f21142158fc47e9631f17412b2f7->enter($__internal_0bd7d4ac1b61b322896744468f625ceb2696f21142158fc47e9631f17412b2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_0bd7d4ac1b61b322896744468f625ceb2696f21142158fc47e9631f17412b2f7->leave($__internal_0bd7d4ac1b61b322896744468f625ceb2696f21142158fc47e9631f17412b2f7_prof);

        
        $__internal_ac02e623010a1b71c2a13386bd6821005c27eb4c6c090196cc48f4f09a487f52->leave($__internal_ac02e623010a1b71c2a13386bd6821005c27eb4c6c090196cc48f4f09a487f52_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 21,  132 => 20,  115 => 19,  103 => 14,  99 => 13,  94 => 12,  85 => 11,  67 => 10,  55 => 23,  53 => 20,  49 => 19,  42 => 16,  40 => 11,  36 => 10,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Project Rider{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/create-style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">
{% block body %}
    {% block main %}{% endblock %}
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\Lyubo\\Desktop\\exam\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\base.html.twig");
    }
}
