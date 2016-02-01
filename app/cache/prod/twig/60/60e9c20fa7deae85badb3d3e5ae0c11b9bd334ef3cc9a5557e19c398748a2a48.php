<?php

/* :Default:index.html.twig */
class __TwigTemplate_25760eb595abbd9f2a6e0fed2c9bdde031fa8df3bc241518803f8618dd309270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'canonical' => array($this, 'block_canonical'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Anonymous Gift";
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        echo "TP Symfony Anonymous Gift";
    }

    // line 9
    public function block_canonical($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"container\">
    <h1>Anonymous Gift</h1>

  <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("perso");
        echo "\">
    <button type=\"button\" class=\"btn btn-primary\">Log in</button>
  </a>

  <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">
    <button type=\"button\" class=\"btn btn-success\">Sign In</button>
  </a>
  </div>

";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return ":Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  84 => 26,  74 => 19,  67 => 15,  62 => 12,  59 => 11,  54 => 9,  48 => 8,  42 => 7,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block title %}Anonymous Gift{% endblock title %}*/
/* {% block description %}TP Symfony Anonymous Gift{% endblock description %}*/
/* {% block canonical %}{% endblock canonical %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <h1>Anonymous Gift</h1>*/
/* */
/*   <a href="{{ path('perso') }}">*/
/*     <button type="button" class="btn btn-primary">Log in</button>*/
/*   </a>*/
/* */
/*   <a href="{{ path('fos_user_registration_register') }}">*/
/*     <button type="button" class="btn btn-success">Sign In</button>*/
/*   </a>*/
/*   </div>*/
/* */
/* {% endblock body %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
