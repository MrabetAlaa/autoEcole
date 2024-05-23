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

/* examen/reponse.html.twig */
class __TwigTemplate_61692692c4822be3e2fca9bc12d576b2 extends Template
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
        return $this->loadTemplate((((null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()))) ? ("before.html.twig") : ("after.html.twig")), "examen/reponse.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen/reponse.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/examen-question.css"), "html", null, true);
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
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/examen-reponse.js"), "html", null, true);
        echo "\" ></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"container\">
        <div class=\"question\">
        <h4>السؤال رقم ";
        // line 12
        echo twig_escape_filter($this->env, ((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 12, $this->source); })()) + 1), "html", null, true);
        echo "</h4>
                <div class=\"leftandright\">
                ";
        // line 14
        if (((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 14, $this->source); })()) > 0)) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.reponse_correct", ["passerExamenId" => twig_get_attribute($this->env, $this->source, (isset($context["passerExamen"]) || array_key_exists("passerExamen", $context) ? $context["passerExamen"] : (function () { throw new RuntimeError('Variable "passerExamen" does not exist.', 15, $this->source); })()), "getId", [], "method", false, false, false, 15), "number" => ((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 15, $this->source); })()) - 1)]), "html", null, true);
            echo "\" class=\"prev-reponse\"><i class=\"fa-solid fa-arrow-left\"></i></a>
                ";
        } else {
            // line 17
            echo "                <div></div>
                ";
        }
        // line 19
        echo "                ";
        if (((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 19, $this->source); })()) < 29)) {
            // line 20
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.reponse_correct", ["passerExamenId" => twig_get_attribute($this->env, $this->source, (isset($context["passerExamen"]) || array_key_exists("passerExamen", $context) ? $context["passerExamen"] : (function () { throw new RuntimeError('Variable "passerExamen" does not exist.', 20, $this->source); })()), "getId", [], "method", false, false, false, 20), "number" => ((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 20, $this->source); })()) + 1)]), "html", null, true);
            echo "\" class=\"next-reponse\"><i class=\"fa-solid fa-arrow-right\"></i></a>
                ";
        } else {
            // line 22
            echo "                <div></div>
                ";
        }
        // line 24
        echo "            </div>
            <div class=\"question-image\">
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26)), "html", null, true);
        echo "\" alt=\"\"> 
            </div>
            <div class=\"question-text\"> ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 28, $this->source); })()), "question", [], "any", false, false, false, 28), "html", null, true);
        echo " </div>
            <div class=\"question-choices\">
                <div class=\"choix\" for=\"first_choice\" data-id=\"أ\">
                    <p class=\"choix-text\"> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 31, $this->source); })()), "getChoixes", [], "method", false, false, false, 31), "get", [0 => 0], "method", false, false, false, 31), "getChoix", [], "method", false, false, false, 31), "html", null, true);
        echo " </p><div class=\"icon first\">أ</div>
                </div>
                <div class=\"choix\" for=\"second_choice\" data-id=\"ب\">
                    <p class=\"choix-text\"> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 34, $this->source); })()), "getChoixes", [], "method", false, false, false, 34), "get", [0 => 1], "method", false, false, false, 34), "getChoix", [], "method", false, false, false, 34), "html", null, true);
        echo " </p><div class=\"icon second\"> ب </div>
                </div>
                <div class=\"choix\" for=\"third_choice\" data-id=\"ج\">
                    <p class=\"choix-text\"> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 37, $this->source); })()), "getChoixes", [], "method", false, false, false, 37), "get", [0 => 2], "method", false, false, false, 37), "getChoix", [], "method", false, false, false, 37), "html", null, true);
        echo " </p><div class=\"icon third\">ج</div>
                </div>
            </div>
        </div>
        <div class=\"reponse\">
            <p class=\"responde-text\">: إجابتك</p>
            ";
        // line 43
        if (((isset($context["choix"]) || array_key_exists("choix", $context) ? $context["choix"] : (function () { throw new RuntimeError('Variable "choix" does not exist.', 43, $this->source); })()) == null)) {
            // line 44
            echo "            <div class=\"responde-icon\">
                ?
            </div>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 47
(isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 47, $this->source); })()), "getChoixes", [], "method", false, false, false, 47), "get", [0 => 0], "method", false, false, false, 47), "getChoix", [], "method", false, false, false, 47) == twig_get_attribute($this->env, $this->source, (isset($context["choix"]) || array_key_exists("choix", $context) ? $context["choix"] : (function () { throw new RuntimeError('Variable "choix" does not exist.', 47, $this->source); })()), "getChoix", [], "method", false, false, false, 47))) {
            // line 48
            echo "            <div class=\"responde-icon first\">
                أ
            </div>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 51
(isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 51, $this->source); })()), "getChoixes", [], "method", false, false, false, 51), "get", [0 => 1], "method", false, false, false, 51), "getChoix", [], "method", false, false, false, 51) == twig_get_attribute($this->env, $this->source, (isset($context["choix"]) || array_key_exists("choix", $context) ? $context["choix"] : (function () { throw new RuntimeError('Variable "choix" does not exist.', 51, $this->source); })()), "getChoix", [], "method", false, false, false, 51))) {
            // line 52
            echo "            <div class=\"responde-icon second\">
                ب
            </div>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 55, $this->source); })()), "getChoixes", [], "method", false, false, false, 55), "get", [0 => 2], "method", false, false, false, 55), "getChoix", [], "method", false, false, false, 55) == twig_get_attribute($this->env, $this->source, (isset($context["choix"]) || array_key_exists("choix", $context) ? $context["choix"] : (function () { throw new RuntimeError('Variable "choix" does not exist.', 55, $this->source); })()), "getChoix", [], "method", false, false, false, 55))) {
            // line 56
            echo "            <div class=\"responde-icon third\">
                ج
            </div>
            ";
        }
        // line 60
        echo "        </div>
        <div class=\"reponse reponse-correct\">
            <p class=\"responde-text\">: الإجابة الصحيحة</p>
            ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 63, $this->source); })()), "getChoixes", [], "method", false, false, false, 63), "get", [0 => 0], "method", false, false, false, 63), "isCorrect", [], "method", false, false, false, 63)) {
            // line 64
            echo "            <div class=\"responde-icon first\">
                أ
            </div>
            ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
(isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 67, $this->source); })()), "getChoixes", [], "method", false, false, false, 67), "get", [0 => 1], "method", false, false, false, 67), "isCorrect", [], "method", false, false, false, 67)) {
            // line 68
            echo "            <div class=\"responde-icon second\">
                ب
            </div>
            ";
        } else {
            // line 72
            echo "            <div class=\"responde-icon third\">
                ج
            </div>
            ";
        }
        // line 76
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "examen/reponse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 76,  215 => 72,  209 => 68,  207 => 67,  202 => 64,  200 => 63,  195 => 60,  189 => 56,  187 => 55,  182 => 52,  180 => 51,  175 => 48,  173 => 47,  168 => 44,  166 => 43,  157 => 37,  151 => 34,  145 => 31,  139 => 28,  134 => 26,  130 => 24,  126 => 22,  120 => 20,  117 => 19,  113 => 17,  107 => 15,  105 => 14,  100 => 12,  96 => 10,  89 => 9,  80 => 7,  77 => 6,  70 => 5,  60 => 3,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends user is null ? 'before.html.twig' : 'after.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\" {{ asset('build/examen-question.css') }}\">
{% endblock %}
{% block javascripts %}
    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ asset('js/examen-reponse.js') }}\" ></script>
{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"question\">
        <h4>السؤال رقم {{number + 1 }}</h4>
                <div class=\"leftandright\">
                {% if number > 0 %}
                <a href=\"{{ path('examen.reponse_correct' , {'passerExamenId' :passerExamen.getId() , 'number' : number - 1 })}}\" class=\"prev-reponse\"><i class=\"fa-solid fa-arrow-left\"></i></a>
                {% else %}
                <div></div>
                {% endif %}
                {% if number < 29 %}
                <a href=\"{{ path('examen.reponse_correct' , {'passerExamenId' :passerExamen.getId() , 'number' : number + 1 })}}\" class=\"next-reponse\"><i class=\"fa-solid fa-arrow-right\"></i></a>
                {% else %}
                <div></div>
                {% endif %}
            </div>
            <div class=\"question-image\">
                <img src=\"{{ asset(question.image) }}\" alt=\"\"> 
            </div>
            <div class=\"question-text\"> {{ question.question }} </div>
            <div class=\"question-choices\">
                <div class=\"choix\" for=\"first_choice\" data-id=\"أ\">
                    <p class=\"choix-text\"> {{ question.getChoixes().get(0).getChoix()}} </p><div class=\"icon first\">أ</div>
                </div>
                <div class=\"choix\" for=\"second_choice\" data-id=\"ب\">
                    <p class=\"choix-text\"> {{ question.getChoixes().get(1).getChoix()}} </p><div class=\"icon second\"> ب </div>
                </div>
                <div class=\"choix\" for=\"third_choice\" data-id=\"ج\">
                    <p class=\"choix-text\"> {{ question.getChoixes().get(2).getChoix()}} </p><div class=\"icon third\">ج</div>
                </div>
            </div>
        </div>
        <div class=\"reponse\">
            <p class=\"responde-text\">: إجابتك</p>
            {% if choix == null %}
            <div class=\"responde-icon\">
                ?
            </div>
            {% elseif question.getChoixes().get(0).getChoix() == choix.getChoix() %}
            <div class=\"responde-icon first\">
                أ
            </div>
            {% elseif question.getChoixes().get(1).getChoix() == choix.getChoix()  %}
            <div class=\"responde-icon second\">
                ب
            </div>
            {% elseif question.getChoixes().get(2).getChoix() == choix.getChoix()  %}
            <div class=\"responde-icon third\">
                ج
            </div>
            {% endif %}
        </div>
        <div class=\"reponse reponse-correct\">
            <p class=\"responde-text\">: الإجابة الصحيحة</p>
            {% if question.getChoixes().get(0).isCorrect()  %}
            <div class=\"responde-icon first\">
                أ
            </div>
            {% elseif question.getChoixes().get(1).isCorrect()  %}
            <div class=\"responde-icon second\">
                ب
            </div>
            {% else %}
            <div class=\"responde-icon third\">
                ج
            </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "examen/reponse.html.twig", "/home/firas/Desktop/v2/ACRO/templates/examen/reponse.html.twig");
    }
}
