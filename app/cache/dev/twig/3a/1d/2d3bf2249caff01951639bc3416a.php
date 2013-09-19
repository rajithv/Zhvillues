<?php

/* SystemResourceBundle:Pages:addNewMachinery.html.twig */
class __TwigTemplate_3a1d2d3bf2249caff01951639bc3416a extends Twig_Template
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
        echo "<h1>Purchase new machinery</h1>

<p>Enter the details of the new machinery below</p>
<div>
    <li>Code: <input type=\"text\" name=\"inCode\"></li>
    <li>Name: <input type=\"text\" name=\"inName\"></li>
    <li>Purchase Vale:<input type=\"text\" name=\"inPurchaseValue\"></li>
    <!-- At the beginning this value will be the Net Precent Value of the Machine -->
    <li>Operation Cost per Hour:<input type=\"text\" name=\"inRate\"></li>
    <li>Intended usefull life time:<input type=\"text\" name=\"inLifeTime\"></li>
    <!-- There are three more fields in the Database,
            - Allocated Project
            - Current Status
            - Depreciation Rate
    These are not requested as inputs, they must be altered accordingly when the entry is recorded-->
</div> 
 <input type=\"submit\" value=\"Submit\">
 <input type=\"submit\" value=\"Clear\">";
    }

    public function getTemplateName()
    {
        return "SystemResourceBundle:Pages:addNewMachinery.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
