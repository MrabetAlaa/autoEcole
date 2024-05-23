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

/* after.html.twig */
class __TwigTemplate_5255e0cf5f568f1bc6aba0d0a60542be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "after.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ar-fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/nav-bar.css"), "html", null, true);
        echo "\">
        ";
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
    <nav>
        <div class=\"logo\">
            <div class=\"logo-image\">

            </div>
            <div class=\"title\">
                ACRO
            </div>
        </div>
        <div class=\"menu\">
            <a href=\" ";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo " \">Lessons</a>
            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.examen");
        echo " \">Examen</a>
            <div class=\"nav-bar-personel-info\">
                <p class=\"nom\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                <div class=\"nav-bar-personel-info-icons\">
                    <i class=\"fa-solid fa-user\"></i>
                    <i class=\"fa-solid fa-caret-down\"></i>
                </div>
            </div>
        </div>
    </nav>
    <div class=\"drop-down-menu hidden\">
        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_password", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\"><i class=\"fa-sharp fa-solid fa-key\"></i><p>modifier mot de pass</p></a>
        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_history");
        echo "\"><i class=\"fa-sharp fa-regular fa-clock-rotate-left\"></i><p>Historique</p></a>
        ";
        // line 42
        if ((twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "roles", [], "any", false, false, false, 42)) || twig_in_filter("ROLE_SUPERADMIN", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "roles", [], "any", false, false, false, 42)))) {
            // line 43
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_all");
            echo "\"><i class=\"fa-solid fa-robot\"></i><p>espace admin</p></a>
        ";
        }
        // line 45
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"fa-solid fa-arrow-right-from-bracket\"></i><p>déconexion</p></a>
    </div>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "        <script>
            const icon = document.querySelector('.fa-caret-down');
            icon.addEventListener('click' , () => {
                menu = document.querySelector('.drop-down-menu');
                menu.classList.toggle('hidden');
            })
        </script>
    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "after.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 47,  181 => 14,  174 => 13,  164 => 10,  157 => 9,  144 => 5,  128 => 48,  126 => 47,  120 => 45,  114 => 43,  112 => 42,  108 => 41,  104 => 40,  90 => 31,  85 => 29,  81 => 28,  67 => 16,  65 => 13,  62 => 12,  59 => 9,  55 => 7,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ar-fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"{{ asset('build/nav-bar.css') }}\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </head>
    <body>
    <nav>
        <div class=\"logo\">
            <div class=\"logo-image\">

            </div>
            <div class=\"title\">
                ACRO
            </div>
        </div>
        <div class=\"menu\">
            <a href=\" {{ path('app_categories') }} \">Lessons</a>
            <a href=\"{{ path('examen.examen') }} \">Examen</a>
            <div class=\"nav-bar-personel-info\">
                <p class=\"nom\">{{user.prenom}} {{user.nom}}</p>
                <div class=\"nav-bar-personel-info-icons\">
                    <i class=\"fa-solid fa-user\"></i>
                    <i class=\"fa-solid fa-caret-down\"></i>
                </div>
            </div>
        </div>
    </nav>
    <div class=\"drop-down-menu hidden\">
        <a href=\"{{path('app_password' , { 'id' : user.id })}}\"><i class=\"fa-sharp fa-solid fa-key\"></i><p>modifier mot de pass</p></a>
        <a href=\"{{path('app_history')}}\"><i class=\"fa-sharp fa-regular fa-clock-rotate-left\"></i><p>Historique</p></a>
        {% if 'ROLE_ADMIN' in  user.roles  or  'ROLE_SUPERADMIN' in user.roles%}
        <a href=\"{{path('question_all')}}\"><i class=\"fa-solid fa-robot\"></i><p>espace admin</p></a>
        {% endif %}
        <a href=\"{{path('app_logout')}}\"><i class=\"fa-solid fa-arrow-right-from-bracket\"></i><p>déconexion</p></a>
    </div>
        {% block body %}{% endblock %}
        <script>
            const icon = document.querySelector('.fa-caret-down');
            icon.addEventListener('click' , () => {
                menu = document.querySelector('.drop-down-menu');
                menu.classList.toggle('hidden');
            })
        </script>
    </body>
</html>
", "after.html.twig", "/home/firas/Desktop/v2/ACRO/templates/after.html.twig");
    }
}
