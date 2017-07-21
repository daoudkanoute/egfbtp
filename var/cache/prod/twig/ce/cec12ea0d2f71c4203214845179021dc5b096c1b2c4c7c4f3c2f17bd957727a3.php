<?php

/* AppBundle:Admin:Users/list_ett.html.twig */
class __TwigTemplate_5132d5c0828203398dd64bc9d180b690091641d59f6587dc4d06e9d29759c923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Admin:Users/list_ett.html.twig", 1);
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
        echo "Liste Entreprises de travail temporaire";
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 5
        echo "    <li><span>Admin</span></li>
    <li><span>Utilisateurs</span></li>
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
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : null)) == 0)) {
            // line 12
            echo "        <div class=\"alert alert-info fade in nomargin\">
            <h4>Information !</h4>
            <p>
                Il n'y a aucun utilisateur ETT inscrit sur le site.
            </p>
            <p>
                <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_ett_add");
            echo "\" class=\"btn btn-info mt-xs mb-xs\" type=\"button\">Ajouter une entreprise de travail temporaie</a>
            </p>
        </div>
    ";
        } else {
            // line 22
            echo "        <section class=\"panel\">
            <header class=\"panel-heading\">
                <h2 class=\"panel-title\">";
            // line 24
            $this->displayBlock("title", $context, $blocks);
            echo "</h2>
            </header>
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"mb-md\">
                            <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_ett_add");
            echo "\" class=\"btn btn-primary\">Ajouter une entreprise de travail temporaire <i class=\"fa fa-plus\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-striped mb-none table-atelier\" id=\"datatable-editable\">
                        <thead>
                        <tr>
                            <th>Société</th>
                            <th>Adresse</th>
                            <th>SIRET</th>
                            <th>E-mail</th>
                            <th>Email Activé</th>
                            <th>Activé</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 50
                echo "                            <tr class=\"gradeX\">
                                <td> ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "societe", array()), "html", null, true);
                echo " </td>
                                <td>";
                // line 52
                echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "adresse", array())) ? ($this->getAttribute($context["user"], "adresse", array())) : ("---")), "html", null, true);
                echo "</td>
                                <td>";
                // line 53
                echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "siret", array())) ? ($this->getAttribute($context["user"], "siret", array())) : ("---")), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"mailto:";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo " </a>
                                </td>
                                <td>";
                // line 57
                echo (($this->getAttribute($context["user"], "emailEnabled", array())) ? ("Oui") : ("Non"));
                echo "</td>
                                <td>";
                // line 58
                echo (($this->getAttribute($context["user"], "enabled", array())) ? ("Oui") : ("Non"));
                echo "</td>

                                <td class=\"actions\">
                                    ";
                // line 61
                if ( !$this->getAttribute($context["user"], "enabled", array())) {
                    // line 62
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_activate", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\" ><i class=\"fa fa-check\"></i></a>
                                    ";
                } else {
                    // line 64
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("_switch_user" => $this->getAttribute($context["user"], "username", array()))), "html", null, true);
                    echo "\" ><i class=\"fa fa-exchange\"></i></a>
                                    ";
                }
                // line 66
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_deactivate", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"désactivate\" ><i class=\"fa fa-user-times\"></i></a>
                                    <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_ett_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" data-href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"confirmation\"><i class=\"fa fa-trash-o\"></i></a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    ";
        }
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        // line 83
        echo "
    <script>
        \$('[data-toggle=\"confirmation\"]').confirmation({
            'title': 'Supprimer ?',
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
        return "AppBundle:Admin:Users/list_ett.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 83,  187 => 82,  176 => 72,  166 => 68,  162 => 67,  157 => 66,  151 => 64,  145 => 62,  143 => 61,  137 => 58,  133 => 57,  126 => 55,  121 => 53,  117 => 52,  113 => 51,  110 => 50,  106 => 49,  84 => 30,  75 => 24,  71 => 22,  64 => 18,  56 => 12,  53 => 11,  50 => 10,  44 => 7,  40 => 5,  37 => 4,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Admin:Users/list_ett.html.twig", "/app/src/AppBundle/Resources/views/Admin/Users/list_ett.html.twig");
    }
}
