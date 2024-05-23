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

/* home/signin.html.twig */
class __TwigTemplate_8d6fb7c8e9ad81f5fb8d69c6c489395d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/signin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ar-fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    <title></title>
</head>
<body>
<div class=\"form-container\">
    <h2>ACRO</h2>
    <h5>créer un nouveau compte</h5>
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-field\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-field\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-field\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-field\">
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "password", [], "any", false, false, false, 42), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "password", [], "any", false, false, false, 45), 'widget');
        echo "
        </div>
    </div>
    <div class=\"btn\">
        <button type=\"submit\">Créer</button>
    </div>
    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
<div>    
</body>
</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/signin.css"), "html", null, true);
        echo "\"> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 11,  151 => 10,  141 => 8,  134 => 7,  121 => 51,  112 => 45,  106 => 42,  99 => 38,  93 => 35,  86 => 31,  80 => 28,  73 => 24,  67 => 21,  62 => 19,  54 => 13,  52 => 10,  50 => 7,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ar-fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset('build/signin.css')}}\"> 
{% endblock %}
{% block javascripts %}
    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
{% endblock %}
    <title></title>
</head>
<body>
<div class=\"form-container\">
    <h2>ACRO</h2>
    <h5>créer un nouveau compte</h5>
{{form_start(form)}}
    <div class=\"form-field\">
        {{form_label(form.prenom)}}
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            {{form_widget(form.prenom)}}
        </div>
    </div>
    <div class=\"form-field\">
        {{form_label(form.nom)}}
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            {{form_widget(form.nom)}}
        </div>
    </div>
    <div class=\"form-field\">
        {{form_label(form.email)}}
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
            {{form_widget(form.email)}}
        </div>
    </div>
    <div class=\"form-field\">
        {{form_label(form.password)}}
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
            {{form_widget(form.password)}}
        </div>
    </div>
    <div class=\"btn\">
        <button type=\"submit\">Créer</button>
    </div>
    {{form_end(form)}}
<div>    
</body>
</html>

", "home/signin.html.twig", "/home/firas/Desktop/v2/ACRO/templates/home/signin.html.twig");
    }
}
