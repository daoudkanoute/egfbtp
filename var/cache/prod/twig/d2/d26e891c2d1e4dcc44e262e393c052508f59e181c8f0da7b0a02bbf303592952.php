<?php

/* AppBundle:Apparenants:add.html.twig */
class __TwigTemplate_b83b6db7e7cc11e5a3d717d55bd5ad5e27ff9dde9401da2edc4cf1bdf57d7b41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Apparenants:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
            'headerscript' => array($this, 'block_headerscript'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Ajouter un apprenant";
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 5
        echo "    <li><span>Organisme de formation</span></li>
    <li><span>Apprenants</span></li>
    <li><span>";
        // line 7
        $this->displayBlock("title", $context, $blocks);
        echo "</span></li>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h2 class=\"panel-title\">";
        // line 13
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
        </header>
        <div class=\"panel-body\">
            ";
        // line 16
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AppBundle:Apparenants:_widgets.html.twig"));
        // line 17
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal form-bordered", "novalidate" => "novalidate")));
        echo "
            ";
        // line 18
        if ((isset($context["apprenantExist"]) ? $context["apprenantExist"] : null)) {
            // line 19
            echo "                <div class=\"alert alert-warning\">
                    <p><strong>";
            // line 20
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["apprenantExist"]) ? $context["apprenantExist"] : null), "prenom", array()) . " ") . $this->getAttribute((isset($context["apprenantExist"]) ? $context["apprenantExist"] : null), "nom", array())), "html", null, true);
            echo "</strong> a bien été inscrit sous le code : <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenantExist"]) ? $context["apprenantExist"] : null), "code", array()), "html", null, true);
            echo "</strong></p>
                    ";
            // line 21
            if ( !$this->getAttribute((isset($context["apprenantExist"]) ? $context["apprenantExist"] : null), "attestation", array())) {
                // line 22
                echo "                        <p>Vous pouvez maintenant démarrer le test en cliquant <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attestation_start", array("code" => $this->getAttribute((isset($context["apprenantExist"]) ? $context["apprenantExist"] : null), "code", array()))), "html", null, true);
                echo "\">ici</a></p>
                        ";
                // line 23
                if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "affectResult", array(), "any", true, true)) {
                    // line 24
                    echo "                            <p>Pour affecter la résultat saisie, cliquer ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "affectResult", array()), 'widget', array("attr" => array("class" => "affect-btn")));
                    echo " </p>
                        ";
                }
                // line 26
                echo "                    ";
            } else {
                // line 27
                echo "                        <p>
                            L'attestation à déjà passé  et sa résultat est ";
                // line 28
                if ( !$this->getAttribute($this->getAttribute((isset($context["apprenantExist"]) ? $context["apprenantExist"] : null), "attestation", array()), "successed", array())) {
                    echo "négatif";
                } else {
                    echo "positif";
                }
                // line 29
                echo "                            ";
                if (($this->getAttribute($this->getAttribute((isset($context["apprenantExist"]) ? $context["apprenantExist"] : null), "attestation", array()), "successed", array()) && $this->getAttribute($this->getAttribute((isset($context["apprenantExist"]) ? $context["apprenantExist"] : null), "attestation", array()), "imageOF", array()))) {
                    echo ", Vous pouvez consulter l'attestation en cliquant <a href=\"";
                    echo twig_escape_filter($this->env, ("/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["apprenantExist"]) ? $context["apprenantExist"] : null), "attestation", array()), "imageOF", array()), "fileName", array())), "html", null, true);
                    echo "\" target=\"_blank\">ici</a>";
                }
                // line 30
                echo "                        </p>
                    ";
            }
            // line 32
            echo "                </div>
            ";
        }
        // line 34
        echo "            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">
                    Nom <span class=\"required\" aria-required=\"true\">*</span>
                </label>
                <div class=\"col-md-8\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">
                    Prénom <span class=\"required\" aria-required=\"true\">*</span>
                </label>
                <div class=\"col-md-8\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"inputDate\">
                    Date de Naissance <span class=\"required\" aria-required=\"true\">*</span>
                </label>
                <div class=\"col-md-8\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </span>
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'widget', array("id" => "birthdayDate", "attr" => array("class" => "form-control", "data-plugin-masked-input" => "", "data-input-mask" => "99/99/9999", "placeholder" => "__/__/____")));
        echo "
                    </div>
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"inputTitre\">
                    Agence intérimaire <span class=\"required\" aria-required=\"true\">*</span>
                </label>
                <div class=\"col-md-8\">
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ett", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ett", array()), 'errors');
        echo "
                    <p class=\"form-text text-muted\">
                        L'agence intérimaire que vous recherchez ne s'affiche pas ? Inviter l'agence à créer son compte sur <a href=\"http://www.passeport-securite-interim-btp.fr\" target=\"_blank\">www.passeport-securite-interim-btp.fr</a>
                </div>
            </div>
            ";
        // line 77
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "onPaper", array(), "any", true, true)) {
            // line 78
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "onPaper", array()), 'row');
            echo "
            ";
        }
        // line 80
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "succceced", array(), "any", true, true)) {
            // line 81
            echo "            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"inputTitre\">
                    Résultat <span class=\"required\" aria-required=\"true\">*</span>
                </label>
                <div class=\"col-md-8\">
                    ";
            // line 86
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "succceced", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                    ";
            // line 87
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "succceced", array()), 'errors');
            echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"inputDate\">
                    Date d'examen <span class=\"required\" aria-required=\"true\">*</span>
                </label>
                <div class=\"col-md-8\">
                    <div class=\"input-group\">
                    <span class=\"input-group-addon\">
                        <i class=\"fa fa-calendar\"></i>
                    </span>
                        ";
            // line 99
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget', array("id" => "date", "attr" => array("class" => "form-control", "data-plugin-masked-input" => "", "data-input-mask" => "99/99/9999", "placeholder" => "__/__/____")));
            echo "
                    </div>
                    ";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
            echo "
                </div>
            </div>
            <div class=\"image-row\">
                ";
            // line 105
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "generateAttestation", array(), "any", true, true)) {
                // line 106
                echo "                <div class=\"form-group\">
                    <div class=\"col-md-offset-2 col-md-10\">
                        ";
                // line 108
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "generateAttestation", array()), 'row');
                echo "
                    </div>
                </div>
                ";
            }
            // line 112
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "imageOF", array()), 'widget');
            echo "
                <div class=\"image-preview col-md-offset-2\">
                ";
            // line 114
            if (($this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : null), "attestation", array()) && $this->getAttribute($this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : null), "attestation", array()), "imageOF", array()))) {
                // line 115
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ("/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : null), "attestation", array()), "imageOF", array()), "fileName", array())), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : null), "attestation", array()), "imageOF", array()), "fileName", array()), "html", null, true);
                echo "</a>
                ";
            }
            // line 117
            echo "                </div>
            </div>
            ";
        }
        // line 120
        echo "            <div class=\"row\" style=\"margin-top:10px;\">
                <div class=\"col-sm-10\">
                    <div class=\"mb-md pull-right\">
                        <input type=\"submit\" value=\"";
        // line 123
        if (array_key_exists("edit", $context)) {
            echo "Modifier";
        } else {
            echo "Ajouter";
        }
        echo "\" class=\"btn btn-primary\">
                    </div>
                </div>
            </div>
            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
            </form>
        </div>
    </section>
