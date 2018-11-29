<?php

/* @Annonce/annonce/single.html.twig */
class __TwigTemplate_b70a5816ed4be98db918c3906ce0ef7386f02a8ec66eb7e8112f776e73713d92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Annonce/annonce/single.html.twig", 1);
        $this->blocks = array(
            'Main' => array($this, 'block_Main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Annonce/annonce/single.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Annonce/annonce/single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_Main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Main"));

        // line 4
        echo "<div class=\"w3layouts-breadcrumbs text-center\">
    <div class=\"container\">
\t\t\t<span class=\"agile-breadcrumbs\">
\t\t\t<a href=\"index.html\"><i class=\"fa fa-home home_1\"></i></a> /
\t\t\t<a href=\"all-classifieds.html\">All Ads</a> /
\t\t\t<a href=\"cars.html\">Cars</a> /
\t\t\t<span>Car name</span></span>
    </div>
</div>
<!-- //breadcrumbs -->
<!--single-page-->
<div class=\"single-page main-grid-border\">
    <div class=\"container\">
        <div class=\"product-desc\">
            <div class=\"col-md-7 product-view\">
                <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "titreAnnonce", array()), "html", null, true);
        echo "y</h2>
                <p> <i class=\"glyphicon glyphicon-map-marker\"></i><a href=\"#\">state</a> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "adresse", array()), "html", null, true);
        echo " | Ajoute le ";
        if ($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</p>
                <div class=\"flexslider\">
                        <img src=\"";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "iditems", array()), "imgiems", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("upload/" . $this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "iditems", array()), "imgiems", array()))), "html", null, true);
        }
        echo "\" />
                </div>
                <!-- FlexSlider -->
                <script defer src=\"js/jquery.flexslider.js\"></script>

                <script>
                    // Can also be used with \$(document).ready()
                    \$(window).load(function() {
                        \$('.flexslider').flexslider({
                            animation: \"slide\",
                            controlNav: \"thumbnails\"
                        });
                    });
                </script>
                <!-- //FlexSlider -->
                <div class=\"product-details\">
                    <h4><span class=\"w3layouts-agileinfo\">Views </span> : <strong>150</strong></h4>
                    <h4><span class=\"w3layouts-agileinfo\">Summary</span> :<p>
                            ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "description", array()), "html", null, true);
        echo "
                          </p>
                        <div class=\"clearfix\"></div></h4>

                </div>
            </div>
            <div class=\"col-md-5 product-details-grid\">
                <div class=\"item-price\">
                    <div class=\"product-price\">
                        <p class=\"p-price\">Prix</p>
                        <h3 class=\"rate\">\$ ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo "</h3>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"condition\">
                        <p class=\"p-price\">Condition</p>
                        <h4>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "etatAnnonce", array()), "html", null, true);
        echo "</h4>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"itemtype\">
                        <p class=\"p-price\">Type d'annonce</p>
                        <h4>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "typeAnnonce", array()), "html", null, true);
        echo "</h4>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"condition\">
                        <p class=\"p-price\">Categorie</p>
                        <h4 style=\"margin-left: -10px\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "iditems", array()), "idsouscat", array()), "idCat", array()), "nomcat", array()), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "iditems", array()), "idsouscat", array()), "Nomsouscat", array()), "html", null, true);
        echo "</h4>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
                <div class=\"interested text-center\">
                    <h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
                    <p><i class=\"glyphicon glyphicon-earphone\"></i>00-85-9875462655</p>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Annonce/annonce/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 65,  131 => 60,  123 => 55,  115 => 50,  102 => 40,  79 => 22,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block Main %}
<div class=\"w3layouts-breadcrumbs text-center\">
    <div class=\"container\">
\t\t\t<span class=\"agile-breadcrumbs\">
\t\t\t<a href=\"index.html\"><i class=\"fa fa-home home_1\"></i></a> /
\t\t\t<a href=\"all-classifieds.html\">All Ads</a> /
\t\t\t<a href=\"cars.html\">Cars</a> /
\t\t\t<span>Car name</span></span>
    </div>
</div>
<!-- //breadcrumbs -->
<!--single-page-->
<div class=\"single-page main-grid-border\">
    <div class=\"container\">
        <div class=\"product-desc\">
            <div class=\"col-md-7 product-view\">
                <h2>{{ annonce.titreAnnonce }}y</h2>
                <p> <i class=\"glyphicon glyphicon-map-marker\"></i><a href=\"#\">state</a> {{ annonce.adresse }} | Ajoute le {% if annonce.date %}{{ annonce.date|date('Y-m-d') }}{% endif %}</p>
                <div class=\"flexslider\">
                        <img src=\"{% if annonce.iditems.imgiems %}{{ asset('upload/' ~ annonce.iditems.imgiems) }}{% endif %}\" />
                </div>
                <!-- FlexSlider -->
                <script defer src=\"js/jquery.flexslider.js\"></script>

                <script>
                    // Can also be used with \$(document).ready()
                    \$(window).load(function() {
                        \$('.flexslider').flexslider({
                            animation: \"slide\",
                            controlNav: \"thumbnails\"
                        });
                    });
                </script>
                <!-- //FlexSlider -->
                <div class=\"product-details\">
                    <h4><span class=\"w3layouts-agileinfo\">Views </span> : <strong>150</strong></h4>
                    <h4><span class=\"w3layouts-agileinfo\">Summary</span> :<p>
                            {{ annonce.description }}
                          </p>
                        <div class=\"clearfix\"></div></h4>

                </div>
            </div>
            <div class=\"col-md-5 product-details-grid\">
                <div class=\"item-price\">
                    <div class=\"product-price\">
                        <p class=\"p-price\">Prix</p>
                        <h3 class=\"rate\">\$ {{ annonce.prix }}</h3>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"condition\">
                        <p class=\"p-price\">Condition</p>
                        <h4>{{ annonce.etatAnnonce}}</h4>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"itemtype\">
                        <p class=\"p-price\">Type d'annonce</p>
                        <h4>{{ annonce.typeAnnonce}}</h4>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"condition\">
                        <p class=\"p-price\">Categorie</p>
                        <h4 style=\"margin-left: -10px\">{{ annonce.iditems.idsouscat.idCat.nomcat }} >> {{ annonce.iditems.idsouscat.Nomsouscat }}</h4>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
                <div class=\"interested text-center\">
                    <h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
                    <p><i class=\"glyphicon glyphicon-earphone\"></i>00-85-9875462655</p>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>

{% endblock %}", "@Annonce/annonce/single.html.twig", "C:\\xampp\\htdocs\\PlateformeTROC\\ProjetWebTroc\\src\\AnnonceBundle\\Resources\\views\\annonce\\single.html.twig");
    }
}
