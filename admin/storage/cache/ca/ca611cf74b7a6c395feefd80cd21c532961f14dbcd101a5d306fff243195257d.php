<?php

/* extension/soconfig/soconfig.twig */
class __TwigTemplate_fc529fad68ebe7bad16637872a8bab316f1d53775dcfe8ae03e197edcde7f7d4 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo " 
<div id=\"content\">
\t
    <div id=\"frontend-themes\">
        <div class=\"so-ultimate-sidebar\">
\t\t\t
\t\t\t";
        // line 7
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array())) {
            // line 8
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo " 
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t</div>
\t\t\t";
        }
        // line 11
        echo " 
\t\t\t
\t\t\t";
        // line 13
        if (((isset($context["success"]) ? $context["success"] : null) && (isset($context["success"]) ? $context["success"] : null))) {
            echo " 
\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 14
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " 
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t</div>
\t\t\t";
        }
        // line 17
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-logo\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t";
            // line 22
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["active_store"]) ? $context["active_store"] : null))) {
                // line 23
                echo "\t\t\t\t\t\t\t<a class=\"btn  dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo " <span class=\"fa fa-angle-down\"></span></a>
\t\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu store_dropdown\">
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t\t";
            // line 29
            if ($this->getAttribute($context["store"], "status", array())) {
                // line 30
                echo "\t\t\t\t\t\t\t";
                $context["store_active"] = ((($this->getAttribute($context["store"], "store_id", array()) == (isset($context["active_store"]) ? $context["active_store"] : null))) ? ("active") : (""));
                // line 31
                echo "\t\t\t\t\t\t\t<li class=\"";
                echo (isset($context["store_active"]) ? $context["store_active"] : null);
                echo "\" ><a href=\"";
                echo (isset($context["base_href"]) ? $context["base_href"] : null);
                echo "&store_id=";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" >";
                echo $this->getAttribute($context["store"], "name", array());
                echo " </a></li>
\t\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group-info clearfix\">
\t\t\t\t\t<span class=\"label label-primary pull-left\">";
        // line 38
        echo (isset($context["theme_version"]) ? $context["theme_version"] : null);
        echo "</span>
\t\t\t\t\t";
        // line 39
        if ((isset($context["status_product_option"]) ? $context["status_product_option"] : null)) {
            // line 40
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo (isset($context["href_product"]) ? $context["href_product"] : null);
            echo "\" class=\"btn btn-link  pull-right\" target=\"_blank\" ><i class=\"fa fa-file-text\"></i> ";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "lang_product_feature"), "method");
            echo "</a>
\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t<a href=\"";
            echo (isset($context["add_db_product"]) ? $context["add_db_product"] : null);
            echo "\" class=\"btn btn-link pull-right\" target=\"_blank\" ><i class=\"fa fa-wrench\"></i> ";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "lang_create_feature"), "method");
            echo "</a>
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<a href=\"";
        // line 46
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo " \" class=\"btn btn-link action-ultimate-exit\"><i class=\"fa fa-close fa-2x\"></i></a>
\t\t\t</div>
          
