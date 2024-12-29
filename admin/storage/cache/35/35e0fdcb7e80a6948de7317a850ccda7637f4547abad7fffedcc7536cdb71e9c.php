<?php

/* so-citimart/template/common/footer.twig */
class __TwigTemplate_4597cc2db5426d7afa94fa7b68a4d708003c64825e3d0007e4962407bce393e4 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method")) {
            // line 4
            echo "\t";
            $this->loadTemplate(((((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/footer/footer") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method")) . ".twig"), "so-citimart/template/common/footer.twig", 4)->display(array_merge($context, array("typefooter" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method"))));
        }
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/icon-defs.twig"), "so-citimart/template/common/footer.twig", 7)->display($context);
        // line 8
        echo "
";
        // line 9
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_status"), "method") &&  !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_content"), "method")))) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_content"), "method");
            echo " ";
        }
        echo " 

<div id=\"previewModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t<h4 class=\"modal-title\"> ";
        // line 16
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_alertaddtocart"), "method");
        echo "</h4>
\t\t</div>
\t\t<div class=\"modal-body\"></div>
    </div>
  </div>
</div>\t
";
        // line 23
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "backtop"), "method")) {
            // line 24
            echo "<div class=\"back-to-top\"><i class=\"fa fa-angle-up\"></i></div>
";
        }
        // line 26
        echo "

";
        // line 28
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_sidebar"), "method")) {
            // line 29
            echo "\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_sidebar"), "method") == 1)) {
                // line 30
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-left";
                // line 31
                echo "\t";
            } else {
                // line 32
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-right";
                // line 33
                echo "\t";
            }
            // line 34
            echo "\t<section class=\"social-widgets visible-lg ";
            echo (isset($context["social_sidebar"]) ? $context["social_sidebar"] : null);
            echo " \">
\t\t<ul class=\"items\">
\t\t\t";
            // line 36
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_fb_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-01 facebook\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 38
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/facebook.php?account_fb=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "facebook"), "method");
                echo " \" class=\"tab-icon\"><span class=\"fa fa-facebook\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>FACEBOOK</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 42
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 46
            echo " 

\t\t\t";
            // line 48
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_twitter_status"), "method")) {
                echo " 
\t\t\t<li class=\"item  twitter\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 50
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/twitter.php?account_twitter=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "twitter"), "method");
                echo " \" class=\"tab-icon\"><span class=\"fa fa-twitter\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>TWITTER FEEDS</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 54
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 58
            echo " 

\t\t\t";
            // line 60
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_custom_status"), "method")) {
                echo " 
\t\t\t<li class=\"item  youtube\">
\t\t\t\t<div class=\"tab-icon\"><span class=\"fa fa-youtube\"></span></div>
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 63
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/youtubevideo.php?account_video=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "video_code"), "method");
                echo "\" class=\"tab-icon\"><span class=\"fa fa-youtube\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>Youtube</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 67
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 71
            echo " 
\t\t\t
\t\t\t";
            // line 73
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_instagram_status"), "method")) {
                echo " 
\t\t\t<li class=\"item  instagram\">
\t\t\t\t<div class=\"tab-icon\"><span class=\"fa fa-instagram\"></span></div>
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 76
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/instagram.php?instagram_user=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "instagram_user"), "method");
                echo "&instagram_token=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "instagram_token"), "method");
                echo "\" class=\"tab-icon\"><span class=\"fa fa-instagram\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>Instagram</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 80
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 84
            echo " 
\t\t</ul>
\t</section>
\t
";
        }
        // line 88
        echo " 

