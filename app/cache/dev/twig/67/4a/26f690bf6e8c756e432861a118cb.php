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
<td> 
    
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("add");
        echo "\" method=\"post\">
    <button type=\"submit\">Add a New Client</button>
    </form>
    
</tr>


<tr>
<td> 
        <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("create_project");
        echo "\" method=\"post\">
        <button type=\"submit\">Add a New Project</button>
        </form></td>
</tr>

<tr>
<td>
        <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("createResource");
        echo "\" method=\"post\">
        <button type=\"submit\">Add a New Resource</button>
        </form></td> </td>
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
        return array (  72 => 30,  62 => 23,  50 => 14,  38 => 6,  35 => 5,  29 => 3,);
    }
}
