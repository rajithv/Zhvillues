<?php

/* SystemTestBundle:Home:Home.html.twig */
class __TwigTemplate_85e0b08d2f2dbf9bb45179c79c5e538d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Soil Tech:Home";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<h1>Welcome to the Soil </h1>



<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" method=\"post\">
    <button type=\"submit\">logout</button>
</form>
<div class=\"block\">
";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "</div>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "<table>

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
        // line 37
        echo $this->env->getExtension('routing')->getPath("create_project");
        echo "\">create_project<a/> </td>
<td> Create a new project</td>
<td> created </td>
</tr>

<tr>
<td> <a href=\"";
        // line 43
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
        // line 61
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
        // line 73
        echo $this->env->getExtension('routing')->getPath("add_new_consumable");
        echo "\">add_new_consumable<a/> </td>
<td> Add new consumable </td>
<td> created </td>
</tr>

<tr>
<td> <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("add_new_machinery");
        echo "\">add_new_machinery<a/> </td>
<td> Add new machinery </td>
<td> created </td>
</tr>

<tr>
<td> <a href=\"";
        // line 85
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
        // line 97
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
        return array (  170 => 97,  155 => 85,  146 => 79,  137 => 73,  122 => 61,  101 => 43,  92 => 37,  73 => 20,  70 => 19,  65 => 103,  63 => 19,  56 => 15,  50 => 11,  47 => 10,  40 => 7,  37 => 6,  31 => 4,);
    }
}
