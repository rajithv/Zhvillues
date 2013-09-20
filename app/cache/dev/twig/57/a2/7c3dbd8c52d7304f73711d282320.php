<?php

/* SystemResourceBundle:Pages:addNewConsumable.html.twig */
class __TwigTemplate_57a27c3dbd8c52d7304f73711d282320 extends Twig_Template
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
        echo "<h1>Purchace a new consumable</h1>

<p>Enter the details of the new consumables below</p>
<div>
    <li>Code: <input type=\"text\" name=\"inCode\"></li>
    <li>Name: <input type=\"text\" name=\"inName\"></li>
    <li>Quantity:<input type=\"text\" name=\"inQuantity\"></li>
    <li>Unit Value:<input type=\"text\" name=\"inUnitValue\"></li>
    <!-- There are two more fields in the Database,
            - Pending Orders
            - To Be Ordered 
    These are not requested as inputs, they must be altered accordingly when the entry is recorded-->
</div> 
 <input type=\"submit\" value=\"Submit\">
 <input type=\"submit\" value=\"Clear\">";
    }

    public function getTemplateName()
    {
        return "SystemResourceBundle:Pages:addNewConsumable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
