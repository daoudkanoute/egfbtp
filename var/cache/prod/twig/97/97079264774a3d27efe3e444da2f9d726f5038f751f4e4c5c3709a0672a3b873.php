<?php

/* AppBundle::entreprises_btp.html.twig */
class __TwigTemplate_e8166c166501a1442620b69ffe2b6dc99b67abf6bb15ac559eda293db03d1bf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle::entreprises_btp.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
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
        echo "Entreprises de Travail Temporaire";
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
        <div class=\"tab-content\">
            <div id=\"everything\" class=\"tab-pane active\">
                <p class=\"total-results text-muted\" style=\"padding-top: 10px;\">";
        // line 12
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["users"]) ? $context["users"] : null), "currentPageNumber", array()) - 1) * 25) + 1), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["users"]) ? $context["users"] : null), "currentPageNumber", array()) - 1) * 25) + twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : null))), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : null), "getTotalItemCount", array()), "html", null, true);
        echo " résultas</p>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover mb-none\">
                        <thead>
                            <tr>
                                <th>Entreprise</th>
                                <th>Adresse</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "                            <tr>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "societe", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "adresse", array()), "html", null, true);
            echo "</td>
                                <td> ";
            // line 28
            echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "telephone", array())) ? ($this->getAttribute($context["user"], "telephone", array())) : ("---")), "html", null, true);
            echo " </td>
                                <td> ";
            // line 29
            echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "email", array())) ? ($this->getAttribute($context["user"], "email", array())) : ("---")), "html", null, true);
            echo " </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </tbody>
                </table>
                </div>
                ";
        // line 35
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["users"]) ? $context["users"] : null));
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle::entreprises_btp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  101 => 32,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  77 => 25,  73 => 24,  54 => 12,  49 => 9,  46 => 8,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::entreprises_btp.html.twig", "/app/src/AppBundle/Resources/views/entreprises_btp.html.twig");
    }
}
