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
        echo "Hello Project Manager, You can add Resources!
<div> </div>

<table>
<tr>
<td> <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("add_new_consumable");
        echo "\">Add a New Consumable<a/> </td>
</tr>

<tr>
<td> <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("add_new_machinery");
        echo "\">Add a New Machinary<a/> </td>
</tr>

<tr>
<td> <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("add_new_hr");
        echo "\">Add a New HR<a/> </td>
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
        return array (  59 => 19,  52 => 15,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
