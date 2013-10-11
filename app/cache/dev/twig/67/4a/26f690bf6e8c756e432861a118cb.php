<?php

/* SystemNavigationBundle:Default:ProjectManagerHome.html.twig */
class __TwigTemplate_674a26f690bf6e8c756e432861a118cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Hello Project Manager ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
<div> </div>
<h3>Adding new items</h3>
<table>

<tr>
<td> 
    
    <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("add");
        echo "\" method=\"post\">
      <button type=\"submit\" name=\"addClient\" class=\"sf-button\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Add a New Client</span>
                    </span>
                 </span>
     </button>
    </form></td>
    
</tr>

<tr>
<td> 
    
    <form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("create_budget");
        echo "\" method=\"post\">
        <button type=\"submit\" name=\"addBudget\" class=\"sf-button\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Add a New Budget</span>
                    </span>
                 </span>
           </button>
    </form></td>
    
</tr>

<tr>
<td> 
        <form action=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("create_project");
        echo "\" method=\"post\">
          <button type=\"submit\" name=\"addProject\" class=\"sf-button\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Add a New Project</span>
                    </span>
                 </span>
           </button>
        </form></td>
</tr>

<tr>
<td>
    <h4>Add new resources</h4>
        <td> 
       <form action=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("add_new_consumable");
        echo "\" method=\"post\">
          <button type=\"submit\" name=\"addConsumable\" class=\"sf-button\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Add a New Consumable</span>
                    </span>
                 </span>
           </button>
       </form></td>
       
       <td> 
        <form action=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("add_new_machinery");
        echo "\" method=\"post\">
           <button type=\"submit\" name=\"addMachine\" class=\"sf-button\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Add a New Machinary</span>
                    </span>
                 </span>
           </button>
        </form></td>
        
       <td> 
       <form action=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("add_new_hr");
        echo "\" method=\"post\">     
         <button type=\"submit\" name=\"addHR\" class=\"sf-button\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Add a New HR</span>
                    </span>
                 </span>
           </button>
        
        
        </form></td>
       
</tr>


</table>

<h3>Checking excisting projects</h3>

<td>
           <button type=\"submit\" name=\"getReports\" class=\"sf-button\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Select a project and get reports</span>
                    </span>
                 </span>
           </button>
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
        return array (  135 => 82,  121 => 71,  107 => 60,  89 => 45,  72 => 31,  54 => 16,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
