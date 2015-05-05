<?php

/* EasyVentesFrontBundle:Product:list.html.twig */
class __TwigTemplate_9eb17b803ffdd70fa55f66319a40d1371f67eb1d7f097221d91d8946174a5217 extends Twig_Template
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
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "            <div class=\"row\">
                <div class='col-xs-offset-2 col-lg-8'>
                    <article class=\"grille clearfix\">
                        <div class=\"row\">
                            <div class='col-lg-12'>
                                <h2>
                                    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easy_ventes_front_product_detail", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a>
                                </h2>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class='col-lg-6'>
                                <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</p>
                                ";
            // line 18
            if (($this->getAttribute($context["product"], "stock", array()) > 3)) {
                // line 19
                echo "                                <p class=\"green\">Stock : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "stock", array()), "html", null, true);
                echo "</p>
                                ";
            } else {
                // line 21
                echo "                                    <p class=\"red\">Stock : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "stock", array()), "html", null, true);
                echo "</p>
                                    ";
                // line 22
                if (($this->getAttribute($context["product"], "alert", array()) == null)) {
                    // line 23
                    echo "                                        ";
                    if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                        // line 24
                        echo "                                            <p id=\"high-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"highlight\"><button class=\"btn btn-danger\" data-alert=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" data-action=\"";
                        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_product_alert");
                        echo "\" data-user=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo "\">Alerte</button> Recevoir une alerte en cas de disponibilité</p>
                                            <p id=\"success-";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                        echo "\" class=\"alerte-success\">Alerte enregistrée</p>
                                        ";
                    }
                    // line 27
                    echo "                                    ";
                } else {
                    // line 28
                    echo "                                            <p id=\"success-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo "\" class=\"alerte-success active-alert\">Alerte enregistrée</p>
                                    ";
                }
                // line 30
                echo "                                ";
            }
            // line 31
            echo "                            </div>
                            <div class='col-lg-6 image'>
                                <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "image", array()), "html", null, true);
            echo "\">
                            </div>
                        </div>
                    </article>  
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>  
";
    }

    public function getTemplateName()
    {
        return "EasyVentesFrontBundle:Product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  119 => 33,  115 => 31,  112 => 30,  106 => 28,  103 => 27,  98 => 25,  87 => 24,  84 => 23,  82 => 22,  77 => 21,  71 => 19,  69 => 18,  65 => 17,  54 => 11,  46 => 5,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
