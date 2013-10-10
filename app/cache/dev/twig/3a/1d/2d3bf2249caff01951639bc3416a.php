<?php

/* SystemResourceBundle:Pages:addNewMachinery.html.twig */
class __TwigTemplate_3a1d2d3bf2249caff01951639bc3416a extends Twig_Template
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
        echo "<head>
<title>Add New Machinery</title>
</head>

<h1>Purchase new machinery</h1>

<p>Enter the details of the new machinery below</p>
<div>
   ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div> 
";
    }

    public function getTemplateName()
    {
        return "SystemResourceBundle:Pages:addNewMachinery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }
}
