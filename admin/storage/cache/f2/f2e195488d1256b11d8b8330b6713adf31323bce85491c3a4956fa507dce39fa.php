<?php

/* so-mobile/template/common/column_left.twig */
class __TwigTemplate_4bce47a57c4dffa1823c5d32b91fda3f8924089f016f00d0905646b27a3c981a extends Twig_Template
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
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "<aside class=\"col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas\">
\t<span id=\"close-sidebar\" class=\"fa fa-times\"></span>
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 5
                echo "  ";
                echo $context["module"];
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "so-mobile/template/common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/* <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas">*/
/* 	<span id="close-sidebar" class="fa fa-times"></span>*/
/*   {% for module in modules %}*/
/*   {{ module }}*/
/*   {% endfor %}*/
/* </aside>*/
/* {% endif %}*/
/* */
