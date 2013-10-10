<?php

/* SystemNavigationBundle:Default:ProjectManagerHome.html.twig */
class __TwigTemplate_674a26f690bf6e8c756e432861a118cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "SystemTestBundle:Home:Home";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "Hello Project Manager ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
<div> </div>

<table>

<tr>
<td> <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("add");
        echo "\">Add a New Client<a/> </td>
</tr>


<tr>
<td> <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("create_project");
        echo "\">Add a New Project<a/> </td>
</tr>

<tr>
<td> <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("createResource");
        echo "\">Add a New Resource<a/> </td>
</tr>


</table?
";
    }

    public function getTemplateName()
    {
        return "SystemNavigationBundle:Default:ProjectManagerHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  56 => 17,  48 => 12,  38 => 6,  35 => 5,  29 => 3,);
    }
}
