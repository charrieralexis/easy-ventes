<?php

/* EasyVentesFrontBundle:Default:index.html.twig */
class __TwigTemplate_91b3c3eb0d4993b35cff965fd3cecae37e5f24be4020edf6ad62f00004d8eeeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"slider\">
<ul class=\"bxslider list-unstyled\">
 <!-- <li>
      <div class=\"container\">
          <div class=\"row\">
                <div class=\"title-slide\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h2><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_product");
        echo "\"> Produits </a></h2>
                        </div>
                    </div>
                </div>
                <div class=\"content-slide col-lg-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <h3><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easy_ventes_front_product_detail", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</a></h3>
                            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-lg-6\">
                            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image", array()), "html", null, true);
        echo "\" />
                        </div>
                    </div>
                </div>
          </div>
      </div>
      <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/wall1.jpg"), "html", null, true);
        echo "\" />
  </li>
  <li>
      <div class=\"container\">
          <div class=\"row\">
                <div class=\"title-slide\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h2><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_event");
        echo "\"> Evènements </a></h2>
                        </div>
                    </div>
                </div>
                <div class=\"content-slide col-lg-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h3><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easy_ventes_front_event_detail", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</a></h3>
                            <p>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/wall2.jpg"), "html", null, true);
        echo "\" />
  </li>
  <li>
      <div class=\"container\">
          <div class=\"row\">
                <div class=\"title-slide\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h2 class=\"black\"><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_inscription");
        echo "\"> Inscription </a></h2>
                        </div>
                    </div>
                </div>
                <div class=\"content-slide col-lg-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <p class=\"black\">Inscrivez vous sur le site pour benificier de nos produits</p>
                        </div>
                    </div>
                </div>
          </div>
      </div>
      <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/wall3.jpg"), "html", null, true);
        echo "\" />
  </li>
  -->
  <li>
      <div class=\"container\">
            <div class=\"content-slide\">
                <h2><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_product");
        echo "\">Produits</a></h2>
                <h3>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</h3>
                <p>
                    ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "
                </p>
          </div>
      </div>
      <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/wall1.jpg"), "html", null, true);
        echo "\" />
  </li>
  <li>
      <div class=\"container\">
            <div class=\"content-slide\">
                <h2><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_event");
        echo "\"> Evènements </a></h2>
                <h3>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</h3>
                <p>
                    ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "
                </p>
          </div>
      </div>
      <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/wall2.jpg"), "html", null, true);
        echo "\" />
  </li>
  <li>
    <div class=\"container\">
          <div class=\"content-slide\">
              <h2><a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_inscription");
        echo "\"> Inscription </a></h2>
              <p class=\"black\">Inscrivez vous sur le site pour benificier de nos produits</p>
        </div>
      </div>
      <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/wall3.jpg"), "html", null, true);
        echo "\" />
  </li>
</ul>
</div>
<div id=\"pages\">
    <div class=\"container\">
        <ul class=\"list-unstyled nav nav-justified\">
            <li><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_event");
        echo "\">Prochaines Ventes</a></li>
            <li><a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_product");
        echo "\">Produits</a></li>
            <li><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_inscription");
        echo "\">Inscription</a></li>
        </ul> 
    </div>
</div>
<div id=\"formulaire\">
    <div class=\"container\">
        <div class=\"col-xs-offset-3 col-lg-6\">
        <h1>Inscription au site</h1>
            ";
        // line 123
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
        </div>
    </div>
</div>
  
";
    }

    public function getTemplateName()
    {
        return "EasyVentesFrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 123,  225 => 115,  221 => 114,  217 => 113,  207 => 106,  200 => 102,  192 => 97,  185 => 93,  180 => 91,  176 => 90,  168 => 85,  161 => 81,  156 => 79,  152 => 78,  143 => 72,  127 => 59,  116 => 51,  107 => 45,  101 => 44,  91 => 37,  80 => 29,  71 => 23,  65 => 20,  59 => 19,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
