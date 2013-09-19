<?php

/* OOSDSoilTechBundle:Default:index.html.twig */
class __TwigTemplate_4b3539cce120aa475e36aab085b87c81 extends Twig_Template
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
        echo "<h1> Zhvillues - SoilTech Project </h1>

Hello ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!

";
    }

    public function getTemplateName()
    {
        return "OOSDSoilTechBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
