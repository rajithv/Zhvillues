<?php

/* SystemProjectBundle:ProjectCreation:createProject.html.twig */
class __TwigTemplate_44171c8c740c4fda6f12c5435a4aca25 extends Twig_Template
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
        <title>Add New Project</title>
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
        return "SystemProjectBundle:ProjectCreation:createProject.html.twig";
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
