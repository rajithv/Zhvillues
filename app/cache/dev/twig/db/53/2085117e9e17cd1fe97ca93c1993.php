<?php

/* SystemReportGenerationBundle:Pages:newPLReport.html.twig */
class __TwigTemplate_db532085117e9e17cd1fe97ca93c1993 extends Twig_Template
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
Projectid                           ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["projectid"]) ? $context["projectid"] : $this->getContext($context, "projectid")), "html", null, true);
        echo "
totalexpencehrcost                  ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["totalexpencehrcost"]) ? $context["totalexpencehrcost"] : $this->getContext($context, "totalexpencehrcost")), "html", null, true);
        echo "
totalexpencemachinerycost            ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["totalexpencemachinerycost"]) ? $context["totalexpencemachinerycost"] : $this->getContext($context, "totalexpencemachinerycost")), "html", null, true);
        echo "
totalexpenceconsumablecost       ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["totalexpenceconsumablecost"]) ? $context["totalexpenceconsumablecost"] : $this->getContext($context, "totalexpenceconsumablecost")), "html", null, true);
        echo "
totalexpectedhrcost                 ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["totalexpectedhrcost"]) ? $context["totalexpectedhrcost"] : $this->getContext($context, "totalexpectedhrcost")), "html", null, true);
        echo "
totalexpectedconsumablecost         ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["totalexpectedconsumablecost"]) ? $context["totalexpectedconsumablecost"] : $this->getContext($context, "totalexpectedconsumablecost")), "html", null, true);
        echo "
totalexpectedmachinerycost             ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["totalexpectedmachinerycost"]) ? $context["totalexpectedmachinerycost"] : $this->getContext($context, "totalexpectedmachinerycost")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SystemReportGenerationBundle:Pages:newPLReport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
