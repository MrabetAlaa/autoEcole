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

/* question/all.html.twig */
class __TwigTemplate_06a7e10f03d58c83ff87548ef83ddeb9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/all.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/questions-list.css"), "html", null, true);
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
    <div class=\"question-list\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 12
            echo "        <div class=\"question\">
            <div class=\"image-container\">
                <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["question"], "image", [], "any", false, false, false, 14)), "html", null, true);
            echo "\" alt=\"\"> 
            </div>
            <div class=\"question-content\">
                ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 17), "html", null, true);
            echo "
            </div>
            <div class=\"choices\">
                ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "getChoixes", [], "method", false, false, false, 20), "get", [0 => 0], "method", false, false, false, 20), "isCorrect", [], "method", false, false, false, 20) == 1)) {
                // line 21
                echo "                    <div class=\"choice true\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "getChoixes", [], "method", false, false, false, 21), "get", [0 => 0], "method", false, false, false, 21), "getChoix", [], "method", false, false, false, 21), "html", null, true);
                echo "</div>
                ";
            } else {
                // line 23
                echo "                    <div class=\"choice\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "getChoixes", [], "method", false, false, false, 23), "get", [0 => 0], "method", false, false, false, 23), "getChoix", [], "method", false, false, false, 23), "html", null, true);
                echo "</div>
                ";
            }
            // line 24
            echo "  
                ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "getChoixes", [], "method", false, false, false, 25), "get", [0 => 1], "method", false, false, false, 25), "isCorrect", [], "method", false, false, false, 25) == 1)) {
                // line 26
                echo "                    <div class=\"choice true\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "getChoixes", [], "method", false, false, false, 26), "get", [0 => 1], "method", false, false, false, 26), "getChoix", [], "method", false, false, false, 26), "html", null, true);
                echo "</div>
                ";
            } else {
                // line 28
                echo "                    <div class=\"choice\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "getChoixes", [], "method", false, false, false, 28), "get", [0 => 1], "method", false, false, false, 28), "getChoix", [], "method", false, false, false, 28), "html", null, true);
                echo "</div>
                ";
            }
            // line 29
            echo " 
                ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "getChoixes", [], "method", false, false, false, 30), "get", [0 => 2], "method", false, false, false, 30), "isCorrect", [], "method", false, false, false, 30) == 1)) {
                echo " 
                    <div class=\"choice true\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "getChoixes", [], "method", false, false, false, 31), "get", [0 => 2], "method", false, false, false, 31), "getChoix", [], "method", false, false, false, 31), "html", null, true);
                echo "</div>
                ";
            } else {
                // line 33
                echo "                    <div class=\"choice\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "getChoixes", [], "method", false, false, false, 33), "get", [0 => 2], "method", false, false, false, 33), "getChoix", [], "method", false, false, false, 33), "html", null, true);
                echo "</div>
                ";
            }
            // line 34
            echo " 
            </div>
            <div class=\"actions\">
                <div class=\"btn\">
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"update-quest\">modifier</a>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"delete-quest\">supprimer</a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
</div>
<a class=\"add-question\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("questionapp_question_add");
        echo "\">Ajouter question</a>
<a class=\"users-list\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.all_users");
        echo "\">liste des utilisateurs</a>
<a class=\"lessons-list\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lessons_all");
        echo "\">liste des lessons</a>
<a class=\"all-lessons\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\">retour</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "question/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 49,  199 => 48,  195 => 47,  191 => 46,  187 => 44,  176 => 39,  172 => 38,  166 => 34,  160 => 33,  155 => 31,  151 => 30,  148 => 29,  142 => 28,  136 => 26,  134 => 25,  131 => 24,  125 => 23,  119 => 21,  117 => 20,  111 => 17,  105 => 14,  101 => 12,  97 => 11,  93 => 9,  86 => 8,  78 => 6,  71 => 5,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\" {{ asset('build/questions-list.css') }}\" >
{% endblock %}
{% block javascripts %}
    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
{% endblock %} 
{% block body %}
<div class=\"container\">
    <div class=\"question-list\">
    {% for question in questions %}
        <div class=\"question\">
            <div class=\"image-container\">
                <img src=\"{{ asset(question.image) }}\" alt=\"\"> 
            </div>
            <div class=\"question-content\">
                {{ question.question}}
            </div>
            <div class=\"choices\">
                {% if question.getChoixes().get(0).isCorrect() == 1  %}
                    <div class=\"choice true\">{{ question.getChoixes().get(0).getChoix()}}</div>
                {% else %}
                    <div class=\"choice\">{{ question.getChoixes().get(0).getChoix()}}</div>
                {% endif %}  
                {% if question.getChoixes().get(1).isCorrect() == 1  %}
                    <div class=\"choice true\">{{ question.getChoixes().get(1).getChoix()}}</div>
                {% else %}
                    <div class=\"choice\">{{ question.getChoixes().get(1).getChoix()}}</div>
                {% endif %} 
                {% if question.getChoixes().get(2).isCorrect() == 1  %} 
                    <div class=\"choice true\">{{ question.getChoixes().get(2).getChoix()}}</div>
                {% else %}
                    <div class=\"choice\">{{ question.getChoixes().get(2).getChoix()}}</div>
                {% endif %} 
            </div>
            <div class=\"actions\">
                <div class=\"btn\">
                    <a href=\"{{path('question_modifier' , {'id':question.id})}}\" class=\"update-quest\">modifier</a>
                    <a href=\"{{path('question_supprimer' , {'id' : question.id})}}\" class=\"delete-quest\">supprimer</a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
<a class=\"add-question\" href=\"{{path('questionapp_question_add')}}\">Ajouter question</a>
<a class=\"users-list\" href=\"{{path('users.all_users')}}\">liste des utilisateurs</a>
<a class=\"lessons-list\" href=\"{{path('app_lessons_all')}}\">liste des lessons</a>
<a class=\"all-lessons\" href=\"{{path('app_categories')}}\">retour</a>
{% endblock %}", "question/all.html.twig", "/home/firas/Desktop/v2/ACRO/templates/question/all.html.twig");
    }
}
