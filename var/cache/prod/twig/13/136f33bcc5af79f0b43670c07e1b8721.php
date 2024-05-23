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

/* user/all.html.twig */
class __TwigTemplate_7b7e5d3a6251d062640e0a8c74a820c6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/all.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/list-users.css"), "html", null, true);
        echo "\"> 
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 10
            echo "        <div class=\"user\">
                <div class=\"personel-infos\">
                    <div class=\"first_name\">
                        <div class=\"icon\"><i class=\"fa-solid fa-user\"></i></div>
                        <p class=\"field-text\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPrenom", [], "method", false, false, false, 14), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"last_name\">
                        <div class=\"icon\"><i class=\"fa-solid fa-user\"></i></div>
                        <p class=\"field-text\"> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getNom", [], "method", false, false, false, 18), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"email-infos\">
                    <div class=\"email\">
                        <div class=\"icon\"><i class=\"fa-solid fa-envelope\"></i></div>
                        <p class=\"field-text\"> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getEmail", [], "method", false, false, false, 24), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"password\">
                        <div class=\"icon\"><i class=\"fa-solid fa-lock\"></i></div>
                        <p class=\"field-text\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPassword", [], "method", false, false, false, 28), "html", null, true);
            echo "</p>
                    </div>
            </div>
            <div class=\"btn\">
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.modifier_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"update\">modifier</a>
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.supprimer_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"delete\">supprimer</a>
            </div>
            </div>
        </div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    <a class=\"question-list\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_all");
        echo "\">liste des question</a>
    <a class=\"add-user\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.add_user");
        echo "\">Ajouter utilisateur</a>
    <a class=\"all-lessons\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lessons");
        echo "\">retour</a>
";
    }

    public function getTemplateName()
    {
        return "user/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 40,  133 => 39,  128 => 38,  117 => 33,  113 => 32,  106 => 28,  99 => 24,  90 => 18,  83 => 14,  77 => 10,  72 => 9,  68 => 8,  63 => 6,  59 => 5,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/all.html.twig", "/home/firas/Desktop/v2/ACRO/templates/user/all.html.twig");
    }
}
