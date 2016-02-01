<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_08096007221e853a7688578c0f966c022b256c89e521ab024fcf9263482d5e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b916115ec1f607e349753b5bf64a5a85165a56e0189bd9ea0779aba093b0d215 = $this->env->getExtension("native_profiler");
        $__internal_b916115ec1f607e349753b5bf64a5a85165a56e0189bd9ea0779aba093b0d215->enter($__internal_b916115ec1f607e349753b5bf64a5a85165a56e0189bd9ea0779aba093b0d215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b916115ec1f607e349753b5bf64a5a85165a56e0189bd9ea0779aba093b0d215->leave($__internal_b916115ec1f607e349753b5bf64a5a85165a56e0189bd9ea0779aba093b0d215_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1caf674d3b2a20309b947148f47bba6684de77c246a3288213524b155bdb4daa = $this->env->getExtension("native_profiler");
        $__internal_1caf674d3b2a20309b947148f47bba6684de77c246a3288213524b155bdb4daa->enter($__internal_1caf674d3b2a20309b947148f47bba6684de77c246a3288213524b155bdb4daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1caf674d3b2a20309b947148f47bba6684de77c246a3288213524b155bdb4daa->leave($__internal_1caf674d3b2a20309b947148f47bba6684de77c246a3288213524b155bdb4daa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbb4bf4f23e6c1ed394aa2cc6a47e30fd9ccb5c89a381daf69d9dd46b39833b1 = $this->env->getExtension("native_profiler");
        $__internal_dbb4bf4f23e6c1ed394aa2cc6a47e30fd9ccb5c89a381daf69d9dd46b39833b1->enter($__internal_dbb4bf4f23e6c1ed394aa2cc6a47e30fd9ccb5c89a381daf69d9dd46b39833b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dbb4bf4f23e6c1ed394aa2cc6a47e30fd9ccb5c89a381daf69d9dd46b39833b1->leave($__internal_dbb4bf4f23e6c1ed394aa2cc6a47e30fd9ccb5c89a381daf69d9dd46b39833b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2cf37a5fc7858fd71f0966047fa03324738c415463ba1aa9523c0f2b7925b727 = $this->env->getExtension("native_profiler");
        $__internal_2cf37a5fc7858fd71f0966047fa03324738c415463ba1aa9523c0f2b7925b727->enter($__internal_2cf37a5fc7858fd71f0966047fa03324738c415463ba1aa9523c0f2b7925b727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2cf37a5fc7858fd71f0966047fa03324738c415463ba1aa9523c0f2b7925b727->leave($__internal_2cf37a5fc7858fd71f0966047fa03324738c415463ba1aa9523c0f2b7925b727_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
