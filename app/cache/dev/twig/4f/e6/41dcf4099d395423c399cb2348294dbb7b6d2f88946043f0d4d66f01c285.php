<?php

/* EasyVentesFrontBundle:Event:detail.html.twig */
class __TwigTemplate_4fe641dcf4099d395423c399cb2348294dbb7b6d2f88946043f0d4d66f01c285 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class='col-xs-offset-3 col-lg-2 lien-return'>
                <a class=\"btn btn-default\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_event");
        echo "\">< liste des évènements</a>
            </div>
        </div>
        <div class=\"row\">
            <article class=\"event col-xs-offset-3 col-lg-6\">
                <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</h2>
                <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "address", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "codePostal", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "ville", array()), "html", null, true);
        echo "</p>
                <div class=\"map\">
                  <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=";
        // line 17
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "address", array()), array("% %" => "+")), "html", null, true);
        echo ",+";
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "ville", array()), array("% %" => "+")), "html", null, true);
        echo "&amp;aq=2&amp;oq=";
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "address", array()), array("% %" => "+")), "html", null, true);
        echo "&amp;sspn=0.010673,0.033023&amp;ie=UTF8&amp;hq=&amp;hnear=";
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "address", array()), array("% %" => "+")), "html", null, true);
        echo ",+";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "codePostal", array()), "html", null, true);
        echo "+";
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "ville", array()), array("% %" => "+")), "html", null, true);
        echo "&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed\"></iframe>
                </div>
            </article>
        </div>
    </div>

    
    <div id=\"formulaire\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-offset-3 col-lg-6\">
                    <h1>Inscription à l'évènement</h1>
                    ";
        // line 29
        if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "inscription", array()) == null)) {
            // line 30
            echo "                        ";
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 31
                echo "                            <form method=\"post\" action=\"\">
                                <input type=\"hidden\" id=\"form_event\" name=\"form[event]\" value=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "html", null, true);
                echo "\">
                                <input type=\"hidden\" id=\"form_user\" name=\"form[user]\" value=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                echo "\">
                                <button type=\"submit\" id=\"form_Ajouter\" name=\"form[Ajouter]\" class=\" btn btn-primary\">S'inscrire à ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
                echo "</button>
                            </form>
                        ";
            } else {
                // line 37
                echo "                            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("easy_ventes_front_inscription");
                echo "\"> Pour participer a l'évènement veuillez vous inscrire.</a>
                        ";
            }
            // line 39
            echo "                    ";
        } else {
            // line 40
            echo "                        <p>Vous êtes inscrit à cet évènement</p>
                    ";
        }
        // line 42
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EasyVentesFrontBundle:Event:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  129 => 40,  126 => 39,  120 => 37,  114 => 34,  110 => 33,  106 => 32,  103 => 31,  100 => 30,  98 => 29,  73 => 17,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
