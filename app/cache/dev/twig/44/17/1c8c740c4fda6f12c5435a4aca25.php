<?php

/* SystemProjectBundle:ProjectCreation:createProject.html.twig */
class __TwigTemplate_44171c8c740c4fda6f12c5435a4aca25 extends Twig_Template
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
        echo "Create Project";
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
        <h1 id=\"title\"> Create Project</h1><br>
    </div>
    <div style=\"clear: both\"></div>
    ";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("create_project");
        echo "\" method=\"POST\" id=\"contact_form\">
            ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
            <div>
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "projectID"), 'label', array("label" => "Project Code"));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "projectID"), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "projectID"), 'widget');
        echo "
            </div><br> 
            <div>
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), 'label', array("label" => "Client"));
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), 'errors');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), 'widget');
        echo "
            </div><br> 
            <div>
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "manager"), 'label', array("label" => "Manager"));
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "manager"), 'errors');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "manager"), 'widget');
        echo "
            </div><br>       
            <div>
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "budget"), 'label', array("label" => "Budget"));
        echo " 
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "budget"), 'errors');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "budget"), 'widget');
        echo "
           </div><br>
           <div>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfConsumable"), 'label', array("label" => "List Of Consumable"));
        echo " 
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfConsumable"), 'errors');
        echo "<br>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfConsumable"), 'widget');
        echo "
           </div><br>
           <div>
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfMachinery"), 'label', array("label" => "List Of Machinery"));
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfMachinery"), 'errors');
        echo "<br>
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfMachinery"), 'widget');
        echo "
           </div><br>
           <div>
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfHR"), 'label', array("label" => "List Of HR"));
        echo "
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfHR"), 'errors');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfHR"), 'widget');
        echo "
           </div><br>
           <div>
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfExpences"), 'label', array("label" => "List Of Expences"));
        echo "
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfExpences"), 'errors');
        echo "
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "listOfExpences"), 'widget');
        echo "
           </div><br>
           <div>
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfCompletion"), 'label', array("label" => "Date Of Completion"));
        echo "
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfCompletion"), 'errors');
        echo "<br>
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfCompletion"), 'widget');
        echo "
           </div><br>
           <div>
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'label', array("label" => "Status"));
        echo "
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'errors');
        echo "
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status"), 'widget');
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
        return "SystemProjectBundle:ProjectCreation:createProject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 71,  218 => 70,  214 => 69,  208 => 66,  204 => 65,  200 => 64,  194 => 61,  190 => 60,  186 => 59,  180 => 56,  176 => 55,  172 => 54,  166 => 51,  162 => 50,  158 => 49,  152 => 46,  148 => 45,  144 => 44,  138 => 41,  134 => 40,  130 => 39,  124 => 36,  120 => 35,  116 => 34,  110 => 31,  106 => 30,  102 => 29,  96 => 26,  92 => 25,  88 => 24,  83 => 22,  78 => 21,  75 => 20,  65 => 11,  62 => 10,  58 => 20,  54 => 18,  51 => 10,  48 => 9,  42 => 7,  35 => 4,  32 => 3,);
    }
}
