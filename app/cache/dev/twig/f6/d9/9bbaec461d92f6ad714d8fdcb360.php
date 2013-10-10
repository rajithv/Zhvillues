<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_f6d99bbaec461d92f6ad714d8fdcb360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  112 => 39,  110 => 38,  107 => 37,  88 => 30,  82 => 26,  72 => 21,  49 => 12,  34 => 4,  113 => 40,  104 => 37,  100 => 36,  91 => 34,  87 => 33,  77 => 25,  73 => 23,  62 => 16,  60 => 20,  53 => 11,  47 => 9,  95 => 34,  89 => 30,  84 => 27,  75 => 24,  67 => 18,  54 => 19,  50 => 10,  102 => 33,  96 => 35,  92 => 31,  78 => 24,  68 => 12,  65 => 17,  56 => 16,  46 => 13,  20 => 1,  158 => 79,  139 => 63,  135 => 62,  131 => 61,  127 => 60,  123 => 59,  106 => 45,  101 => 33,  97 => 41,  85 => 23,  80 => 30,  76 => 28,  74 => 22,  63 => 21,  58 => 13,  45 => 11,  36 => 9,  40 => 11,  37 => 7,  57 => 19,  52 => 10,  38 => 7,  71 => 23,  64 => 11,  55 => 12,  48 => 9,  30 => 7,  39 => 10,  29 => 3,  26 => 9,  51 => 37,  44 => 11,  42 => 8,  35 => 5,  31 => 3,  43 => 7,  41 => 7,  28 => 3,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
