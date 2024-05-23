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

/* examen/resultat.html.twig */
class __TwigTemplate_fe04f0b58c579d89d7f177ed3760ef59 extends Template
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
        return $this->loadTemplate((((null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()))) ? ("before.html.twig") : ("after.html.twig")), "examen/resultat.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen/resultat.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/resultat.css"), "html", null, true);
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
        echo "<div class=\"container\"> 
    <div class=\"progress-container\">
        <div class=\"score-container\">
            <div class=\"parent-progress\">
            </div>
            <div class=\"child-progress\">
                <div class=\"score\"><span>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</span>/30</div>
            </div>
        </div>
        <div class=\"btns\">
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        echo "\" class=\"first-btn\">retour</a>
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.reponse_correct", ["passerExamenId" => (isset($context["passserExamenId"]) || array_key_exists("passserExamenId", $context) ? $context["passserExamenId"] : (function () { throw new RuntimeError('Variable "passserExamenId" does not exist.', 17, $this->source); })()), "number" => 0]), "html", null, true);
        echo "\" class=\"second-btn\">correction</a>
        </div>
    </div>
</div>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/score.js"), "html", null, true);
        echo "\"></script>  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "examen/resultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  95 => 17,  91 => 16,  84 => 12,  76 => 6,  69 => 5,  59 => 3,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends user is null ? 'before.html.twig' : 'after.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\" {{ asset('build/resultat.css') }}\">
{% endblock %}
{% block body %}
<div class=\"container\"> 
    <div class=\"progress-container\">
        <div class=\"score-container\">
            <div class=\"parent-progress\">
            </div>
            <div class=\"child-progress\">
                <div class=\"score\"><span>{{score}}</span>/30</div>
            </div>
        </div>
        <div class=\"btns\">
            <a href=\"{{path('app_categories')}}\" class=\"first-btn\">retour</a>
            <a href=\"{{ path('examen.reponse_correct' , {'passerExamenId' :passserExamenId , 'number' : 0})}}\" class=\"second-btn\">correction</a>
        </div>
    </div>
</div>
<script src=\"{{ asset('js/score.js') }}\"></script>  
{% endblock %}", "examen/resultat.html.twig", "/home/firas/Desktop/v2/ACRO/templates/examen/resultat.html.twig");
    }
}
