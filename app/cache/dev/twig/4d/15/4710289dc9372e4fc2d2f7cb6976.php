<?php

/* SensioDistributionBundle:Configurator:steps.html.twig */
class __TwigTemplate_4d154710289dc9372e4fc2d2f7cb6976 extends Twig_Template
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
        echo "<div class=\"symfony-block-steps\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "
      ";
            // line 4
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1))) {
                // line 5
                echo "          <span class=\"selected\">Step ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 7
                echo "          <span>Step ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</span>
      ";
            }
            // line 9
            echo "
      ";
            // line 10
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) {
                // line 11
                echo "        &gt;
      ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  108 => 33,  98 => 29,  93 => 28,  90 => 27,  81 => 30,  59 => 17,  33 => 4,  70 => 19,  115 => 40,  112 => 39,  110 => 38,  107 => 37,  88 => 28,  82 => 25,  72 => 21,  49 => 12,  34 => 4,  113 => 40,  104 => 31,  100 => 36,  91 => 29,  87 => 26,  77 => 25,  73 => 23,  62 => 14,  60 => 20,  53 => 11,  47 => 10,  95 => 34,  89 => 35,  84 => 25,  75 => 22,  67 => 16,  54 => 15,  50 => 10,  102 => 30,  96 => 35,  92 => 31,  78 => 24,  68 => 20,  65 => 17,  56 => 12,  46 => 10,  20 => 1,  158 => 79,  139 => 63,  135 => 62,  131 => 61,  127 => 60,  123 => 59,  106 => 45,  101 => 33,  97 => 41,  85 => 26,  80 => 24,  76 => 28,  74 => 22,  63 => 21,  58 => 14,  45 => 9,  36 => 5,  40 => 11,  37 => 7,  57 => 19,  52 => 13,  38 => 6,  71 => 23,  64 => 19,  55 => 12,  48 => 11,  30 => 3,  39 => 10,  29 => 4,  26 => 3,  51 => 37,  44 => 8,  42 => 7,  35 => 5,  31 => 5,  43 => 9,  41 => 7,  28 => 3,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
