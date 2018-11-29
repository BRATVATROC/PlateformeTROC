<?php

/* @Troc/Default/admin.html.twig */
class __TwigTemplate_162db911715fb25475574a138ae6896b6bbdc1e4326ddd2b8370087d9a4d4e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'left_side_columns' => array($this, 'block_left_side_columns'),
            'Content_Wrapper' => array($this, 'block_Content_Wrapper'),
            'jquery' => array($this, 'block_jquery'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Troc/Default/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Troc/Default/admin.html.twig"));

        // line 1
        echo "<html style=\"height: auto; min-height: 100%;\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"stylesheet\" href=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\" ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">

    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
</head>
<body class=\"hold-transition skin-blue sidebar-mini\" style=\"height: auto; min-height: 100%;\" >

<div class=\"wrapper\"  style=\" min-height: 1000px;
  min-width: 10%;max-width: 100%\">
    ";
        // line 33
        $this->displayBlock('left_side_columns', $context, $blocks);
        // line 92
        echo "    ";
        $this->displayBlock('Content_Wrapper', $context, $blocks);
        // line 239
        echo "        ";
        $this->displayBlock('jquery', $context, $blocks);
        // line 244
        echo "    </div>

</div>
</body>
</html>







";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_left_side_columns($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_side_columns"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_side_columns"));

        // line 34
        echo "        <aside class=\"main-sidebar\">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                <div class=\"user-panel\">
                    <div class=\"pull-left image\">
                        <img src=\"../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <div class=\"pull-left info\">
                        <p style=\"color: white\">Anis Saidani</p>

                        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                    </div>
                    <br><br>
                </div>
                <br>
                <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                        <span class=\"input-group-btn\">
              <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
              </button>
            </span>
                    </div>
                </form>

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"header\">HEADER</li>
                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Livraisons</span></a></li>

                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Commandes</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Réclamations</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Événements</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Bannissement</span></a></li>
                    <li class=\"treeview\"><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Feedbacks</span> <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span></a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Likes et Dislikes</a></li>
                            <li><a href=\"#\">Avis et Commentaires</a></li>
                        </ul></li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>TrocLand Annonces</span>
                            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Annonces</a></li>
                            <li><a href=\"#\">Services</a></li>
                            <li><a href=\"#\">Catégories</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>

        </aside> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_Content_Wrapper($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content_Wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content_Wrapper"));

        // line 93
        echo "    <div class=\"content-wrapper\" style=\" min-height: 1500px;min-width:10%; max-width:80% ;max-height: 2000px ;margin-top:2%;margin-bottom: 3%  ; background-color:  #1F2739\">

        <section class=\"content-header\">
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                <li class=\"active\">Here</li>
            </ol>
            <h1><span class=\"yellow\">Liste</span> Réclamation</h1>
            <style type=\"text/css\" media=\"screen\">
                body {
                    font-family: 'Open Sans', sans-serif;
                    font-weight: 300;
                    line-height: 1.42em;
                    color:#A7A1AE;
                    background-color:#1F2739;
                }

                h1 {
                    font-size:3em;
                    font-weight: 300;
                    line-height:1em;
                    text-align: center;
                    color: #4DC3FA;
                }

                h2 {
                    font-size:1em;
                    font-weight: 300;
                    text-align: center;
                    display: block;
                    line-height:1em;
                    padding-bottom: 2em;
                    color: #FB667A;
                }

                h2 a {
                    font-weight: 700;
                    text-transform: uppercase;
                    color: #FB667A;
                    text-decoration: none;
                }

                .blue { color: #185875; }
                .yellow { color: #FFF842; }

                .container th h1 {
                    font-weight: bold;
                    font-size: 1em;
                    text-align: left;
                    color: #185875;
                }

                .container td {
                    font-weight: normal;
                    font-size: 1em;
                    -webkit-box-shadow: 0 2px 2px -2px #0E1119;
                    -moz-box-shadow: 0 2px 2px -2px #0E1119;
                    box-shadow: 0 2px 2px -2px #0E1119;
                }

                .container {
                    text-align: left;
                    overflow: hidden;
                    width: 80%;
                    margin: 0 auto;
                    display: table;
                    padding: 0 0 8em 0;
                }

                .container td, .container th {
                    padding-bottom: 2%;
                    padding-top: 2%;
                    padding-left:2%;
                }

                /* Background-color of the odd rows */
                .container tr:nth-child(odd) {
                    background-color: #323C50;
                }

                /* Background-color of the even rows */
                .container tr:nth-child(even) {
                    background-color: #2C3446;
                }

                .container th {
                    background-color: #1F2739;
                }

                .container td:first-child { color: #FB667A; }

                .container tr:hover {
                    background-color: #464A52;
                    -webkit-box-shadow: 0 6px 6px -6px #0E1119;
                    -moz-box-shadow: 0 6px 6px -6px #0E1119;
                    box-shadow: 0 6px 6px -6px #0E1119;
                }

                .container td:hover {
                    background-color: #FFF842;
                    color: #403E10;
                    font-weight: bold;

                    box-shadow: #7F7C21 -1px 1px, #7F7C21 2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
                    transform: translate3d(6px, -6px, 0);

                    transition-delay: 0s;
                    transition-duration: 0.4s;
                    transition-property: all;

                }

                @media (max-width: 800px) {
                    .container td:nth-child(4),
                    .container th:nth-child(4) { display: none; }
                }


            </style>

            <table class=\"container\">
                <tr>
                    <th><h1>Description</h1></th>
                    <th><h1>Date</h1></th>
                    <th><h1>EtatReclamation</h1></th>
                    <th><h1>Numéro Annonce</h1></th>
                    <th><h1>Troqueur</h1></th>
                    <th><h1>Type Reclamation</h1></th>
                    <th><h1>Réclamateur</h1></th>

                    </center>
                </tr>
                ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 226
            echo "                    <tr>
                        <td>";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Date", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "EtatReclamation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "NumeroAnnonce", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Troqueur", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "TypeReclamation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Reclamateur", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "
            </table>
        </section> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 239
    public function block_jquery($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jquery"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jquery"));

        echo "<script src=\"../bower_components/jquery/dist/jquery.min.js\"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src=\"../bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
            <!-- AdminLTE App -->
            <script src=\"../dist/js/adminlte.min.js\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Troc/Default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 239,  366 => 236,  357 => 233,  353 => 232,  349 => 231,  345 => 230,  341 => 229,  337 => 228,  333 => 227,  330 => 226,  326 => 225,  192 => 93,  183 => 92,  116 => 34,  107 => 33,  85 => 244,  82 => 239,  79 => 92,  77 => 33,  60 => 19,  53 => 15,  48 => 13,  43 => 11,  38 => 9,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html style=\"height: auto; min-height: 100%;\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"stylesheet\" href=\" {{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\" {{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\" {{ asset('bower_components/Ionicons/css/ionicons.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('dist/css/AdminLTE.min.css') }}\">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel=\"stylesheet\" href=\"{{ asset('dist/css/skins/skin-blue.min.css') }}\">

    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
</head>
<body class=\"hold-transition skin-blue sidebar-mini\" style=\"height: auto; min-height: 100%;\" >

<div class=\"wrapper\"  style=\" min-height: 1000px;
  min-width: 10%;max-width: 100%\">
    {% block left_side_columns %}
        <aside class=\"main-sidebar\">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                <div class=\"user-panel\">
                    <div class=\"pull-left image\">
                        <img src=\"../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <div class=\"pull-left info\">
                        <p style=\"color: white\">Anis Saidani</p>

                        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                    </div>
                    <br><br>
                </div>
                <br>
                <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                        <span class=\"input-group-btn\">
              <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
              </button>
            </span>
                    </div>
                </form>

                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"header\">HEADER</li>
                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Livraisons</span></a></li>

                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Commandes</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Réclamations</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Événements</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Bannissement</span></a></li>
                    <li class=\"treeview\"><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Feedbacks</span> <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span></a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Likes et Dislikes</a></li>
                            <li><a href=\"#\">Avis et Commentaires</a></li>
                        </ul></li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>TrocLand Annonces</span>
                            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Annonces</a></li>
                            <li><a href=\"#\">Services</a></li>
                            <li><a href=\"#\">Catégories</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>

        </aside> {% endblock %}
    {% block Content_Wrapper %}
    <div class=\"content-wrapper\" style=\" min-height: 1500px;min-width:10%; max-width:80% ;max-height: 2000px ;margin-top:2%;margin-bottom: 3%  ; background-color:  #1F2739\">

        <section class=\"content-header\">
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                <li class=\"active\">Here</li>
            </ol>
            <h1><span class=\"yellow\">Liste</span> Réclamation</h1>
            <style type=\"text/css\" media=\"screen\">
                body {
                    font-family: 'Open Sans', sans-serif;
                    font-weight: 300;
                    line-height: 1.42em;
                    color:#A7A1AE;
                    background-color:#1F2739;
                }

                h1 {
                    font-size:3em;
                    font-weight: 300;
                    line-height:1em;
                    text-align: center;
                    color: #4DC3FA;
                }

                h2 {
                    font-size:1em;
                    font-weight: 300;
                    text-align: center;
                    display: block;
                    line-height:1em;
                    padding-bottom: 2em;
                    color: #FB667A;
                }

                h2 a {
                    font-weight: 700;
                    text-transform: uppercase;
                    color: #FB667A;
                    text-decoration: none;
                }

                .blue { color: #185875; }
                .yellow { color: #FFF842; }

                .container th h1 {
                    font-weight: bold;
                    font-size: 1em;
                    text-align: left;
                    color: #185875;
                }

                .container td {
                    font-weight: normal;
                    font-size: 1em;
                    -webkit-box-shadow: 0 2px 2px -2px #0E1119;
                    -moz-box-shadow: 0 2px 2px -2px #0E1119;
                    box-shadow: 0 2px 2px -2px #0E1119;
                }

                .container {
                    text-align: left;
                    overflow: hidden;
                    width: 80%;
                    margin: 0 auto;
                    display: table;
                    padding: 0 0 8em 0;
                }

                .container td, .container th {
                    padding-bottom: 2%;
                    padding-top: 2%;
                    padding-left:2%;
                }

                /* Background-color of the odd rows */
                .container tr:nth-child(odd) {
                    background-color: #323C50;
                }

                /* Background-color of the even rows */
                .container tr:nth-child(even) {
                    background-color: #2C3446;
                }

                .container th {
                    background-color: #1F2739;
                }

                .container td:first-child { color: #FB667A; }

                .container tr:hover {
                    background-color: #464A52;
                    -webkit-box-shadow: 0 6px 6px -6px #0E1119;
                    -moz-box-shadow: 0 6px 6px -6px #0E1119;
                    box-shadow: 0 6px 6px -6px #0E1119;
                }

                .container td:hover {
                    background-color: #FFF842;
                    color: #403E10;
                    font-weight: bold;

                    box-shadow: #7F7C21 -1px 1px, #7F7C21 2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
                    transform: translate3d(6px, -6px, 0);

                    transition-delay: 0s;
                    transition-duration: 0.4s;
                    transition-property: all;

                }

                @media (max-width: 800px) {
                    .container td:nth-child(4),
                    .container th:nth-child(4) { display: none; }
                }


            </style>

            <table class=\"container\">
                <tr>
                    <th><h1>Description</h1></th>
                    <th><h1>Date</h1></th>
                    <th><h1>EtatReclamation</h1></th>
                    <th><h1>Numéro Annonce</h1></th>
                    <th><h1>Troqueur</h1></th>
                    <th><h1>Type Reclamation</h1></th>
                    <th><h1>Réclamateur</h1></th>

                    </center>
                </tr>
                {% for m in list %}
                    <tr>
                        <td>{{ m.Description }}</td>
                        <td>{{ m.Date }}</td>
                        <td>{{ m.EtatReclamation }}</td>
                        <td>{{ m.NumeroAnnonce }}</td>
                        <td>{{ m.Troqueur }}</td>
                        <td>{{ m.TypeReclamation }}</td>
                        <td>{{ m.Reclamateur }}</td>
                    </tr>
                {% endfor %}

            </table>
        </section> {% endblock %}
        {% block jquery %}<script src=\"../bower_components/jquery/dist/jquery.min.js\"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src=\"../bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
            <!-- AdminLTE App -->
            <script src=\"../dist/js/adminlte.min.js\"></script>{% endblock %}
    </div>

</div>
</body>
</html>







", "@Troc/Default/admin.html.twig", "C:\\xampp\\htdocs\\PlateformeTROC\\ProjetWebTroc\\src\\TrocBundle\\Resources\\views\\Default\\admin.html.twig");
    }
}
