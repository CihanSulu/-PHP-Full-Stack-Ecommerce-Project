<?php

/* so-mobile/template/extension/module/so_newletter_custom_popup/default.twig */
class __TwigTemplate_991a103673566b70f5b5fdc2e235306ab0c73e76c086d4f9eb65fd9c852f240b extends Twig_Template
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
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/extension/module/so_newletter_custom_popup/default_layout_default.twig"), "so-mobile/template/extension/module/so_newletter_custom_popup/default.twig", 2)->display($context);
        } elseif ((        // line 3
(isset($context["layout"]) ? $context["layout"] : null) == "layout_popup")) {
            // line 4
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig"), "so-mobile/template/extension/module/so_newletter_custom_popup/default.twig", 4)->display($context);
        } else {
            // line 6
            echo "\t ";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/extension/module/so_newletter_custom_popup/default_layout15.twig"), "so-mobile/template/extension/module/so_newletter_custom_popup/default.twig", 6)->display($context);
            echo "\t
";
        }
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_newletter_custom_popup/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if layout == "layout_default" %}*/
/* 	{% include theme_directory~'/template/extension/module/so_newletter_custom_popup/default_layout_default.twig'  %}*/
/* {% elseif layout == "layout_popup" %}*/
/* 	{% include theme_directory~'/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig' %}*/
/* {% else %}*/
/* 	 {% include theme_directory~'/template/extension/module/so_newletter_custom_popup/default_layout15.twig' %}	*/
/* {% endif %}*/
/* */
/* */
