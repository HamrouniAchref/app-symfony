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

/* admin/index.html.twig */
class __TwigTemplate_d5d32a372360917aa9cd7ab83206a5a8e415bb90f3018d2cf46306e5e528a471 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        echo "Hello AdminController!";
        
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
        echo "<h1>Agences</h1>
<a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterAgence");
        echo "\" >Ajouter</a>

<table class=\"table table-striped table-hover\">
   <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>TelAgence</th>
            <th>AdresseVille</th>
            <th>Action</th>
        </tr>

    </thead>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agences"]) || array_key_exists("agences", $context) ? $context["agences"] : (function () { throw new RuntimeError('Variable "agences" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agence"]) {
            // line 21
            echo "        <tr>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "telAgence", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agence"], "adresse", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consulterAgence", ["id" => twig_get_attribute($this->env, $this->source, $context["agence"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" >voir</a>
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierAgence", ["id" => twig_get_attribute($this->env, $this->source, $context["agence"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" >modifier</a>
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerAgence", ["id" => twig_get_attribute($this->env, $this->source, $context["agence"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" >supprimer</a></td>

           

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>

<h1>Voitures</h1>
<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterVoiture");
        echo "\" >Ajouter</a>

<table class=\"table table-striped table-hover\">
   <thead>
        <tr>
            <th>ID</th>
            <th>Marque</th>
            <th>Couleur</th>
            <th>Description</th>
            <th>Nombre de places</th>
            <th>Nom agence</th>
            <th>Actions</th>
        </tr>

    </thead>
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voiture"]) {
            // line 53
            echo "        <tr>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "marque", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "couleur", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
             <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "description", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "nommbreDePlaces", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "nomAgence", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consulterVoiture", ["id" => twig_get_attribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" >voir</a>
                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierVoiture", ["id" => twig_get_attribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" >modifier</a>
                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerVoiture", ["id" => twig_get_attribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" >supprimer</a></td>

           

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voiture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 68,  212 => 62,  208 => 61,  204 => 60,  200 => 59,  196 => 58,  192 => 57,  188 => 56,  184 => 55,  180 => 54,  177 => 53,  173 => 52,  155 => 37,  150 => 34,  138 => 28,  134 => 27,  130 => 26,  126 => 25,  122 => 24,  118 => 23,  114 => 22,  111 => 21,  107 => 20,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}
<h1>Agences</h1>
<a href=\"{{ path('ajouterAgence') }}\" >Ajouter</a>

<table class=\"table table-striped table-hover\">
   <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>TelAgence</th>
            <th>AdresseVille</th>
            <th>Action</th>
        </tr>

    </thead>
    {% for agence in agences %}
        <tr>
            <td>{{agence.id}}</td>
            <td>{{agence.nom}}</td>
            <td>{{agence.telAgence}}</td>
            <td>{{agence.adresse}}</td>
            <td><a href=\"{{ path('consulterAgence',{'id':agence.id}) }}\" >voir</a>
                <a href=\"{{ path('modifierAgence',{'id':agence.id}) }}\" >modifier</a>
                <a href=\"{{ path('supprimerAgence',{'id':agence.id}) }}\" >supprimer</a></td>

           

        </tr>
    {% endfor %}
</table>

<h1>Voitures</h1>
<a href=\"{{ path('ajouterVoiture') }}\" >Ajouter</a>

<table class=\"table table-striped table-hover\">
   <thead>
        <tr>
            <th>ID</th>
            <th>Marque</th>
            <th>Couleur</th>
            <th>Description</th>
            <th>Nombre de places</th>
            <th>Nom agence</th>
            <th>Actions</th>
        </tr>

    </thead>
    {% for voiture in voitures %}
        <tr>
            <td>{{voiture.id}}</td>
            <td>{{voiture.marque}}</td>
            <td>{{voiture.couleur}}</td>
             <td>{{voiture.description}}</td>
            <td>{{voiture.nommbreDePlaces}}</td>
            <td>{{voiture.nomAgence}}</td>
            <td><a href=\"{{ path('consulterVoiture',{'id':voiture.id}) }}\" >voir</a>
                <a href=\"{{ path('modifierVoiture',{'id':voiture.id}) }}\" >modifier</a>
                <a href=\"{{ path('supprimerVoiture',{'id':voiture.id}) }}\" >supprimer</a></td>

           

        </tr>
    {% endfor %}
</table>
{% endblock %}
", "admin/index.html.twig", "C:\\Users\\jhon\\Documents\\code\\app-symfony\\templates\\admin\\index.html.twig");
    }
}
