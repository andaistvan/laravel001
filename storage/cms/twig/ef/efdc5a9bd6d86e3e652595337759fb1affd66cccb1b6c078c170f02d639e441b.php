<?php

/* /Applications/MAMP/htdocs/laravel001/themes/ocms-laravel/partials/globals/stylesheet.htm */
class __TwigTemplate_279d756ba03b6a968a4a62ee016d1fb99e2cc3fe7984433716f2300d2ca2a68e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
<link href=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/stroke7/stroke7-icon-font.min.css");
        echo "\" rel=\"stylesheet\">

<!-- main stylesheet: reset & framework & theme -->
<link href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/compiled/css/style.css"));
        echo "\" rel=\"stylesheet\">

<!-- vendor stylesheets (INIT) -->
";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("_addons/vendor-css"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/laravel001/themes/ocms-laravel/partials/globals/stylesheet.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/stroke7/stroke7-icon-font.min.css'|theme }}\" rel=\"stylesheet\">

<!-- main stylesheet: reset & framework & theme -->
<link href=\"{{ ['assets/compiled/css/style.css']|theme }}\" rel=\"stylesheet\">

<!-- vendor stylesheets (INIT) -->
{% partial \"_addons/vendor-css\" %}", "/Applications/MAMP/htdocs/laravel001/themes/ocms-laravel/partials/globals/stylesheet.htm", "");
    }
}
