<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_ec90351615e1ee53205791d4029e02f504a9a5f335be05518187c38db4f88025 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/structure.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/body.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("logo.gif"), "html", null, true);
        echo "\">
                </div>

                <div class=\"search\">
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("z.gif"), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"sf-reset\">
                ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "            </div>
        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  83 => 9,  78 => 6,  70 => 25,  68 => 24,  53 => 15,  46 => 10,  44 => 9,  40 => 8,  36 => 7,  27 => 4,  22 => 1,  169 => 53,  165 => 52,  161 => 51,  154 => 47,  150 => 46,  146 => 45,  140 => 42,  136 => 41,  132 => 40,  126 => 37,  122 => 36,  118 => 35,  112 => 32,  108 => 31,  104 => 30,  98 => 27,  94 => 26,  90 => 25,  85 => 23,  80 => 22,  77 => 21,  67 => 12,  64 => 11,  60 => 19,  56 => 19,  54 => 11,  51 => 10,  48 => 9,  42 => 7,  35 => 4,  32 => 6,);
    }
}
