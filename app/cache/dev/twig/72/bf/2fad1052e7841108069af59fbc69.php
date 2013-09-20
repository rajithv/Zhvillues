<?php

/* SystemTrackingBundle:ActualExpences:createActualExpences.html.twig */
class __TwigTemplate_72bf2fad1052e7841108069af59fbc69 extends Twig_Template
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
        echo "<html>
    <head>
        <title>Create Expences</title>
    </head>
    
    <body>
       ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SystemTrackingBundle:ActualExpences:createActualExpences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
