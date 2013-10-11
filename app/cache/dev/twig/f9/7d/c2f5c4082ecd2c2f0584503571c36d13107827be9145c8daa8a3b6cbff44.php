<?php

/* SystemResourceBundle:Pages:addNewMachinery.html.twig */
class __TwigTemplate_f97dc2f5c4082ecd2c2f0584503571c36d13107827be9145c8daa8a3b6cbff44 extends Twig_Template
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
        echo "Add New Machinery";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayBlock('content_header', $context, $blocks);
        // line 18
        echo "    <div class=\"block\">
        ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
    }

    // line 10
    public function block_content_header($context, array $blocks = array())
    {
        // line 11
        echo "    <!-- Logo -->
    <div id=\"logo\">
        <h1 id=\"title\">Add New Machinery</h1><br>
         
    </div>
    <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "   
        <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("add_new_machinery");
        echo "\" method=\"POST\" id=\"contact_form\">
            
                     ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
            
            <div>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code"), 'label', array("label" => "Machine Code"));
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code"), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code"), 'widget');
        echo "
            </div><br> 
            <div>
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label" => "Machine Type"));
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
            </div><br> 
            <div>
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "netPresentValue"), 'label', array("label" => "Net Present Value"));
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "netPresentValue"), 'errors');
        echo "<br>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "netPresentValue"), 'widget');
        echo "
            </div><br>       
            <div>
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "opCostHour"), 'label', array("label" => "Operation Cost per Hour"));
        echo " 
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "opCostHour"), 'errors');
        echo "<br>
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "opCostHour"), 'widget');
        echo "
           </div><br>
           <div>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depRate"), 'label', array("label" => "Depletion Rate"));
        echo " 
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depRate"), 'errors');
        echo "<br>
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depRate"), 'widget');
        echo "
           </div><br>
           
           <button type=\"submit\" name=\"form_Submit\" class=\"sf-button\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Submit</span>
                    </span>
                </span>
           </button>
                                
           <button type=\"reset\" name=\"form_reset\" class=\"sf-button\">
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
        return "SystemResourceBundle:Pages:addNewMachinery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 48,  151 => 47,  147 => 46,  141 => 43,  137 => 42,  133 => 41,  127 => 38,  123 => 37,  119 => 36,  113 => 33,  109 => 32,  105 => 31,  99 => 28,  95 => 27,  91 => 26,  85 => 23,  80 => 21,  77 => 20,  74 => 19,  64 => 11,  61 => 10,  57 => 19,  54 => 18,  51 => 10,  48 => 9,  42 => 7,  35 => 4,  32 => 3,);
    }
}
