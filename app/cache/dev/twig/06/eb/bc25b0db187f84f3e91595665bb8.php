<?php

/* @WebProfiler/Profiler/bag.html.twig */
class __TwigTemplate_06ebbc25b0db187f84f3e91595665bb8 extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "keys")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                ";
            // line 13
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method"), (64 | 256)), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  46 => 13,  42 => 11,  39 => 10,  35 => 9,  19 => 1,);
    }
}
