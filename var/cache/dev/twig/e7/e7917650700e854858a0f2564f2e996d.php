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

/* user/modifier.html.twig */
class __TwigTemplate_d0f9812e62d448092955afd7363f94bf extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/modifier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/modifier.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"";
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
        echo "<div class=\"form-container\">
    <h2>ACRO</h2>
    <h5>modifier  compte</h5>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-field\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), 'widget');
        echo "
        </div>
        ";
        // line 19
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), 'errors')) {
            // line 20
            echo "        <div class=\"errors\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'errors');
            echo "</div>
        ";
        }
        // line 22
        echo "    </div>
    <div class=\"form-field\">
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'widget');
        echo "
        </div>
        ";
        // line 29
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'errors')) {
            // line 30
            echo "        <div class=\"errors\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'errors');
            echo "</div>
        ";
        }
        // line 32
        echo "    </div>
    <div class=\"form-field\">
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'widget');
        echo "
        </div>
        ";
        // line 39
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'errors')) {
            // line 40
            echo "        <div class=\"errors\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'errors');
            echo "</div>
        ";
        }
        // line 42
        echo "    </div>
    <div class=\"form-field\">
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), 'label');
        echo "
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-lock\"></i></div>
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "password", [], "any", false, false, false, 47), 'widget');
        echo "
        </div>
        ";
        // line 49
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), 'errors')) {
            // line 50
            echo "        <div class=\"errors\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), 'errors');
            echo "</div>
        ";
        }
        // line 52
        echo "    </div>
    ";
        // line 53
        if ((twig_in_filter("ROLE_SUPERADMIN", twig_get_attribute($this->env, $this->source, (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 53, $this->source); })()), "roles", [], "any", false, false, false, 53)) && !twig_in_filter("ROLE_SUPERADMIN", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "roles", [], "any", false, false, false, 53)))) {
            // line 54
            echo "        <div class=\"form-field\">
        <select name=\"roles\" class=\"select-roles\">
        ";
            // line 56
            if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "roles", [], "any", false, false, false, 56))) {
                // line 57
                echo "            <option value=\"ROLE_USER\" selected>user</option>
            <option value=\"ROLE_ADMIN\">admin</option>
        ";
            } elseif (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source,             // line 59
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "roles", [], "any", false, false, false, 59))) {
                // line 60
                echo "            <option value=\"ROLE_USER\">user</option>
            <option value=\"ROLE_ADMIN\" selected>admin</option>
        ";
            }
            // line 63
            echo "        </select>
    </div>
    ";
        }
        // line 66
        echo "    <div class=\"btn\">
        <button type=\"submit\">modifier</button>
    </div>
    ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
        echo "
<div>   
<a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.all_users");
        echo "\" class=\"back\">retour</a> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 71,  223 => 69,  218 => 66,  213 => 63,  208 => 60,  206 => 59,  202 => 57,  200 => 56,  196 => 54,  194 => 53,  191 => 52,  185 => 50,  183 => 49,  178 => 47,  172 => 44,  168 => 42,  162 => 40,  160 => 39,  155 => 37,  149 => 34,  145 => 32,  139 => 30,  137 => 29,  132 => 27,  126 => 24,  122 => 22,  116 => 20,  114 => 19,  109 => 17,  103 => 14,  98 => 12,  93 => 9,  86 => 8,  78 => 6,  71 => 5,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset('build/sign-in.css')}}\"> 
{% endblock %}
{% block javascripts %}
    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
{% endblock %}
{% block body %}
<div class=\"form-container\">
    <h2>ACRO</h2>
    <h5>modifier  compte</h5>
{{form_start(form)}}
    <div class=\"form-field\">
        {{form_label(form.prenom)}}
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            {{form_widget(form.prenom)}}
        </div>
        {% if form_errors(form.prenom) %}
        <div class=\"errors\">{{form_errors(form.prenom)}}</div>
        {% endif %}
    </div>
    <div class=\"form-field\">
        {{form_label(form.nom)}}
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-user\"></i></div>
            {{form_widget(form.nom)}}
        </div>
        {% if form_errors(form.nom) %}
        <div class=\"errors\">{{form_errors(form.nom)}}</div>
        {% endif %}
    </div>
    <div class=\"form-field\">
        {{form_label(form.email)}}
        <div class=\"input-field\">
            <div class=\"field-icon\"><i class=\"fa-solid fa-envelope\"></i></div>
            {{form_widget(form.email)}}
        </div>
        {% if form_errors(form.email) %}
        <div class=\"errors\">{{form_errors(form.email)}}</div>
        {% endif %}
    </div>
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
    {% if 'ROLE_SUPERADMIN' in current.roles  and 'ROLE_SUPERADMIN' not in user.roles%}
        <div class=\"form-field\">
        <select name=\"roles\" class=\"select-roles\">
        {% if 'ROLE_USER' in user.roles %}
            <option value=\"ROLE_USER\" selected>user</option>
            <option value=\"ROLE_ADMIN\">admin</option>
        {% elseif 'ROLE_ADMIN' in user.roles %}
            <option value=\"ROLE_USER\">user</option>
            <option value=\"ROLE_ADMIN\" selected>admin</option>
        {% endif %}
        </select>
    </div>
    {% endif %}
    <div class=\"btn\">
        <button type=\"submit\">modifier</button>
    </div>
    {{form_end(form)}}
<div>   
<a href=\"{{path('users.all_users')}}\" class=\"back\">retour</a> 
{% endblock %}
", "user/modifier.html.twig", "/home/firas/Desktop/v2/ACRO/templates/user/modifier.html.twig");
    }
}
