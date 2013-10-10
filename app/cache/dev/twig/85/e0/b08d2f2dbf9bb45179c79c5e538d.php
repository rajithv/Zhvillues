<?php

/* SystemTestBundle:Home:Home.html.twig */
class __TwigTemplate_85e0b08d2f2dbf9bb45179c79c5e538d extends Twig_Template
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
        echo "<h1>Welcome to the Home:Home page</h1>

";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "

<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" method=\"post\">
    <button type=\"submit\">logout</button>
</form>


<table>

<tr>
<td> <b>Path</b> </td>
<td> <b>Description</b></td>
<td> <b>Status - created / tested / working / finalized / etc.</b> </td>
<td> <b>Authorization Level</b></td>
</tr>


<tr>
<td> <a href=\"\"><del>system_project_homepage</del><a/> </td>
<td> No need </td>
<td>  - </td>
</tr>

<tr>
<td> <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("create_project");
        echo "\">create_project<a/> </td>
<td> Create a new project</td>
<td> created </td>
</tr>

<tr>
<td> <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("create_budget");
        echo "\">create_budget<a/> </td>
<td> Create a new budget</td>
<td> created </td>
</tr>

<tr>
<td> <a href=\"\">system_test_homepage<a/> </td>
<td> No need </td>
<td> - </td>
</tr>

<tr>
<td> <a href=\"\">system_client_homepage<a/> </td>
<td> No need </td>
<td> - </td>
</tr>

<tr>
<td> <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("add");
        echo "\">add<a/> </td>
<td> Add a new client </td>
<td> created </td>
</tr>

<tr>
<td> <a href=\"\">system_resource_homepage<a/> </td>
<td> No need </td>
<td>  - </td>
</tr>

<tr>
<td> <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("add_new_consumable");
        echo "\">add_new_consumable<a/> </td>
<td> Add new consumable </td>
<td> created </td>
</tr>

<tr>
<td> <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("add_new_machinery");
        echo "\">add_new_machinery<a/> </td>
<td> Add new machinery </td>
<td> created </td>
</tr>

<tr>
<td> <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("add_new_hr");
        echo "\">add_new_hr<a/> </td>
<td> Add a new human resource</td>
<td> created </td>
</tr>

<tr>
<td> <a href=\"\">system_tracking_homepage<a/> </td>
<td> No need</td>
<td> - </td>
</tr>

<tr>
<td> <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("create_actual_expences");
        echo "\">create_actual_expences<a/> </td>
<td> Create an expense</td>
<td> created </td>
</tr>
</table>

";
    }

    public function getTemplateName()
    {
        return "SystemTestBundle:Home:Home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 92,  135 => 80,  126 => 74,  117 => 68,  102 => 56,  81 => 38,  72 => 32,  47 => 10,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
