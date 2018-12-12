<?php

/* @Boutique/Admin/produit_show.html.twig */
class __TwigTemplate_bf328edf91e3a416ad36fe63b379fef0010c58e41067e3da9246b9f536c671d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@Boutique/Admin/produit_show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/produit_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Boutique/Admin/produit_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_add");
        echo "\">Ajouter un article</a>
      <div class=\"table-responsive\">
        <table id=\"mytable\" class=\"table table-bordred table-striped\">
          <thead>
            <th><input type=\"checkbox\" id=\"checkall\" /></th>
            <th>Photo</th>
            <th>ID produit</th>
            <th>Référence</th>
            <th>Catégorie</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Couleur</th>
            <th>Taille</th>
            <th>Public</th>
            <th>Prix</th>
            <th>Stock</th>
            <th colspan=\"3\">Actions</th>
          </thead>
          <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["pdt"]) {
            // line 29
            echo "            <tr>
              <td><input type=\"checkbox\" class=\"checkthis\" /></td>
              <td><img class=\"card-img-top\" src=";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/photo/" . $this->getAttribute($context["pdt"], "photo", array()))), "html", null, true);
            echo " alt=\"\" height=\"80px\"></td>
              <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "idProduit", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "reference", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "categorie", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "titre", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "description", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "couleur", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "taille", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "public", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "prix", array()), "html", null, true);
            echo " €</td>
              <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdt"], "stock", array()), "html", null, true);
            echo "</td>
              <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit", array("id" => $this->getAttribute($context["pdt"], "idProduit", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"far fa-eye\"></i></a></td>
              <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_update", array("id" => $this->getAttribute($context["pdt"], "idProduit", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"far fa-edit\"></i></a></td>
              <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_delete", array("id" => $this->getAttribute($context["pdt"], "idProduit", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"far fa-trash-alt\"></i></a></td>
            </tr>
          </tbody>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </table>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Boutique/Admin/produit_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 48,  155 => 44,  151 => 43,  147 => 42,  143 => 41,  139 => 40,  135 => 39,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 29,  95 => 28,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-12\">
    <a href=\"{{path('produit_add')}}\">Ajouter un article</a>
      <div class=\"table-responsive\">
        <table id=\"mytable\" class=\"table table-bordred table-striped\">
          <thead>
            <th><input type=\"checkbox\" id=\"checkall\" /></th>
            <th>Photo</th>
            <th>ID produit</th>
            <th>Référence</th>
            <th>Catégorie</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Couleur</th>
            <th>Taille</th>
            <th>Public</th>
            <th>Prix</th>
            <th>Stock</th>
            <th colspan=\"3\">Actions</th>
          </thead>
          <tbody>
            {% for pdt in produits %}
            <tr>
              <td><input type=\"checkbox\" class=\"checkthis\" /></td>
              <td><img class=\"card-img-top\" src={{ asset('/photo/' ~ pdt.photo) }} alt=\"\" height=\"80px\"></td>
              <td>{{ pdt.idProduit }}</td>
              <td>{{ pdt.reference }}</td>
              <td>{{ pdt.categorie }}</td>
              <td>{{ pdt.titre }}</td>
              <td>{{ pdt.description }}</td>
              <td>{{ pdt.couleur }}</td>
              <td>{{ pdt.taille }}</td>
              <td>{{ pdt.public }}</td>
              <td>{{ pdt.prix }} €</td>
              <td>{{ pdt.stock }}</td>
              <td><a href=\"{{ path('produit', {'id': pdt.idProduit})}}\" target=\"_blank\"><i class=\"far fa-eye\"></i></a></td>
              <td><a href=\"{{ path('produit_update', {'id': pdt.idProduit})}}\" target=\"_blank\"><i class=\"far fa-edit\"></i></a></td>
              <td><a href=\"{{ path('produit_delete', {'id': pdt.idProduit})}}\" target=\"_blank\"><i class=\"far fa-trash-alt\"></i></a></td>
            </tr>
          </tbody>
          {% endfor %}
        </table>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "@Boutique/Admin/produit_show.html.twig", "C:\\wamp64\\www\\Boutique3\\src\\BoutiqueBundle\\Resources\\views\\Admin\\produit_show.html.twig");
    }
}
