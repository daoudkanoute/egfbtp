<?php

/* AppBundle:Admin:Users/add_ett.html.twig */
class __TwigTemplate_22baec5bfeb4c0dd0cd2be72c0974332d7d601df6f838776db8d26cc6807fa9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Admin:Users/add_ett.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'form_errors' => array($this, 'block_form_errors'),
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
        echo "Ajouter une entreprise temporaire";
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
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this));
        // line 17
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal form-bordered", "novalidate" => "novalidate")));
        echo "
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" for=\"inputTitre\">
                    Raison Sociale <span class=\"required\" aria-required=\"true\">*</span>
                </label>
                <div class=\"col-md-8\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "societe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "societe", array()), 'errors');
        echo "
                </div>
            </div>
            <div id=\"form-container\">
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"inputTitre\">
                        E-mail <span class=\"required\" aria-required=\"true\">*</span>
                    </label>
                    <div class=\"col-md-8\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"inputTitre\">
                        Mot de passe ";
        // line 39
        if ( !array_key_exists("edit", $context)) {
            echo "<span class=\"required\" aria-required=\"true\">*</span>";
        }
        // line 40
        echo "                    </label>
                    <div class=\"col-md-8\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"inputTitre\">
                        N° SIRET
                    </label>
                    <div class=\"col-md-8\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "siret", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\" for=\"inputTitre\">
                        Adresse
                    </label>
                    <div class=\"col-md-8\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\" style=\"margin-top:10px;\">
                <div class=\"col-sm-10\">
                    <div class=\"mb-md pull-right\">
                        <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary\">
                    </div>
                </div>
            </div>
            ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        </div>
    </section>
";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
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
        });
    </script>
";
    }

    // line 97
    public function block_form_errors($context, array $blocks = array())
    {
        // line 98
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0))) {
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 100
                echo "<div class=\"help-block\">
                <span class=\"text-danger\"><i class=\"fa fa-exclamation-circle \"></i> ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:Users/add_ett.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 101,  193 => 100,  189 => 99,  187 => 98,  184 => 97,  163 => 77,  160 => 76,  152 => 70,  138 => 59,  127 => 51,  116 => 43,  112 => 42,  108 => 40,  104 => 39,  96 => 34,  92 => 33,  80 => 24,  76 => 23,  66 => 17,  64 => 16,  58 => 13,  54 => 11,  51 => 10,  45 => 7,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Admin:Users/add_ett.html.twig", "/app/src/AppBundle/Resources/views/Admin/Users/add_ett.html.twig");
    }
}
