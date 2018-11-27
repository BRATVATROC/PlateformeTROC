<?php

/* base.html.twig */
class __TwigTemplate_1bc0793779cf05716e3e517037502be598e094ae3ad4f8ae61e4a4788ee2c1d3 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <head>
        <title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | All Classifieds :: w3layouts</title>
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
        <!-- meta tags -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"keywords\" content=\"Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design\" />
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //meta tags -->

        <!--fonts-->
        <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!--//fonts-->
        <!-- js -->
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- js -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
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
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.leanModal.min.js"), "html", null, true);
        echo "\"></script>
        <link href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.uls.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.uls.grid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.uls.lcd.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!-- Source -->
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uls.data.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uls.data.utils.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uls.lcd.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uls.languagefilter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.uls.regionfilter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 62
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
        // line 76
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
        // line 104
        $this->displayBlock('menu', $context, $blocks);
        // line 133
        $this->displayBlock('header', $context, $blocks);
        // line 605
        echo "


";
        // line 608
        $this->displayBlock('Main', $context, $blocks);
        // line 611
        echo "
";
        // line 612
        $this->displayBlock('footer', $context, $blocks);
        // line 689
        echo "</body>
";
        // line 690
        $this->displayBlock('script', $context, $blocks);
        // line 723
        echo "</html>