";
    }

    // line 134
    public function block_headerscript($context, array $blocks = array())
    {
        // line 135
        echo "    <style>
        .affect-btn {
            background: none;
            border: none;
            padding: 0;
            color: #4F87C6;
        }
        .affect-btn:hover {
            text-decoration: underline;
        }
        .image-preview {
            margin-top: 15px;
        }
        .image-preview img {
            max-width: 300px;
        }
    </style>
";
    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        // line 154
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7ed717a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7ed717a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7ed717a_jquery.ui.widget_1.js");
            // line 159
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "7ed717a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7ed717a_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7ed717a_jquery.iframe-transport_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "7ed717a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7ed717a_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7ed717a_jquery.fileupload_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "7ed717a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7ed717a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7ed717a.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 161
        echo "    <script>
        \$(document).ready(function() {
            \$('#type:checked').parent().addClass('active');
            \$('#type').on('change', function(){
                var form = document.querySelector('form');
                var data = new FormData();
                data.append(\$('#type').attr('name'), \$('#type').val());
                // On envoie une requête ajax POST
                ajaxPost(form.action, data, function (res) {
                    // On parse la réponse en DOM HTML
                    var parser = new DOMParser();
                    var doc = parser.parseFromString(res, 'text/html');
                    \$('#form-container').html(doc.getElementById('form-container'));
                });
            });

            \$('#birthdayDate, #date').datepicker({
                language: 'fr',
                orientation: \"bottom\",
                autoclose: true,
                zIndexOffset: 9999
            });
            ";
        // line 183
        if (array_key_exists("apprenant", $context)) {
            // line 184
            echo "
            \$('.btn-file span').on('click',function(e) {
                e.stopPropagation();
                \$(this).closest('.single-container').find('input[type=file]').trigger('click');
            });

            \$('.fileuploader').fileupload({
                dataType: 'json',
                autoUpload: true,
                maxFileSize: 1024,
                formData: {
                    type: 'attestations',
                    target: 'of',
                    id: ";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : null), "id", array()), "html", null, true);
            echo "
                },
                add: function (e, data) {
                    \$(this).closest('.image-container').find('.widget-stats').removeClass('hidden');
                    data.submit();
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    \$( this ).closest('.image-container').find('.progress-container .bar').css('width',progress + '%');
                    \$( this ).closest('.image-container').find('.progress-extended').html(fileRender.renderExtendedProgress(data));
                },
                done: function (e, data) {
                    \$( this ).closest('.single-image').find('.fileupload-preview').html(data.result.originalName);
                }
            });
            ";
        }
        // line 213
        echo "        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Apparenants:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 213,  400 => 197,  385 => 184,  383 => 183,  359 => 161,  333 => 159,  328 => 154,  325 => 153,  304 => 135,  301 => 134,  292 => 127,  281 => 123,  276 => 120,  271 => 117,  263 => 115,  261 => 114,  255 => 112,  248 => 108,  244 => 106,  242 => 105,  235 => 101,  230 => 99,  215 => 87,  211 => 86,  204 => 81,  201 => 80,  195 => 78,  193 => 77,  185 => 72,  181 => 71,  170 => 63,  165 => 61,  150 => 49,  146 => 48,  135 => 40,  131 => 39,  124 => 34,  120 => 32,  116 => 30,  109 => 29,  103 => 28,  100 => 27,  97 => 26,  91 => 24,  89 => 23,  84 => 22,  82 => 21,  76 => 20,  73 => 19,  71 => 18,  66 => 17,  64 => 16,  58 => 13,  54 => 11,  51 => 10,  45 => 7,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Apparenants:add.html.twig", "/app/src/AppBundle/Resources/views/Apparenants/add.html.twig");
    }
}
