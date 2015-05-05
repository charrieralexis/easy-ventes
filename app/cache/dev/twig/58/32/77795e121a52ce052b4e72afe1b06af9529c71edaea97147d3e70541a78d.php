<?php

/* :include:nav.html.twig */
class __TwigTemplate_583277795e121a52ce052b4e72afe1b06af9529c71edaea97147d3e70541a78d extends Twig_Template
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
        // line 1
        echo "<div id=\"navigation\">
    <nav id=\"menu\" class=\"navbar navbar-inverse ";
        // line 2
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "connected";
        }
        echo "\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <ul class=\"list-unstyled nav nav-justified collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <li id=\"le-logo\"><a class=\"logo\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_event");
        echo "\">Prochaines Ventes</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_product");
        echo "\">Produits</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_inscription");
        echo "\">Inscription</a></li>
            <li class=\"connexion ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "co";
        }
        echo "\">
                    ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                        <a class=\"deconnexion\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            Deconnexion <span>";
            // line 17
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo "</span>
                        </a>
                    ";
        }
        // line 20
        echo "                    ";
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
            echo "
                    ";
        }
        // line 23
        echo "            </li>
        </ul>
    </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return ":include:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  75 => 21,  72 => 20,  66 => 17,  61 => 16,  59 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  35 => 10,  22 => 2,  19 => 1,);
    }
}
