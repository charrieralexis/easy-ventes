<?php

/* EasyVentesFrontBundle:Product:detail.html.twig */
class __TwigTemplate_0d4122b1e0b005f8f4c187f62530dfc40961ebae54592cd341f91cb03402d293 extends Twig_Template
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
            <div class='col-xs-offset-2 col-lg-2 lien-return'>
                <a class=\"btn btn-default\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("easy_ventes_front_product");
        echo "\">< Liste des produits</a>
            </div>
        </div>
        <div class=\"row\">
            <div class='col-xs-offset-2 col-lg-8 produit'>
                <article class=\"\">
                    <div class=\"row\">
                        <div class='col-lg-12'>
                            <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</h2>
                        </div>
                    </div>
                    <div class=\"row\">
                    <div class='col-lg-6'>
                        <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</p>
                        ";
        // line 20
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "stock", array()) > 3)) {
            // line 21
            echo "                                <p class=\"green\">Stock : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "stock", array()), "html", null, true);
            echo "</p>
                                ";
        } else {
            // line 23
            echo "                                    <p class=\"red\">Stock : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "stock", array()), "html", null, true);
            echo "</p>
                                    ";
            // line 24
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "alert", array()) == null)) {
                // line 25
                echo "                                        ";
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 26
                    echo "                                            <p id=\"high-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
                    echo "\" class=\"highlight\">
                                            <button class=\"btn btn-danger\" data-alert=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
                    echo "\" data-action=\"";
                    echo $this->env->getExtension('routing')->getPath("easy_ventes_front_product_alert");
                    echo "\" data-user=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                    echo "\">Alerte</button> Recevoir une alerte en cas de disponibilité</p>
                                            <p id=\"success-";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
                    echo "\" class=\"alerte-success\">Alerte enregistrée</p>
                                        ";
                }
                // line 30
                echo "                                    ";
            } else {
                // line 31
                echo "                                            <p id=\"success-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
                echo "\" class=\"alerte-success active-alert\">Alerte enregistrée</p>
                                    ";
            }
            // line 33
            echo "                                ";
        }
        // line 34
        echo "                        <p class=\"prix\">Prix : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo " €</p>
                    </div>
                    
                    <div class='col-lg-6 image'>
                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image", array()), "html", null, true);
        echo "\">
                    </div>
                </article> 
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EasyVentesFrontBundle:Product:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  115 => 34,  112 => 33,  106 => 31,  103 => 30,  98 => 28,  90 => 27,  85 => 26,  82 => 25,  80 => 24,  75 => 23,  69 => 21,  67 => 20,  63 => 19,  55 => 14,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
