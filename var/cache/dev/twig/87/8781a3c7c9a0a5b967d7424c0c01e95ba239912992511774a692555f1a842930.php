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

/* panier/index.html.twig */
class __TwigTemplate_c053791568d08bd5948bc5fa32ff2eb92066d9b2149167797b1f32b16578398d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PanierController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<table class=\"table\">
    <thead>
        <tr>
            <td> ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Panier.nom"), "html", null, true);
        echo "</td>
            <td> ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Panier.quantite"), "html", null, true);
        echo "</td>
            <td> ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Panier.prix"), "html", null, true);
        echo "</td>
        </tr>
    </thead>
    <tbody> 
        
                    
            ";
        // line 18
        $context["cout_panier"] = 0;
        // line 19
        echo "            ";
        $context["nbr_produit"] = 0;
        // line 20
        echo "
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 22
            echo "                <tr>
                    <td> ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo " </td>
                    <td> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "qtet", [], "any", false, false, false, 24), "html", null, true);
            echo " </td>

                    ";
            // line 26
            $context["cout_total"] = (twig_get_attribute($this->env, $this->source, $context["panier"], "qtet", [], "any", false, false, false, 26) * twig_get_attribute($this->env, $this->source, $context["panier"], "prix", [], "any", false, false, false, 26));
            // line 27
            echo "                    ";
            $context["cout_panier"] = ((isset($context["cout_panier"]) || array_key_exists("cout_panier", $context) ? $context["cout_panier"] : (function () { throw new RuntimeError('Variable "cout_panier" does not exist.', 27, $this->source); })()) + (isset($context["cout_total"]) || array_key_exists("cout_total", $context) ? $context["cout_total"] : (function () { throw new RuntimeError('Variable "cout_total" does not exist.', 27, $this->source); })()));
            // line 28
            echo "
                    ";
            // line 29
            $context["nbr_produit"] = ((isset($context["nbr_produit"]) || array_key_exists("nbr_produit", $context) ? $context["nbr_produit"] : (function () { throw new RuntimeError('Variable "nbr_produit" does not exist.', 29, $this->source); })()) + 1);
            // line 30
            echo "

                    <td>";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["cout_total"]) || array_key_exists("cout_total", $context) ? $context["cout_total"] : (function () { throw new RuntimeError('Variable "cout_total" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_produit_panier", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Panier.supprimer"), "html", null, true);
            echo " </a> </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    
  
            <tr>
                <td> ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Panier.nbrProduits"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["nbr_produit"]) || array_key_exists("nbr_produit", $context) ? $context["nbr_produit"] : (function () { throw new RuntimeError('Variable "nbr_produit" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " </td>

                <td> ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Panier.cout"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["cout_panier"]) || array_key_exists("cout_panier", $context) ? $context["cout_panier"] : (function () { throw new RuntimeError('Variable "cout_panier" does not exist.', 40, $this->source); })()), "html", null, true);
        echo " €</td>
            </tr>

    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 40,  169 => 38,  164 => 35,  153 => 33,  149 => 32,  145 => 30,  143 => 29,  140 => 28,  137 => 27,  135 => 26,  130 => 24,  126 => 23,  123 => 22,  119 => 21,  116 => 20,  113 => 19,  111 => 18,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PanierController!{% endblock %}

{% block body %}

<table class=\"table\">
    <thead>
        <tr>
            <td> {{'Panier.nom'|trans}}</td>
            <td> {{'Panier.quantite'|trans}}</td>
            <td> {{'Panier.prix'|trans}}</td>
        </tr>
    </thead>
    <tbody> 
        
                    
            {% set cout_panier = 0 %}
            {% set nbr_produit = 0 %}

            {% for panier in paniers %}
                <tr>
                    <td> {{panier.nom}} </td>
                    <td> {{panier.qtet}} </td>

                    {% set cout_total = (panier.qtet * panier.prix) %}
                    {% set cout_panier = cout_panier + cout_total %}

                    {% set nbr_produit = nbr_produit + 1 %}


                    <td>{{cout_total}}</td>
                    <td><a href=\"{{path('delete_produit_panier', {'id':panier.id}) }}\"> {{'Panier.supprimer'|trans}} </a> </td>
                </tr>
            {% endfor %}    
  
            <tr>
                <td> {{'Panier.nbrProduits'|trans}} : {{nbr_produit}} </td>

                <td> {{'Panier.cout'|trans}}: {{cout_panier}} €</td>
            </tr>

    </tbody>
</table>
{% endblock %}
", "panier/index.html.twig", "/Users/etienne-secondini/Documents/IIM/annee2/14-symfony/rendu2/templates/panier/index.html.twig");
    }
}