";
    }

    // line 104
    public function block_menu($context, array $blocks = array())
    {
        // line 105
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
    }

    // line 133
    public function block_header($context, array $blocks = array())
    {
        // line 134
        echo "    <header>
        <div class=\"w3ls-header\"><!--header-one-->
            <div class=\"w3ls-header-left\">
            </div>
            <div class=\"w3ls-header-right\">
                <ul>

                    ";
        // line 141
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 142
            echo "                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 143
                echo "
                            <a href=\"";
                // line 144
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rec_admin");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |</a>
                            <a href=\"";
                // line 145
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
                                ";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
                            </a>

                        ";
            }
            // line 150
            echo "                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 151
                echo "                    <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("troc_homepage");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
                echo " |</a>
                    <a href=\"";
                // line 152
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
                echo "\">
                        ";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
                echo "
                        ";
            }
            // line 155
            echo "                    ";
        } else {
            // line 156
            echo "                        <li class=\"dropdown head-dpdn\">
                            <a href=\"";
            // line 157
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" aria-expanded=\"false\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Sign In</a>
                        </li>

                    ";
        }
        // line 161
        echo "
                    <li class=\"dropdown head-dpdn\">
                        <a href=\"";
        // line 163
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
                                                                <optgroup label=\"Arizona\">
                                                                    <option>Phoenix</option>
                                                                    <option>Tucson</option>
                                                                    <option>Mesa</option>
                                                                    <option>Chandler</option>
                                                                    <option>Glendale</option>
                                                                </optgroup>
                                                                <optgroup label=\"Arkansas\">
                                                                    <option>Little Rock</option>
                                                                    <option>Fort Smith</option>
                                                                    <option>Fayetteville</option>
                                                                    <option>Springdale</option>
                                                                    <option>Jonesboro</option>
                                                                </optgroup>
                                                                <optgroup label=\"California\">
                                                                    <option>Los Angeles</option>
                                                                    <option>San Diego</option>
                                                                    <option>San Jose</option>
                                                                    <option>San Francisco</option>
                                                                    <option>Fresno</option>
                                                                </optgroup>
                                                                <optgroup label=\"Colorado\">
                                                                    <option>Denver</option>
                                                                    <option>Colorado</option>
                                                                    <option>Aurora</option>
                                                                    <option>Fort Collins</option>
                                                                    <option>Lakewood</option>
                                                                </optgroup>
                                                                <optgroup label=\"Connecticut\">
                                                                    <option>Bridgeport</option>
                                                                    <option>New Haven</option>
                                                                    <option>Hartford</option>
                                                                    <option>Stamford</option>
                                                                    <option>Waterbury</option>
                                                                </optgroup>
                                                                <optgroup label=\"Delaware\">
                                                                    <option>Wilmington</option>
                                                                    <option>Dover</option>
                                                                    <option>Newark</option>
                                                                    <option>Bear</option>
                                                                    <option>Middletown</option>
                                                                </optgroup>
                                                                <optgroup label=\"Florida\">
                                                                    <option>Jacksonville</option>
                                                                    <option>Miami</option>
                                                                    <option>Tampa</option>
                                                                    <option>St. Petersburg</option>
                                                                    <option>Orlando</option>
                                                                </optgroup>
                                                                <optgroup label=\"Georgia\">
                                                                    <option>Atlanta</option>
                                                                    <option>Augusta</option>
                                                                    <option>Columbus</option>
                                                                    <option>Savannah</option>
                                                                    <option>Athens</option>
                                                                </optgroup>
                                                                <optgroup label=\"Hawaii\">
                                                                    <option>Honolulu</option>
                                                                    <option>Pearl City</option>
                                                                    <option>Hilo</option>
                                                                    <option>Kailua</option>
                                                                    <option>Waipahu</option>
                                                                </optgroup>
                                                                <optgroup label=\"Idaho\">
                                                                    <option>Boise</option>
                                                                    <option>Nampa</option>
                                                                    <option>Meridian</option>
                                                                    <option>Idaho Falls</option>
                                                                    <option>Pocatello</option>
                                                                </optgroup>
                                                                <optgroup label=\"Illinois\">
                                                                    <option>Chicago</option>
                                                                    <option>Aurora</option>
                                                                    <option>Rockford</option>
                                                                    <option>Joliet</option>
                                                                    <option>Naperville</option>
                                                                </optgroup>
                                                                <optgroup label=\"Indiana\">
                                                                    <option>Indianapolis</option>
                                                                    <option>Fort Wayne</option>
                                                                    <option>Evansville</option>
                                                                    <option>South Bend</option>
                                                                    <option>Hammond</option>
                                                                </optgroup>
                                                                <optgroup label=\"Iowa\">
                                                                    <option>Des Moines</option>
                                                                    <option>Cedar Rapids</option>
                                                                    <option>Davenport</option>
                                                                    <option>Sioux City</option>
                                                                    <option>Waterloo</option>
                                                                </optgroup>
                                                                <optgroup label=\"Kansas\">
                                                                    <option>Wichita</option>
                                                                    <option>Overland Park</option>
                                                                    <option>Kansas City</option>
                                                                    <option>Topeka</option>
                                                                    <option>Olathe  </option>
                                                                </optgroup>
                                                                <optgroup label=\"Kentucky\">
                                                                    <option>Louisville</option>
                                                                    <option>Lexington</option>
                                                                    <option>Bowling Green</option>
                                                                    <option>Owensboro</option>
                                                                    <option>Covington</option>
                                                                </optgroup>
                                                                <optgroup label=\"Louisiana\">
                                                                    <option>New Orleans</option>
                                                                    <option>Baton Rouge</option>
                                                                    <option>Shreveport</option>
                                                                    <option>Metairie</option>
                                                                    <option>Lafayette</option>
                                                                </optgroup>
                                                                <optgroup label=\"Maine\">
                                                                    <option>Portland</option>
                                                                    <option>Lewiston</option>
                                                                    <option>Bangor</option>
                                                                    <option>South Portland</option>
                                                                    <option>Auburn</option>
                                                                </optgroup>
                                                                <optgroup label=\"Maryland\">
                                                                    <option>Baltimore</option>
                                                                    <option>Frederick</option>
                                                                    <option>Rockville</option>
                                                                    <option>Gaithersburg</option>
                                                                    <option>Bowie</option>
                                                                </optgroup>
                                                                <optgroup label=\"Massachusetts\">
                                                                    <option>Boston</option>
                                                                    <option>Worcester</option>
                                                                    <option>Springfield</option>
                                                                    <option>Lowell</option>
                                                                    <option>Cambridge</option>
                                                                </optgroup>
                                                                <optgroup label=\"Michigan\">
                                                                    <option>Detroit</option>
                                                                    <option>Grand Rapids</option>
                                                                    <option>Warren</option>
                                                                    <option>Sterling Heights</option>
                                                                    <option>Lansing</option>
                                                                </optgroup>
                                                                <optgroup label=\"Minnesota\">
                                                                    <option>Minneapolis</option>
                                                                    <option>St. Paul</option>
                                                                    <option>Rochester</option>
                                                                    <option>Duluth</option>
                                                                    <option>Bloomington</option>
                                                                </optgroup>
                                                                <optgroup label=\"Mississippi\">
                                                                    <option>Jackson</option>
                                                                    <option>Gulfport</option>
                                                                    <option>Southaven</option>
                                                                    <option>Hattiesburg</option>
                                                                    <option>Biloxi</option>
                                                                </optgroup>
                                                                <optgroup label=\"Missouri\">
                                                                    <option>Kansas City</option>
                                                                    <option>St. Louis</option>
                                                                    <option>Springfield</option>
                                                                    <option>Independence</option>
                                                                    <option>Columbia</option>
                                                                </optgroup>
                                                                <optgroup label=\"Montana\">
                                                                    <option>Billings</option>
                                                                    <option>Missoula</option>
                                                                    <option>Great Falls</option>
                                                                    <option>Bozeman</option>
                                                                    <option>Butte-Silver Bow</option>
                                                                </optgroup>
                                                                <optgroup label=\"Nebraska\">
                                                                    <option>Omaha</option>
                                                                    <option>Lincoln</option>
                                                                    <option>Bellevue</option>
                                                                    <option>Grand Island</option>
                                                                    <option>Kearney</option>
                                                                </optgroup>
                                                                <optgroup label=\"Nevada\">
                                                                    <option>Las Vegas</option>
                                                                    <option>Henderson</option>
                                                                    <option>North Las Vegas</option>
                                                                    <option>Reno</option>
                                                                    <option>Sunrise Manor</option>
                                                                </optgroup>
                                                                <optgroup label=\"New Hampshire\">
                                                                    <option>Manchesters</option>
                                                                    <option>Nashua</option>
                                                                    <option>Concord</option>
                                                                    <option>Dover</option>
                                                                    <option>Rochester</option>
                                                                </optgroup>
                                                                <optgroup label=\"New Jersey\">
                                                                    <option>Newark</option>
                                                                    <option>Jersey City</option>
                                                                    <option>Paterson</option>
                                                                    <option>Elizabeth</option>
                                                                    <option>Edison</option>
                                                                </optgroup>
                                                                <optgroup label=\"New Mexico\">
                                                                    <option>Albuquerque</option>
                                                                    <option>Las Cruces</option>
                                                                    <option>Rio Rancho</option>
                                                                    <option>Santa Fe</option>
                                                                    <option>Roswell</option>
                                                                </optgroup>
                                                                <optgroup label=\"New York\">
                                                                    <option>New York</option>
                                                                    <option>Buffalo</option>
                                                                    <option>Rochester</option>
                                                                    <option>Yonkers</option>
                                                                    <option>Syracuse</option>
                                                                </optgroup>
                                                                <optgroup label=\"North Carolina\">
                                                                    <option>Charlotte</option>
                                                                    <option>Raleigh</option>
                                                                    <option>Greensboro</option>
                                                                    <option>Winston-Salem</option>
                                                                    <option>Durham</option>
                                                                </optgroup>
                                                                <optgroup label=\"North Dakota\">
                                                                    <option>Fargo</option>
                                                                    <option>Bismarck</option>
                                                                    <option>Grand Forks</option>
                                                                    <option>Minot</option>
                                                                    <option>West Fargo</option>
                                                                </optgroup>
                                                                <optgroup label=\"Ohio\">
                                                                    <option>Columbus</option>
                                                                    <option>Cleveland</option>
                                                                    <option>Cincinnati</option>
                                                                    <option>Toledo</option>
                                                                    <option>Akron</option>
                                                                </optgroup>
                                                                <optgroup label=\"Oklahoma\">
                                                                    <option>Oklahoma City</option>
                                                                    <option>Tulsa</option>
                                                                    <option>Norman</option>
                                                                    <option>Broken Arrow</option>
                                                                    <option>Lawton</option>
                                                                </optgroup>
                                                                <optgroup label=\"Oregon\">
                                                                    <option>Portland</option>
                                                                    <option>Eugene</option>
                                                                    <option>Salem</option>
                                                                    <option>Gresham</option>
                                                                    <option>Hillsboro</option>
                                                                </optgroup>
                                                                <optgroup label=\"Pennsylvania\">
                                                                    <option>Philadelphia</option>
                                                                    <option>Pittsburgh</option>
                                                                    <option>Allentown</option>
                                                                    <option>Erie</option>
                                                                    <option>Reading</option>
                                                                </optgroup>
                                                                <optgroup label=\"Rhode Island\">
                                                                    <option>Providence</option>
                                                                    <option>Warwick</option>
                                                                    <option>Cranston</option>
                                                                    <option>Pawtucket</option>
                                                                    <option>East Providence</option>
                                                                </optgroup>
                                                                <optgroup label=\"South Carolina\">
                                                                    <option>Columbia</option>
                                                                    <option>Charleston</option>
                                                                    <option>North Charleston</option>
                                                                    <option>Mount Pleasant</option>
                                                                    <option>Rock Hill</option>
                                                                </optgroup>
                                                                <optgroup label=\"South Dakota\">
                                                                    <option>Sioux Falls</option>
                                                                    <option>Rapid City</option>
                                                                    <option>Aberdeen</option>
                                                                    <option>Brookings</option>
                                                                    <option>Watertown</option>
                                                                </optgroup>
                                                                <optgroup label=\"Tennessee\">
                                                                    <option>Memphis</option>
                                                                    <option>Nashville</option>
                                                                    <option>Knoxville</option>
                                                                    <option>Chattanooga</option>
                                                                    <option>Clarksville</option>
                                                                </optgroup>
                                                                <optgroup label=\"Texas\">
                                                                    <option>Houston</option>
                                                                    <option>San Antonio</option>
                                                                    <option>Dallas</option>
                                                                    <option>Austin</option>
                                                                    <option>Fort Worth</option>
                                                                </optgroup>
                                                                <optgroup label=\"Utah\">
                                                                    <option>Salt Lake City</option>
                                                                    <option>West Valley City</option>
                                                                    <option>Provo</option>
                                                                    <option>West Jordan</option>
                                                                    <option>Orem</option>
                                                                </optgroup>
                                                                <optgroup label=\"Vermont\">
                                                                    <option>Burlington</option>
                                                                    <option>Essex</option>
                                                                    <option>South Burlington</option>
                                                                    <option>Colchester</option>
                                                                    <option>Rutland</option>
                                                                </optgroup>
                                                                <optgroup label=\"Virginia\">
                                                                    <option>Virginia Beach</option>
                                                                    <option>Norfolk</option>
                                                                    <option>Chesapeake</option>
                                                                    <option>Arlington</option>
                                                                    <option>Richmond</option>
                                                                </optgroup>
                                                                <optgroup label=\"Washington\">
                                                                    <option>Seattle</option>
                                                                    <option>Spokane</option>
                                                                    <option>Tacoma</option>
                                                                    <option>Vancouver</option>
                                                                    <option>Bellevue</option>
                                                                </optgroup>
                                                                <optgroup label=\"West Virginia\">
                                                                    <option>Charleston</option>
                                                                    <option>Huntington</option>
                                                                    <option>Parkersburg</option>
                                                                    <option>Morgantown</option>
                                                                    <option>Wheeling</option>
                                                                </optgroup>
                                                                <optgroup label=\"Wisconsin\">
                                                                    <option>Milwaukee</option>
                                                                    <option>Madison</option>
                                                                    <option>Green Bay</option>
                                                                    <option>Kenosha</option>
                                                                    <option>Racine</option>
                                                                </optgroup>
                                                                <optgroup label=\"Wyoming\">
                                                                    <option>Cheyenne</option>
                                                                    <option>Casper</option>
                                                                    <option>Laramie</option>
                                                                    <option>Gillette</option>
                                                                    <option>Rock Springs</option>
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
        // line 575
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
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("post-ad.html"), "html", null, true);
        echo "\">Post Free Ad</a>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </header>
