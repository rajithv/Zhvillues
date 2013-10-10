<?php

/* SystemResourceBundle:Pages:allocateMachinery.html.twig */
class __TwigTemplate_f056ef8f4521a95d56aad71e8eee7d56 extends Twig_Template
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
     
        <title>Allocate Resources</title>
    </head>
    
    <body>
        <h1 >Allocate Resources</h1>
        <div style=\"border: 1px solid black;background-color: yellow;\">
            <h2>Allocate Machinery</h2>
            ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Mform"]) ? $context["Mform"] : $this->getContext($context, "Mform")), 'form');
        echo "
        
            <h3>Allocated Machinery</h2>
            <ul>
                ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["MAllocations"]) ? $context["MAllocations"] : $this->getContext($context, "MAllocations")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 16
            echo "                    <li> ";
            echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
            echo " </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ul>
        </div>
        <div style=\"border: 1px solid blue;background-color:pink;\">
            <h2>Allocate HR</h2>
            ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Hform"]) ? $context["Hform"] : $this->getContext($context, "Hform")), 'form');
        echo "
        
            <h3>Allocated HR</h2>
            <ul>
                ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Hallocations"]) ? $context["Hallocations"] : $this->getContext($context, "Hallocations")));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 27
            echo "                    <li> ";
            echo twig_escape_filter($this->env, (isset($context["h"]) ? $context["h"] : $this->getContext($context, "h")), "html", null, true);
            echo " </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </ul>
        </div>
        <div style=\"border: 1px solid red;colour:green;\">
            <h2>Allocate Consumables</h2>
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Cform"]) ? $context["Cform"] : $this->getContext($context, "Cform")), 'form');
        echo "
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SystemResourceBundle:Pages:allocateMachinery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  77 => 29,  68 => 27,  64 => 26,  57 => 22,  51 => 18,  42 => 16,  38 => 15,  31 => 11,  19 => 1,);
    }
}
