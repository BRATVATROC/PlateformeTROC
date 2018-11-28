<?php

/* base.html.twig */
class __TwigTemplate_00b3eafa71c0d0f039a3ad3a208b5e92b446f82a6cd5b6a2a3f2a1721b5ce8f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'header' => array($this, 'block_header'),
            'Main' => array($this, 'block_Main'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <head>
        <title>We TROC</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"><!-- bootstrap-CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-select.css"), "html", null, true);
        echo "\"><!-- bootstrap-select-CSS -->
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" /><!-- style.css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui1.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" /><!-- fontawesome-CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menu_sideslide.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"><!-- Navigation-CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome1.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">

        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        <!-- meta tags -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"keywords\" content=\"Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design\" />
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //meta tags -->
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>


        <!--fonts-->
        <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!--//fonts-->
        <!-- js -->
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- js -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function () {
                var mySelect = \$('#first-disabled2');

                \$('#special').on('click', function () {
                    mySelect.find('option:selected').prop('disabled', true);
                    mySelect.selectpicker('refresh');
                });

                \$('#special2').on('click', function () {
                    mySelect.find('option:disabled').prop('disabled', false);
                    mySelect.selectpicker('refresh');
                });

                \$('#basic2').selectpicker({
                    liveSearch: true,
                    maxOptions: 1
                });
            });
        </script>
        <!-- language-select -->
        <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.leanModal.min.js"), "html", null, true);
        echo "\"></script>
        <link href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.uls.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.uls.grid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.uls.lcd.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!-- Source -->
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uls.data.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uls.data.utils.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uls.lcd.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uls.languagefilter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uls.regionfilter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uls.core.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$( document ).ready( function() {
                \$( '.uls-trigger' ).uls( {
                    onSelect : function( language ) {
                        var languageName = \$.uls.data.getAutonym( language );
                        \$( '.uls-trigger' ).text( languageName );
                    },
                    quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
                } );
            } );
        </script>
        <!-- //language-select -->
        <!-- switcher-grid and list alignment -->
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tabs.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                var elem=\$('#container ul');
                \$('#viewcontrols a').on('click',function(e) {
                    if (\$(this).hasClass('gridview')) {
                        elem.fadeOut(1000, function () {
                            \$('#container ul').removeClass('list').addClass('grid');
                            \$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
                            \$('#viewcontrols .gridview').addClass('active');
                            \$('#viewcontrols .listview').removeClass('active');
                            elem.fadeIn(1000);
                        });
                    }
                    else if(\$(this).hasClass('listview')) {
                        elem.fadeOut(1000, function () {
                            \$('#container ul').removeClass('grid').addClass('list');
                            \$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
                            \$('#viewcontrols .gridview').removeClass('active');
                            \$('#viewcontrols .listview').addClass('active');
                            elem.fadeIn(1000);
                        });
                    }
                });
            });
        </script>
    </head>
<body>
";
        // line 108
        $this->displayBlock('menu', $context, $blocks);
        // line 137
        $this->displayBlock('header', $context, $blocks);
        // line 273
        echo "


";
        // line 276
        $this->displayBlock('Main', $context, $blocks);
        // line 279
        echo "
";
        // line 280
        $this->displayBlock('footer', $context, $blocks);
        // line 357
        echo "</body>
