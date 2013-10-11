<?php

/* SystemResourceBundle:Pages:addNewConsumable.html.twig */
class __TwigTemplate_57a27c3dbd8c52d7304f73711d282320 extends Twig_Template
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
        echo "Add New Consumable";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayBlock('content_header', $context, $blocks);
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
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
        <h1 id=\"title\"> Add New Consumable</h1><br>
    </div>
    <div style=\"clear: both\"></div>
    ";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("add_new_consumable");
        echo "\" method=\"POST\" id=\"contact_form\">
            <div>
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', array("label" => "Name"));
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
            </div><br> 
            <div>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity"), 'label', array("label" => "Quantity"));
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity"), 'errors');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity"), 'widget');
        echo "
            </div><br> 
            <div>
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unitValue"), 'label', array("label" => "Unit Value"));
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unitValue"), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unitValue"), 'widget');
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
        return "SystemResourceBundle:Pages:addNewConsumable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 35,  118 => 34,  114 => 33,  108 => 30,  104 => 29,  100 => 28,  94 => 25,  90 => 24,  86 => 23,  80 => 21,  77 => 20,  67 => 11,  64 => 10,  60 => 20,  54 => 18,  51 => 10,  48 => 9,  42 => 7,  35 => 4,  32 => 3,);
    }
}
