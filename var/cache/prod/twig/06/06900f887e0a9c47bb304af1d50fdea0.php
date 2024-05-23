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
class __TwigTemplate_aa4f9a2b2885c2868a7832892c53b24f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "question/all.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<link rel=\"stylesheet\" href=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/questions-list.css"), "html", null, true);
        echo "\" >
";
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <script src=\"https://kit.fontawesome.com/640b361ca9.js\" crossorigin=\"anonymous\"></script>
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<div class=\"container\">
    <div class=\"question-list\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? null));
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
        return array (  182 => 49,  178 => 48,  174 => 47,  170 => 46,  166 => 44,  155 => 39,  151 => 38,  145 => 34,  139 => 33,  134 => 31,  130 => 30,  127 => 29,  121 => 28,  115 => 26,  113 => 25,  110 => 24,  104 => 23,  98 => 21,  96 => 20,  90 => 17,  84 => 14,  80 => 12,  76 => 11,  72 => 9,  68 => 8,  63 => 6,  59 => 5,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "question/all.html.twig", "/home/firas/Desktop/v2/ACRO/templates/question/all.html.twig");
    }
}