\t\t\t<div class=\"so-ultimate-wrap\">
\t\t\t\t<div id=\"so-ultimate-options\">
\t\t\t\t<form name=\"settingsform\" action=\"";
        // line 51
        echo (isset($context["action"]) ? $context["action"] : null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" id=\"form-optimus\" class=\"form-vertical\">
\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t";
            // line 53
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["active_store"]) ? $context["active_store"] : null))) {
                // line 54
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("extension/soconfig/options_stores.twig", "extension/soconfig/soconfig.twig", 54)->display(array_merge($context, array("store" => $context["store"], "user_token" => (isset($context["user_token"]) ? $context["user_token"] : null))));
                // line 55
                echo "\t\t\t\t\t\t\t<input name=\"storeUrl\" type=\"hidden\"  value=\"";
                echo $this->getAttribute($context["store"], "url", array());
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t<input name=\"buttonForm\" type=\"hidden\"  value=\"\" />
\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"so-ultimate-footer clearfix\">
\t\t\t\t<div class=\"copyright-info pull-left\">
\t\t\t\t\tSO Framework 3.1  by <br> <a href=\"http://www.opencartworks.com\" target=\"_blank\">Opencartworks</a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t";
        // line 69
        if ( !(isset($context["validate"]) ? $context["validate"] : null)) {
            echo " 
\t\t\t\t\t\t<a  href=\"";
            // line 70
            echo (isset($context["href_preview"]) ? $context["href_preview"] : null);
            echo "\" target=\"_blank\" class=\"btn btn-success \" ><i class=\"fa fa-external-link\"></i> Preview </a>
\t\t\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t\t\t<a  class=\"btn btn-success action-save-template \" ><i class=\"fa fa-save\"></i> Save </a>
\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

        </div>

    </div>

</div>

";
        // line 85
        $this->loadTemplate("extension/soconfig/class/icon-defs.twig", "extension/soconfig/soconfig.twig", 85)->display($context);
        // line 86
        echo "<script type=\"text/javascript\"><!--
function buttonApplyColor() {document.settingsform.buttonForm.value='color'; \$('#form-optimus').submit(); }
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/soconfig/soconfig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 86,  241 => 85,  228 => 74,  224 => 72,  219 => 70,  215 => 69,  188 => 57,  182 => 55,  179 => 54,  177 => 53,  158 => 52,  154 => 51,  144 => 46,  140 => 44,  132 => 42,  124 => 40,  122 => 39,  118 => 38,  106 => 33,  94 => 31,  91 => 30,  89 => 29,  83 => 28,  73 => 25,  67 => 23,  65 => 22,  59 => 21,  53 => 17,  46 => 14,  42 => 13,  38 => 11,  30 => 8,  28 => 7,  19 => 1,);
    }
}
/* {{ header }} */
/* <div id="content">*/
/* 	*/
/*     <div id="frontend-themes">*/
/*         <div class="so-ultimate-sidebar">*/
/* 			*/
/* 			{% if error.warning %}*/
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error.warning }} */
/* 				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 			</div>*/
/* 			{% endif %} */
/* 			*/
/* 			{% if success  and  success %} */
/* 			<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }} */
/* 				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 			</div>*/
/* 			{% endif %} */
/* 			*/
/* 			<div class="so-ultimate-logo">*/
/* 				<div class="btn-group">*/
/* 					{% for store  in stores %}  */
/* 						{% if store.store_id == active_store %}*/
/* 							<a class="btn  dropdown-toggle" data-toggle="dropdown" href="#">{{ store.name }} <span class="fa fa-angle-down"></span></a>*/
/* 						{% endif %}*/
/* 					{% endfor %} */
/* 					*/
/* 					<ul class="dropdown-menu store_dropdown">*/
/* 						{% for store  in stores %}  */
/* 							{% if store.status  %}*/
/* 							{% set store_active = store.store_id == active_store  ? 'active' :  '' %}*/
/* 							<li class="{{ store_active }}" ><a href="{{base_href}}&store_id={{ store.store_id }}" >{{ store.name }} </a></li>*/
/* 							{% endif %}*/
/* 						{% endfor %} */
/* 					</ul>*/
/* 				</div>*/
/* 				*/
/* 				<div class="form-group-info clearfix">*/
/* 					<span class="label label-primary pull-left">{{theme_version}}</span>*/
/* 					{% if status_product_option %}*/
/* 							<a href="{{href_product}}" class="btn btn-link  pull-right" target="_blank" ><i class="fa fa-file-text"></i> {{objlang.get('lang_product_feature')}}</a>*/
/* 					{% else %}*/
/* 						<a href="{{add_db_product}}" class="btn btn-link pull-right" target="_blank" ><i class="fa fa-wrench"></i> {{objlang.get('lang_create_feature')}}</a>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				*/
/* 				<a href="{{ cancel }}" title="{{ button_cancel }} " class="btn btn-link action-ultimate-exit"><i class="fa fa-close fa-2x"></i></a>*/
/* 			</div>*/
/*           */
/* 			<div class="so-ultimate-wrap">*/
/* 				<div id="so-ultimate-options">*/
/* 				<form name="settingsform" action="{{ action }} " method="post" enctype="multipart/form-data" id="form-optimus" class="form-vertical">*/
/* 					{% for store in stores %}  */
/* 						{% if store.store_id == active_store %}*/
/* 							{% include 'extension/soconfig/options_stores.twig' with {'store': store, 'user_token': user_token} %}*/
/* 							<input name="storeUrl" type="hidden"  value="{{store.url}}" />*/
/* 						{% endif %}*/
/* 					{% endfor %} */
/* 					<input name="buttonForm" type="hidden"  value="" />*/
/* 				</form>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="so-ultimate-footer clearfix">*/
/* 				<div class="copyright-info pull-left">*/
/* 					SO Framework 3.1  by <br> <a href="http://www.opencartworks.com" target="_blank">Opencartworks</a>*/
/* 				</div>*/
/* 				*/
/* 				<div class="pull-right">*/
/* 					{% if not validate %} */
/* 						<a  href="{{href_preview}}" target="_blank" class="btn btn-success " ><i class="fa fa-external-link"></i> Preview </a>*/
/* 					{% else %}*/
/* 						<a  class="btn btn-success action-save-template " ><i class="fa fa-save"></i> Save </a>*/
/* 					{% endif %}*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% include 'extension/soconfig/class/icon-defs.twig' %}*/
/* <script type="text/javascript"><!--*/
/* function buttonApplyColor() {document.settingsform.buttonForm.value='color'; $('#form-optimus').submit(); }*/
/* //--></script>*/
/* */
