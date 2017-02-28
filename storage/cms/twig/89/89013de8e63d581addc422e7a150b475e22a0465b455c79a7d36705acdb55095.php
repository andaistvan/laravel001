<?php

/* /Applications/MAMP/htdocs/laravel001/themes/ocms-laravel/pages/home.htm */
class __TwigTemplate_fa672125718a0b3884319ac97edf2df0ddd93cff428390f1b5bd7ba92ea546a9 extends Twig_Template
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
        echo "<h3>home</h3>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/laravel001/themes/ocms-laravel/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>home</h3>", "/Applications/MAMP/htdocs/laravel001/themes/ocms-laravel/pages/home.htm", "");
    }
}
