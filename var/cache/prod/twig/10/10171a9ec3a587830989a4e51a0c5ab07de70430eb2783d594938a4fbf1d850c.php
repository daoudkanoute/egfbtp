<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_ec29d43e0951ca2e4fef09bec511580e0773fc44397236c67bc4bfdec28fe150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headerscript' => array($this, 'block_headerscript'),
            'breadcrumbs_block' => array($this, 'block_breadcrumbs_block'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
            'sidebare' => array($this, 'block_sidebare'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"fixed\" lang=\"fr\">
    <head>

        <!-- Basic -->
        <meta charset=\"UTF-8\">

        <title>EGF BTP | ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"Dashboard de EGF BTP\">
        <meta name=\"author\" content=\"EGF BTP\">
        <link rel=\"shortcut icon\" href=\"/favicon.png\" type=\"image/png\">
        <!-- Mobile Metas -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

        <!-- Web Fonts  -->
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1\" crossorigin=\"anonymous\">

        ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5bb0168_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_bootstrap.min_1.css");
            // line 38
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_bootstrap-fileupload.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_pnotify.custom_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_select2_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_select2-bootstrap_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_datatables_6.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_magnific-popup_7.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_owl.carousel_8.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_owl.theme.default_9.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_bootstrap-timepicker_10.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_circle_11.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_bootstrap-multiselect_12.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_morris_13.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_chartist.min_14.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_chartist-plugin-legend_15.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_15") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_theme_16.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_16") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_default_17.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
            // asset "5bb0168_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168_17") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index_theme-custom_18.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
        } else {
            // asset "5bb0168"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bb0168") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
        ";
        }
        unset($context["asset_url"]);
        // line 40
        echo "        ";
        $this->displayBlock('headerscript', $context, $blocks);
        // line 41
        echo "
        <!-- Head Libs -->
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/vendor/modernizr/modernizr.js"), "html", null, true);
        echo "\"></script>

    </head>
    <body>
    <section class=\"body\">

        <!-- start: header -->
        <header class=\"header\">
            <div class=\"logo-container\">
                <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logo1.png"), "html", null, true);
        echo "\" height=\"35\" alt=\"EGF BTP\" />
                </a>
                <div class=\"visible-xs toggle-sidebar-left\" data-toggle-class=\"sidebar-left-opened\" data-target=\"html\" data-fire-event=\"sidebar-left-opened\">
                    <i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class=\"header-right\">
                ";
        // line 62
        if ((isset($context["notifications"]) ? $context["notifications"] : null)) {
            // line 63
            echo "                <ul class=\"notifications\">
                    <li>
                        <a href=\"#\" class=\"dropdown-toggle notification-icon\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell\"></i>
                            <span class=\"badge\">";
            // line 67
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "attestations_en_attente", array())), "html", null, true);
            echo "</span>
                        </a>

                        <div class=\"dropdown-menu notification-menu\">
                            <div class=\"notification-title\">
                                <span class=\"pull-right label label-default\">";
            // line 72
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "attestations_en_attente", array())), "html", null, true);
            echo "</span>
                                Attestations en attente
                            </div>
                            ";
            // line 75
            if ($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "attestations_en_attente", array())) {
                // line 76
                echo "                            <div class=\"content\">
                                <ul>
                                    ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["notifications"]) ? $context["notifications"] : null), "attestations_en_attente", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                    // line 79
                    echo "                                    <li>
                                        <a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("of_edit_manuelle_apprenant", array("code" => $this->getAttribute($context["apprenant"], "code", array()))), "html", null, true);
                    echo "\" class=\"clearfix\">
                                            <span class=\"title\">";
                    // line 81
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["apprenant"], "prenom", array()) . " ") . $this->getAttribute($context["apprenant"], "nom", array())), "html", null, true);
                    echo "</span>
                                            <span class=\"message\">";
                    // line 82
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["apprenant"], "attestation", array()), "date", array()), "d/m/Y"), "html", null, true);
                    echo "</span>
                                        </a>
                                    </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                                </ul>
                            </div>
                            ";
            }
            // line 89
            echo "                        </div>
                    </li>
                </ul>
                ";
        }
        // line 93
        echo "                <span class=\"separator\"></span>
                <div id=\"userbox\" class=\"userbox\">
                    <a href=\"#\" data-toggle=\"dropdown\">
                        <figure class=\"profile-picture\">
                            <i class=\"fa fa-user avatar\" aria-hidden=\"true\"></i>
                        </figure>
                        <div class=\"profile-info\">
                            <span class=\"name\">";
        // line 100
        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "societe", array()))), "html", null, true);
        echo "</span>
                        </div>
                        <i class=\"fa custom-caret\"></i>
                    </a>

                    <div class=\"dropdown-menu\">
                        <ul class=\"list-unstyled\">
                            <li class=\"divider\"></li>
                            <li>
                                ";
        // line 109
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 110
            echo "                                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("_switch_user" => "_exit"));
            echo "\">
                                        <i class=\"fa fa-power-off\"></i> Se déconnecter
                                    </a>
                                ";
        } else {
            // line 114
            echo "                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><i class=\"fa fa-power-off\"></i> Se déconnecter</a>
                                ";
        }
        // line 116
        echo "                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class=\"inner-wrapper\">
            <!-- start: sidebar -->
            <aside id=\"sidebar-left\" class=\"sidebar-left\">

                <div class=\"sidebar-header\">
                    <div class=\"sidebar-title\">
                        Annuaires
                    </div>
                </div>

                <div class=\"nano\">
                    <div class=\"nano-content\">
                        <nav id=\"menu\" class=\"nav-main\" role=\"navigation\">

                            ";
        // line 139
        $context["currentPage"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 140
        echo "                            <ul class=\"nav nav-main\">
                                <li ";
        // line 141
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "annuaire")) {
            echo "class=\"nav-active\"";
        }
        echo ">
                                    <a href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annuaire");
        echo "\">
                                        <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                                        <span>Apprenants</span>
                                    </a>
                                </li>
                                <li ";
        // line 147
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "organismes_formations")) {
            echo "class=\"nav-active\"";
        }
        echo ">
                                    <a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("organismes_formations");
        echo "\">
                                        <i class=\"fa fa-building\" aria-hidden=\"true\"></i>
                                        <span>Organismes de formation</span>
                                    </a>
                                </li>
                                <li ";
        // line 153
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "entreprises_btp")) {
            echo "class=\"nav-active\"";
        }
        echo ">
                                    <a href=\"";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entreprises_btp");
        echo "\">
                                        <i class=\"fa fa-building\" aria-hidden=\"true\"></i>
                                        <span>Entreprises de Travail Temporaire</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        ";
        // line 161
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_OF")) {
            // line 162
            echo "                            <hr class=\"separator\" />

                            <div class=\"sidebar-widget widget-tasks\">
                                <div class=\"widget-header\">
                                    <h6>Organisme de formation</h6>
                                </div>
                                <div class=\"widget-content\">
                                    <ul class=\"nav nav-main\">
                                        <li class=\"nav-parent";
            // line 170
            if ((is_string($__internal_a5dbad753e38f964ab19e1df5d058a020b7f1cb81a9c58fefc37a6bf29779376 = (isset($context["currentPage"]) ? $context["currentPage"] : null)) && is_string($__internal_44fc86f1960e7735ae95b19b5c59bbce6cf03589b4a953b387a41f3c000dda3b = "of_") && ('' === $__internal_44fc86f1960e7735ae95b19b5c59bbce6cf03589b4a953b387a41f3c000dda3b || 0 === strpos($__internal_a5dbad753e38f964ab19e1df5d058a020b7f1cb81a9c58fefc37a6bf29779376, $__internal_44fc86f1960e7735ae95b19b5c59bbce6cf03589b4a953b387a41f3c000dda3b)))) {
                echo " nav-expanded";
            }
            echo "\">
                                            <a>
                                                <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
                                                <span>Apprenants</span>
                                            </a>
                                            <ul class=\"nav nav-children\">
                                                <li ";
            // line 176
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "of_list_apprenants")) {
                echo "class=\"nav-active\"";
            }
            echo ">
                                                    <a href=\"";
            // line 177
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("of_list_apprenants");
            echo "\">
                                                        Mes apprenants
                                                    </a>
                                                </li>
                                                <li ";
            // line 181
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "of_add_apprenant")) {
                echo "class=\"nav-active\"";
            }
            echo ">
                                                    <a href=\"";
            // line 182
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("of_add_apprenant");
            echo "\">
                                                        Ajouter un apprenant
                                                    </a>
                                                </li>
                                                <li ";
            // line 186
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "of_add_manuelle_apprenant")) {
                echo "class=\"nav-active\"";
            }
            echo ">
                                                    <a href=\"";
            // line 187
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("of_add_manuelle_apprenant");
            echo "\">
                                                        Ajouter manuellement
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        ";
        }
        // line 197
        echo "
                        ";
        // line 198
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 199
            echo "                            <hr class=\"separator\" />

                            <div class=\"sidebar-widget widget-tasks\">
                                <div class=\"widget-header\">
                                    <h6>Administration</h6>
                                </div>
                                <div class=\"widget-content\">
                                    <ul class=\"nav nav-main\">
                                        <li class=\"nav-parent";
            // line 207
            if ((is_string($__internal_eeaeacade44c123c89b590a50fcb8c2886e210e51b34961251ccc080dfe94bf3 = (isset($context["currentPage"]) ? $context["currentPage"] : null)) && is_string($__internal_6908d321e754dd7b126dc4c7bd19517464330c8b1ef4a88d99bc3c35f00887a5 = "admin_users") && ('' === $__internal_6908d321e754dd7b126dc4c7bd19517464330c8b1ef4a88d99bc3c35f00887a5 || 0 === strpos($__internal_eeaeacade44c123c89b590a50fcb8c2886e210e51b34961251ccc080dfe94bf3, $__internal_6908d321e754dd7b126dc4c7bd19517464330c8b1ef4a88d99bc3c35f00887a5)))) {
                echo " nav-expanded";
            }
            echo "\">
                                            <a>
                                                <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                                                <span>Utilisateurs</span>
                                            </a>
                                            <ul class=\"nav nav-children\">
                                                <li ";
            // line 213
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "admin_users_ett")) {
                echo "class=\"nav-active\"";
            }
            echo ">
                                                    <a href=\"";
            // line 214
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_ett");
            echo "\">
                                                        Agences intérimaires
                                                    </a>
                                                </li>
                                                <li ";
            // line 218
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "admin_users_of")) {
                echo "class=\"nav-active\"";
            }
            echo ">
                                                    <a href=\"";
            // line 219
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_of");
            echo "\">
                                                        Organismes de formation
                                                    </a>
                                                </li>
                                                <li ";
            // line 223
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "admin_users_btp")) {
                echo "class=\"nav-active\"";
            }
            echo ">
                                                    <a href=\"";
            // line 224
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_btp");
            echo "\">
                                                        Entreprises de BTP
                                                    </a>
                                                </li>
                                                <li ";
            // line 228
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "admin_list_apprenants")) {
                echo "class=\"nav-active\"";
            }
            echo ">
                                                    <a href=\"";
            // line 229
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_list_apprenants");
            echo "\">
                                                        Les apprenants
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li ";
            // line 235
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "admin_statistiques")) {
                echo "class=\"nav-active\"";
            }
            echo ">
                                            <a href=\"";
            // line 236
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_statistiques");
            echo "\">
                                                <i class=\"fa fa-line-chart\" aria-hidden=\"true\"></i>
                                                <span>Statistiques</span>
                                            </a>
                                        </li>
                                        <li ";
            // line 241
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "qcm_edit")) {
                echo "class=\"nav-active\"";
            }
            echo ">
                                            <a href=\"";
            // line 242
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("qcm_edit");
            echo "\">
                                                <i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i>
                                                <span>QCM</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        ";
        }
        // line 251
        echo "                    </div>
                </div>
            </aside>
            <!-- end: sidebar -->

            <section role=\"main\" class=\"content-body\">
                ";
        // line 257
        $this->displayBlock('breadcrumbs_block', $context, $blocks);
        // line 274
        echo "
                <!-- start: page -->
                ";
        // line 276
        $this->displayBlock('body', $context, $blocks);
        // line 277
        echo "                <!-- end: page -->
            </section>
        </div>
        ";
        // line 280
        $this->displayBlock('sidebare', $context, $blocks);
        // line 281
        echo "    </section>

    ";
        // line 283
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4da714a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_jquery_1.js");
            // line 306
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_jquery-ui.min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_jquery.browser.mobile_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_bootstrap_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_nanoscroller_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_bootstrap-datepicker_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_date-custom_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_autosize_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_bootstrap-fileupload.min_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_bootstrap-confirmation_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_bootstrap-timepicker_11.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_jquery.bootstrap.wizard_12.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_pnotify.custom_13.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_select2_14.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_jquery.dataTables_15.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_15") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_datatables_16.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_16") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_owl.carousel_17.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_17") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_bootstrap-multiselect_18.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_18") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_spinner_19.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_19") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_theme_20.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_20") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_theme.custom_21.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "4da714a_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a_21") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a_theme.init_22.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "4da714a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4da714a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/4da714a.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 308
        echo "    <script>
        ";
        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 310
            echo "            var notice = new PNotify({
                title: 'Success !',
                text: '";
            // line 312
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "',
                type: 'success',
                addclass: 'click-2-close',
                buttons: {
                    closer: true,
                    sticker: false
                }
            });

            notice.get().click(function() {
                notice.remove();
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "
        ";
        // line 326
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 327
            echo "            var error = new PNotify({
                title: 'Erreur !',
                text: '";
            // line 329
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "',
                type: 'failed',
                addclass: 'click-2-close',
                buttons: {
                    closer: true,
                    sticker: false
                }
            });

            notice.get().click(function() {
                notice.remove();
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        echo "    </script>
    ";
        // line 343
        $this->displayBlock('javascripts', $context, $blocks);
        // line 344
        echo "    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 40
    public function block_headerscript($context, array $blocks = array())
    {
    }

    // line 257
    public function block_breadcrumbs_block($context, array $blocks = array())
    {
        // line 258
        echo "                <header class=\"page-header\">
                    <h2>";
        // line 259
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>

                    <div class=\"right-wrapper pull-right\">
                        <ol class=\"breadcrumbs\">
                            <li>
                                <a href=\"";
        // line 264
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                    <i class=\"fa fa-home\"></i>
                                </a>
                            </li>
                            ";
        // line 268
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 269
        echo "                        </ol>

                    </div>
                </header>
                ";
    }

    // line 268
    public function block_breadcrumbs($context, array $blocks = array())
    {
    }

    // line 276
    public function block_body($context, array $blocks = array())
    {
    }

    // line 280
    public function block_sidebare($context, array $blocks = array())
    {
    }

    // line 343
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  856 => 343,  851 => 280,  846 => 276,  841 => 268,  833 => 269,  831 => 268,  824 => 264,  816 => 259,  813 => 258,  810 => 257,  805 => 40,  800 => 8,  795 => 344,  793 => 343,  790 => 342,  771 => 329,  767 => 327,  763 => 326,  760 => 325,  741 => 312,  737 => 310,  733 => 309,  730 => 308,  590 => 306,  586 => 283,  582 => 281,  580 => 280,  575 => 277,  573 => 276,  569 => 274,  567 => 257,  559 => 251,  547 => 242,  541 => 241,  533 => 236,  527 => 235,  518 => 229,  512 => 228,  505 => 224,  499 => 223,  492 => 219,  486 => 218,  479 => 214,  473 => 213,  462 => 207,  452 => 199,  450 => 198,  447 => 197,  434 => 187,  428 => 186,  421 => 182,  415 => 181,  408 => 177,  402 => 176,  391 => 170,  381 => 162,  379 => 161,  369 => 154,  363 => 153,  355 => 148,  349 => 147,  341 => 142,  335 => 141,  332 => 140,  330 => 139,  305 => 116,  299 => 114,  291 => 110,  289 => 109,  277 => 100,  268 => 93,  262 => 89,  257 => 86,  247 => 82,  243 => 81,  239 => 80,  236 => 79,  232 => 78,  228 => 76,  226 => 75,  220 => 72,  212 => 67,  206 => 63,  204 => 62,  192 => 53,  188 => 52,  176 => 43,  172 => 41,  169 => 40,  53 => 38,  49 => 19,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::layout.html.twig", "/app/src/AppBundle/Resources/views/layout.html.twig");
    }
}
