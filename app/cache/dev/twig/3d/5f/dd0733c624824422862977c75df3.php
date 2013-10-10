<?php

/* SystemClientBundle:Default:index.html.twig */
class __TwigTemplate_3d5fdd0733c624824422862977c75df3 extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "SystemClientBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  64 => 17,  55 => 15,  48 => 13,  30 => 7,  39 => 9,  29 => 4,  26 => 6,  51 => 14,  44 => 12,  42 => 6,  35 => 5,  31 => 5,  43 => 6,  41 => 5,  28 => 3,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
