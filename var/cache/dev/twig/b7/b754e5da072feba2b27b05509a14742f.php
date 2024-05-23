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

/* question/update.html.twig */
class __TwigTemplate_19885a5be67fe74a8678cd80deeb0c72 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/update.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/update.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/question-add.css"), "html", null, true);
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
        echo "<div class=\"form-container\">
<h3>modifier une question</h3>
<div class=\"form-container\">
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "question", [], "any", false, false, false, 11), 'label');
        echo "
\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "question", [], "any", false, false, false, 12), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), 'label');
        echo "
\t    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "categorie", [], "any", false, false, false, 19), 'label');
        echo "
\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "categorie", [], "any", false, false, false, 20), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "choix1", [], "any", false, false, false, 23), 'label');
        echo "
\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "choix1", [], "any", false, false, false, 24), 'widget', ["value" => (isset($context["choix1"]) || array_key_exists("choix1", $context) ? $context["choix1"] : (function () { throw new RuntimeError('Variable "choix1" does not exist.', 24, $this->source); })())]);
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "choix2", [], "any", false, false, false, 27), 'label');
        echo "
\t    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "choix2", [], "any", false, false, false, 28), 'widget', ["value" => (isset($context["choix2"]) || array_key_exists("choix2", $context) ? $context["choix2"] : (function () { throw new RuntimeError('Variable "choix2" does not exist.', 28, $this->source); })())]);
        echo "
\t</div>
\t\t<div class=\"form-group\">
\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "choix3", [], "any", false, false, false, 31), 'label');
        echo "
\t    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "choix3", [], "any", false, false, false, 32), 'widget', ["value" => (isset($context["choix3"]) || array_key_exists("choix3", $context) ? $context["choix3"] : (function () { throw new RuntimeError('Variable "choix3" does not exist.', 32, $this->source); })())]);
        echo "
\t</div>
    <div class=\"form-group\">
\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "isCorrect", [], "any", false, false, false, 35), 'label');
        echo "
\t    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "isCorrect", [], "any", false, false, false, 36), 'widget', ["value" => (isset($context["isCorrect"]) || array_key_exists("isCorrect", $context) ? $context["isCorrect"] : (function () { throw new RuntimeError('Variable "isCorrect" does not exist.', 36, $this->source); })())]);
        echo "
\t</div>
\t<button class=\"send\">modifier</button>
\t<div><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_all");
        echo "\">retourner a la liste des questions</a><span></span></div>
";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
<div>  
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "question/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 40,  157 => 39,  151 => 36,  147 => 35,  141 => 32,  137 => 31,  131 => 28,  127 => 27,  121 => 24,  117 => 23,  111 => 20,  107 => 19,  101 => 16,  97 => 15,  91 => 12,  87 => 11,  82 => 9,  77 => 6,  70 => 5,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\" {{ asset('build/question-add.css') }}\">
{% endblock %}
{% block body %}
<div class=\"form-container\">
<h3>modifier une question</h3>
<div class=\"form-container\">
{{form_start(form)}}
    <div class=\"form-group\">
\t\t{{ form_label(form.question)}}
\t\t{{form_widget(form.question)}}
\t</div>
\t<div class=\"form-group\">
\t    {{ form_label(form.image)}}
\t    {{form_widget(form.image)}}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_label(form.categorie)}}
\t{{form_widget(form.categorie)}}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_label(form.choix1)}}
\t\t{{form_widget(form.choix1 , { 'value': choix1})}}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_label(form.choix2)}}
\t    {{form_widget(form.choix2 , { 'value': choix2})}}
\t</div>
\t\t<div class=\"form-group\">
\t\t{{ form_label(form.choix3)}}
\t    {{form_widget(form.choix3 , { 'value': choix3})}}
\t</div>
    <div class=\"form-group\">
\t\t{{ form_label(form.isCorrect)}}
\t    {{form_widget(form.isCorrect , { 'value': isCorrect })}}
\t</div>
\t<button class=\"send\">modifier</button>
\t<div><a href=\"{{path('question_all')}}\">retourner a la liste des questions</a><span></span></div>
{{form_end(form)}}
<div>  
</div>
{% endblock %}
", "question/update.html.twig", "/home/firas/Desktop/v2/ACRO/templates/question/update.html.twig");
    }
}