</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "so-citimart/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 88,  195 => 84,  187 => 80,  176 => 76,  170 => 73,  166 => 71,  158 => 67,  149 => 63,  143 => 60,  139 => 58,  131 => 54,  122 => 50,  117 => 48,  113 => 46,  105 => 42,  96 => 38,  91 => 36,  85 => 34,  82 => 33,  79 => 32,  76 => 31,  73 => 30,  70 => 29,  68 => 28,  64 => 26,  60 => 24,  58 => 23,  49 => 16,  36 => 9,  33 => 8,  31 => 7,  28 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# =========== Show Header==============#}*/
/* */
/* {% if soconfig.get_settings('typefooter')%}*/
/* 	{% include theme_directory~'/template/footer/footer'~ soconfig.get_settings('typefooter') ~'.twig' with {typefooter: soconfig.get_settings('typefooter')} %}*/
/* {% endif %}*/
/* */
/* {% include theme_directory~'/template/soconfig/icon-defs.twig' %}*/
/* */
/* {% if soconfig.get_settings('jsinput_status') and (soconfig.get_settings('jsinput_content')) is not empty %}{{ soconfig.get_settings('jsinput_content')  }} {% endif %} */
/* */
/* <div id="previewModal" class="modal fade" tabindex="-1" role="dialog">*/
/*   <div class="modal-dialog modal-lg" role="document">*/
/*     <div class="modal-content">*/
/* 		<div class="modal-header">*/
/* 			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 			<h4 class="modal-title"> {{objlang.get('text_alertaddtocart') }}</h4>*/
/* 		</div>*/
/* 		<div class="modal-body"></div>*/
/*     </div>*/
/*   </div>*/
/* </div>	*/
/* {# =========== Show BackToTop==============#}*/
/* {% if soconfig.get_settings('backtop') %}*/
/* <div class="back-to-top"><i class="fa fa-angle-up"></i></div>*/
/* {% endif %}*/
/* */
/* */
/* {% if soconfig.get_settings('social_sidebar')  %}*/
/* 	{% if soconfig.get_settings('social_sidebar') == 1 %}*/
/* 		{% set  social_sidebar = 'socialwidgets-left'%}*/
/* 	{% else %}*/
/* 		{% set  social_sidebar = 'socialwidgets-right'%}*/
/* 	{% endif %}*/
/* 	<section class="social-widgets visible-lg {{social_sidebar}} ">*/
/* 		<ul class="items">*/
/* 			{% if soconfig.get_settings('social_fb_status') %} */
/* 			<li class="item item-01 facebook">*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/facebook.php?account_fb={{soconfig.get_settings('facebook')}} " class="tab-icon"><span class="fa fa-facebook"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>FACEBOOK</h5></div>*/
/* 					<div class="loading">*/
/* 						<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" class="ajaxloader" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* */
/* 			{% if soconfig.get_settings('social_twitter_status') %} */
/* 			<li class="item  twitter">*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/twitter.php?account_twitter={{ soconfig.get_settings('twitter')}} " class="tab-icon"><span class="fa fa-twitter"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>TWITTER FEEDS</h5></div>*/
/* 					<div class="loading">*/
/* 						<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" class="ajaxloader" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* */
/* 			{% if soconfig.get_settings('social_custom_status') %} */
/* 			<li class="item  youtube">*/
/* 				<div class="tab-icon"><span class="fa fa-youtube"></span></div>*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/youtubevideo.php?account_video={{soconfig.get_settings('video_code')}}" class="tab-icon"><span class="fa fa-youtube"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>Youtube</h5></div>*/
/* 					<div class="loading">*/
/* 						<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* 			*/
/* 			{% if soconfig.get_settings('social_instagram_status') %} */
/* 			<li class="item  instagram">*/
/* 				<div class="tab-icon"><span class="fa fa-instagram"></span></div>*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/instagram.php?instagram_user={{soconfig.get_settings('instagram_user')}}&instagram_token={{soconfig.get_settings('instagram_token')}}" class="tab-icon"><span class="fa fa-instagram"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>Instagram</h5></div>*/
/* 					<div class="loading">*/
/* 						<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* 		</ul>*/
/* 	</section>*/
/* 	*/
/* {% endif %} */
/* */
/* </div>*/
/* </body>*/
/* </html>*/
