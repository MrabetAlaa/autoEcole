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

/* login/login.html.twig */
class __TwigTemplate_f0e21d63a6cc3758b6f5056216f80e7d extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('javascripts', $context, $blocks);
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/sign-in.css"), "html", null, true);
        echo "\"> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"form-container log-in-form\">
    <h2>ACRO</h2>
    <h5>Log IN</h5>
<form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
    <div class=\"form-field\">
        <label for=\"username\">Email:</label>
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
            <input type=\"text\" id=\"username\" name=\"_username\" autofocus placeholder=\"example@gmail.com\"/>
        </div>
    </div>
    <div class=\"form-field\">
        <label for=\"password\">Password:</label>
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"********\"/>
        </div>
    </div>
    ";
        // line 26
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "        <div class=\"errors\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })()), "messageKey", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })()), "messageData", [], "any", false, false, false, 27), "security"), "html", null, true);
            echo " </div>
    ";
        }
        // line 29
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"log-in\">créer nouveau compte ?</a>
    <div class=\"btn\">
        <button type=\"submit\">Confirm</button>
    </div>
</form>
<div>  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 29,  118 => 27,  116 => 26,  98 => 11,  93 => 8,  86 => 7,  78 => 5,  71 => 4,  61 => 2,  54 => 1,  47 => 7,  45 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset('build/sign-in.css')}}\"> 
{% endblock %}
{% block javascripts %}
    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
{% endblock %}
{% block body %}
<div class=\"form-container log-in-form\">
    <h2>ACRO</h2>
    <h5>Log IN</h5>
<form action=\"{{ path('app_login') }}\" method=\"post\">
    <div class=\"form-field\">
        <label for=\"username\">Email:</label>
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
            <input type=\"text\" id=\"username\" name=\"_username\" autofocus placeholder=\"example@gmail.com\"/>
        </div>
    </div>
    <div class=\"form-field\">
        <label for=\"password\">Password:</label>
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"********\"/>
        </div>
    </div>
    {% if error %}
        <div class=\"errors\">{{ error.messageKey|trans(error.messageData, 'security') }} </div>
    {% endif %}
    <a href=\"{{path('app_register')}}\" class=\"log-in\">créer nouveau compte ?</a>
    <div class=\"btn\">
        <button type=\"submit\">Confirm</button>
    </div>
</form>
<div>  
{% endblock %}", "login/login.html.twig", "/home/firas/Desktop/v2/ACRO/templates/login/login.html.twig");
    }
}