";
    }

    // line 608
    public function block_Main($context, array $blocks = array())
    {
        // line 609
        echo "
";
    }

    // line 612
    public function block_footer($context, array $blocks = array())
    {
        // line 613
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
        // line 628
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
                                <li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
                            </ul>
                            <div class=\"clearfix\"> </div>
                            <ul class=\"location\">
                                <li><span class=\"glyphicon glyphicon-earphone\"></span></li>
                                <li>+0 561 111 235</li>
                            </ul>
                            <div class=\"clearfix\"> </div>
                            <ul class=\"location\">
                                <li><span class=\"glyphicon glyphicon-envelope\"></span></li>

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
    }

    // line 690
    public function block_script($context, array $blocks = array())
    {
        // line 691
        echo "    <!-- Navigation-JavaScript -->
    <script src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 693
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
        // line 712
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 713
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
        return array (  906 => 713,  902 => 712,  880 => 693,  876 => 692,  873 => 691,  870 => 690,  805 => 628,  788 => 613,  785 => 612,  780 => 609,  777 => 608,  766 => 598,  740 => 575,  325 => 163,  321 => 161,  314 => 157,  311 => 156,  308 => 155,  303 => 153,  299 => 152,  292 => 151,  289 => 150,  282 => 146,  278 => 145,  272 => 144,  269 => 143,  266 => 142,  264 => 141,  255 => 134,  252 => 133,  221 => 105,  218 => 104,  213 => 723,  211 => 690,  208 => 689,  206 => 612,  203 => 611,  201 => 608,  196 => 605,  194 => 133,  192 => 104,  161 => 76,  144 => 62,  140 => 61,  136 => 60,  132 => 59,  128 => 58,  124 => 57,  119 => 55,  115 => 54,  111 => 53,  107 => 52,  82 => 30,  78 => 29,  72 => 26,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  31 => 6,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\xampp\\htdocs\\Integration1\\ProjetWebTroc\\app\\Resources\\views\\base.html.twig");
    }
}
