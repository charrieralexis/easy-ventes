<?php

/* ::base.html.twig */
class __TwigTemplate_2944ba9b6b58df097c79f84b188181df7a0435403b68b26433d2dc252bfc0f49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1158ada_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1158ada_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_bootstrap_1.css");
            // line 13
            echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "1158ada_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1158ada_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_bootstrap-theme_2.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "1158ada_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1158ada_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_jquery.bxslider_3.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "1158ada_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1158ada_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_font_4.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "1158ada_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1158ada_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_style_5.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "1158ada"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1158ada") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <section>
        ";
        // line 19
        $this->displayBlock('nav', $context, $blocks);
        // line 23
        echo "        <div class='page'>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "        </div>
        </section>
        
        ";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cc0bb68_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cc0bb68_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_jquery-1.11.2.min_1.js");
            // line 34
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
            // asset "cc0bb68_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cc0bb68_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_jquery.bxslider_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
            // asset "cc0bb68_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cc0bb68_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_bootstrap.min_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
            // asset "cc0bb68_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cc0bb68_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_main_4.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
        } else {
            // asset "cc0bb68"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cc0bb68") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Easy ventes";
    }

    // line 19
    public function block_nav($context, array $blocks = array())
    {
        // line 20
        echo "            ";
        // line 21
        echo "            ";
        $this->env->loadTemplate(":include:nav.html.twig")->display($context);
        // line 22
        echo "        ";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 24,  150 => 22,  147 => 21,  145 => 20,  142 => 19,  136 => 5,  130 => 36,  98 => 34,  94 => 28,  89 => 25,  87 => 24,  84 => 23,  82 => 19,  74 => 15,  36 => 13,  32 => 6,  28 => 5,  22 => 1,);
    }
}