";
        // line 358
        $this->displayBlock('script', $context, $blocks);
        // line 391
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 108
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 109
        echo "    <div class=\"agiletopbar\">
        <div class=\"wthreenavigation\">
            <div class=\"menu-wrap\">
                <nav class=\"menu\">
                    <div class=\"icon-list\">

                        <a href=\"electronics-appliances.html\"><i class=\"fa fa-fw fa-laptop\"></i><span>Electronics and appliances</span></a>
                        <a href=\"cars.html\"><i class=\"fa fa-fw fa-car\"></i><span>Cars</span></a>
                        <a href=\"bikes.html\"><i class=\"fa fa-fw fa-motorcycle\"></i><span>Bikes</span></a>
                        <a href=\"furnitures.html\"><i class=\"fa fa-fw fa-wheelchair\"></i><span>Furnitures</span></a>
                        <a href=\"pets.html\"><i class=\"fa fa-fw fa-paw\"></i><span>Pets</span></a>
                        <a href=\"books-sports-hobbies.html\"><i class=\"fa fa-fw fa-book\"></i><span>Books, Sports & Hobbies</span></a>
                        <a href=\"fashion.html\"><i class=\"fa fa-fw fa-asterisk\"></i><span>Fashion</span></a>
                        <a href=\"kids.html\"><i class=\"fa fa-fw fa-asterisk\"></i><span>Kids</span></a>
                        <a href=\"services.html\"><i class=\"fa fa-fw fa-shield\"></i><span>Services</span></a>
                        <a href=\"jobs.html\"><i class=\"fa fa-fw fa-at\"></i><span>Jobs</span></a>
                        <a href=\"real-estate.html\"><i class=\"fa fa-fw fa-home\"></i><span>Real Estate</span></a>
                    </div>
                </nav>
                <button class=\"close-button\" id=\"close-button\">Close Menu</button>
            </div>
            <button class=\"menu-button\" id=\"open-button\"> </button>
        </div>
        <div class=\"clearfix\"></div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 138
        echo "    <header>
        <div class=\"w3ls-header\"><!--header-one-->
            <div class=\"w3ls-header-left\">
            </div>
            <div class=\"w3ls-header-right\">
                <ul>

                    ";
        // line 145
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 146
            echo "                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 147
                echo "
                            <a href=\"";
                // line 148
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rec_admin");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |</a>
                            <a href=\"";
                // line 149
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
                                ";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
                            </a>


                        ";
            } else {
                // line 155
                echo "                    <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("troc_homepage");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |</a>
                    <a href=\"";
                // line 156
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
                        ";
                // line 157
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
                        ";
            }
            // line 159
            echo "                    ";
        } else {
            // line 160
            echo "                        <li class=\"dropdown head-dpdn\">
                            <a href=\"";
            // line 161
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" aria-expanded=\"false\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Sign In</a>
                        </li>

                    ";
        }
        // line 165
        echo "
                    <li class=\"dropdown head-dpdn\">
                        <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("help.html"), "html", null, true);
        echo "\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> Help</a>
                    </li>
                    <li class=\"dropdown head-dpdn\">
                        <a href=\"#\"><span class=\"active uls-trigger\"><i class=\"fa fa-language\" aria-hidden=\"true\"></i>languages</span></a>
                    </li>
                    <li class=\"dropdown head-dpdn\">
                        <div class=\"header-right\">
                            <!-- Large modal -->
                            <div class=\"selectregion\">
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">
                                    <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>Select City</button>
                                <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\"
                                     aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-lg\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                                                    &times;</button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\">
                                                    Please Choose Your Location</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <form class=\"form-horizontal\" action=\"#\" method=\"get\">
                                                    <div class=\"form-group\">
                                                        <select id=\"basic2\" class=\"show-tick form-control\" multiple>
                                                            <optgroup label=\"Popular Cities\">
                                                                <option selected style=\"display:none;color:#eee;\">Select City</option>
                                                                <option>Birmingham</option>
                                                                <option>Anchorage</option>
                                                                <option>Phoenix</option>
                                                                <option>Little Rock</option>
                                                                <option>Los Angeles</option>
                                                                <option>Denver</option>
                                                                <option>Bridgeport</option>
                                                                <option>Wilmington</option>
                                                                <option>Jacksonville</option>
                                                                <option>Atlanta</option>
                                                                <option>Honolulu</option>
                                                                <option>Boise</option>
                                                                <option>Chicago</option>
                                                                <option>Indianapolis</option>
                                                            </optgroup>
                                                            <optgroup label=\"More Cities\">
                                                                <optgroup label=\"Alabama\">
                                                                    <option>Birmingham</option>
                                                                    <option>Montgomery</option>
                                                                    <option>Mobile</option>
                                                                    <option>Huntsville</option>
                                                                    <option>Tuscaloosa</option>
                                                                </optgroup>
                                                                <optgroup label=\"Alaska\">
                                                                    <option>Anchorage</option>
                                                                    <option>Fairbanks</option>
                                                                    <option>Juneau</option>
                                                                    <option>Sitka</option>
                                                                    <option>Ketchikan</option>
                                                                </optgroup>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"container\">
            <div class=\"agile-its-header\">
                <div class=\"logo\">
                    <h1><a href=\"";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("troc_homepage");
        echo "\"><span>We</span>Troc</a></h1>
                </div>
                <div class=\"agileits_search\">
                    <form action=\"#\" method=\"post\">
                        <input name=\"Search\" type=\"text\" placeholder=\"How can we help you today?\" required=\" \">
                        <select id=\"agileinfo_search\" name=\"agileinfo_search\" required=\"\">
                            <option value=\"\">All Categories</option>
                            <option value=\"Mobiles\">Mobiles</option>
                            <option value=\"Electronics & Appliances\">Electronics & Appliances</option>
                            <option value=\"Cars\">Cars</option>
                            <option value=\"Bikes\">Bikes</option>
                            <option value=\"Furnitures\">Furnitures</option>
                            <option value=\"Books, Sports & Hobbies\">Books, Sports & Hobbies</option>
                            <option value=\"Fashion\">Fashion</option>
                            <option value=\"Kids\">Kids</option>
                            <option value=\"Services\">Services</option>
                            <option value=\"Jobs\">Jobs</option>
                            <option value=\"Real Estates\">Real Estates</option>
                        </select>
                        <button type=\"submit\" class=\"btn btn-default\" aria-label=\"Left Align\">
                            <i class=\"fa fa-search\" aria-hidden=\"true\"> </i>
                        </button>
                    </form>
                    <a class=\"post-w3layouts-ad\" href=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("post-ad.html"), "html", null, true);
        echo "\">Post Free Ad</a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 276
    public function block_Main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Main"));

        // line 277
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 280
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 281
        echo "    <footer>
        <div class=\"w3-agileits-footer-top\">
            <div class=\"container\">
                <div class=\"wthree-foo-grids\">
                    <div class=\"col-md-3 wthree-footer-grid\">
                        <h4 class=\"footer-head\">Who We Are</h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
                    </div>
                    <div class=\"col-md-3 wthree-footer-grid\">
                        <h4 class=\"footer-head\">Help</h4>
                        <ul>
                            <li><a href=\"howitworks.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>How it Works</a></li>
                            <li><a href=\"sitemap.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Sitemap</a></li>
                            <li><a href=\"faq.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Faq</a></li>
                            <li><a href=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("feedback.html"), "html", null, true);
        echo "\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Feedback</a></li>
                            <li><a href=\"contact.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Contact</a></li>
                            <li><a href=\"typography.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Short codes</a></li>
                            <li><a href=\"icons.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Icons Page</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 wthree-footer-grid\">
                        <h4 class=\"footer-head\">Information</h4>
                        <ul>
                            <li><a href=\"regions.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Locations Map</a></li>
                            <li><a href=\"terms.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Terms of Use</a></li>
                            <li><a href=\"popular-search.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Popular searches</a></li>
                            <li><a href=\"privacy.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 wthree-footer-grid\">
                        <h4 class=\"footer-head\">Contact Us</h4>
                        <span class=\"hq\">Our headquarters</span>
                        <address>
                            <ul class=\"location\">
                                <li><span class=\"glyphicon glyphicon-map-marker\"></span></li>
                                <li>Esprit Ghazela Tunis</li>
                            </ul>
                            <div class=\"clearfix\"> </div>
                            <ul class=\"location\">
                                <li><span class=\"glyphicon glyphicon-earphone\"></span></li>
                                <li>+216 77 777 777</li>
                            </ul>
                            <div class=\"clearfix\"> </div>
                            <ul class=\"location\">
                                <li><span class=\"glyphicon glyphicon-envelope\"></span></li>
                                <li>Bratva@esprit.tn</li>
                            </ul>
                        </address>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"agileits-footer-bottom text-center\">
            <div class=\"container\">
                <div class=\"w3-footer-logo\">
                    <h1><a href=\"troc_homepage\"><span>We</span>Troc</a></h1>
                </div>
                <div class=\"w3-footer-social-icons\">
                    <ul>
                        <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i><span>Facebook</span></a></li>
                        <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i><span>Twitter</span></a></li>
                        <li><a class=\"flickr\" href=\"#\"><i class=\"fa fa-flickr\" aria-hidden=\"true\"></i><span>Flickr</span></a></li>
                        <li><a class=\"googleplus\" href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i><span>Google+</span></a></li>
                        <li><a class=\"dribbble\" href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i><span>Dribbble</span></a></li>
                    </ul>
                </div>
                <div class=\"copyrights\">
                    <p> © 2016 Resale. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\"> W3layouts</a></p>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 358
    public function block_script($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 359
        echo "    <!-- Navigation-JavaScript -->
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- //Navigation-JavaScript -->
    <!-- here stars scrolling icon -->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            \$().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- start-smoth-scrolling -->
    <script type=\"text/javascript\" src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  638 => 381,  634 => 380,  612 => 361,  608 => 360,  605 => 359,  596 => 358,  525 => 296,  508 => 281,  499 => 280,  488 => 277,  479 => 276,  462 => 266,  436 => 243,  357 => 167,  353 => 165,  346 => 161,  343 => 160,  340 => 159,  335 => 157,  331 => 156,  324 => 155,  316 => 150,  312 => 149,  306 => 148,  303 => 147,  300 => 146,  298 => 145,  289 => 138,  280 => 137,  243 => 109,  234 => 108,  223 => 391,  221 => 358,  218 => 357,  216 => 280,  213 => 279,  211 => 276,  206 => 273,  204 => 137,  202 => 108,  171 => 80,  154 => 66,  150 => 65,  146 => 64,  142 => 63,  138 => 62,  134 => 61,  129 => 59,  125 => 58,  121 => 57,  117 => 56,  92 => 34,  88 => 33,  82 => 30,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <head>
        <title>We TROC</title>
        <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\"><!-- bootstrap-CSS -->
        <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-select.css')}}\"><!-- bootstrap-select-CSS -->
        <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" /><!-- style.css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/jquery-ui1.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.min.css')}}\" /><!-- fontawesome-CSS -->
        <link rel=\"stylesheet\" href=\"{{asset('css/menu_sideslide.css')}}\" type=\"text/css\" media=\"all\"><!-- Navigation-CSS -->
        <link rel=\"stylesheet\" href=\"{{asset('css/font-awesome1.min.css')}}\" type=\"text/css\" media=\"all\">

        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        <!-- meta tags -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"keywords\" content=\"Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design\" />
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //meta tags -->
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>


        <!--fonts-->
        <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!--//fonts-->
        <!-- js -->
        <script type=\"text/javascript\" src=\"{{asset('js/jquery.min.js')}}\"></script>
        <!-- js -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"{{asset('js/bootstrap.js')}}\"></script>
        <script src=\"{{asset('js/bootstrap-select.js')}}\"></script>
        <script>
            \$(document).ready(function () {
                var mySelect = \$('#first-disabled2');

                \$('#special').on('click', function () {
                    mySelect.find('option:selected').prop('disabled', true);
                    mySelect.selectpicker('refresh');
                });

                \$('#special2').on('click', function () {
                    mySelect.find('option:disabled').prop('disabled', false);
                    mySelect.selectpicker('refresh');
                });

                \$('#basic2').selectpicker({
                    liveSearch: true,
                    maxOptions: 1
                });
            });
        </script>
        <!-- language-select -->
        <script type=\"text/javascript\" src=\"{{asset('js/jquery.leanModal.min.js')}}\"></script>
        <link href=\"{{asset('css/jquery.uls.css')}}\" rel=\"stylesheet\"/>
        <link href=\"{{asset('css/jquery.uls.grid.css')}}\" rel=\"stylesheet\"/>
        <link href=\"{{asset('css/jquery.uls.lcd.css')}}\" rel=\"stylesheet\"/>
        <!-- Source -->
        <script src=\"{{asset('js/jquery.uls.data.js')}}\"></script>
        <script src=\"{{asset('js/jquery.uls.data.utils.js')}}\"></script>
        <script src=\"{{asset('js/jquery.uls.lcd.js')}}\"></script>
        <script src=\"{{asset('js/jquery.uls.languagefilter.js')}}\"></script>
        <script src=\"{{asset('js/jquery.uls.regionfilter.js')}}\"></script>
        <script src=\"{{asset('js/jquery.uls.core.js')}}\"></script>
        <script>
            \$( document ).ready( function() {
                \$( '.uls-trigger' ).uls( {
                    onSelect : function( language ) {
                        var languageName = \$.uls.data.getAutonym( language );
                        \$( '.uls-trigger' ).text( languageName );
                    },
                    quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
                } );
            } );
        </script>
        <!-- //language-select -->
        <!-- switcher-grid and list alignment -->
        <script src=\"{{asset('js/tabs.js')}}\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                var elem=\$('#container ul');
                \$('#viewcontrols a').on('click',function(e) {
                    if (\$(this).hasClass('gridview')) {
                        elem.fadeOut(1000, function () {
                            \$('#container ul').removeClass('list').addClass('grid');
                            \$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
                            \$('#viewcontrols .gridview').addClass('active');
                            \$('#viewcontrols .listview').removeClass('active');
                            elem.fadeIn(1000);
                        });
                    }
                    else if(\$(this).hasClass('listview')) {
                        elem.fadeOut(1000, function () {
                            \$('#container ul').removeClass('grid').addClass('list');
                            \$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
                            \$('#viewcontrols .gridview').removeClass('active');
                            \$('#viewcontrols .listview').addClass('active');
                            elem.fadeIn(1000);
                        });
                    }
                });
            });
        </script>
    </head>
