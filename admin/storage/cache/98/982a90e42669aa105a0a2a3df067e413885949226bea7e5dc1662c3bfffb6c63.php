<?php

/* default/template/extension/module/so_quickview/default.twig */
class __TwigTemplate_5bb034cf8f28f7868fc1c9b1e925dc572540f9bc0b292ddcc20da694f759335e extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\tfunction _SoMagnificPopup(){
\t\t\$('.quickview_handler').magnificPopup({
\t\t\ttype:'iframe',
\t\t\ttLoading: '',
\t\t\tfixedContentPos: false,
\t\t\tfixedBgPos: true,
\t\t\toverflowY: 'scroll',
\t\t\tcloseBtnInside: true,
\t\t\tcloseOnContentClick: true,
\t\t\tpreloader: true,
\t\t\tmidClick: true,
\t\t\tremovalDelay: 300,
\t\t});
\t}
\tfunction _SoQuickView(){
\t\tvar \$item_class = \$('";
        // line 17
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "');
\t\tif (\$item_class.length > 0) {
\t\t\tfor (var i = 0; i < \$item_class.length; i++) {
\t\t\t\t\$(\$item_class[i]).addClass('quickview');
\t\t\t\tif(\$(\$item_class[i]).find('.quickview_handler').length <= 0){
\t\t\t\t\tvar producturlpath = \$(\$item_class[i]).find('a', \$(this)).attr('href');
\t\t\t\t\tif(typeof producturlpath !== 'undefined' && producturlpath.length > 0 ){
\t\t\t\t\t\t\$product_id = producturlpath.split(\"=\").pop();
\t\t\t\t\t\tvar _quickviewbutton = \"<a class='btn-quickview quickview_handler' href='";
        // line 25
        echo $this->getAttribute((isset($context["our_url"]) ? $context["our_url"] : null), "link", array(0 => "extension/module/so_quickview/detail", 1 => "product_id="), "method");
        echo "\"+\$product_id+\"' title=\\\"";
        echo (isset($context["label_text"]) ? $context["label_text"] : null);
        echo "\\\" data-title =\\\"";
        echo (isset($context["label_text"]) ? $context["label_text"] : null);
        echo "\\\" data-fancybox-type=\\\"iframe\\\" ><i class=\\\"quickview fa fa-search\\\"></i></a>\";
\t\t\t\t\t\t\$(\$item_class[i]).append(_quickviewbutton);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t_SoMagnificPopup();
\t}
\tjQuery(document).ready(function (\$) {
\t\tsetTimeout(function (){_SoQuickView()}, 500);
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_quickview/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 25,  37 => 17,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* 	function _SoMagnificPopup(){*/
/* 		$('.quickview_handler').magnificPopup({*/
/* 			type:'iframe',*/
/* 			tLoading: '',*/
/* 			fixedContentPos: false,*/
/* 			fixedBgPos: true,*/
/* 			overflowY: 'scroll',*/
/* 			closeBtnInside: true,*/
/* 			closeOnContentClick: true,*/
/* 			preloader: true,*/
/* 			midClick: true,*/
/* 			removalDelay: 300,*/
/* 		});*/
/* 	}*/
/* 	function _SoQuickView(){*/
/* 		var $item_class = $('{{ class_suffix }}');*/
/* 		if ($item_class.length > 0) {*/
/* 			for (var i = 0; i < $item_class.length; i++) {*/
/* 				$($item_class[i]).addClass('quickview');*/
/* 				if($($item_class[i]).find('.quickview_handler').length <= 0){*/
/* 					var producturlpath = $($item_class[i]).find('a', $(this)).attr('href');*/
/* 					if(typeof producturlpath !== 'undefined' && producturlpath.length > 0 ){*/
/* 						$product_id = producturlpath.split("=").pop();*/
/* 						var _quickviewbutton = "<a class='btn-quickview quickview_handler' href='{{ our_url.link('extension/module/so_quickview/detail','product_id=') }}"+$product_id+"' title=\"{{ label_text }}\" data-title =\"{{ label_text }}\" data-fancybox-type=\"iframe\" ><i class=\"quickview fa fa-search\"></i></a>";*/
/* 						$($item_class[i]).append(_quickviewbutton);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 		_SoMagnificPopup();*/
/* 	}*/
/* 	jQuery(document).ready(function ($) {*/
/* 		setTimeout(function (){_SoQuickView()}, 500);*/
/* 	});*/
/* </script>*/
