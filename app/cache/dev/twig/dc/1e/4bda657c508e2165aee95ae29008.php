<?php

/* SystemNavigationBundle:Default:OnSiteManagerHome.html.twig */
class __TwigTemplate_dc1e4bda657c508e2165aee95ae29008 extends Twig_Template
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
        echo "<h1>Hello On Site Manager ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
<h2>Report expences</h2>
        <form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("create_actual_expences");
        echo "\" method=\"post\">
        <button type=\"submit\">Report todays expences</button>
        </form>
<h2>Check reports</h2>
        <button type=\"submit\">Get reports about my project</button>";
    }

    public function getTemplateName()
    {
        return "SystemNavigationBundle:Default:OnSiteManagerHome.html.twig";
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
