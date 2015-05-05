<?php

/* EasyVentesFrontBundle:Event:list.html.twig */
class __TwigTemplate_38968b154356df42f6474a428520ba209611839e949b47e531a74cc4e9c7598a extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 7
            echo "            <div class=\"row evenement\">
                <div class='col-xs-offset-2 col-lg-8'>
                    <article>
                        <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easy_ventes_front_event_detail", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</a></h2>
                        <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo "</p>
                        <p class=\"evenement-date\">
                            <span>Date de l'évènement : ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "date", array()), "m/d/Y"), "html", null, true);
            echo "</span> - 
                            <span>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "address", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "codePostal", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "ville", array()), "html", null, true);
            echo "</span>
                        </p>
                    </article>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "EasyVentesFrontBundle:Event:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  66 => 14,  62 => 13,  57 => 11,  51 => 10,  46 => 7,  42 => 6,  39 => 5,  36 => 4,  11 => 1,);
    }
}
