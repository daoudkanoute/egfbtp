<?php

/* AppBundle:Apparenants:_widgets.html.twig */
class __TwigTemplate_e6f66bd072d7e6dcf67f3e3dbdfb09d16b480a53298239909075b3c591578fd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'image_widget' => array($this, 'block_image_widget'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 8
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 15
        $this->displayBlock('image_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : null), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            echo " has-error";
        }
        echo "\">";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 5
        echo "</div>";
    }

    // line 8
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"checkbox-inline col-md-10 col-md-offset-2\">
    <input type=\"checkbox\" ";
        // line 10
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => (isset($context["label_attr"]) ? $context["label_attr"] : null)));
        // line 12
        echo "</div>";
    }

    // line 15
    public function block_image_widget($context, array $blocks = array())
    {
        // line 16
        echo "  ";
        ob_start();
        // line 17
        echo "    <div class=\"row single-image single-container\">
      ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "label", array())) {
            // line 19
            echo "      <label class=\"col-md-2 control-label\" for=\"inputDate\">
        Attestation signée <span class=\"required\" aria-required=\"true\">*</span>
      </label>
      <div class=\"col-md-8 fileupload-container\">
      ";
        } else {
            // line 24
            echo "      <div class=\"col-md-12 fileupload-container\">
      ";
        }
        // line 26
        echo "        <div class=\"fileupload ";
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "data", array()))) {
            echo "fileupload-exists";
        } else {
            echo "fileupload-new";
        }
        echo "\" data-provides=\"fileupload\">
          <div class=\"input-append\">
            <div class=\"uneditable-input\">
              <i class=\"fa fa-file fileupload-exists\"></i>
              <span class=\"fileupload-preview\">
                ";
        // line 31
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "data", array()))) {
            // line 32
            echo "                  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "data", array()), "alt", array()), "html", null, true);
            echo "
                ";
        }
        // line 34
        echo "            </span>
            </div>
            <span class=\"btn btn-default btn-file\">
              <span class=\"fileupload-exists\">Modifier</span>
              <span class=\"fileupload-new\">Sélectionner un fichier</span>
          </span>
            <a href=\"#\" class=\"btn btn-default fileupload-exists\" data-dismiss=\"fileupload\">Supprimer</a>
          </div>
        </div>
      </div>
      <div class=\"";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "label", array())) {
            echo "col-md-8 col-md-offset-1";
        } else {
            echo "col-md-12";
        }
        echo " image-container\">
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget', array("attr" => array("class" => "fileuploader hidden", "data-url" => $this->env->getExtension('Oneup\UploaderBundle\Twig\Extension\UploaderExtension')->endpoint("images"))));
        echo "
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <div class=\"sidebar-widget widget-stats hidden\">
          <div class=\"progress-extended\"></div>
          <div class=\"progress-container\">
            <div class=\"progress-bar progress-bar-primary progress-without-number bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>
          </div>
        </div>
      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 58
    public function block_form_errors($context, array $blocks = array())
    {
        // line 59
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0))) {
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 61
                echo "<div class=\"help-block\">
        <span class=\"text-danger\"><i class=\"fa fa-exclamation-circle \"></i> ";
                // line 62
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
        return "AppBundle:Apparenants:_widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 62,  167 => 61,  163 => 60,  161 => 59,  158 => 58,  143 => 46,  139 => 45,  131 => 44,  119 => 34,  113 => 32,  111 => 31,  98 => 26,  94 => 24,  87 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  72 => 12,  70 => 11,  59 => 10,  56 => 9,  53 => 8,  49 => 5,  47 => 4,  45 => 3,  39 => 2,  36 => 1,  32 => 58,  29 => 57,  27 => 15,  25 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Apparenants:_widgets.html.twig", "/app/src/AppBundle/Resources/views/Apparenants/_widgets.html.twig");
    }
}
