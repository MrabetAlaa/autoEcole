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

/* lessons/all.html.twig */
class __TwigTemplate_3364029020690aeff016d1a4ad0067b3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lessons/all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lessons/all.html.twig", 1);
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
        echo "<link rel=\"stylesheet\" href=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/lessons-list.css"), "html", null, true);
        echo "\" >
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
        echo "<div class=\"container\">
    ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 12
                echo "    <div class=\"lesson\">
        <div class=\"lesson-infos\">
            <p class=\"lesson-categorie\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lesson"], "getCategorie", [], "method", false, false, false, 14), "categorie", [], "any", false, false, false, 14), "html", null, true);
                echo "</p>
            <p class=\"file-name\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "getFileName", [], "method", false, false, false, 15), "html", null, true);
                echo "</p>
        </div>
        <div class=\"lesson-actions\">
            <a class=\"delete-lesson\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_lesson", ["id" => twig_get_attribute($this->env, $this->source, $context["lesson"], "getId", [], "method", false, false, false, 18)]), "html", null, true);
                echo "\">supprimer</a>
        </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "    <h4>No lessons</h4>
    ";
        }
        // line 25
        echo "</div>
<a class=\"add-question\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_lesson");
        echo "\">Ajouter lesson</a>
<a class=\"users-list\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.all_users");
        echo "\">liste des utilisateurs</a>
<a class=\"lessons-list\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_all");
        echo "\">liste des questions</a>
<a class=\"all-lessons\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\">retour</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "lessons/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 29,  145 => 28,  141 => 27,  137 => 26,  134 => 25,  130 => 23,  127 => 22,  117 => 18,  111 => 15,  107 => 14,  103 => 12,  98 => 11,  96 => 10,  93 => 9,  86 => 8,  78 => 6,  71 => 5,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\" {{ asset('build/lessons-list.css') }}\" >
{% endblock %}
{% block javascripts %}
    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
{% endblock %} 
{% block body %}
<div class=\"container\">
    {% if lessons|length > 0 %}
    {% for lesson in lessons %}
    <div class=\"lesson\">
        <div class=\"lesson-infos\">
            <p class=\"lesson-categorie\">{{lesson.getCategorie().categorie }}</p>
            <p class=\"file-name\">{{lesson.getFileName() }}</p>
        </div>
        <div class=\"lesson-actions\">
            <a class=\"delete-lesson\" href=\"{{path('app_delete_lesson' , { 'id' : lesson.getId()})}}\">supprimer</a>
        </div>
    </div>
    {% endfor %}
    {% else %}
    <h4>No lessons</h4>
    {% endif %}
</div>
<a class=\"add-question\" href=\"{{path('app_add_lesson')}}\">Ajouter lesson</a>
<a class=\"users-list\" href=\"{{path('users.all_users')}}\">liste des utilisateurs</a>
<a class=\"lessons-list\" href=\"{{path('question_all')}}\">liste des questions</a>
<a class=\"all-lessons\" href=\"{{path('app_categories')}}\">retour</a>
{% endblock %}", "lessons/all.html.twig", "/home/firas/Desktop/v2/ACRO/templates/lessons/all.html.twig");
    }
}
