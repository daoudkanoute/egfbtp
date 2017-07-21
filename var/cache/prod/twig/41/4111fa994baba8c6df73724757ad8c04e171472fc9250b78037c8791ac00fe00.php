<?php

/* AppBundle:Apparenants:list.html.twig */
class __TwigTemplate_6a37a0ad9652e44d93e8e519214e41324a81f60267318ea3fd8f7f9d591aca30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Apparenants:list.html.twig", 1);
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
        echo "Liste d'apprenants";
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 5
        echo "    <li><span>Organisme de formation</span></li>
    <li><span>";
        // line 6
        $this->displayBlock("title", $context, $blocks);
        echo "</span></li>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["apprenants"]) ? $context["apprenants"] : null)) == 0)) {
            // line 11
            echo "        <div class=\"alert alert-info fade in nomargin\">
            <h4>Information !</h4>
            <p>
                Vous n'avez pas encore crée d'apprenant.
            </p>
            <p>
                <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("of_add_apprenant");
            echo "\" class=\"btn btn-info mt-xs mb-xs\" type=\"button\">Ajouter un apprenant</a>
            </p>
        </div>
    ";
        } else {
            // line 21
            echo "        <section class=\"panel\">
            <header class=\"panel-heading\">
                <h2 class=\"panel-title\">";
            // line 23
            $this->displayBlock("title", $context, $blocks);
            echo "</h2>
            </header>
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"mb-md\">
                            <a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("of_add_apprenant");
            echo "\" class=\"btn btn-primary\">Ajouter un apprenant <i class=\"fa fa-plus\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-striped mb-none table-atelier\" id=\"datatable-editable\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date de Naissance</th>
                            <th>Code</th>
                            <th>Attestation</th>
                            <th>Date d'examen</th>
                            <th>ETT</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apprenants"]) ? $context["apprenants"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                // line 50
                echo "                            <tr class=\"gradeX\">
                                <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["apprenant"], "nom", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["apprenant"], "prenom", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["apprenant"], "birthday", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["apprenant"], "code", array()), "html", null, true);
                echo " </td>
                                <td>";
                // line 55
                echo (($this->getAttribute($context["apprenant"], "attestation", array())) ? ((($this->getAttribute($this->getAttribute($context["apprenant"], "attestation", array()), "successed", array())) ? ("Réussite") : ("Echec"))) : ("Examen pas encore passé"));
                echo "</td>
                                <td>";
                // line 56
                echo twig_escape_filter($this->env, (($this->getAttribute($context["apprenant"], "attestation", array())) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["apprenant"], "attestation", array()), "date", array()), "d/m/Y")) : ("-")), "html", null, true);
                echo "</td>
                                <td>";
                // line 57
                echo twig_escape_filter($this->env, (($this->getAttribute($context["apprenant"], "ett", array())) ? ($this->getAttribute($this->getAttribute($context["apprenant"], "ett", array()), "societe", array())) : ("---")), "html", null, true);
                echo "</td>
                                <td class=\"actions\">
                                    ";
                // line 59
                if ($this->getAttribute($context["apprenant"], "attestation", array())) {
                    // line 60
                    echo "                                        ";
                    if ($this->getAttribute($this->getAttribute($context["apprenant"], "attestation", array()), "imageOF", array())) {
                        // line 61
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, ("/images/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["apprenant"], "attestation", array()), "imageOF", array()), "fileName", array())), "html", null, true);
                        echo "\" target=\"_blank\" download><i class=\"fa fa-download\"></i></a>
                                        ";
                    } else {
                        // line 63
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attestation_view", array("code" => $this->getAttribute($context["apprenant"], "code", array()))), "html", null, true);
                        echo "\"><i class=\"fa fa-file-pdf-o\"></i></a>
                                            <a href=\"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attestation_view", array("code" => $this->getAttribute($context["apprenant"], "code", array()), "print" => true)), "html", null, true);
                        echo "\"><i class=\"fa fa-print\"></i></a>
                                            <a href=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("of_edit_manuelle_apprenant", array("code" => $this->getAttribute($context["apprenant"], "code", array()))), "html", null, true);
                        echo "\"><i class=\"fa fa-pencil\"></i></a>
                                        ";
                    }
                    // line 67
                    echo "                                    ";
                } elseif ($this->getAttribute($context["apprenant"], "onPaper", array())) {
                    // line 68
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_qcm", array("code" => $this->getAttribute($context["apprenant"], "code", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-print\"></i></a>
                                        <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("of_edit_manuelle_apprenant", array("code" => $this->getAttribute($context["apprenant"], "code", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-pencil\"></i></a>
                                    ";
                } else {
                    // line 71
                    echo "                                        ";
                    if (($this->getAttribute($context["apprenant"], "nom", array()) && $this->getAttribute($context["apprenant"], "prenom", array()))) {
                        // line 72
                        echo "                                            <a href=\"javascript:void(0);\" data-href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("attestation_start", array("code" => $this->getAttribute($context["apprenant"], "code", array()))), "html", null, true);
                        echo "\" data-toggle=\"confirmation_exam\"><span class=\"label label-info\"><i class=\"fa fa-caret-square-o-right\"></i> Démarrer le test</span></a>
                                        ";
                    }
                    // line 74
                    echo "                                        <a  href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("of_edit_apprenant", array("code" => $this->getAttribute($context["apprenant"], "code", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-pencil\"></i></a>
                                    ";
                }
                // line 76
                echo "                                    ";
                if (((null === $this->getAttribute($context["apprenant"], "attestation", array())) || ($this->getAttribute($context["apprenant"], "attestation", array()) &&  !$this->getAttribute($this->getAttribute($context["apprenant"], "attestation", array()), "imageOF", array())))) {
                    // line 77
                    echo "                                        <a href=\"javascript:void(0);\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("of_delete_apprenant", array("code" => $this->getAttribute($context["apprenant"], "code", array()))), "html", null, true);
                    echo "\" data-toggle=\"confirmation\"><i class=\"fa fa-trash-o\"></i></a>
                                    ";
                }
                // line 79
                echo "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    ";
        }
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "
    <script>
        \$('[data-toggle=\"confirmation\"]').confirmation({
            'title': 'Supprimer ?',
            'btnOkLabel': 'Oui',
            'btnCancelLabel': 'Non',
            'placement': 'left'
        });

        \$('[data-toggle=\"confirmation_exam\"]').confirmation({
            'title': 'Vous confirmez vouloir passer l\\'examen ?',
            'btnOkLabel': 'Oui',
            'btnCancelLabel': 'Non',
            'placement': 'left'
        });

        \$(document).ready(function() {
            \$('#datatable-editable').DataTable( {
                \"order\": []
            } );
        } );
    </script>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Apparenants:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 93,  223 => 92,  212 => 82,  204 => 79,  198 => 77,  195 => 76,  189 => 74,  183 => 72,  180 => 71,  175 => 69,  170 => 68,  167 => 67,  162 => 65,  158 => 64,  153 => 63,  147 => 61,  144 => 60,  142 => 59,  137 => 57,  133 => 56,  129 => 55,  125 => 54,  121 => 53,  117 => 52,  113 => 51,  110 => 50,  106 => 49,  83 => 29,  74 => 23,  70 => 21,  63 => 17,  55 => 11,  52 => 10,  49 => 9,  43 => 6,  40 => 5,  37 => 4,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Apparenants:list.html.twig", "/app/src/AppBundle/Resources/views/Apparenants/list.html.twig");
    }
}
