<?php

/* /Applications/MAMP/htdocs/laravel001/themes/ocms-laravel/partials/globals/scripts.htm */
class __TwigTemplate_9fe368fa088704a92600138c4e9b39d91027d97fb2f11fde043440df44a2d4e8 extends Twig_Template
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
        echo "<!-- JQUERY -->
<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>


<!-- VENDOR FRAMEWORK.JS  -->
<!-- THEME.JS : scripts INIT  -->
<script src=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/compiled/js/all.js"));
        echo "\"></script>




<!-- OCTOBER FRAMEWORK : AJAX etc.  -->
";
        // line 13
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 14
        echo "

<!-- ADDONS : wow, sticky.js etc.  -->
";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("_addons/vendor-scripts-init"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "

<!-- NOTES -->
<!-- 'assets/js/materialize.min.js' -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/laravel001/themes/ocms-laravel/partials/globals/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  48 => 17,  43 => 14,  36 => 13,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- JQUERY -->
<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>


<!-- VENDOR FRAMEWORK.JS  -->
<!-- THEME.JS : scripts INIT  -->
<script src=\"{{ ['assets/compiled/js/all.js']|theme }}\"></script>




<!-- OCTOBER FRAMEWORK : AJAX etc.  -->
{% framework extras %}


<!-- ADDONS : wow, sticky.js etc.  -->
{% partial \"_addons/vendor-scripts-init\" %}


<!-- NOTES -->
<!-- 'assets/js/materialize.min.js' -->", "/Applications/MAMP/htdocs/laravel001/themes/ocms-laravel/partials/globals/scripts.htm", "");
    }
}
