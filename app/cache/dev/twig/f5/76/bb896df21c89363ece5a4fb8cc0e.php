<?php

/* SystemReportGenerationBundle:Pages:newGraph.html.twig */
class __TwigTemplate_f576bb896df21c89363ece5a4fb8cc0e extends Twig_Template
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
        echo "<img src=\"data:image/png;base64, ";
        echo twig_escape_filter($this->env, (isset($context["EncodedImage"]) ? $context["EncodedImage"] : $this->getContext($context, "EncodedImage")), "html", null, true);
        echo "\" />
hi!
<img src=\"data:image/png;base64, ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["EncodedImage"]) ? $context["EncodedImage"] : $this->getContext($context, "EncodedImage")), "html", null, true);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "SystemReportGenerationBundle:Pages:newGraph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
