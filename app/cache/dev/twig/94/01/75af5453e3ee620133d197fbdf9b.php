<?php

/* SystemClientBundle:Pages:addClient.html.twig */
class __TwigTemplate_940175af5453e3ee620133d197fbdf9b extends Twig_Template
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
        echo "<h1>Add new Client</h1> 

<p>Enter the details of the new client below</p>

<!-- 

<div>
    <li>Client Code: <input type=\"text\" name=\"inCode\"></li>
    <li>Name: <input type=\"text\" name=\"inName\"></li>
    <li>Contact Person:<input type=\"text\" name=\"inDepartment\"></li>
    <li>Contact Details:<input type=\"text\" name=\"inNICNumber\"></li>
    <li>Project:<input type=\"text\" name=\"inAllocatedProject\"></li>
    Dont think this is complete yet
</div> 
 <input type=\"submit\" value=\"Submit\">
 <input type=\"submit\" value=\"Clear\">

 -->
 <div>";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "</div>
 ";
    }

    public function getTemplateName()
    {
        return "SystemClientBundle:Pages:addClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 19,  19 => 1,);
    }
}
