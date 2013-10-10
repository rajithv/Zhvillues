<?php

/* SystemNavigationBundle:Default:ProjectManagerResource.html.twig */
class __TwigTemplate_565a046bed695d2cb5e9660de0f5616b extends Twig_Template
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
        echo "Hello Project Manager, You can add Resources from the links
<div> </div>

<table>
<tr>
<td> 
       <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("add_new_consumable");
        echo "\" method=\"post\">
       <button type=\"submit\">Add a New Consumable</button>
       </form></td>

</tr>

<tr>
<td> 
        <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("add_new_machinery");
        echo "\" method=\"post\">
        <button type=\"submit\">Add a New Machinary</button>
        </form></td>
</tr>

<tr>
<td> 
        <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("add_new_hr");
        echo "\" method=\"post\">
        <button type=\"submit\">Add a New HR</button>
        </form></td>
</tr>

</table>
";
    }

    public function getTemplateName()
    {
        return "SystemNavigationBundle:Default:ProjectManagerResource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  57 => 20,  46 => 12,  38 => 6,  35 => 5,  29 => 3,);
    }
}
