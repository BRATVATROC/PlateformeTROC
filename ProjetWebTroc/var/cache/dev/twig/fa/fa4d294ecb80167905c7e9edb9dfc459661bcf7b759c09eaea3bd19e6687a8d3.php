<?php

/* @App/default/index.html.twig */
class __TwigTemplate_24fb4c98d02ba9dfc05693d3a66bd0006a2081f85b28b59b871c549220742d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_Main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Main"));

        // line 3
        echo "    <div class=\"ads-grid\">
        <div class=\"col-md-1\"></div>
        <div class=\"agileinfo-ads-display col-md-9\">
            <div class=\"wrapper\">
                <div class=\"bs-example bs-example-tabs\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                    <div id=\"myTabContent\" class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\" aria-labelledby=\"home-tab\">
                            <div>
                                <div id=\"container\">
                                    <div class=\"view-controls-list\" id=\"viewcontrols\">
                                        <label>view :</label>
                                        <a class=\"gridview\"><i class=\"glyphicon glyphicon-th\"></i></a>
                                        <a class=\"listview active\"><i class=\"glyphicon glyphicon-th-list\"></i></a>
                                    </div>
                                    <div class=\"sort\">
                                        <div class=\"sort-by\">
                                            <label>Sort By : </label>
                                            <select>
                                                <option value=\"\">Most recent</option>
                                                <option value=\"\">Price: Rs Low to High</option>
                                                <option value=\"\">Price: Rs High to Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"list\">
                                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 30
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_single", array("idAnnonce" => $this->getAttribute($context["annonce"], "idAnnonce", array()))), "html", null, true);
            echo "\">
                                            <li>


                                                <img src=\"";
            // line 34
            if ($this->getAttribute($this->getAttribute($context["annonce"], "iditems", array()), "imgiems", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("upload/" . $this->getAttribute($this->getAttribute($context["annonce"], "iditems", array()), "imgiems", array()))), "html", null, true);
            }
            echo "\" title=\"\" alt=\"\" />
                                                <section class=\"list-left\">
                                                    <h5 class=\"title\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titreAnnonce", array()), "html", null, true);
            echo "</h5>
                                                    <span class=\"adprice\">\$";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo "</span>
                                                    <p class=\"catpath\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["annonce"], "iditems", array()), "idsouscat", array()), "idCat", array()), "nomcat", array()), "html", null, true);
            echo " >> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["annonce"], "iditems", array()), "idsouscat", array()), "Nomsouscat", array()), "html", null, true);
            echo "</p>
                                                    <p class=\"catpath\"></p>
                                                </section>
                                                <section class=\"list-right\">
                                                    <span class=\"date\"><i class=\"fa fa-calendar\"></i> ";
            // line 42
            if ($this->getAttribute($context["annonce"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</span>
                                                    <span class=\"cityname\"><i class=\"fa fa-map-marker\"></i> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "adresse", array()), "html", null, true);
            echo "</span>
                                                </section>
                                                <div class=\"clearfix\" style=\"margin-bottom: 30px\"></div>
                                            </li>
                                        </a>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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
        return "@App/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  119 => 43,  113 => 42,  104 => 38,  100 => 37,  96 => 36,  89 => 34,  81 => 30,  77 => 29,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"ads-grid\">
        <div class=\"col-md-1\"></div>
        <div class=\"agileinfo-ads-display col-md-9\">
            <div class=\"wrapper\">
                <div class=\"bs-example bs-example-tabs\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                    <div id=\"myTabContent\" class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\" aria-labelledby=\"home-tab\">
                            <div>
                                <div id=\"container\">
                                    <div class=\"view-controls-list\" id=\"viewcontrols\">
                                        <label>view :</label>
                                        <a class=\"gridview\"><i class=\"glyphicon glyphicon-th\"></i></a>
                                        <a class=\"listview active\"><i class=\"glyphicon glyphicon-th-list\"></i></a>
                                    </div>
                                    <div class=\"sort\">
                                        <div class=\"sort-by\">
                                            <label>Sort By : </label>
                                            <select>
                                                <option value=\"\">Most recent</option>
                                                <option value=\"\">Price: Rs Low to High</option>
                                                <option value=\"\">Price: Rs High to Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <ul class=\"list\">
                                        {% for annonce in annonces %}
                                        <a href=\"{{ path('annonce_single', {'idAnnonce':annonce.idAnnonce}) }}\">
                                            <li>


                                                <img src=\"{% if annonce.iditems.imgiems %}{{ asset('upload/' ~ annonce.iditems.imgiems) }}{% endif %}\" title=\"\" alt=\"\" />
                                                <section class=\"list-left\">
                                                    <h5 class=\"title\">{{ annonce.titreAnnonce }}</h5>
                                                    <span class=\"adprice\">\${{ annonce.prix }}</span>
                                                    <p class=\"catpath\">{{ annonce.iditems.idsouscat.idCat.nomcat }} >> {{ annonce.iditems.idsouscat.Nomsouscat }}</p>
                                                    <p class=\"catpath\"></p>
                                                </section>
                                                <section class=\"list-right\">
                                                    <span class=\"date\"><i class=\"fa fa-calendar\"></i> {% if annonce.date %}{{ annonce.date|date('Y-m-d') }}{% endif %}</span>
                                                    <span class=\"cityname\"><i class=\"fa fa-map-marker\"></i> {{ annonce.adresse }}</span>
                                                </section>
                                                <div class=\"clearfix\" style=\"margin-bottom: 30px\"></div>
                                            </li>
                                        </a>
                                            {% endfor %}

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    </div>
    </div>
{% endblock %}", "@App/default/index.html.twig", "C:\\xampp\\htdocs\\PlateformeTROC\\ProjetWebTroc\\src\\AppBundle\\Resources\\views\\default\\index.html.twig");
    }
}
