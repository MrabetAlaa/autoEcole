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

/* registration/register.html.twig */
class __TwigTemplate_822032c59095a4562ed590c69bdca174 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-field\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'widget');
        echo "
        </div>
        ";
        // line 26
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), 'errors')) {
            // line 27
            echo "            <div class=\"errors\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'errors');
            echo "</div>
        ";
        }
        // line 29
        echo "    </div>
    <div class=\"form-field\">
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'widget');
        echo "
        </div>
        ";
        // line 36
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'errors')) {
            // line 37
            echo "        <div class=\"errors\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'errors');
            echo "</div>
        ";
        }
        // line 39
        echo "    </div>
    <div class=\"form-field\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'widget');
        echo "
        </div>
        ";
        // line 46
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'errors')) {
            // line 47
            echo "        <div class=\"errors\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'errors');
            echo "</div>
        ";
        }
        // line 49
        echo "    </div>
    <div class=\"form-field\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "password", [], "any", false, false, false, 51), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), 'widget');
        echo "
        </div>
        ";
        // line 56
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "password", [], "any", false, false, false, 56), 'errors')) {
            // line 57
            echo "        <div class=\"errors\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), 'errors');
            echo "</div>
        ";
        }
        // line 59
        echo "    </div>
    <a class=\"log-in\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">connectez a votre compte ?</a>
    <div class=\"btn\">
        <button type=\"submit\">Créer</button>
    </div>
    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), 'form_end');
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/sign-in.css"), "html", null, true);
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
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 11,  196 => 10,  186 => 8,  179 => 7,  165 => 64,  158 => 60,  155 => 59,  149 => 57,  147 => 56,  142 => 54,  136 => 51,  132 => 49,  126 => 47,  124 => 46,  119 => 44,  113 => 41,  109 => 39,  103 => 37,  101 => 36,  96 => 34,  90 => 31,  86 => 29,  80 => 27,  78 => 26,  73 => 24,  67 => 21,  62 => 19,  54 => 13,  52 => 10,  50 => 7,  42 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{asset('build/sign-in.css')}}\"> 
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
{{form_start(registrationForm)}}
    <div class=\"form-field\">
        {{form_label(registrationForm.prenom)}}
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            {{form_widget(registrationForm.prenom)}}
        </div>
        {% if form_errors(registrationForm.prenom) %}
            <div class=\"errors\">{{form_errors(registrationForm.prenom)}}</div>
        {% endif %}
    </div>
    <div class=\"form-field\">
        {{form_label(registrationForm.nom)}}
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            {{form_widget(registrationForm.nom)}}
        </div>
        {% if form_errors(registrationForm.nom) %}
        <div class=\"errors\">{{form_errors(registrationForm.nom)}}</div>
        {% endif %}
    </div>
    <div class=\"form-field\">
        {{form_label(registrationForm.email)}}
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
            {{form_widget(registrationForm.email)}}
        </div>
        {% if form_errors(registrationForm.email) %}
        <div class=\"errors\">{{form_errors(registrationForm.email)}}</div>
        {% endif %}
    </div>
    <div class=\"form-field\">
        {{form_label(registrationForm.password)}}
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
            {{form_widget(registrationForm.password)}}
        </div>
        {% if form_errors(registrationForm.password) %}
        <div class=\"errors\">{{form_errors(registrationForm.password)}}</div>
        {% endif %}
    </div>
    <a class=\"log-in\" href=\"{{path('app_login')}}\">connectez a votre compte ?</a>
    <div class=\"btn\">
        <button type=\"submit\">Créer</button>
    </div>
    {{form_end(registrationForm)}}
<div>    
</body>
</html>


", "registration/register.html.twig", "/home/firas/Desktop/v2/ACRO/templates/registration/register.html.twig");
    }
}
