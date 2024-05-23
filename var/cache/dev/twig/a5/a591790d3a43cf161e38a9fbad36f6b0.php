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

/* examen/historique.html.twig */
class __TwigTemplate_073a6f4021478d9dd281c1858f75835a extends Template
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
        return $this->loadTemplate((((null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()))) ? ("before.html.twig") : ("after.html.twig")), "examen/historique.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "examen/historique.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/histo.css"), "html", null, true);
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
    <div class=\"note\">
        <div><div class=\"gre-cer\"></div><p>صحيح</p></div>
        <div><div class=\"red-cer\"></div><p>خطأ</p></div>
        <div><div class=\"yel-cer\"></div><p>بدون إجابة</p></div>
    </div> 
    ";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["passerExamens"]) || array_key_exists("passerExamens", $context) ? $context["passerExamens"] : (function () { throw new RuntimeError('Variable "passerExamens" does not exist.', 15, $this->source); })())) > 0)) {
            // line 16
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["passerExamens"]) || array_key_exists("passerExamens", $context) ? $context["passerExamens"] : (function () { throw new RuntimeError('Variable "passerExamens" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["passerExamen"]) {
                // line 17
                echo "        <div class=\"examen\">
            <div class=\"examen-header\">
                <div class=\"date\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getExamen", [], "method", false, false, false, 19), "getDate", [], "method", false, false, false, 19), "html", null, true);
                echo "</div>
                <div class=\"score\">
                ";
                // line 21
                if ((twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getScore", [], "method", false, false, false, 21) >= 24)) {
                    // line 22
                    echo "                    <span class=\"pass-examen\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getScore", [], "method", false, false, false, 22), "html", null, true);
                    echo "</span>
                ";
                } else {
                    // line 24
                    echo "                    <span class=\"fail-examen\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getScore", [], "method", false, false, false, 24), "html", null, true);
                    echo "</span>
                ";
                }
                // line 26
                echo "                /30</div>
            </div>
            <div class=\"questions\">
                ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getReponses", [], "method", false, false, false, 29));
                foreach ($context['_seq'] as $context["key"] => $context["reponse"]) {
                    // line 30
                    echo "                    ";
                    if (($context["key"] < 15)) {
                        // line 31
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["reponse"], "getChoix", [], "method", false, false, false, 31) == null)) {
                            // line 32
                            echo "                            <a class=\"question pass\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.reponse_correct", ["passerExamenId" => twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getId", [], "method", false, false, false, 32), "number" => $context["key"]]), "html", null, true);
                            echo "\">
                                ";
                            // line 33
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "
                            </a>
                        ";
                        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 35
$context["reponse"], "getChoix", [], "method", false, false, false, 35), "isCorrect", [], "method", false, false, false, 35) == false)) {
                            // line 36
                            echo "                            <a class=\"question wrong\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.reponse_correct", ["passerExamenId" => twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getId", [], "method", false, false, false, 36), "number" => $context["key"]]), "html", null, true);
                            echo "\">
                                ";
                            // line 37
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "
                            </a> 
                        ";
                        } else {
                            // line 40
                            echo "                            <a class=\"question correct\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.reponse_correct", ["passerExamenId" => twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getId", [], "method", false, false, false, 40), "number" => $context["key"]]), "html", null, true);
                            echo "\">
                                ";
                            // line 41
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "
                            </a> 
                        ";
                        }
                        // line 44
                        echo "                    ";
                    }
                    // line 45
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "            </div>
            <div class=\"questions\">
                ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getReponses", [], "method", false, false, false, 48));
                foreach ($context['_seq'] as $context["key"] => $context["reponse"]) {
                    // line 49
                    echo "                    ";
                    if (($context["key"] > 14)) {
                        // line 50
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["reponse"], "getChoix", [], "method", false, false, false, 50) == null)) {
                            // line 51
                            echo "                            <a class=\"question pass\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.reponse_correct", ["passerExamenId" => twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getId", [], "method", false, false, false, 51), "number" => $context["key"]]), "html", null, true);
                            echo "\">
                                ";
                            // line 52
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "
                            </a>
                        ";
                        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 54
$context["reponse"], "getChoix", [], "method", false, false, false, 54), "isCorrect", [], "method", false, false, false, 54) == true)) {
                            // line 55
                            echo "                            <a class=\"question correct\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.reponse_correct", ["passerExamenId" => twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getId", [], "method", false, false, false, 55), "number" => $context["key"]]), "html", null, true);
                            echo "\">
                                ";
                            // line 56
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "
                            </a> 
                        ";
                        } else {
                            // line 59
                            echo "                            <a class=\"question wrong\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("examen.reponse_correct", ["passerExamenId" => twig_get_attribute($this->env, $this->source, $context["passerExamen"], "getId", [], "method", false, false, false, 59), "number" => $context["key"]]), "html", null, true);
                            echo "\">
                                ";
                            // line 60
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "
                            </a> 
                        ";
                        }
                        // line 63
                        echo "                    ";
                    }
                    // line 64
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "            </div>
            <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_history", ["id" => twig_get_attribute($this->env, $this->source, $context["passerExamen"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\" class=\"delete-history\">supprimer</a>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passerExamen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        ";
        } else {
            // line 70
            echo "            <h2 class=\"vide\">Historique est vide !</h2>
        ";
        }
        // line 72
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "examen/historique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 72,  244 => 70,  241 => 69,  232 => 66,  229 => 65,  223 => 64,  220 => 63,  214 => 60,  209 => 59,  203 => 56,  198 => 55,  196 => 54,  191 => 52,  186 => 51,  183 => 50,  180 => 49,  176 => 48,  172 => 46,  166 => 45,  163 => 44,  157 => 41,  152 => 40,  146 => 37,  141 => 36,  139 => 35,  134 => 33,  129 => 32,  126 => 31,  123 => 30,  119 => 29,  114 => 26,  108 => 24,  102 => 22,  100 => 21,  95 => 19,  91 => 17,  86 => 16,  84 => 15,  76 => 9,  69 => 8,  59 => 3,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends user is null ? 'before.html.twig' : 'after.html.twig' %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\" {{ asset('build/histo.css') }}\">
{% endblock %}
{#{% block javascripts %}
    <script src=\"{{ asset('js/examen-questions.js') }} \"></script>  
{% endblock %}#}
{% block body %}
    <div class=\"container\">
    <div class=\"note\">
        <div><div class=\"gre-cer\"></div><p>صحيح</p></div>
        <div><div class=\"red-cer\"></div><p>خطأ</p></div>
        <div><div class=\"yel-cer\"></div><p>بدون إجابة</p></div>
    </div> 
    {% if passerExamens|length > 0 %}
    {% for passerExamen in passerExamens %}
        <div class=\"examen\">
            <div class=\"examen-header\">
                <div class=\"date\">{{ passerExamen.getExamen().getDate() }}</div>
                <div class=\"score\">
                {% if passerExamen.getScore() >= 24 %}
                    <span class=\"pass-examen\">{{ passerExamen.getScore() }}</span>
                {% else %}
                    <span class=\"fail-examen\">{{ passerExamen.getScore() }}</span>
                {% endif %}
                /30</div>
            </div>
            <div class=\"questions\">
                {% for key , reponse in passerExamen.getReponses() %}
                    {% if key < 15 %}
                        {% if reponse.getChoix() == null %}
                            <a class=\"question pass\" href=\"{{ path('examen.reponse_correct',{'passerExamenId':passerExamen.getId(),'number':key })}}\">
                                {{ key + 1}}
                            </a>
                        {% elseif reponse.getChoix().isCorrect() == false %}
                            <a class=\"question wrong\" href=\"{{ path('examen.reponse_correct',{'passerExamenId':passerExamen.getId(),'number':key })}}\">
                                {{ key + 1}}
                            </a> 
                        {% else %}
                            <a class=\"question correct\" href=\"{{ path('examen.reponse_correct',{'passerExamenId':passerExamen.getId(),'number':key })}}\">
                                {{ key + 1}}
                            </a> 
                        {% endif %}
                    {% endif %}
                {% endfor %}
            </div>
            <div class=\"questions\">
                {% for key , reponse in passerExamen.getReponses() %}
                    {% if key > 14  %}
                        {% if reponse.getChoix() == null %}
                            <a class=\"question pass\" href=\"{{ path('examen.reponse_correct',{'passerExamenId':passerExamen.getId(),'number':key })}}\">
                                {{ key + 1}}
                            </a>
                        {% elseif reponse.getChoix().isCorrect() == true %}
                            <a class=\"question correct\" href=\"{{ path('examen.reponse_correct',{'passerExamenId':passerExamen.getId(),'number':key })}}\">
                                {{ key + 1}}
                            </a> 
                        {% else %}
                            <a class=\"question wrong\" href=\"{{ path('examen.reponse_correct',{'passerExamenId':passerExamen.getId(),'number':key })}}\">
                                {{ key + 1}}
                            </a> 
                        {% endif %}
                    {% endif %}
                {% endfor %}
            </div>
            <a href=\"{{path('app_delete_history' , {'id' : passerExamen.id })}}\" class=\"delete-history\">supprimer</a>
        </div>
        {% endfor %}
        {% else %}
            <h2 class=\"vide\">Historique est vide !</h2>
        {% endif %}
    </div>
{% endblock %}", "examen/historique.html.twig", "/home/firas/Desktop/v2/ACRO/templates/examen/historique.html.twig");
    }
}
