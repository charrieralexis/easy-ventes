<?php

/* EasyVentesFrontBundle:Inscription:index.html.twig */
class __TwigTemplate_5ab5352f985f29dbc5460239f6971920d8060009fd1fc1464786e54d19c10d1c extends Twig_Template
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
        echo "
<div id=\"formulaire\">
    <div class=\"container\">
        <div class=\"col-xs-offset-3 col-lg-6\">
        <h1>Inscription au site</h1>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
        </div>
    </div>
</div>
  
";
    }

    public function getTemplateName()
    {
        return "EasyVentesFrontBundle:Inscription:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
