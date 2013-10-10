<?php

/* SystemProjectBundle:BudgetCreation:createBudget.html.twig */
class __TwigTemplate_18a8101e3da61b499364565095f456d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Create Budget";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayBlock('content_header', $context, $blocks);
        // line 18
        echo "
    <div class=\"block\">
        ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
    }

    // line 10
    public function block_content_header($context, array $blocks = array())
    {
        // line 11
        echo "
    <!-- Logo -->
    <div id=\"logo\">
        <h1 id=\"title\"> Create Budget</h1><br>
    </div> 
    <div style=\"clear: both\"></div>
    ";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("create_budget");
        echo "\" method=\"POST\" id=\"contact_form\">
            <div>
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "projectID"), 'label', array("label" => "Project Code"));
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "projectID"), 'errors');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "projectID"), 'widget');
        echo "
            </div><br>           
            <div>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "machineryCost"), 'label', array("label" => "Machinery Cost"));
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "machineryCost"), 'errors');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "machineryCost"), 'widget');
        echo "
            </div><br>       
            <div>
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "consumableCost"), 'label', array("label" => "Consumable Cost"));
        echo " 
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "consumableCost"), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "consumableCost"), 'widget');
        echo "
           </div><br>
           <div>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hrCost"), 'label', array("label" => "HR Cost"));
        echo " 
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hrCost"), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hrCost"), 'widget');
        echo "
           </div><br>
           <div>
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeEstimate"), 'label', array("label" => "Time Estimate(in months)"));
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeEstimate"), 'errors');
        echo "<br>
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timeEstimate"), 'widget');
        echo "
           </div><br>
           <div>
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variationPercentage"), 'label', array("label" => "Variation Percentage"));
        echo "
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variationPercentage"), 'errors');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variationPercentage"), 'widget');
        echo "
           </div><br>
           
           
           <button type=\"submit\" id=\"form_Submit\" class=\"sf-button\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Submit</span>
                    </span>
                </span>
           </button>
                                
           <button type=\"reset\" id=\"form_reset\" class=\"sf-button\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Reset</span>
                    </span>
                 </span>
           </button>
           
           
         </form></div><br>
         
         
        ";
    }

    public function getTemplateName()
    {
        return "SystemProjectBundle:BudgetCreation:createBudget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 50,  158 => 49,  154 => 48,  148 => 45,  144 => 44,  140 => 43,  134 => 40,  130 => 39,  126 => 38,  120 => 35,  116 => 34,  112 => 33,  106 => 30,  102 => 29,  98 => 28,  92 => 25,  88 => 24,  84 => 23,  78 => 21,  75 => 20,  65 => 11,  62 => 10,  58 => 20,  54 => 18,  51 => 10,  48 => 9,  42 => 7,  35 => 4,  32 => 3,);
    }
}
