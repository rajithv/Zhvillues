<?php

/* OOSDSoilTechBundle:Login:login.html.twig */
class __TwigTemplate_74be583169451e28d7e019807a05bf2d extends Twig_Template
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
        echo "<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <img src=\"img/login.png\" />
        <form>
            Username: <input type=\"text\" name=\"userame\" value=\"username\"><br>
            Password: <input type=\"text\" name=\"password\" value=\"password\"><br>
            <input type=\"submit\" value=\"Login\">
        </form>

        <p>Click the \"login\" button</p>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "OOSDSoilTechBundle:Login:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
