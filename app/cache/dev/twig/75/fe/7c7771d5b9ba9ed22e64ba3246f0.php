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
Current Project  ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "html", null, true);
        echo "
Total HR Cost From HR Database    ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["totalhrcost"]) ? $context["totalhrcost"] : $this->getContext($context, "totalhrcost")), "html", null, true);
        echo "
totalexpectedhrcost from Budget             ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["totalexpectedhrcost"]) ? $context["totalexpectedhrcost"] : $this->getContext($context, "totalexpectedhrcost")), "html", null, true);
        echo "
totalexpencehrcost  from Project Expenses     ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["totalexpencehrcost"]) ? $context["totalexpencehrcost"] : $this->getContext($context, "totalexpencehrcost")), "html", null, true);
        echo "
";
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
