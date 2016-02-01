<?php

/* ::base.html.twig */
class __TwigTemplate_c61617b5dbcac6349ea46e0d99d4cb9c62cae8887205ed71e5786c905b0efc2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'canonical' => array($this, 'block_canonical'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" xmlns:og=\"http://ogp.me/ns#\">

<meta charset=\"UTF-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "
<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 11
        $this->displayBlock('description', $context, $blocks);
        echo "\"/>
<link rel=\"canonical\" href=\"";
        // line 12
        $this->displayBlock('canonical', $context, $blocks);
        echo "\">

";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />

<body>

  ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "
  ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "
</body>

</html>
";
    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_description($context, array $blocks = array())
    {
    }

    // line 12
    public function block_canonical($context, array $blocks = array())
    {
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" integrity=\"sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==\" crossorigin=\"anonymous\">
<link href='https://fonts.googleapis.com/css?family=Lato:400,700|Ubuntu:500' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "  ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "    <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\" integrity=\"sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==\" crossorigin=\"anonymous\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 28,  117 => 27,  113 => 25,  110 => 24,  103 => 15,  100 => 14,  95 => 12,  90 => 11,  85 => 10,  80 => 8,  72 => 31,  70 => 27,  67 => 26,  65 => 24,  58 => 20,  55 => 19,  53 => 14,  48 => 12,  44 => 11,  40 => 10,  37 => 9,  35 => 8,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr" xmlns:og="http://ogp.me/ns#">*/
/* */
/* <meta charset="UTF-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/* {% block meta %}{% endblock %}*/
/* */
/* <title>{% block title %}{% endblock title %}</title>*/
/* <meta name="description" content="{% block description %}{% endblock description %}"/>*/
/* <link rel="canonical" href="{% block canonical %}{% endblock canonical %}">*/
/* */
/* {% block stylesheets %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">*/
/* <link href='https://fonts.googleapis.com/css?family=Lato:400,700|Ubuntu:500' rel='stylesheet' type='text/css'>*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* {% endblock %}*/
/* */
/* <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />*/
/* */
/* <body>*/
/* */
/*   {% block body %}*/
/*   {% endblock %}*/
/* */
/*   {% block javascripts %}*/
/*     <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
