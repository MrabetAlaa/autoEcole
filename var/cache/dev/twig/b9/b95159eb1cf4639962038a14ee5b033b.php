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

/* user/all.html.twig */
class __TwigTemplate_97caf0831dd4b9e50d1122015fc76d8f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/all.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/list-users.css"), "html", null, true);
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 10
            echo "        <div class=\"user\">
                <div class=\"personel-infos\">
                    <div class=\"first_name\">
                        <div class=\"icon\"><i class=\"fa-solid fa-user\"></i></div>
                        <p class=\"field-text\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPrenom", [], "method", false, false, false, 14), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"last_name\">
                        <div class=\"icon\"><i class=\"fa-solid fa-user\"></i></div>
                        <p class=\"field-text\"> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getNom", [], "method", false, false, false, 18), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"email-infos\">
                    <div class=\"email\">
                        <div class=\"icon\"><i class=\"fa-solid fa-envelope\"></i></div>
                        <p class=\"field-text\"> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getEmail", [], "method", false, false, false, 24), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"password\">
                        <div class=\"icon\"><i class=\"fa-solid fa-lock\"></i></div>
                        <p class=\"field-text\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPassword", [], "method", false, false, false, 28), "html", null, true);
            echo "</p>
                    </div>
            </div>
            <div class=\"btn\">
                ";
            // line 32
            if ((((twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 32)) && twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 32, $this->source); })()), "roles", [], "any", false, false, false, 32))) || (twig_in_filter("ROLE_SUPERADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 32)) && twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 32, $this->source); })()), "roles", [], "any", false, false, false, 32)))) || (twig_in_filter("ROLE_SUPERADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 32)) && twig_in_filter("ROLE_SUPERADMIN", twig_get_attribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 32, $this->source); })()), "roles", [], "any", false, false, false, 32))))) {
                // line 33
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.modifier_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 33)]), "html", null, true);
                echo "\" class=\"update disabled-link-update\">modifier</a>
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.supprimer_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 34)]), "html", null, true);
                echo "\" class=\"delete disabled-link-delete\">supprimer</a>
                ";
            } else {
                // line 36
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.modifier_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 36)]), "html", null, true);
                echo "\" class=\"update\">modifier</a>
                    <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.supprimer_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"delete\">supprimer</a>
                ";
            }
            // line 39
            echo "            </div>
            </div>
        </div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    <a class=\"question-list\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_all");
        echo "\">liste des question</a>
    <a class=\"add-user\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.add_user");
        echo "\">Ajouter utilisateur</a>
    <a class=\"all-lessons\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lessons_all");
        echo "\">liste des lessons</a>
    <a class=\"categories\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\">retour</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 46,  174 => 45,  170 => 44,  165 => 43,  156 => 39,  151 => 37,  146 => 36,  141 => 34,  136 => 33,  134 => 32,  127 => 28,  120 => 24,  111 => 18,  104 => 14,  98 => 10,  93 => 9,  86 => 8,  78 => 6,  71 => 5,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset('build/list-users.css')}}\"> 
{% endblock %}
{% block javascripts %}
    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
{% endblock %} 
{% block body %}
    {% for user in users %}
        <div class=\"user\">
                <div class=\"personel-infos\">
                    <div class=\"first_name\">
                        <div class=\"icon\"><i class=\"fa-solid fa-user\"></i></div>
                        <p class=\"field-text\">{{user.getPrenom() }}</p>
                    </div>
                    <div class=\"last_name\">
                        <div class=\"icon\"><i class=\"fa-solid fa-user\"></i></div>
                        <p class=\"field-text\"> {{ user.getNom() }}</p>
                    </div>
                </div>
                <div class=\"email-infos\">
                    <div class=\"email\">
                        <div class=\"icon\"><i class=\"fa-solid fa-envelope\"></i></div>
                        <p class=\"field-text\"> {{ user.getEmail() }}</p>
                    </div>
                    <div class=\"password\">
                        <div class=\"icon\"><i class=\"fa-solid fa-lock\"></i></div>
                        <p class=\"field-text\">{{ user.getPassword() }}</p>
                    </div>
            </div>
            <div class=\"btn\">
                {% if ('ROLE_ADMIN' in user.roles and 'ROLE_ADMIN' in me.roles) or ('ROLE_SUPERADMIN' in user.roles and 'ROLE_ADMIN' in me.roles) or ('ROLE_SUPERADMIN' in user.roles and 'ROLE_SUPERADMIN' in me.roles) %}
                <a href=\"{{path('users.modifier_user' , {'id' : user.getId() }) }}\" class=\"update disabled-link-update\">modifier</a>
                <a href=\"{{path('users.supprimer_user' , {'id' : user.getId() }) }}\" class=\"delete disabled-link-delete\">supprimer</a>
                {% else %}
                    <a href=\"{{path('users.modifier_user' , {'id' : user.getId() }) }}\" class=\"update\">modifier</a>
                    <a href=\"{{path('users.supprimer_user' , {'id' : user.getId() }) }}\" class=\"delete\">supprimer</a>
                {% endif %}
            </div>
            </div>
        </div> 
    {% endfor %}
    <a class=\"question-list\" href=\"{{path('question_all')}}\">liste des question</a>
    <a class=\"add-user\" href=\"{{path('users.add_user')}}\">Ajouter utilisateur</a>
    <a class=\"all-lessons\" href=\"{{path('app_lessons_all')}}\">liste des lessons</a>
    <a class=\"categories\" href=\"{{path('app_categories')}}\">retour</a>
{% endblock %}

", "user/all.html.twig", "/home/firas/Desktop/v2/ACRO/templates/user/all.html.twig");
    }
}