<body>
{% block menu %}
    <div class=\"agiletopbar\">
        <div class=\"wthreenavigation\">
            <div class=\"menu-wrap\">
                <nav class=\"menu\">
                    <div class=\"icon-list\">

                        <a href=\"electronics-appliances.html\"><i class=\"fa fa-fw fa-laptop\"></i><span>Electronics and appliances</span></a>
                        <a href=\"cars.html\"><i class=\"fa fa-fw fa-car\"></i><span>Cars</span></a>
                        <a href=\"bikes.html\"><i class=\"fa fa-fw fa-motorcycle\"></i><span>Bikes</span></a>
                        <a href=\"furnitures.html\"><i class=\"fa fa-fw fa-wheelchair\"></i><span>Furnitures</span></a>
                        <a href=\"pets.html\"><i class=\"fa fa-fw fa-paw\"></i><span>Pets</span></a>
                        <a href=\"books-sports-hobbies.html\"><i class=\"fa fa-fw fa-book\"></i><span>Books, Sports & Hobbies</span></a>
                        <a href=\"fashion.html\"><i class=\"fa fa-fw fa-asterisk\"></i><span>Fashion</span></a>
                        <a href=\"kids.html\"><i class=\"fa fa-fw fa-asterisk\"></i><span>Kids</span></a>
                        <a href=\"services.html\"><i class=\"fa fa-fw fa-shield\"></i><span>Services</span></a>
                        <a href=\"jobs.html\"><i class=\"fa fa-fw fa-at\"></i><span>Jobs</span></a>
                        <a href=\"real-estate.html\"><i class=\"fa fa-fw fa-home\"></i><span>Real Estate</span></a>
                    </div>
                </nav>
                <button class=\"close-button\" id=\"close-button\">Close Menu</button>
            </div>
            <button class=\"menu-button\" id=\"open-button\"> </button>
        </div>
        <div class=\"clearfix\"></div>
    </div>


