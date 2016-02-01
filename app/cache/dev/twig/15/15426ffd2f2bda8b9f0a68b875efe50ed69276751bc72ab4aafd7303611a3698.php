<?php

/* ::base.html.twig */
class __TwigTemplate_0b6bfabb4c1e8125ffe02af24f0393b7efa109e1ae15530be8c0f8e573b3534b extends Twig_Template
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
        $__internal_47424fe6498a4a198f098d36d602ec64bf55955721fb400f589781d4686bdf26 = $this->env->getExtension("native_profiler");
        $__internal_47424fe6498a4a198f098d36d602ec64bf55955721fb400f589781d4686bdf26->enter($__internal_47424fe6498a4a198f098d36d602ec64bf55955721fb400f589781d4686bdf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_47424fe6498a4a198f098d36d602ec64bf55955721fb400f589781d4686bdf26->leave($__internal_47424fe6498a4a198f098d36d602ec64bf55955721fb400f589781d4686bdf26_prof);

    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
        $__internal_284ed736b16fd6392d303d1fd1a5cf41aa221e35a34a256a4895240164b6bb35 = $this->env->getExtension("native_profiler");
        $__internal_284ed736b16fd6392d303d1fd1a5cf41aa221e35a34a256a4895240164b6bb35->enter($__internal_284ed736b16fd6392d303d1fd1a5cf41aa221e35a34a256a4895240164b6bb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        
        $__internal_284ed736b16fd6392d303d1fd1a5cf41aa221e35a34a256a4895240164b6bb35->leave($__internal_284ed736b16fd6392d303d1fd1a5cf41aa221e35a34a256a4895240164b6bb35_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_472e2696830aabd83cccfdf705cb948a9ffac0336d3d264c9d0723bdaf4178df = $this->env->getExtension("native_profiler");
        $__internal_472e2696830aabd83cccfdf705cb948a9ffac0336d3d264c9d0723bdaf4178df->enter($__internal_472e2696830aabd83cccfdf705cb948a9ffac0336d3d264c9d0723bdaf4178df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_472e2696830aabd83cccfdf705cb948a9ffac0336d3d264c9d0723bdaf4178df->leave($__internal_472e2696830aabd83cccfdf705cb948a9ffac0336d3d264c9d0723bdaf4178df_prof);

    }

    // line 11
    public function block_description($context, array $blocks = array())
    {
        $__internal_9a3a1b10e39b7068c940e603906fb46444fba024663a3620688364c272119cc8 = $this->env->getExtension("native_profiler");
        $__internal_9a3a1b10e39b7068c940e603906fb46444fba024663a3620688364c272119cc8->enter($__internal_9a3a1b10e39b7068c940e603906fb46444fba024663a3620688364c272119cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_9a3a1b10e39b7068c940e603906fb46444fba024663a3620688364c272119cc8->leave($__internal_9a3a1b10e39b7068c940e603906fb46444fba024663a3620688364c272119cc8_prof);

    }

    // line 12
    public function block_canonical($context, array $blocks = array())
    {
        $__internal_6b0857c98de04f8e5bdd0bfdd29afd354f2d23b0b1ca6772c58d58d75f12a09d = $this->env->getExtension("native_profiler");
        $__internal_6b0857c98de04f8e5bdd0bfdd29afd354f2d23b0b1ca6772c58d58d75f12a09d->enter($__internal_6b0857c98de04f8e5bdd0bfdd29afd354f2d23b0b1ca6772c58d58d75f12a09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical"));

        
        $__internal_6b0857c98de04f8e5bdd0bfdd29afd354f2d23b0b1ca6772c58d58d75f12a09d->leave($__internal_6b0857c98de04f8e5bdd0bfdd29afd354f2d23b0b1ca6772c58d58d75f12a09d_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31ff8eb7fad701c9eb6b8f68ced3a22d96b01313353d1c5f3865b010cf150417 = $this->env->getExtension("native_profiler");
        $__internal_31ff8eb7fad701c9eb6b8f68ced3a22d96b01313353d1c5f3865b010cf150417->enter($__internal_31ff8eb7fad701c9eb6b8f68ced3a22d96b01313353d1c5f3865b010cf150417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" integrity=\"sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==\" crossorigin=\"anonymous\">
<link href='https://fonts.googleapis.com/css?family=Lato:400,700|Ubuntu:500' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
";
        
        $__internal_31ff8eb7fad701c9eb6b8f68ced3a22d96b01313353d1c5f3865b010cf150417->leave($__internal_31ff8eb7fad701c9eb6b8f68ced3a22d96b01313353d1c5f3865b010cf150417_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_3450f741a744d8d0f1c9ddd9d47059c3c6ed5ff5419955419c7999d29b956149 = $this->env->getExtension("native_profiler");
        $__internal_3450f741a744d8d0f1c9ddd9d47059c3c6ed5ff5419955419c7999d29b956149->enter($__internal_3450f741a744d8d0f1c9ddd9d47059c3c6ed5ff5419955419c7999d29b956149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "  ";
        
        $__internal_3450f741a744d8d0f1c9ddd9d47059c3c6ed5ff5419955419c7999d29b956149->leave($__internal_3450f741a744d8d0f1c9ddd9d47059c3c6ed5ff5419955419c7999d29b956149_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_122ea9de2cf8371036e1bcdd856265f61a61b20f02955bf941d0a6b39afbb0ff = $this->env->getExtension("native_profiler");
        $__internal_122ea9de2cf8371036e1bcdd856265f61a61b20f02955bf941d0a6b39afbb0ff->enter($__internal_122ea9de2cf8371036e1bcdd856265f61a61b20f02955bf941d0a6b39afbb0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\" integrity=\"sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==\" crossorigin=\"anonymous\"></script>
  ";
        
        $__internal_122ea9de2cf8371036e1bcdd856265f61a61b20f02955bf941d0a6b39afbb0ff->leave($__internal_122ea9de2cf8371036e1bcdd856265f61a61b20f02955bf941d0a6b39afbb0ff_prof);

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
        return array (  165 => 28,  159 => 27,  152 => 25,  146 => 24,  136 => 15,  130 => 14,  119 => 12,  108 => 11,  97 => 10,  86 => 8,  75 => 31,  73 => 27,  70 => 26,  68 => 24,  61 => 20,  58 => 19,  56 => 14,  51 => 12,  47 => 11,  43 => 10,  40 => 9,  38 => 8,  29 => 1,);
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
