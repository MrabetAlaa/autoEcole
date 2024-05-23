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

/* examen/question.html.twig */
class __TwigTemplate_d1e42a6f30e239bf1fcd872470fddee0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()))) ? ("before.html.twig") : ("after.html.twig")), "examen/question.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen/question.html.twig"));

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

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"question\">
        <h4>السؤال رقم ";
        // line 11
        echo twig_escape_filter($this->env, ((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 11, $this->source); })()) + 1), "html", null, true);
        echo "</h4>
            <div class=\"question-image\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13)), "html", null, true);
        echo "\" alt=\"\"> 
            </div>
            <div class=\"question-text\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 15, $this->source); })()), "question", [], "any", false, false, false, 15), "html", null, true);
        echo " </div>
            <div class=\"question-choices\">
                <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.response", ["passerExamenId" => (isset($context["passerExamenId"]) || array_key_exists("passerExamenId", $context) ? $context["passerExamenId"] : (function () { throw new RuntimeError('Variable "passerExamenId" does not exist.', 17, $this->source); })()), "questionId" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "number" => (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 17, $this->source); })())]), "html", null, true);
        echo "\" method=\"POST\">
                <label class=\"choix\" for=\"first_choice\" data-id=\"أ\">
                    <p class=\"choix-text\"> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 19, $this->source); })()), "getChoixes", [], "method", false, false, false, 19), "get", [0 => 0], "method", false, false, false, 19), "getChoix", [], "method", false, false, false, 19), "html", null, true);
        echo " </p><div class=\"icon first\">أ</div>
                    <input type=\"radio\" id=\"first_choice\" name=\"choice\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 20, $this->source); })()), "getChoixes", [], "method", false, false, false, 20), "get", [0 => 0], "method", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
        echo " \">
                </label>
                <label class=\"choix\" for=\"second_choice\" data-id=\"ب\">
                    <p class=\"choix-text\"> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 23, $this->source); })()), "getChoixes", [], "method", false, false, false, 23), "get", [0 => 1], "method", false, false, false, 23), "getChoix", [], "method", false, false, false, 23), "html", null, true);
        echo " </p><div class=\"icon second\"> ب </div>
                    <input type=\"radio\" id=\"second_choice\" name=\"choice\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 24, $this->source); })()), "getChoixes", [], "method", false, false, false, 24), "get", [0 => 1], "method", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
        echo " \">
                </label>
                <label class=\"choix\" for=\"third_choice\" data-id=\"ج\">
                    <p class=\"choix-text\"> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 27, $this->source); })()), "getChoixes", [], "method", false, false, false, 27), "get", [0 => 2], "method", false, false, false, 27), "getChoix", [], "method", false, false, false, 27), "html", null, true);
        echo " </p><div class=\"icon third\">ج</div>
                    <input type=\"radio\" id=\"third_choice\" name=\"choice\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 28, $this->source); })()), "getChoixes", [], "method", false, false, false, 28), "get", [0 => 2], "method", false, false, false, 28), "id", [], "any", false, false, false, 28), "html", null, true);
        echo " \">
                </label>
                    <button class=\"next\" type=\"submit\">التالي</button>
                </form>
            </div>
        </div>
        <div class=\"reponse\">
            <p class=\"responde-text\">: إجابتك</p>
            <div class=\"responde-icon\">

            </div>
        </div>
    </div>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/examen-questions.js"), "html", null, true);
        echo " \"></script>  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "examen/question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  124 => 28,  120 => 27,  114 => 24,  110 => 23,  104 => 20,  100 => 19,  95 => 17,  90 => 15,  85 => 13,  80 => 11,  76 => 9,  69 => 8,  59 => 3,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends user is null ? 'before.html.twig' : 'after.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\" {{ asset('build/examen-question.css') }}\">
{% endblock %}
{#{% block javascripts %}
    <script src=\"{{ asset('js/examen-questions.js') }} \"></script>  
{% endblock %}#}
{% block body %}
    <div class=\"container\">
        <div class=\"question\">
        <h4>السؤال رقم {{number + 1 }}</h4>
            <div class=\"question-image\">
                <img src=\"{{ asset(question.image) }}\" alt=\"\"> 
            </div>
            <div class=\"question-text\"> {{ question.question }} </div>
            <div class=\"question-choices\">
                <form action=\"{{ path('examen.response',{'passerExamenId' : passerExamenId ,'questionId' : question.id , 'number': number } )}}\" method=\"POST\">
                <label class=\"choix\" for=\"first_choice\" data-id=\"أ\">
                    <p class=\"choix-text\"> {{ question.getChoixes().get(0).getChoix()}} </p><div class=\"icon first\">أ</div>
                    <input type=\"radio\" id=\"first_choice\" name=\"choice\" value=\"{{ question.getChoixes().get(0).id}} \">
                </label>
                <label class=\"choix\" for=\"second_choice\" data-id=\"ب\">
                    <p class=\"choix-text\"> {{ question.getChoixes().get(1).getChoix()}} </p><div class=\"icon second\"> ب </div>
                    <input type=\"radio\" id=\"second_choice\" name=\"choice\" value=\"{{ question.getChoixes().get(1).id}} \">
                </label>
                <label class=\"choix\" for=\"third_choice\" data-id=\"ج\">
                    <p class=\"choix-text\"> {{ question.getChoixes().get(2).getChoix()}} </p><div class=\"icon third\">ج</div>
                    <input type=\"radio\" id=\"third_choice\" name=\"choice\" value=\"{{ question.getChoixes().get(2).id}} \">
                </label>
                    <button class=\"next\" type=\"submit\">التالي</button>
                </form>
            </div>
        </div>
        <div class=\"reponse\">
            <p class=\"responde-text\">: إجابتك</p>
            <div class=\"responde-icon\">

            </div>
        </div>
    </div>
    <script src=\"{{ asset('js/examen-questions.js') }} \"></script>  
{% endblock %}", "examen/question.html.twig", "/home/firas/Desktop/v2/ACRO/templates/examen/question.html.twig");
    }
}