{% endblock %}
{% block header %}
    <header>
        <div class=\"w3ls-header\"><!--header-one-->
            <div class=\"w3ls-header-left\">
            </div>
            <div class=\"w3ls-header-right\">
                <ul>

                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {% if(is_granted(\"ROLE_ADMIN\")) %}

                            <a href=\"{{ path('rec_admin') }}\">{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |</a>
                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                            </a>


                        {% else%}
                    <a href=\"{{ path('troc_homepage') }}\">{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |</a>
                    <a href=\"{{ path('fos_user_security_logout') }}\">
                        {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        {% endif %}
                    {% else %}
                        <li class=\"dropdown head-dpdn\">
                            <a href=\"{{ path('fos_user_security_login') }}\" aria-expanded=\"false\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Sign In</a>
                        </li>

                    {% endif %}

                    <li class=\"dropdown head-dpdn\">
                        <a href=\"{{asset('help.html')}}\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> Help</a>
                    </li>
                    <li class=\"dropdown head-dpdn\">
                        <a href=\"#\"><span class=\"active uls-trigger\"><i class=\"fa fa-language\" aria-hidden=\"true\"></i>languages</span></a>
                    </li>
                    <li class=\"dropdown head-dpdn\">
                        <div class=\"header-right\">
                            <!-- Large modal -->
                            <div class=\"selectregion\">
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">
                                    <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>Select City</button>
                                <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\"
                                     aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-lg\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                                                    &times;</button>
                                                <h4 class=\"modal-title\" id=\"myModalLabel\">
                                                    Please Choose Your Location</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <form class=\"form-horizontal\" action=\"#\" method=\"get\">
                                                    <div class=\"form-group\">
                                                        <select id=\"basic2\" class=\"show-tick form-control\" multiple>
                                                            <optgroup label=\"Popular Cities\">
                                                                <option selected style=\"display:none;color:#eee;\">Select City</option>
                                                                <option>Birmingham</option>
                                                                <option>Anchorage</option>
                                                                <option>Phoenix</option>
                                                                <option>Little Rock</option>
                                                                <option>Los Angeles</option>
                                                                <option>Denver</option>
                                                                <option>Bridgeport</option>
                                                                <option>Wilmington</option>
                                                                <option>Jacksonville</option>
                                                                <option>Atlanta</option>
                                                                <option>Honolulu</option>
                                                                <option>Boise</option>
                                                                <option>Chicago</option>
                                                                <option>Indianapolis</option>
                                                            </optgroup>
                                                            <optgroup label=\"More Cities\">
                                                                <optgroup label=\"Alabama\">
                                                                    <option>Birmingham</option>
                                                                    <option>Montgomery</option>
                                                                    <option>Mobile</option>
                                                                    <option>Huntsville</option>
                                                                    <option>Tuscaloosa</option>
                                                                </optgroup>
                                                                <optgroup label=\"Alaska\">
                                                                    <option>Anchorage</option>
                                                                    <option>Fairbanks</option>
                                                                    <option>Juneau</option>
                                                                    <option>Sitka</option>
                                                                    <option>Ketchikan</option>
                                                                </optgroup>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"container\">
            <div class=\"agile-its-header\">
                <div class=\"logo\">
                    <h1><a href=\"{{ path('troc_homepage') }}\"><span>We</span>Troc</a></h1>
                </div>
                <div class=\"agileits_search\">
                    <form action=\"#\" method=\"post\">
                        <input name=\"Search\" type=\"text\" placeholder=\"How can we help you today?\" required=\" \">
                        <select id=\"agileinfo_search\" name=\"agileinfo_search\" required=\"\">
                            <option value=\"\">All Categories</option>
                            <option value=\"Mobiles\">Mobiles</option>
                            <option value=\"Electronics & Appliances\">Electronics & Appliances</option>
                            <option value=\"Cars\">Cars</option>
                            <option value=\"Bikes\">Bikes</option>
                            <option value=\"Furnitures\">Furnitures</option>
                            <option value=\"Books, Sports & Hobbies\">Books, Sports & Hobbies</option>
                            <option value=\"Fashion\">Fashion</option>
                            <option value=\"Kids\">Kids</option>
                            <option value=\"Services\">Services</option>
                            <option value=\"Jobs\">Jobs</option>
                            <option value=\"Real Estates\">Real Estates</option>
                        </select>
                        <button type=\"submit\" class=\"btn btn-default\" aria-label=\"Left Align\">
                            <i class=\"fa fa-search\" aria-hidden=\"true\"> </i>
                        </button>
                    </form>
                    <a class=\"post-w3layouts-ad\" href=\"{{asset('post-ad.html')}}\">Post Free Ad</a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </header>
{% endblock %}



{% block Main%}

{% endblock %}

{% block footer %}
    <footer>
        <div class=\"w3-agileits-footer-top\">
            <div class=\"container\">
                <div class=\"wthree-foo-grids\">
                    <div class=\"col-md-3 wthree-footer-grid\">
                        <h4 class=\"footer-head\">Who We Are</h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
                    </div>
                    <div class=\"col-md-3 wthree-footer-grid\">
                        <h4 class=\"footer-head\">Help</h4>
                        <ul>
                            <li><a href=\"howitworks.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>How it Works</a></li>
                            <li><a href=\"sitemap.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Sitemap</a></li>
                            <li><a href=\"faq.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Faq</a></li>
                            <li><a href=\"{{ asset('feedback.html') }}\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Feedback</a></li>
                            <li><a href=\"contact.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Contact</a></li>
                            <li><a href=\"typography.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Short codes</a></li>
                            <li><a href=\"icons.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Icons Page</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 wthree-footer-grid\">
                        <h4 class=\"footer-head\">Information</h4>
                        <ul>
                            <li><a href=\"regions.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Locations Map</a></li>
                            <li><a href=\"terms.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Terms of Use</a></li>
                            <li><a href=\"popular-search.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Popular searches</a></li>
                            <li><a href=\"privacy.html\"><i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-3 wthree-footer-grid\">
                        <h4 class=\"footer-head\">Contact Us</h4>
                        <span class=\"hq\">Our headquarters</span>
                        <address>
                            <ul class=\"location\">
                                <li><span class=\"glyphicon glyphicon-map-marker\"></span></li>
                                <li>Esprit Ghazela Tunis</li>
                            </ul>
                            <div class=\"clearfix\"> </div>
                            <ul class=\"location\">
                                <li><span class=\"glyphicon glyphicon-earphone\"></span></li>
                                <li>+216 77 777 777</li>
                            </ul>
                            <div class=\"clearfix\"> </div>
                            <ul class=\"location\">
                                <li><span class=\"glyphicon glyphicon-envelope\"></span></li>
                                <li>Bratva@esprit.tn</li>
                            </ul>
                        </address>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"agileits-footer-bottom text-center\">
            <div class=\"container\">
                <div class=\"w3-footer-logo\">
                    <h1><a href=\"troc_homepage\"><span>We</span>Troc</a></h1>
                </div>
                <div class=\"w3-footer-social-icons\">
                    <ul>
                        <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i><span>Facebook</span></a></li>
                        <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i><span>Twitter</span></a></li>
                        <li><a class=\"flickr\" href=\"#\"><i class=\"fa fa-flickr\" aria-hidden=\"true\"></i><span>Flickr</span></a></li>
                        <li><a class=\"googleplus\" href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i><span>Google+</span></a></li>
                        <li><a class=\"dribbble\" href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i><span>Dribbble</span></a></li>
                    </ul>
                </div>
                <div class=\"copyrights\">
                    <p> © 2016 Resale. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\"> W3layouts</a></p>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </footer>
{% endblock %}
</body>
{% block script %}
    <!-- Navigation-JavaScript -->
    <script src=\"{{asset('js/classie.js')}}\"></script>
    <script src=\"{{asset('js/main.js')}}\"></script>
    <!-- //Navigation-JavaScript -->
    <!-- here stars scrolling icon -->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            \$().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- start-smoth-scrolling -->
    <script type=\"text/javascript\" src=\"{{asset('js/move-top.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/easing.js')}}\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
            });
        });
    </script>
{% endblock %}
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\PlateformeTROC\\ProjetWebTroc\\app\\Resources\\views\\base.html.twig");
    }
}
