<?php

/* AppBundle::annuaire.html.twig */
class __TwigTemplate_bf6851414b44d7a87f057a029dbbfb035b81d53837c99fbc0b83e877d33724e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle::annuaire.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
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
        echo "Annuaire";
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 5
        echo "    <li><span>";
        $this->displayBlock("title", $context, $blocks);
        echo "</span></li>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"search-content\">
        <div class=\"search-control-wrapper\" style=\"margin-bottom: 20px;\">
            <div class=\"row\">
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal form-bordered", "novalidate" => "novalidate")));
        echo "
                    <div class=\"col-md-2\">
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "code", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">
                                    <i class=\"fa fa-birthday-cake\"></i>
                                </span>
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'widget', array("id" => "birthdayDate", "attr" => array("class" => "form-control", "data-plugin-masked-input" => "", "data-input-mask" => "99/99/9999", "placeholder" => "__/__/____")));
        echo "
                            </div>
                        </div>
                    </div>
                <div class=\"col-md-2\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ett", array()), 'widget', array("attr" => array("class" => "form-control", "data-plugin-multiselect" => "", "data-plugin-options" => "{ \"maxHeight\": 200, \"nonSelectedText\": \" Toutes les ETT \",\"selectAllName\":true }")));
        echo "
                </div>
                    <div class=\"col-md-2\">
                        <button class=\"btn btn-primary\" type=\"submit\">Rechercher</button>
                    </div>
                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"tab-content\">
            <div id=\"everything\" class=\"tab-pane active\">
                <p class=\"total-results text-muted\" style=\"padding-top: 10px;\">";
        // line 43
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["apprenants"]) ? $context["apprenants"] : null), "currentPageNumber", array()) - 1) * 25) + 1), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["apprenants"]) ? $context["apprenants"] : null), "currentPageNumber", array()) - 1) * 25) + twig_length_filter($this->env, (isset($context["apprenants"]) ? $context["apprenants"] : null))), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenants"]) ? $context["apprenants"] : null), "getTotalItemCount", array()), "html", null, true);
        echo " résultas</p>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-none\">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Date de naissance</th>
                                <th>Date d’examen</th>
                                <th>Résultat</th>
                                <th>Attestation</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apprenants"]) ? $context["apprenants"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
            // line 59
            echo "                            <tr>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["apprenant"], "code", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["apprenant"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["apprenant"], "prenom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["apprenant"], "createdAt", array()), "long", "none", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array())), "html", null, true);
            echo "</td>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($this->getAttribute($context["apprenant"], "attestation", array()), "createdAt", array()), "long", "none", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array())), "html", null, true);
            echo "</td>
                                <td>";
            // line 65
            if ($this->getAttribute($this->getAttribute($context["apprenant"], "attestation", array()), "successed", array())) {
                // line 66
                echo "                                        <span class=\"label label-success\">Réussite</span>
                                    ";
            } else {
                // line 68
                echo "                                        <span class=\"label label-danger\">Echec</span>
                                    ";
            }
            // line 70
            echo "                                </td>
                                <td>
                                    ";
            // line 72
            if ((null === $this->getAttribute($this->getAttribute($context["apprenant"], "attestation", array()), "imageOF", array()))) {
                // line 73
                echo "                                        <span class=\"label label-warning\">Attestation en cours</span>
                                    ";
            } else {
                // line 75
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, ("/images/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["apprenant"], "attestation", array()), "imageOF", array()), "fileName", array())), "html", null, true);
                echo "\" target=\"_blank\" download><span class=\"label label-info\"><i class=\"fa fa-download\"></i> Télécharger</span></a>
                                    ";
            }
            // line 77
            echo "                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                        </tbody>
                </table>
                </div>
                ";
        // line 83
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["apprenants"]) ? $context["apprenants"] : null));
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        // line 91
        echo "    <script>
        \$(document).ready(function() {
            \$('#birthdayDate, #date').datepicker({
                language: 'fr',
                orientation: \"bottom\",
                autoclose: true,
                zIndexOffset: 9999
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle::annuaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 91,  204 => 90,  195 => 83,  190 => 80,  182 => 77,  176 => 75,  172 => 73,  170 => 72,  166 => 70,  162 => 68,  158 => 66,  156 => 65,  152 => 64,  148 => 63,  144 => 62,  140 => 61,  136 => 60,  133 => 59,  129 => 58,  107 => 43,  99 => 38,  91 => 33,  83 => 28,  72 => 20,  66 => 17,  60 => 14,  55 => 12,  50 => 9,  47 => 8,  40 => 5,  37 => 4,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::annuaire.html.twig", "/app/src/AppBundle/Resources/views/annuaire.html.twig");
    }
}
