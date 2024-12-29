<?php

/* default/template/extension/module/so_newletter_custom_popup/default.twig */
class __TwigTemplate_a5b6fe625aaaee7b2001aad95221e4c8ba41a26dd8b35592cdfa747f021ad5e0 extends Twig_Template
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
        if (((isset($context["layout"]) ? $context["layout"] : null) == "layout_default")) {
            // line 2
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/extension/module/so_newletter_custom_popup/default_layout_default.twig"), "default/template/extension/module/so_newletter_custom_popup/default.twig", 2)->display($context);
        } else {
            // line 4
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig"), "default/template/extension/module/so_newletter_custom_popup/default.twig", 4)->display($context);
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_newletter_custom_popup/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if layout == "layout_default" %}*/
/* 	{% include theme_directory~'/template/extension/module/so_newletter_custom_popup/default_layout_default.twig'  %}*/
/* {% else %}*/
/* 	{% include theme_directory~'/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig' %}*/
/* {% endif %}*/
/* */
/* */
