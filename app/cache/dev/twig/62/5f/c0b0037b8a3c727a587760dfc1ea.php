<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_625fc0b0037b8a3c727a587760dfc1ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  51 => 13,  47 => 11,  34 => 5,  31 => 4,  28 => 3,  363 => 126,  357 => 123,  353 => 121,  351 => 120,  344 => 119,  341 => 118,  332 => 116,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  315 => 110,  312 => 109,  309 => 108,  306 => 107,  303 => 106,  300 => 105,  297 => 104,  291 => 102,  288 => 101,  283 => 100,  278 => 98,  274 => 97,  265 => 96,  263 => 95,  258 => 94,  255 => 93,  243 => 92,  235 => 85,  231 => 83,  224 => 81,  212 => 78,  202 => 77,  190 => 76,  187 => 75,  185 => 74,  174 => 65,  161 => 63,  156 => 62,  145 => 52,  143 => 51,  139 => 49,  136 => 48,  131 => 45,  125 => 42,  122 => 41,  119 => 40,  117 => 39,  112 => 36,  109 => 35,  104 => 32,  101 => 31,  98 => 30,  92 => 27,  88 => 25,  85 => 24,  79 => 21,  75 => 19,  72 => 18,  69 => 17,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  49 => 11,  46 => 10,  44 => 10,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  27 => 3,);
    }
}
