<?php

/* SystemReportGenerationBundle:Pages:NewHRReport.html.twig */
class __TwigTemplate_75fe7c7771d5b9ba9ed22e64ba3246f0 extends Twig_Template
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
        echo "!!!REPORT!!!
HR Code          ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "html", null, true);
        echo "
Name             ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
Department       ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "html", null, true);
        echo "
Current Project  ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SystemReportGenerationBundle:Pages:NewHRReport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
