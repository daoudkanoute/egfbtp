<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_34fdcc37dd2ba3a51c90f9037fe12690aefba984c914d7b1c009f365304fb2ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this));
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register", "novalidate" => "novalidate")));
        echo "
    <div class=\"form-group mb-lg\">
        <label>Raison Sociale</label>
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "societe", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "societe", array()), 'errors');
        echo "
    </div>

    <div class=\"form-group mb-lg\">
        <label>E-mail</label>
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
    </div>

    <div class=\"form-group mb-lg\">
        <label>Adresse</label>
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'errors');
        echo "
    </div>

    <div class=\"form-group mb-lg\">
        <label>N° SIRET</label>
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "siret", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "siret", array()), 'errors');
        echo "
    </div>

    <div class=\"form-group mb-none\">
        <div class=\"row\">
            <div class=\"col-sm-6 mb-lg\">
                <label>Mot de passe</label>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
            </div>
            <div class=\"col-sm-6 mb-lg\">
                <label>Mot de passe de confirmation</label>
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control input-lg")));
        echo "
            </div>
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'errors');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12 text-right\">
            <input type=\"submit\" class=\"btn btn-primary hidden-xs\" value=\"S'inscrire\" />
            <input type=\"submit\" class=\"btn btn-primary btn-block btn-lg visible-xs mt-lg\" value=\"S'inscrire\" />
        </div>
    </div>
    <hr/>
    <p class=\"text-center\">Vous avez déjà un compte? <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter!</a></p>
";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
        // line 51
        $this->displayBlock('form_errors', $context, $blocks);
    }

    public function block_form_errors($context, array $blocks = array())
    {
        // line 52
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0))) {
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 54
                echo "<div class=\"help-block\">
                <span class=\"text-danger\"><i class=\"fa fa-exclamation-circle \"></i> ";
                // line 55
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
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 55,  124 => 54,  120 => 53,  118 => 52,  112 => 51,  107 => 49,  103 => 48,  90 => 38,  85 => 36,  78 => 32,  68 => 25,  64 => 24,  56 => 19,  52 => 18,  44 => 13,  40 => 12,  32 => 7,  28 => 6,  22 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Registration/register_content.html.twig", "/app/src/UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
