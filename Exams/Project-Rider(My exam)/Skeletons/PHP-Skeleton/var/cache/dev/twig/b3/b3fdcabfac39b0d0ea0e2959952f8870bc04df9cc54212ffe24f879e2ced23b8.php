<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0b0bc183bf6cacd59b819040cf4126eb92da467e42cfd4cd617359cf5a8b431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b0bc183bf6cacd59b819040cf4126eb92da467e42cfd4cd617359cf5a8b431->enter($__internal_f0b0bc183bf6cacd59b819040cf4126eb92da467e42cfd4cd617359cf5a8b431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a4aa116fb61d705038b028987bd7ed86aa54cf5b5e5c0324a902ac8f97e93ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4aa116fb61d705038b028987bd7ed86aa54cf5b5e5c0324a902ac8f97e93ea7->enter($__internal_a4aa116fb61d705038b028987bd7ed86aa54cf5b5e5c0324a902ac8f97e93ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f0b0bc183bf6cacd59b819040cf4126eb92da467e42cfd4cd617359cf5a8b431->leave($__internal_f0b0bc183bf6cacd59b819040cf4126eb92da467e42cfd4cd617359cf5a8b431_prof);

        
        $__internal_a4aa116fb61d705038b028987bd7ed86aa54cf5b5e5c0324a902ac8f97e93ea7->leave($__internal_a4aa116fb61d705038b028987bd7ed86aa54cf5b5e5c0324a902ac8f97e93ea7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ca0ab95fb91a68bf5b4ec81be08b6c8b187abacecfcc7c64c587345bffb2ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca0ab95fb91a68bf5b4ec81be08b6c8b187abacecfcc7c64c587345bffb2ab5->enter($__internal_1ca0ab95fb91a68bf5b4ec81be08b6c8b187abacecfcc7c64c587345bffb2ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc4914db9c2c75b0b1ece51bde0b301cbaa40d5128f6d06696474e7f6b67b493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4914db9c2c75b0b1ece51bde0b301cbaa40d5128f6d06696474e7f6b67b493->enter($__internal_fc4914db9c2c75b0b1ece51bde0b301cbaa40d5128f6d06696474e7f6b67b493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fc4914db9c2c75b0b1ece51bde0b301cbaa40d5128f6d06696474e7f6b67b493->leave($__internal_fc4914db9c2c75b0b1ece51bde0b301cbaa40d5128f6d06696474e7f6b67b493_prof);

        
        $__internal_1ca0ab95fb91a68bf5b4ec81be08b6c8b187abacecfcc7c64c587345bffb2ab5->leave($__internal_1ca0ab95fb91a68bf5b4ec81be08b6c8b187abacecfcc7c64c587345bffb2ab5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_df4d2d3bace1d67a066d18342fdc9d88c8df70b21ed566fb2a2f6868b5410287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4d2d3bace1d67a066d18342fdc9d88c8df70b21ed566fb2a2f6868b5410287->enter($__internal_df4d2d3bace1d67a066d18342fdc9d88c8df70b21ed566fb2a2f6868b5410287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75e43e395d4942edda050c6bdc52e55d047dd7c980778db98f8f5018085fd59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e43e395d4942edda050c6bdc52e55d047dd7c980778db98f8f5018085fd59d->enter($__internal_75e43e395d4942edda050c6bdc52e55d047dd7c980778db98f8f5018085fd59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_75e43e395d4942edda050c6bdc52e55d047dd7c980778db98f8f5018085fd59d->leave($__internal_75e43e395d4942edda050c6bdc52e55d047dd7c980778db98f8f5018085fd59d_prof);

        
        $__internal_df4d2d3bace1d67a066d18342fdc9d88c8df70b21ed566fb2a2f6868b5410287->leave($__internal_df4d2d3bace1d67a066d18342fdc9d88c8df70b21ed566fb2a2f6868b5410287_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e98cc1c0a2bd97157bc6975249ff46143eab892c8c6043ae5a83531c4670faca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98cc1c0a2bd97157bc6975249ff46143eab892c8c6043ae5a83531c4670faca->enter($__internal_e98cc1c0a2bd97157bc6975249ff46143eab892c8c6043ae5a83531c4670faca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_070f35a120647666256d293e48c441f56a562a959a8d8f339ae8c4f19fa031ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070f35a120647666256d293e48c441f56a562a959a8d8f339ae8c4f19fa031ce->enter($__internal_070f35a120647666256d293e48c441f56a562a959a8d8f339ae8c4f19fa031ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_070f35a120647666256d293e48c441f56a562a959a8d8f339ae8c4f19fa031ce->leave($__internal_070f35a120647666256d293e48c441f56a562a959a8d8f339ae8c4f19fa031ce_prof);

        
        $__internal_e98cc1c0a2bd97157bc6975249ff46143eab892c8c6043ae5a83531c4670faca->leave($__internal_e98cc1c0a2bd97157bc6975249ff46143eab892c8c6043ae5a83531c4670faca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\Lyubo\\Desktop\\exam\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
