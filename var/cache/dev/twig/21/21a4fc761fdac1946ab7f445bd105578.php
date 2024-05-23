<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login/modifier-mdp.html.twig */
class __TwigTemplate_f0f4c67c1e2fe23f7fb84429c4959355 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/modifier-mdp.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/modifier-mdp.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/sign-in.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"mdp-form-container\">
        <h2>ACRO</h2>
        <h5>changer votre mot de pass</h5>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-field\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "password", [], "any", false, false, false, 14), 'label');
        echo "
            <div class=\"input-field\">
                <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "password", [], "any", false, false, false, 17), 'widget');
        echo "
            </div>
                ";
        // line 19
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "password", [], "any", false, false, false, 19), 'errors')) {
            // line 20
            echo "                <div class=\"errors\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "password", [], "any", false, false, false, 20), 'errors');
            echo "</div>
        ";
        }
        // line 22
        echo "        </div>
        <div class=\"form-field\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "confirmPassword", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), 'label');
        echo "
            <div class=\"input-field\">
                <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "confirmPassword", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-field\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "confirmPassword", [], "any", false, false, false, 31), "second", [], "any", false, false, false, 31), 'label');
        echo "
            <div class=\"input-field\">
                <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "confirmPassword", [], "any", false, false, false, 34), "second", [], "any", false, false, false, 34), 'widget');
        echo "
            </div>
                ";
        // line 36
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "password", [], "any", false, false, false, 36), 'errors')) {
            // line 37
            echo "                <div class=\"errors\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), 'errors');
            echo "</div>
                ";
        }
        // line 39
        echo "        </div>
        <div class=\"eye-icon\">
            <i class=\"fa-solid fa-eye\"></i>
        </div>
        <div class=\"btn\">
            <button type=\"submit\">Changer</button>
        </div>
        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
    <div>    
    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\" class=\"back\">retour</a> 
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/change-password.js"), "html", null, true);
        echo " \"></script>  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "login/modifier-mdp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 49,  172 => 48,  167 => 46,  158 => 39,  152 => 37,  150 => 36,  145 => 34,  139 => 31,  132 => 27,  126 => 24,  122 => 22,  116 => 20,  114 => 19,  109 => 17,  103 => 14,  98 => 12,  93 => 9,  86 => 8,  78 => 6,  71 => 5,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\" {{ asset('build/sign-in.css') }}\">
{% endblock %}
{% block javascripts %}
    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
{% endblock %}
{% block body %}
    <div class=\"mdp-form-container\">
        <h2>ACRO</h2>
        <h5>changer votre mot de pass</h5>
    {{form_start(form)}}
        <div class=\"form-field\">
            {{form_label(form.password)}}
            <div class=\"input-field\">
                <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
                {{form_widget(form.password)}}
            </div>
                {% if form_errors(form.password) %}
                <div class=\"errors\">{{form_errors(form.password)}}</div>
        {% endif %}
        </div>
        <div class=\"form-field\">
            {{form_label(form.confirmPassword.first)}}
            <div class=\"input-field\">
                <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
                {{form_widget(form.confirmPassword.first)}}
            </div>
        </div>
        <div class=\"form-field\">
            {{form_label(form.confirmPassword.second)}}
            <div class=\"input-field\">
                <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
                {{form_widget(form.confirmPassword.second)}}
            </div>
                {% if form_errors(form.password) %}
                <div class=\"errors\">{{form_errors(form.password)}}</div>
                {% endif %}
        </div>
        <div class=\"eye-icon\">
            <i class=\"fa-solid fa-eye\"></i>
        </div>
        <div class=\"btn\">
            <button type=\"submit\">Changer</button>
        </div>
        {{form_end(form)}}
    <div>    
    <a href=\"{{path('app_categories')}}\" class=\"back\">retour</a> 
    <script src=\"{{ asset('js/change-password.js') }} \"></script>  
{% endblock %}

", "login/modifier-mdp.html.twig", "/home/firas/Desktop/v2/ACRO/templates/login/modifier-mdp.html.twig");
    }
}
