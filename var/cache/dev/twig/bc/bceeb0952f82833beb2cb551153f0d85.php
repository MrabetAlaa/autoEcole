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

/* examen/examen.html.twig */
class __TwigTemplate_8319dfe9c086af80c2ce982d6126fa65 extends Template
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
        return $this->loadTemplate((((null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()))) ? ("before.html.twig") : ("after.html.twig")), "examen/examen.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen/examen.html.twig"));

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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"question\">
            <div class=\"question-image\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9)), "html", null, true);
        echo "\" alt=\"\"> 
            </div>
            <div class=\"question-text\"> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 11, $this->source); })()), "question", [], "any", false, false, false, 11), "html", null, true);
        echo " </div>
            <div class=\"question-choices\">
                <a class=\"choix\">
                    <p class=\"choix-text\"> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 14, $this->source); })()), "getChoixes", [], "method", false, false, false, 14), "get", [0 => 0], "method", false, false, false, 14), "getChoix", [], "method", false, false, false, 14), "html", null, true);
        echo " </p><div class=\"icon first\">أ</div>
                </a>
                <a class=\"choix\">
                    <p class=\"choix-text\"> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 17, $this->source); })()), "getChoixes", [], "method", false, false, false, 17), "get", [0 => 1], "method", false, false, false, 17), "getChoix", [], "method", false, false, false, 17), "html", null, true);
        echo " </p><div class=\"icon second\"> ب </div>
                </a>
                <a class=\"choix\">
                <p class=\"choix-text\"> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 20, $this->source); })()), "getChoixes", [], "method", false, false, false, 20), "get", [0 => 2], "method", false, false, false, 20), "getChoix", [], "method", false, false, false, 20), "html", null, true);
        echo " </p><div class=\"icon third\">ج</div>
                </a>
            </div>
        </div>
        <a class=\"next\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.question", ["number" => ((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 24, $this->source); })()) + 1)]), "html", null, true);
        echo "\">
            التالي
        </a>
        <div class=\"reponse\">
            <p class=\"responde-text\">: إجابتك</p>
            <div class=\"responde-icon\">

            </div>
        </div>
    </div>
    <script src=\"\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "examen/examen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 24,  104 => 20,  98 => 17,  92 => 14,  86 => 11,  81 => 9,  76 => 6,  69 => 5,  59 => 3,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends user is null ? 'before.html.twig' : 'after.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\" {{ asset('build/examen-question.css') }}\">
{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"question\">
            <div class=\"question-image\">
                <img src=\"{{ asset(question.image) }}\" alt=\"\"> 
            </div>
            <div class=\"question-text\"> {{ question.question }} </div>
            <div class=\"question-choices\">
                <a class=\"choix\">
                    <p class=\"choix-text\"> {{ question.getChoixes().get(0).getChoix()}} </p><div class=\"icon first\">أ</div>
                </a>
                <a class=\"choix\">
                    <p class=\"choix-text\"> {{ question.getChoixes().get(1).getChoix()}} </p><div class=\"icon second\"> ب </div>
                </a>
                <a class=\"choix\">
                <p class=\"choix-text\"> {{ question.getChoixes().get(2).getChoix()}} </p><div class=\"icon third\">ج</div>
                </a>
            </div>
        </div>
        <a class=\"next\" href=\"{{ path('examen.question', {'number': number+1 }) }}\">
            التالي
        </a>
        <div class=\"reponse\">
            <p class=\"responde-text\">: إجابتك</p>
            <div class=\"responde-icon\">

            </div>
        </div>
    </div>
    <script src=\"\"></script>
{% endblock %}", "examen/examen.html.twig", "/home/firas/Desktop/v2/ACRO/templates/examen/examen.html.twig");
    }
}
