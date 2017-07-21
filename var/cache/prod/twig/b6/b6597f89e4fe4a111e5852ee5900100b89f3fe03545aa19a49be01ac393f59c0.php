<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_b61fbcbb5ad6a4bdf55ad00cd5c4411a6e4fa82dcc969564f0b76f5861b7397c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 4
            echo "    <div class=\"alert alert-danger\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "
    </div>
";
        }
        // line 9
        echo "

<form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 12
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : null)) {
            // line 13
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\" />
    ";
        }
        // line 15
        echo "
    <div class=\"form-group mb-lg\">
        <label>Email</label>
        <div class=\"input-group input-group-icon\">
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" class=\"form-control input-lg\" />
            <span class=\"input-group-addon\">
                <span class=\"icon icon-lg\">
                    <i class=\"fa fa-user\"></i>
                </span>
            </span>
        </div>
    </div>

    <div class=\"form-group mb-lg\">
        <div class=\"clearfix\">
            <label class=\"pull-left\">Mot de passe</label>
            ";
        // line 32
        echo "        </div>
        <div class=\"input-group input-group-icon\">
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control input-lg\" />
            <span class=\"input-group-addon\">
                <span class=\"icon icon-lg\">
                    <i class=\"fa fa-lock\"></i>
                </span>
            </span>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-8\">
            <div class=\"checkbox-custom checkbox-default\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"RememberMe\">Se souvenir de moi</label>
            </div>
        </div>
        <div class=\"col-sm-4 text-right\">
            <input type=\"submit\" name=\"_submit\" class=\"btn btn-primary hidden-xs\" value=\"Connexion\" />
            <input type=\"submit\"  name=\"_submit\" class=\"btn btn-primary btn-block btn-lg visible-xs mt-lg\" value=\"Connexion\" />
        </div>
    </div>
    <hr/>
    <p class=\"text-center\">Entreprise de Travail Temporaire pas encore inscrite ? <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Inscrivez-vous ici</a></p>
    <hr/>
    <p class=\"text-center\">Entreprise de BTP pas encore inscrite ? <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "?t=E_BTP\">Inscrivez-vous ici</a></p>
    <hr/>
    <p class=\"text-center\">Mot de passe oublié ? <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Cliquez ici</a></p>
    <hr/>
    <p class=\"text-center text-muted mt-md mb-md\">Il est rappelé aux entreprises de travail temporaire et aux entreprises utilisatrices que la délivrance du Passeport Sécurité Intérim ne les exonère pas de l’ensemble des obligations mises à leur charge par le code du travail en matière d’accueil et de formation des salariés intérimaires.</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 60,  102 => 58,  97 => 56,  71 => 32,  56 => 19,  50 => 15,  44 => 13,  42 => 12,  38 => 11,  34 => 9,  28 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login_content.html.twig", "/app/src/UserBundle/Resources/views/Security/login_content.html.twig");
    }
}
