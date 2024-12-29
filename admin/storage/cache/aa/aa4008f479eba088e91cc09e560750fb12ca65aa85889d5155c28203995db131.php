<?php

/* so-mobile/template/extension/module/so_quickview/default.twig */
class __TwigTemplate_4be95bade1b99c35db62e8c03f917b3dfbacaa2174d21ec0d2b01ded9c0500d5 extends Twig_Template
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
\t\t\$('.products-list').magnificPopup({
\t        delegate: '.quickview_handler',
\t        preloader: true,
\t        tLoading: '',
\t        type: 'iframe',
\t        mainClass: 'my-mfp-zoom-in',
\t        removalDelay: 200,
\t        gallery: {enabled: true},
\t        callbacks: {
\t        open: function() {
\t          // Will fire when this exact popup is opened
\t          // this - is Magnific Popup object
\t        },
\t        beforeOpen: function() {
\t            \$('[data-toggle=\\'tooltip\\']').hover(
\t                function() {
\t                },
\t                function(e) {
\t                  \$('[data-toggle=\\'tooltip\\']').tooltip('hide');
\t                }
\t            );
\t        },
\t        afterClose: function() {
\t            \$('[data-toggle=\\'tooltip\\']').tooltip('hide');
\t        },
\t        
\t      }
    \t});

\t}
\tfunction _SoQuickView(){
\t\tvar \$item_class = \$('";
        // line 34
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo "');
\t\tif (\$item_class.length > 0) {
\t\t\tfor (var i = 0; i < \$item_class.length; i++) {
\t\t\t\t//\$(\$item_class[i]).addClass('quickview');
\t\t\t\tif(\$(\$item_class[i]).find('.quickview_handler').length <= 0){
\t\t\t\t\tvar producturlpath = \$(\$item_class[i]).find('a', \$(this)).attr('href');
\t\t\t\t\tif(typeof producturlpath !== 'undefined' && producturlpath.length > 0 ){
\t\t\t\t\t\tvar \$product_id = \$(\$item_class[i]).find('a', \$(this)).attr('data-product');
\t\t\t\t\t\tvar _quickviewbutton = \"<a class='visible-lg btn-button quickview quickview_handler' href='";
        // line 42
        echo $this->getAttribute((isset($context["our_url"]) ? $context["our_url"] : null), "link", array(0 => "extension/soconfig/quickview", 1 => "product_id="), "method");
        echo "\"+\$product_id+\"' title=\\\"";
        echo (isset($context["label_text"]) ? $context["label_text"] : null);
        echo "\\\" data-toggle=\\\"tooltip\\\" data-title =\\\"";
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
\t\t// Hide tooltip when clicking on it
\t\tvar hasTooltip = \$(\"[data-toggle='tooltip']\").tooltip({container: 'body'});
\t\thasTooltip.on('click', function () {
\t\t\t\t\$(this).tooltip('hide')
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_quickview/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 42,  54 => 34,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* 	function _SoMagnificPopup(){*/
/* 		$('.products-list').magnificPopup({*/
/* 	        delegate: '.quickview_handler',*/
/* 	        preloader: true,*/
/* 	        tLoading: '',*/
/* 	        type: 'iframe',*/
/* 	        mainClass: 'my-mfp-zoom-in',*/
/* 	        removalDelay: 200,*/
/* 	        gallery: {enabled: true},*/
/* 	        callbacks: {*/
/* 	        open: function() {*/
/* 	          // Will fire when this exact popup is opened*/
/* 	          // this - is Magnific Popup object*/
/* 	        },*/
/* 	        beforeOpen: function() {*/
/* 	            $('[data-toggle=\'tooltip\']').hover(*/
/* 	                function() {*/
/* 	                },*/
/* 	                function(e) {*/
/* 	                  $('[data-toggle=\'tooltip\']').tooltip('hide');*/
/* 	                }*/
/* 	            );*/
/* 	        },*/
/* 	        afterClose: function() {*/
/* 	            $('[data-toggle=\'tooltip\']').tooltip('hide');*/
/* 	        },*/
/* 	        */
/* 	      }*/
/*     	});*/
/* */
/* 	}*/
/* 	function _SoQuickView(){*/
/* 		var $item_class = $('{{ class_suffix }}');*/
/* 		if ($item_class.length > 0) {*/
/* 			for (var i = 0; i < $item_class.length; i++) {*/
/* 				//$($item_class[i]).addClass('quickview');*/
/* 				if($($item_class[i]).find('.quickview_handler').length <= 0){*/
/* 					var producturlpath = $($item_class[i]).find('a', $(this)).attr('href');*/
/* 					if(typeof producturlpath !== 'undefined' && producturlpath.length > 0 ){*/
/* 						var $product_id = $($item_class[i]).find('a', $(this)).attr('data-product');*/
/* 						var _quickviewbutton = "<a class='visible-lg btn-button quickview quickview_handler' href='{{ our_url.link('extension/soconfig/quickview','product_id=') }}"+$product_id+"' title=\"{{ label_text }}\" data-toggle=\"tooltip\" data-title =\"{{ label_text }}\" data-fancybox-type=\"iframe\" ><i class=\"quickview fa fa-search\"></i></a>";*/
/* 						$($item_class[i]).append(_quickviewbutton);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 		_SoMagnificPopup();*/
/* 	}*/
/* 	jQuery(document).ready(function ($) {*/
/* 		setTimeout(function (){_SoQuickView()}, 500);*/
/* 		// Hide tooltip when clicking on it*/
/* 		var hasTooltip = $("[data-toggle='tooltip']").tooltip({container: 'body'});*/
/* 		hasTooltip.on('click', function () {*/
/* 				$(this).tooltip('hide')*/
/* 		});*/
/* 	});*/
/* </script>*/
