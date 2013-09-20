<?php

/* SystemResourceBundle:Pages:addNewHR.html.twig */
class __TwigTemplate_88b245e16150228e9e3a471fa4bf3108 extends Twig_Template
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
        echo "<h1>New Recruitments</h1>

<p>Enter the details of the new employee below</p>
<div>
    <li>Emloyee Code: <input type=\"text\" name=\"inCode\"></li>
    <li>Name: <input type=\"text\" name=\"inName\"></li>
    <li>Department:<input type=\"text\" name=\"inDepartment\"></li>
    <li>NIC Number:<input type=\"text\" name=\"inNICNumber\"></li>
    <li>Hourly Rate:<input type=\"text\" name=\"inHourlyRate\"></li>
    <li>Allocated Project:<input type=\"text\" name=\"inAllocatedProject\"></li>
    <!-- We could add a option list for the project by giving all the current projects..-->
</div> 
 <input type=\"submit\" value=\"Submit\">
 <input type=\"submit\" value=\"Clear\">";
    }

    public function getTemplateName()
    {
        return "SystemResourceBundle:Pages:addNewHR.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
