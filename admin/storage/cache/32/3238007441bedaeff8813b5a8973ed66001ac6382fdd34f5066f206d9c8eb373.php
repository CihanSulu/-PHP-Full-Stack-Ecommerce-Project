<?php

/* extension/soconfig/options_stores.twig */
class __TwigTemplate_53affb925422ccab383e3552d1ac1c50f706984371045b57d64523b222f0a4e5 extends Twig_Template
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
        $context["param_columns"] = array("1" => "1 column", "2" => "2 columns", "3" => "3 columns", "4" => "4 columns", "5" => "5 columns", "6" => "6 columns", "7" => "7 columns", "8" => "8 columns", "9" => "9 columns");
        // line 14
        echo "
";
        // line 15
        $context["param_cardGallery"] = array("1" => "Align Left", "2" => "Align Right", "3" => "Align Bottom");
        // line 20
        echo "
";
        // line 21
        $context["param_refineSearch"] = array("0" => "Disable ", "1" => "Image only", "2" => "Text and image", "3" => "Block light");
        // line 27
        echo "

";
        // line 29
        $context["param_scssFormat"] = array("Expanded" => "Expanded", "Nested" => "Nested (default)", "Compressed" => "Compressed", "Compact" => "Compact", "Crunched" => "Crunched");
        // line 36
        echo "
";
        // line 37
        $context["param_layoutStyle"] = array("full" => "Default", "fluid" => "Layout fluid", "boxed" => "Layout boxed");
        // line 42
        echo "
";
        // line 43
        $context["param_contentbgMode"] = array("repeat" => "Repeat", "no-repeat" => "No-Repeat");
        // line 47
        echo "
";
        // line 48
        $context["param_contentAttachment"] = array("scroll" => "Scroll", "fixed" => "Fixed");
        // line 52
        echo "


";
        // line 55
        $context["param_productGallery"] = array("bottom" => "Gallery Bottom", "left" => "Gallery Left", "grid" => "Gallery Grid", "list" => "Gallery List", "slider" => "Gallery Slider");
        // line 62
        echo "


";
        // line 65
        $context["param_tabsPosition"] = array("1" => "Bottom vertical", "2" => "Bottom horizontal");
        // line 69
        echo "
";
        // line 70
        $context["param_toppanel"] = array("1" => "Show Header Center", "2" => "Show Header Bottom", "3" => "Show All");
        // line 75
        echo "
";
        // line 76
        $context["param_catalogMode"] = array("grid-list" => "List Column", "grid-table" => "Table Column", "grid-2" => "2 Columns", "grid-3" => "3 Columns", "grid-4" => "4 Columns", "grid-5" => "5 Columns");
        // line 84
        echo "

";
        // line 86
        $context["param_totalBanner"] = array("1" => "Hover effect 1", "2" => "Hover effect 2", "3" => "Hover effect 3", "4" => "Hover effect 4", "5" => "Hover effect 5", "6" => "Hover effect 6", "7" => "Hover effect 7", "8" => "Hover effect 8", "9" => "Hover effect 9", "10" => "Hover effect 10", "11" => "Hover effect 11", "12" => "Hover effect 12");
        // line 100
        echo "
";
        // line 101
        $context["param_carticon"] = array("cart-1" => "Cart Icon 1", "cart-2" => "Cart Icon 2", "cart-3" => "Cart Icon 3", "cart-4" => "Cart Icon 4", "cart-5" => "Cart Icon 5", "cart-6" => "Cart Icon 6");
        // line 109
        echo "
";
        // line 110
        $context["param_preloaderAnimation"] = array("line" => "Default line", "double-loop" => "Double Bounce", "cube-move" => "Cube Move", "circle-bounce" => "Circle Bounce", "folding-cube" => "Cube Folding");
        // line 117
        echo "
";
        // line 118
        $context["param_blogColumn"] = array("blog-grid" => "1 Column", "blog-2" => "2 Columns", "blog-3" => "3 Columns", "blog-4" => "4 Columns", "blog-list" => "List Column");
        // line 125
        echo "
";
        // line 126
        $context["param_articlesStyle"] = array("default" => "Default", "style1" => "Style1", "style2" => "Style2", "style3" => "Style3", "style4" => "Style4", "style5" => "Style5");
        // line 134
        echo "
";
        // line 135
        $context["customSelectorsDesc"] = "Add custom CSS selectors separated by a comma.";
        // line 136
        $context["desc_Sidebar"] = "If sidebar has no content. Then click Design → Layouts add content for sidebar";
        // line 137
        $context["desc_NoSidebar"] = "If no sidebar has not working.";
        // line 138
        $context["desc_newcolor"] = "New Color showing in box select color.";
        // line 139
        $context["desc_notnewcolor"] = " <b>Create New Color working : </b> </br> Tab Advanced → SCSS Compile = Off, Developer Compile Muti Color = Off";
        // line 140
        $context["customCssDesc"] = "You can use custom CSS use the custom.css file";
        // line 141
        $context["customJSDesc"] = "You can add custom JavaScript code. It loads your custom Javascript file after all other JavaScript files (except special hardcoded occasions), allowing you to be the last one who will affect your website.";
        // line 142
        $context["desc_contact"] = "<a href=\"https://developers.google.com/maps/documentation/javascript/get-api-key\" target=\"_blank\" style=\"display: block;float: left;width: auto;margin-top: 7px\">Find your API Key »</a>";
        // line 143
        echo "
";
        // line 145
        echo "
    ";
        // line 147
        echo "    <div class=\"so-ultimate-fieldset so-ultimate-fieldset-basic clearfix\">
\t\t";
        // line 148
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_general"), "method"), 1 => "icon-home"), "method");
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 151
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_general"), "method"), 1 => "sub-header", 2 => true), "method");
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t";
        // line 155
        echo "\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-Style\">
\t\t\t\t";
        // line 156
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_tab_Styles"), "method")), "method");
        echo " 
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-field-list field-list--scheme ";
        // line 158
        if ( !(isset($context["validate"]) ? $context["validate"] : null)) {
            echo " disable-applyHome ";
        }
        echo "\">
\t\t\t\t\t";
        // line 159
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "homepageSelect", array(0 => "soconfig_general_store", 1 => "typelayout", 2 => (isset($context["homeStyle"]) ? $context["homeStyle"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_homestyle"), "method")), "method");
        echo " 
\t\t\t\t\t";
        // line 160
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_general_store", 1 => "themecolor", 2 => (isset($context["totalLayoutColor"]) ? $context["totalLayoutColor"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_colorstyles"), "method"), 4 => "field--listcolor"), "method");
        echo " 
\t\t\t\t\t
\t\t\t\t\t";
        // line 162
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_advanced_store", 1 => "newcolor_status", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_newcolor"), "method"), 3 => "parent newcolor"), "method");
        echo " 
\t\t\t\t\t";
        // line 163
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "text", array(0 => "soconfig_advanced_store", 1 => "name_color", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_namecolor"), "method"), 3 => "child newcolor newcolor_1"), "method");
        echo " 
\t\t\t\t\t";
        // line 164
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_colors", array(0 => "soconfig_advanced_store", 1 => "theme_color", 2 => " ", 3 => "child newcolor newcolor_1"), "method");
        echo " 
\t\t\t\t\t
\t\t\t\t\t<div class=\"control-group control-group-advanced\">
\t\t\t\t\t\t<div class=\"control-group-inner child newcolor newcolor_1\">
\t\t\t\t\t\t\t<button onclick=\"buttonApplyColor();\" class=\"btn btn-info\" type=\"button\"  ";
        // line 168
        if ((isset($context["scsscompile"]) ? $context["scsscompile"] : null)) {
            echo " ";
            echo "disabled='disabled'";
            echo " ";
        }
        echo "><i class=\"fa fa-magic\" aria-hidden=\"true\"></i> New Color</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group control-group-advanced\"> <div class=\"control-help control-group-inner child newcolor newcolor_1\">
\t\t\t\t\t\t";
        // line 172
        if ((isset($context["scsscompile"]) ? $context["scsscompile"] : null)) {
            // line 173
            echo "\t\t\t\t\t\t\t";
            echo (isset($context["desc_notnewcolor"]) ? $context["desc_notnewcolor"] : null);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 175
            echo "\t\t\t\t\t\t\t";
            echo (isset($context["desc_newcolor"]) ? $context["desc_newcolor"] : null);
            echo " 
\t\t\t\t\t\t";
        }
        // line 177
        echo "\t\t\t\t\t</div></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-general\">
\t\t\t\t";
        // line 182
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_tab_general"), "method")), "method");
        echo " 
\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t";
        // line 184
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "effectBanner", array(0 => "soconfig_general_store", 1 => "type_banner", 2 => (isset($context["param_totalBanner"]) ? $context["param_totalBanner"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_effectBanner"), "method")), "method");
        echo " 
\t\t\t\t\t";
        // line 185
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_general_store", 1 => "backtop", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_back_top"), "method")), "method");
        echo " 
\t\t\t\t\t";
        // line 186
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_general_store", 1 => "preloader", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_preloader"), "method"), 3 => "parent preloader"), "method");
        echo " 
\t\t\t\t\t";
        // line 187
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_general_store", 1 => "preloader_animation", 2 => (isset($context["param_preloaderAnimation"]) ? $context["param_preloaderAnimation"] : null), 3 => "Preloader Styles", 4 => "child preloader preloader_1 "), "method");
        echo " 
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t   
\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-comingsoon\">
\t\t\t\t";
        // line 193
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => (isset($context["pages_comingsoon"]) ? $context["pages_comingsoon"] : null)), "method");
        echo " 
\t\t\t\t
\t\t\t   <div class=\"so-ultimate-field-list\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 197
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_pages_store", 1 => "comingsoon_imglogo", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "pages_comingsoonLogo"), "method")), "method");
        echo " 
\t\t\t\t\t";
        // line 198
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_pages_store", 2 => "comingsoon_title", 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "pages_comingsoonTitle"), "method")), "method");
        echo "
\t\t\t\t\t";
        // line 199
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_date", array(0 => "soconfig_pages_store", 1 => "comingsoon_date", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "pages_comingsoonDate"), "method")), "method");
        echo "
\t\t\t\t\t";
        // line 200
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_pages_store", 2 => "comingsoon_content", 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "pages_comingsoonContent"), "method")), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-contactus\">
\t\t\t\t";
        // line 207
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => (isset($context["pages_contactus"]) ? $context["pages_contactus"] : null)), "method");
        echo " 
\t\t\t\t
\t\t\t   <div class=\"so-ultimate-field-list\">
\t\t\t\t\t";
        // line 210
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "text", array(0 => "soconfig_pages_store", 1 => "mapaddress", 2 => "Address Text"), "method");
        echo " 
\t\t\t\t\t";
        // line 211
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "text", array(0 => "soconfig_pages_store", 1 => "mapgeocode", 2 => "Maps Geocode"), "method");
        echo " 
\t\t\t\t\t";
        // line 212
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "text", array(0 => "soconfig_pages_store", 1 => "mapkeys", 2 => "API Key Text", 3 => "", 4 => (isset($context["desc_contact"]) ? $context["desc_contact"] : null)), "method");
        echo " 
\t\t\t\t\t";
        // line 213
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "text", array(0 => "soconfig_pages_store", 1 => "mapzoom", 2 => "Maps Zoom"), "method");
        echo " 
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t</div>
    </div>
\t";
        // line 224
        echo "\t
\t";
        // line 226
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-headerFooter\" >
\t\t";
        // line 227
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_headerfoter"), "method"), 1 => "icon-header"), "method");
        echo " 
\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 230
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_headerfoter"), "method"), 1 => "sub-header", 2 => true), "method");
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-header\">
\t\t\t\t\t";
        // line 234
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_tab_header"), "method")), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 236
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "headerStyle", array(0 => "soconfig_general_store", 1 => "typeheader", 2 => (isset($context["homeStyle"]) ? $context["homeStyle"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_styleheader"), "method"), 4 => ""), "method");
        echo " 
\t\t\t\t\t\t";
        // line 237
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "goLink", array(0 => "Configure to Megamenu", 1 => "index.php?route=extension/module/so_megamenu"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 238
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_general_store", 1 => "toppanel_status", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_stickyheader"), "method"), 3 => "parent stickyheader"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 239
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_general_store", 1 => "toppanel_type", 2 => (isset($context["param_toppanel"]) ? $context["param_toppanel"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_positionheader"), "method"), 4 => "child stickyheader stickyheader_1"), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 241
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_general_store", 1 => "iconWishlist_status", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "design_iconWishlist"), "method")), "method");
        echo " 
\t\t\t\t\t\t";
        // line 242
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_general_store", 1 => "iconCompare_status", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "design_iconCompare"), "method")), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 244
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_general_store", 1 => "phone_status", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_primaryMessage"), "method"), 3 => "parent primaryMessage"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 245
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_general_store", 2 => "contact_number", 3 => " ", 4 => "child primaryMessage primaryMessage_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 247
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_general_store", 1 => "welcome_message_status", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_secondaryMessage"), "method"), 3 => "parent secondaryMessage"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 248
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_general_store", 2 => "welcome_message", 3 => " ", 4 => "child secondaryMessage secondaryMessage_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-footer\">
\t\t\t\t\t";
        // line 255
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_tab_footer"), "method")), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 257
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "headerStyle", array(0 => "soconfig_general_store", 1 => "typefooter", 2 => (isset($context["homeStyle"]) ? $context["homeStyle"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_stylefooter"), "method"), 4 => ""), "method");
        echo " 
\t\t\t\t\t\t";
        // line 258
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "goLink", array(0 => "Configure Module Footer", 1 => "index.php?route=extension/module/so_page_builder"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 259
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_general_store", 1 => "imgpayment_status", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_statusPayment"), "method"), 3 => "parent statusPayment"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 260
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_general_store", 1 => "imgpayment", 2 => " ", 3 => "child statusPayment statusPayment_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 262
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_general_store", 2 => "copyright", 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "general_copyright"), "method")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t
\t\t</div>
    </div>
\t";
        // line 272
        echo "\t
    ";
        // line 274
        echo "    <div class=\"so-ultimate-fieldset so-ultimate-fieldset-designcolor\" >
\t\t";
        // line 275
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_layout"), "method"), 1 => "icon-colors"), "method");
        echo " 
\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 278
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_layout"), "method"), 1 => "sub-header", 2 => true), "method");
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 282
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "design_tabLayout"), "method")), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 284
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_layout_store", 1 => "layoutstyle", 2 => (isset($context["param_layoutStyle"]) ? $context["param_layoutStyle"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "design_layoutStyle"), "method")), "method");
        echo " 
\t\t\t\t\t\t";
        // line 285
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "shoppingIcon", array(0 => "soconfig_layout_store", 1 => "iconcart", 2 => (isset($context["param_carticon"]) ? $context["param_carticon"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "design_shoppingIcon"), "method")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 291
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "designtab_bodybackground"), "method")), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 294
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_colors", array(0 => "soconfig_layout_store", 1 => "theme_bgcolor", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "design_backgroundColor"), "method")), "method");
        echo "  
\t\t\t\t\t\t";
        // line 295
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_layout_store", 1 => "contentbg", 2 => " ", 3 => " ", 4 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "desc_bodybackground"), "method")), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 297
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_layout_store", 1 => "content_bg_mode", 2 => (isset($context["param_contentbgMode"]) ? $context["param_contentbgMode"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "design_backgroundSize"), "method")), "method");
        echo " 
\t\t\t\t\t\t";
        // line 298
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_layout_store", 1 => "content_attachment", 2 => (isset($context["param_contentAttachment"]) ? $context["param_contentAttachment"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "design_backgroundAttachment"), "method")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 303
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "designtab_headerbackground"), "method")), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list field-list--liveColors\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 306
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_layout_store", 1 => "headercolor_status", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "design_headerColor"), "method"), 3 => "parent headerColor"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 307
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "liveColors", array(0 => "soconfig_layout_store", 1 => "headerparent", 2 => "Header Parent ", 3 => "child headerColor headerColor_1 "), "method");
        echo "  
\t\t\t\t\t\t";
        // line 308
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "liveColors", array(0 => "soconfig_layout_store", 1 => "headertop", 2 => "Header Top", 3 => "child headerColor headerColor_1 "), "method");
        echo "  
\t\t\t\t\t\t";
        // line 309
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "liveColors", array(0 => "soconfig_layout_store", 1 => "headercenter", 2 => "Header Middle", 3 => "child headerColor headerColor_1 "), "method");
        echo "  
\t\t\t\t\t\t";
        // line 310
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "liveColors", array(0 => "soconfig_layout_store", 1 => "headerbottom", 2 => "Header Bottom", 3 => "child headerColor headerColor_1 "), "method");
        echo "  
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t
\t\t</div>
    </div>
\t";
        // line 320
        echo "\t
\t
\t";
        // line 323
        echo "    <div class=\"so-ultimate-fieldset so-ultimate-fieldset-fonts\">
\t\t";
        // line 324
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_fonts"), "method"), 1 => "icon-font"), "method");
        echo " 
\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 327
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_fonts"), "method"), 1 => "sub-header", 2 => true), "method");
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 331
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => "Body"), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 333
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_fonts_store", 1 => "body_status", 2 => "Enable", 3 => "parent fontBody"), "method");
        echo "
\t\t\t\t\t\t";
        // line 334
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "gfonts", array(0 => "soconfig_fonts_store", 1 => "body_font", 2 => "child fontBody fontBody_1"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 339
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => "Headings "), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 341
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_fonts_store", 1 => "h1_font_status", 2 => "Headings 1", 3 => "parent h1font"), "method");
        echo "
\t\t\t\t\t\t";
        // line 342
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "gfonts", array(0 => "soconfig_fonts_store", 1 => "h1_font", 2 => "child fontheading h1font h1font_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 344
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_fonts_store", 1 => "h2_font_status", 2 => "Headings 2", 3 => "parent h2font"), "method");
        echo "
\t\t\t\t\t\t";
        // line 345
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "gfonts", array(0 => "soconfig_fonts_store", 1 => "h2_font", 2 => "child h2font h2font_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 347
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_fonts_store", 1 => "h3_font_status", 2 => "Headings 3", 3 => "parent h3font"), "method");
        echo "
\t\t\t\t\t\t";
        // line 348
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "gfonts", array(0 => "soconfig_fonts_store", 1 => "h3_font", 2 => "child h3font h3font_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 350
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_fonts_store", 1 => "h4_font_status", 2 => "Headings 4", 3 => "parent h4font"), "method");
        echo "
\t\t\t\t\t\t";
        // line 351
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "gfonts", array(0 => "soconfig_fonts_store", 1 => "h4_font", 2 => "child h4font h4font_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 358
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => "Main navigation"), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 360
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_fonts_store", 1 => "navigation_font_status", 2 => "Enable", 3 => "parent naviFont"), "method");
        echo "
\t\t\t\t\t\t";
        // line 361
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "gfonts", array(0 => "soconfig_fonts_store", 1 => "navigation_font", 2 => "child naviFont naviFont_1"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 366
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => "Store"), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 368
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_fonts_store", 1 => "moduleTitle_font_status", 2 => "Widgets Titles / Module title", 3 => "parent moduleTitleFont"), "method");
        echo "
\t\t\t\t\t\t";
        // line 369
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "gfonts", array(0 => "soconfig_fonts_store", 1 => "moduleTitle_font", 2 => "child moduleTitleFont moduleTitleFont_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 371
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_fonts_store", 1 => "productTitle_font_status", 2 => "Product title", 3 => "parent productTitleFont"), "method");
        echo "
\t\t\t\t\t\t";
        // line 372
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "gfonts", array(0 => "soconfig_fonts_store", 1 => "productTitle_font", 2 => "child productTitleFont productTitleFont_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 374
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_fonts_store", 1 => "productPrice_font_status", 2 => "Product price", 3 => "parent productPriceFont"), "method");
        echo "
\t\t\t\t\t\t";
        // line 375
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "gfonts", array(0 => "soconfig_fonts_store", 1 => "productPrice_font", 2 => "child productPriceFont productPriceFont_1"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 380
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => "Custom Selectors"), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 382
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_fonts_store", 1 => "custom_font_status", 2 => "Enable", 3 => "parent fontcustom"), "method");
        echo "
\t\t\t\t\t\t";
        // line 383
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "gfonts", array(0 => "soconfig_fonts_store", 1 => "custom_font", 2 => "child fontcustom fontcustom_1"), "method");
        echo "
\t\t\t\t\t\t";
        // line 384
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "textarea", array(0 => "soconfig_fonts_store", 1 => "customFont_content", 2 => "Custom Selectors", 3 => (isset($context["customSelectorsDesc"]) ? $context["customSelectorsDesc"] : null), 4 => "child fontcustom fontcustom_1"), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 389
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => "Update Font List"), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t<div class=\"control-group group-style-update_font\">
\t\t\t\t\t\t\t<div class=\"control-group-inner\">
\t\t\t\t\t\t\t\t<div class=\"controls\"><a id=\"update_fonts\" class=\"btn btn-primary btn-update-so-ultimate-fonts\" href=\"#\" target=\"_self\">One Click update</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-help\">Click this button to refresh the list of Google fonts.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>\t\t\t\t
   
\t\t</div>
   </div>
\t";
        // line 404
        echo "\t
\t
\t";
        // line 407
        echo "    <div class=\"so-ultimate-fieldset so-ultimate-fieldset-store\" >
\t\t";
        // line 408
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_products"), "method"), 1 => "icon-shop"), "method");
        echo " 
\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 411
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_products"), "method"), 1 => "sub-header", 2 => true), "method");
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 415
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => (isset($context["pages_common"]) ? $context["pages_common"] : null)), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 417
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "catalog_display_sidebar", 2 => array("disable" => "No Sidebar", "left" => "Sidebar Left", "right" => "Sidebar Right", "all" => "Sidebar All"), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_sidebar_display"), "method"), 4 => "", 5 => (isset($context["desc_Sidebar"]) ? $context["desc_Sidebar"] : null)), "method");
        echo " 
\t\t\t\t\t\t";
        // line 418
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "catalog_col_position", 2 => array("outside" => "Outside content", "inside" => "Inside content"), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_col_position"), "method"), 4 => "", 5 => (isset($context["desc_NoSidebar"]) ? $context["desc_NoSidebar"] : null)), "method");
        echo " 
\t\t\t\t\t\t";
        // line 419
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "catalog_col_type", 2 => array("default" => "Default", "off_canvas" => "Column Off Canvas"), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_col_type"), "method"), 4 => "", 5 => (isset($context["desc_NoSidebar"]) ? $context["desc_NoSidebar"] : null)), "method");
        echo " 
\t\t\t\t\t\t";
        // line 420
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "catalog_sidebar_sticky", 2 => array("disable" => "Disable", "left" => "Sidebar Left", "right" => "Sidebar Right", "all" => "Sidebar All"), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_sidebar_sticky"), "method"), 4 => "", 5 => (isset($context["desc_NoSidebar"]) ? $context["desc_NoSidebar"] : null)), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 426
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => (isset($context["pages_subcategory"]) ? $context["pages_subcategory"] : null)), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 428
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_pages_store", 1 => "featured_cate_status", 2 => "Display Category Featured"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 429
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "lstimg_cate_status", 2 => array(0 => "Disable", 1 => "Show Description", 2 => "Show all"), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_show"), "method")), "method");
        echo " 
\t\t\t\t\t\t";
        // line 430
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "product_catalog_refine", 2 => (isset($context["param_refineSearch"]) ? $context["param_refineSearch"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_refine"), "method")), "method");
        echo " 
\t\t\t\t\t\t";
        // line 431
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "catalog_refine_number", 2 => (isset($context["param_columns"]) ? $context["param_columns"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_refine_col"), "method")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 436
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => (isset($context["pages_pro_listings"]) ? $context["pages_pro_listings"] : null)), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 438
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "product_catalog_mode", 2 => (isset($context["param_catalogMode"]) ? $context["param_catalogMode"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_mode"), "method")), "method");
        echo " 
\t\t\t\t\t\t";
        // line 439
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "card_gallery", 2 => (isset($context["param_cardGallery"]) ? $context["param_cardGallery"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_gallery"), "method")), "method");
        echo " 
\t\t\t\t\t\t";
        // line 440
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "desktop_addcart_position", 2 => array("left" => "Align Left", "right" => "Align Right", "center" => "Align Center", "bottom" => "Align Bottom"), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_cartinfo"), "method")), "method");
        echo " 
\t\t\t\t\t\t";
        // line 441
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_pages_store", 1 => "placeholder_status", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_placeholder"), "method"), 3 => "parent placeholder"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 442
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_pages_store", 1 => "placeholder_img", 2 => " ", 3 => "child placeholder placeholder_1"), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"control-group control-group-element\">
\t\t\t\t\t\t\t<div class=\"control-group-inner \">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Element visibility</label>
\t\t\t\t\t\t\t\t<div class=\"controls \">
\t\t\t\t\t\t\t\t\t<table class=\"table\" cellspacing=\"0\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open\">
\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"260\">Element</th><th  class=\"align_center\">Default</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep tbProductElementVisibilityCartButton\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Add to cart button</td><td>";
        // line 456
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "checkbox", array(0 => "soconfig_pages_store", 1 => "listing_cart_status"), "method");
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep tbProductElementVisibilityCompareButton\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Compare button</td><td>";
        // line 459
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "checkbox", array(0 => "soconfig_pages_store", 1 => "listing_compare_status"), "method");
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep tbProductElementVisibilityWishlistButton\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Wishlist button</td><td>";
        // line 462
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "checkbox", array(0 => "soconfig_pages_store", 1 => "listing_wishlist_status"), "method");
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep tbProductElementVisibilityWishlistButton\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>QuickView button</td><td>";
        // line 465
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "checkbox", array(0 => "soconfig_pages_store", 1 => "listing_quickview_status"), "method");
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Rating</td><td>";
        // line 468
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "checkbox", array(0 => "soconfig_pages_store", 1 => "listing_rating_status"), "method");
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Discount label</td><td>";
        // line 471
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "checkbox", array(0 => "soconfig_pages_store", 1 => "listing_discount_status"), "method");
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Countdown </td><td>";
        // line 475
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "checkbox", array(0 => "soconfig_pages_store", 1 => "listing_countdown_status"), "method");
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"s_open s_nosep\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>Image gallery</td><td>";
        // line 478
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "checkbox", array(0 => "soconfig_pages_store", 1 => "listing_gallery_status"), "method");
        echo " </td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-ultimate-group-wrap\">
\t\t\t\t\t";
        // line 489
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => (isset($context["pages_pro_detail"]) ? $context["pages_pro_detail"] : null)), "method");
        echo " 
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 491
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "thumbnails_position", 2 => (isset($context["param_productGallery"]) ? $context["param_productGallery"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_productgallery"), "method")), "method");
        echo " 
\t\t\t\t\t\t";
        // line 492
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_pages_store", 1 => "radio_style", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_checkradio"), "method")), "method");
        echo " 
\t\t\t\t\t\t";
        // line 493
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_pages_store", 1 => "product_enablezoom", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_zoomimage"), "method")), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 495
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_pages_store", 1 => "product_sold", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_productsold"), "method")), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 497
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_pages_store", 1 => "product_enablesizechart", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_sizechart"), "method"), 3 => "parent sizechart"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 498
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_general_store", 1 => "img_sizechart", 2 => " ", 3 => "child sizechart sizechart_1"), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 500
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_pages_store", 1 => "tabs_position", 2 => (isset($context["param_tabsPosition"]) ? $context["param_tabsPosition"] : null), 3 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_tabs"), "method")), "method");
        echo " 
\t\t\t\t\t\t";
        // line 501
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_pages_store", 1 => "product_enableshowmore", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_showmore"), "method")), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 503
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_pages_store", 1 => "product_enableshipping", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_shipping"), "method"), 3 => "parent content_shipping"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 504
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_pages_store", 2 => "product_contentshipping", 3 => " ", 4 => "child content_shipping content_shipping_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 506
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_pages_store", 1 => "product_page_button", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_shared"), "method"), 3 => "parent content_social"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 507
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_pages_store", 2 => "product_socialshare", 3 => " ", 4 => "child content_social content_social_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 509
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_pages_store", 1 => "related_status", 2 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "product_catalog_related"), "method"), 3 => "parent relatedProduct"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 510
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "devices", array(0 => "soconfig_pages_store", 1 => "product_related_column_", 2 => "Related products per row", 3 => "child relatedProduct relatedProduct_1"), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t</div>
       
\t\t</div>
    </div>
\t";
        // line 519
        echo "\t
\t";
        // line 521
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-social\">
\t\t";
        // line 522
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_blog"), "method"), 1 => "icon-blog"), "method");
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 525
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => (isset($context["maintabs_blog"]) ? $context["maintabs_blog"] : null)), "method"), 1 => "sub-header", 2 => true), "method");
        echo " 
\t\t\t
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-social\">
\t\t\t\t\t";
        // line 530
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => "Blog Category"), "method");
        echo " 
\t\t\t\t\t
\t\t\t\t   <div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 533
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "text", array(0 => "soconfig_social_store", 1 => "blogImgSize", 2 => "Category Images Size", 3 => " ", 4 => "E.g. Images Size: 600x340"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 534
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_social_store", 1 => "blogColumn", 2 => (isset($context["param_blogColumn"]) ? $context["param_blogColumn"] : null), 3 => "Blog Grid View"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 535
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_social_store", 1 => "blogDateTime", 2 => "Show Date Timer"), "method");
        echo "
\t\t\t\t\t\t";
        // line 536
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_social_store", 1 => "blogAuthor", 2 => "Show Post Author"), "method");
        echo "
\t\t\t\t\t\t";
        // line 537
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_social_store", 1 => "blogReadmore", 2 => "Show Readmore"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-social\">
\t\t\t\t\t";
        // line 543
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => "Blog Articles"), "method");
        echo " 
\t\t\t\t   <div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 545
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_social_store", 1 => "blogSocial", 2 => "Social Share"), "method");
        echo "
\t\t\t\t\t\t";
        // line 546
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "blogArticle", array(0 => "soconfig_social_store", 1 => "blogArticles", 2 => (isset($context["param_articlesStyle"]) ? $context["param_articlesStyle"] : null), 3 => "Blog Articles Style"), "method");
        echo " 
\t\t\t\t\t
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 555
        echo "   
\t";
        // line 557
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-social\">
\t\t";
        // line 558
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_social"), "method"), 1 => "icon-social"), "method");
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 561
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_social"), "method"), 1 => "sub-header", 2 => true), "method");
        echo " 
\t\t\t
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-social\">
\t\t\t\t\t";
        // line 566
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => "Sidebar social"), "method");
        echo " 
\t\t\t\t\t
\t\t\t\t   <div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 569
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_social_store", 1 => "social_sidebar", 2 => array(0 => "Disable", 1 => "Sidebar Left", 2 => "Sidebar Right"), 3 => "Enable Social Sidebar"), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 571
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_social_store", 1 => "social_fb_status", 2 => "Show Facebook", 3 => "parent social_fb"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 573
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "text", array(0 => "soconfig_social_store", 1 => "facebook", 2 => "Facebook Username", 3 => "child social_fb social_fb_1"), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 575
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_social_store", 1 => "social_twitter_status", 2 => "Show Twitter", 3 => "parent social_tt"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 577
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "text", array(0 => "soconfig_social_store", 1 => "twitter", 2 => "Twitter username", 3 => "child social_tt social_tt_1"), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 579
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_social_store", 1 => "social_custom_status", 2 => "Show Youtube", 3 => "parent social_custom"), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 581
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "text", array(0 => "soconfig_social_store", 1 => "video_code", 2 => "Video Youtube", 3 => "child social_custom social_custom_1", 4 => "E.g. https://www.youtube.com/watch?v=Wdtw_A5FDGs"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 583
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_social_store", 1 => "social_instagram_status", 2 => "Show Instagram", 3 => "parent social_instagram"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 584
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "text", array(0 => "soconfig_social_store", 1 => "instagram_user", 2 => "Instagram Users ID", 3 => "child social_instagram social_instagram_1"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 585
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "text", array(0 => "soconfig_social_store", 1 => "instagram_token", 2 => "Access Token", 3 => "child social_instagram social_instagram_1"), "method");
        echo " 
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 593
        echo "\t";
        // line 594
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-custom\">
\t\t";
        // line 595
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_custom"), "method"), 1 => "icon-custom"), "method");
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 598
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_custom"), "method"), 1 => "sub-header", 2 => true), "method");
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-customcode\">
\t\t\t\t";
        // line 602
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_custom"), "method")), "method");
        echo " 
\t\t\t\t
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 605
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_custom_store", 1 => "cssinput_status", 2 => "Location Header on page ", 3 => "parent customcss"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 606
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "textarea", array(0 => "soconfig_custom_store", 1 => "cssinput_content", 2 => "Script contents", 3 => (isset($context["customCssDesc"]) ? $context["customCssDesc"] : null), 4 => "child customcss customcss_1"), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 608
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_custom_store", 1 => "jsinput_status", 2 => "Location Footer on page ", 3 => "parent customjs"), "method");
        echo "
\t\t\t\t\t\t";
        // line 609
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "textarea", array(0 => "soconfig_custom_store", 1 => "jsinput_content", 2 => "Script contents", 3 => "", 4 => "child customjs customjs_1"), "method");
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t";
        // line 619
        echo "\t
\t";
        // line 621
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-advanced\">
\t\t";
        // line 622
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_advanced"), "method"), 1 => "icon-wrench", 2 => ""), "method");
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 625
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_advanced"), "method"), 1 => "sub-header", 2 => true), "method");
        echo " 
\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-advanced\">
\t\t\t\t\t";
        // line 629
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => "SCSS Compile"), "method");
        echo " 
\t\t\t\t\t
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t";
        // line 632
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_advanced_store", 1 => "scsscompile", 2 => "SCSS Compile"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 633
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "select", array(0 => "soconfig_advanced_store", 1 => "scssformat", 2 => (isset($context["param_scssFormat"]) ? $context["param_scssFormat"] : null), 3 => "CSS Format"), "method");
        echo " 
\t\t\t\t\t\t";
        // line 634
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_advanced_store", 1 => "compileMutiColor", 2 => "Developer Compile Muti Color"), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-performance\">
\t\t\t\t\t";
        // line 639
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => "Performance"), "method");
        echo " 
\t\t\t\t\t
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 643
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_advanced_store", 1 => "cssminify", 2 => "Show CSS Minify", 3 => "parent cssminify"), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"control-group control-group-advanced \">
\t\t\t\t\t\t\t<!-- cssminify -->
\t\t\t\t\t\t\t<div id=\"tab-field-cssminify\" class=\"control-group-inner child cssminify cssminify_1\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group2\">
\t\t\t\t\t\t\t\t\t<a onclick=\"add_cssExclude();\" class=\"btn btn-default btn-sm\"> <i class=\"fa fa-file-o\" ></i> Add file css</a>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<table class=\"table table-hover\" id=\"listgroup-cssminify\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"first\">Exclude file css</td>
\t\t\t\t\t\t\t\t\t\t\t<td >Delete</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody >
\t\t\t\t\t\t\t\t\t";
        // line 660
        $context["listcss_row"] = 0;
        // line 661
        echo "\t\t\t\t\t\t\t\t\t";
        if (((isset($context["cssExcludes"]) ? $context["cssExcludes"] : null) && ((isset($context["cssExcludes"]) ? $context["cssExcludes"] : null) != ""))) {
            // line 662
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 663
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cssExcludes"]) ? $context["cssExcludes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cssExclude"]) {
                // line 664
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["cssExclude"], "namecss", array()))) {
                    // line 665
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"listcssExclude";
                    // line 666
                    echo (isset($context["listcss_row"]) ? $context["listcss_row"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" class=\"form-control\" value=\"";
                    // line 668
                    echo $this->getAttribute($context["cssExclude"], "namecss", array());
                    echo "\" name=\"soconfig_advanced_store[cssExclude][";
                    echo (isset($context["listcss_row"]) ? $context["listcss_row"] : null);
                    echo "][namecss]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#listcssExclude";
                    // line 671
                    echo (isset($context["listcss_row"]) ? $context["listcss_row"] : null);
                    echo "').remove();\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-close\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 675
                    $context["listcss_row"] = ((isset($context["listcss_row"]) ? $context["listcss_row"] : null) + 1);
                    // line 676
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 677
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssExclude'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 679
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot></tfoot>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\tvar listcss_row = ";
        // line 685
        echo (isset($context["listcss_row"]) ? $context["listcss_row"] : null);
        echo " ;
\t\t\t\t\t\t\t\tvar languages = ";
        // line 686
        echo twig_jsonencode_filter((isset($context["languages"]) ? $context["languages"] : null));
        echo " ;
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tfunction add_cssExclude() {

\t\t\t\t\t\t\t\t\thtml  = '<tbody id=\"listcssExclude' + listcss_row + '\">';
\t\t\t\t\t\t\t\t\thtml += '  <tr>';
\t\t\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" value=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" name=\"soconfig_advanced_store[cssExclude][' + listcss_row + '][namecss]\">';
\t\t\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\t\t\thtml += '    <td><a onclick=\"\$(\\'#listcssExclude' + listcss_row + '\\').remove();\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-close\"></i></a></td>';
\t\t\t\t\t\t\t\t\thtml += '  </tr>';
\t\t\t\t\t\t\t\t\thtml += '</tbody>';
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('#listgroup-cssminify tfoot').before(html);
\t\t\t\t\t\t\t\t\tlistcss_row++;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</script> 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--  END cssminify -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 710
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "onOff", array(0 => "soconfig_advanced_store", 1 => "jsminify", 2 => "Show JS Minify", 3 => "parent jsminify"), "method");
        echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"control-group control-group-advanced\">
\t\t\t\t\t\t\t<!-- jsminify -->
\t\t\t\t\t\t\t<div id=\"tab-field-jsminify\" class=\"form-group child jsminify jsminify_1\">
\t\t\t\t\t\t\t\t<div class=\"form-group2\">
\t\t\t\t\t\t\t\t\t<a onclick=\"add_jsExclude();\" class=\"add-item-payment btn btn-default btn-sm\"> <i class=\"fa fa-file-o\" ></i> Add file JS</a>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<table class=\"table table-hover\" id=\"listgroup-jsminify\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"first\" >Exclude file Javascript</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Delete</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody >
\t\t\t\t\t\t\t\t\t";
        // line 726
        $context["listjs_row"] = 0;
        // line 727
        echo "\t\t\t\t\t\t\t\t\t";
        if (((isset($context["jsExcludes"]) ? $context["jsExcludes"] : null) && ((isset($context["jsExcludes"]) ? $context["jsExcludes"] : null) != ""))) {
            // line 728
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 729
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jsExcludes"]) ? $context["jsExcludes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["jsExclude"]) {
                // line 730
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($context["jsExclude"], "namecss", array()))) {
                    // line 731
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"listjsExclude";
                    // line 732
                    echo (isset($context["listjs_row"]) ? $context["listjs_row"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" class=\"form-control\" value=\"";
                    // line 734
                    echo $this->getAttribute($context["jsExclude"], "namecss", array());
                    echo "\" name=\"soconfig_advanced_store[jsExclude][";
                    echo (isset($context["listjs_row"]) ? $context["listjs_row"] : null);
                    echo "][namecss]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#listjsExclude";
                    // line 738
                    echo (isset($context["listjs_row"]) ? $context["listjs_row"] : null);
                    echo "').remove();\" class=\"btn btn-danger  btn-sm\"><i class=\"fa fa-close\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 742
                    $context["listjs_row"] = ((isset($context["listjs_row"]) ? $context["listjs_row"] : null) + 1);
                    // line 743
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 744
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsExclude'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 746
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t<tfoot></tfoot>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\tvar listjs_row = ";
        // line 752
        echo (isset($context["listjs_row"]) ? $context["listjs_row"] : null);
        echo " ;
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tfunction add_jsExclude() {

\t\t\t\t\t\t\t\t\thtml  = '<tbody id=\"listjsExclude' + listjs_row + '\">';
\t\t\t\t\t\t\t\t\thtml += '  <tr>';
\t\t\t\t\t\t\t\t\thtml += '    <td>';
\t\t\t\t\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" value=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" name=\"soconfig_advanced_store[jsExclude][' + listjs_row + '][namecss]\">';
\t\t\t\t\t\t\t\t\thtml += '    </td>';
\t\t\t\t\t\t\t\t\thtml += '    <td><a onclick=\"\$(\\'#listjsExclude' + listjs_row + '\\').remove();\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-close\"></i></a></td>';
\t\t\t\t\t\t\t\t\thtml += '  </tr>';
\t\t\t\t\t\t\t\t\thtml += '</tbody>';
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('#listgroup-jsminify tfoot').before(html);
\t\t\t\t\t\t\t\t\tlistjs_row++;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t</script> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--  END jsminify -->
\t\t\t\t\t\t\t<div class=\"control-group-inner\" >
\t\t\t\t\t\t\t\t<a href=\"";
        // line 772
        echo (isset($context["clear_cache"]) ? $context["clear_cache"] : null);
        echo "\"><button class=\"btn btn-warning btn-sm\" type=\"button\"><i class=\"fa fa-eraser\"></i> Clear Minify</button></a>
\t\t\t\t\t\t\t\t<p class=\"control-help\">Delete all of the theme css, js file path: catalog/view/theme/so-emarket/css/minify</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 786
        echo "\t
\t";
        // line 788
        echo "\t<div class=\"so-ultimate-fieldset so-ultimate-fieldset-custom\">
\t\t";
        // line 789
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_support"), "method"), 1 => "next-account"), "method");
        echo " 
\t\t
\t\t<div class=\"so-ultimate-group-list\">
\t\t\t";
        // line 792
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "fieldsetHeader", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_support"), "method"), 1 => "sub-header", 2 => true), "method");
        echo " 
\t\t\t
\t\t\t<div class=\"so-ultimate-group-list__content\">
\t\t\t\t<div class=\"so-ultimate-group-wrap so-ultimate-group-customcode\">
\t\t\t\t";
        // line 796
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "groupHeaderBox", array(0 => $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_support"), "method")), "method");
        echo " 
\t\t\t\t
\t\t\t\t\t<div class=\"so-ultimate-field-list\">
\t\t\t\t\t\t<div class=\"control-group control-group-advanced\">
\t\t\t\t\t\t\t<div class=\"control-group-inner \">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t<svg class=\"next-icon\" style=\"    margin: 20px auto 10px;display: block;width: 30px;height: 30px;\"><use xlink:href=\"#icon-blog\"></use></svg>
\t\t\t\t\t\t\t\t<div class=\"caption\" style=\"text-align:center;padding-top:0px;\"><h3>Tickets</h3><p>Want to communicate one-to-one with our tech people? Then open a support ticket.</p><p style=\"padding-top: 5px;\"><a href=\"http://support.opencartworks.com/\" target=\"_blank\" class=\"btn btn-md btn-default\">Open a Ticket</a></p></div></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"control-group control-group-advanced\">
\t\t\t\t\t\t\t<div class=\"control-group-inner \">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t<svg class=\"next-icon\" style=\"    margin: 20px auto 10px;display: block;width: 30px;height: 30px;\"><use xlink:href=\"#next-account\"></use></svg>
\t\t\t\t\t\t\t\t<div class=\"caption\" style=\"text-align:center;padding-top:0px;\"><h3>Pre-Sale</h3><p>Have a brilliant idea for your OpenCart? Our team of developers can make it real.</p><p style=\"padding-top: 5px;\"><a href=\"http://support.opencartworks.com/\" target=\"_blank\" class=\"btn btn-md btn-default\">Drive More Sales</a></p></div></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"control-group control-group-advanced\">
\t\t\t\t\t\t\t<div class=\"control-group-inner \">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t<svg class=\"next-icon\" style=\"    margin: 20px auto 10px;display: block;width: 30px;height: 30px;\"><use xlink:href=\"#icon-colors\"></use></svg>
\t\t\t\t\t\t\t\t<div class=\"caption\" style=\"text-align:center;padding-top:0px;\"><h3>Document</h3><p>This documentation  describes the installation, configuration and setting</p><p style=\"padding-top: 5px;\"><a href=\"https://smartaddons.s3.amazonaws.com/userguides/so-document/index.html\" target=\"_blank\" class=\"btn btn-md btn-default\">Read more</a></p></div></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "extension/soconfig/options_stores.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1415 => 796,  1408 => 792,  1402 => 789,  1399 => 788,  1396 => 786,  1380 => 772,  1357 => 752,  1349 => 746,  1340 => 744,  1337 => 743,  1335 => 742,  1328 => 738,  1319 => 734,  1314 => 732,  1311 => 731,  1308 => 730,  1304 => 729,  1301 => 728,  1298 => 727,  1296 => 726,  1277 => 710,  1250 => 686,  1246 => 685,  1238 => 679,  1229 => 677,  1226 => 676,  1224 => 675,  1217 => 671,  1209 => 668,  1204 => 666,  1201 => 665,  1198 => 664,  1194 => 663,  1191 => 662,  1188 => 661,  1186 => 660,  1166 => 643,  1159 => 639,  1151 => 634,  1147 => 633,  1143 => 632,  1137 => 629,  1130 => 625,  1124 => 622,  1121 => 621,  1118 => 619,  1106 => 609,  1102 => 608,  1097 => 606,  1093 => 605,  1087 => 602,  1080 => 598,  1074 => 595,  1071 => 594,  1069 => 593,  1059 => 585,  1055 => 584,  1051 => 583,  1046 => 581,  1041 => 579,  1036 => 577,  1031 => 575,  1026 => 573,  1021 => 571,  1016 => 569,  1010 => 566,  1002 => 561,  996 => 558,  993 => 557,  990 => 555,  979 => 546,  975 => 545,  970 => 543,  961 => 537,  957 => 536,  953 => 535,  949 => 534,  945 => 533,  939 => 530,  931 => 525,  925 => 522,  922 => 521,  919 => 519,  908 => 510,  904 => 509,  899 => 507,  895 => 506,  890 => 504,  886 => 503,  881 => 501,  877 => 500,  872 => 498,  868 => 497,  863 => 495,  858 => 493,  854 => 492,  850 => 491,  845 => 489,  831 => 478,  825 => 475,  818 => 471,  812 => 468,  806 => 465,  800 => 462,  794 => 459,  788 => 456,  771 => 442,  767 => 441,  763 => 440,  759 => 439,  755 => 438,  750 => 436,  742 => 431,  738 => 430,  734 => 429,  730 => 428,  725 => 426,  716 => 420,  712 => 419,  708 => 418,  704 => 417,  699 => 415,  692 => 411,  686 => 408,  683 => 407,  679 => 404,  662 => 389,  654 => 384,  650 => 383,  646 => 382,  641 => 380,  633 => 375,  629 => 374,  624 => 372,  620 => 371,  615 => 369,  611 => 368,  606 => 366,  598 => 361,  594 => 360,  589 => 358,  579 => 351,  575 => 350,  570 => 348,  566 => 347,  561 => 345,  557 => 344,  552 => 342,  548 => 341,  543 => 339,  535 => 334,  531 => 333,  526 => 331,  519 => 327,  513 => 324,  510 => 323,  506 => 320,  494 => 310,  490 => 309,  486 => 308,  482 => 307,  478 => 306,  472 => 303,  464 => 298,  460 => 297,  455 => 295,  451 => 294,  445 => 291,  436 => 285,  432 => 284,  427 => 282,  420 => 278,  414 => 275,  411 => 274,  408 => 272,  396 => 262,  391 => 260,  387 => 259,  383 => 258,  379 => 257,  374 => 255,  364 => 248,  360 => 247,  355 => 245,  351 => 244,  346 => 242,  342 => 241,  337 => 239,  333 => 238,  329 => 237,  325 => 236,  320 => 234,  313 => 230,  307 => 227,  304 => 226,  301 => 224,  288 => 213,  284 => 212,  280 => 211,  276 => 210,  270 => 207,  260 => 200,  256 => 199,  252 => 198,  248 => 197,  241 => 193,  232 => 187,  228 => 186,  224 => 185,  220 => 184,  215 => 182,  208 => 177,  202 => 175,  196 => 173,  194 => 172,  183 => 168,  176 => 164,  172 => 163,  168 => 162,  163 => 160,  159 => 159,  153 => 158,  148 => 156,  145 => 155,  139 => 151,  133 => 148,  130 => 147,  127 => 145,  124 => 143,  122 => 142,  120 => 141,  118 => 140,  116 => 139,  114 => 138,  112 => 137,  110 => 136,  108 => 135,  105 => 134,  103 => 126,  100 => 125,  98 => 118,  95 => 117,  93 => 110,  90 => 109,  88 => 101,  85 => 100,  83 => 86,  79 => 84,  77 => 76,  74 => 75,  72 => 70,  69 => 69,  67 => 65,  62 => 62,  60 => 55,  55 => 52,  53 => 48,  50 => 47,  48 => 43,  45 => 42,  43 => 37,  40 => 36,  38 => 29,  34 => 27,  32 => 21,  29 => 20,  27 => 15,  24 => 14,  22 => 3,  19 => 2,);
    }
}
/* {# ==========Twig variable So Config ==============#}*/
/* */
/* {% set param_columns = { */
/* 	'1' : '1 column',*/
/* 	'2' : '2 columns',*/
/* 	'3' : '3 columns',*/
/* 	'4' : '4 columns',*/
/* 	'5' : '5 columns',*/
/* 	'6' : '6 columns',*/
/* 	'7' : '7 columns',*/
/* 	'8' : '8 columns',*/
/* 	'9' : '9 columns',*/
/* } %}*/
/* */
/* {% set param_cardGallery = { */
/* 	'1' : 'Align Left',*/
/* 	'2' : 'Align Right',*/
/* 	'3' : 'Align Bottom',*/
/* } %}*/
/* */
/* {% set param_refineSearch = { */
/* 	'0' : 'Disable ',*/
/* 	'1' : 'Image only',*/
/* 	'2' : 'Text and image',*/
/* 	'3' : 'Block light'*/
/* } %}*/
/* */
/* */
/* {% set param_scssFormat = { */
/* 	'Expanded' : 'Expanded',*/
/* 	'Nested' : 'Nested (default)',*/
/* 	'Compressed' : 'Compressed',*/
/* 	'Compact' : 'Compact',*/
/* 	'Crunched' : 'Crunched',*/
/* } %}*/
/* */
/* {% set param_layoutStyle = { */
/* 	'full' : 'Default',*/
/* 	'fluid' : 'Layout fluid',*/
/* 	'boxed' : 'Layout boxed',*/
/* } %}*/
/* */
/* {% set param_contentbgMode = { */
/* 	'repeat' : 'Repeat',*/
/* 	'no-repeat' : 'No-Repeat',*/
/* } %}*/
/* */
/* {% set param_contentAttachment = { */
/* 	'scroll' : 'Scroll',*/
/* 	'fixed' : 'Fixed',*/
/* } %}*/
/* */
/* */
/* */
/* {% set param_productGallery = { */
/* 	'bottom' : 'Gallery Bottom',*/
/* 	'left' : 'Gallery Left',*/
/* 	'grid' : 'Gallery Grid',*/
/* 	'list' : 'Gallery List',*/
/* 	'slider' : 'Gallery Slider',*/
/* } %}*/
/* */
/* */
/* */
/* {% set param_tabsPosition = { */
/* 	'1' : 'Bottom vertical',*/
/* 	'2' : 'Bottom horizontal',*/
/* } %}*/
/* */
/* {% set param_toppanel = { */
/* 	'1' : 'Show Header Center',*/
/* 	'2' : 'Show Header Bottom',*/
/* 	'3' : 'Show All'*/
/* } %}*/
/* */
/* {% set param_catalogMode = { */
/* 	'grid-list' : 'List Column',*/
/* 	'grid-table' : 'Table Column',*/
/* 	'grid-2' : '2 Columns',*/
/* 	'grid-3' : '3 Columns',*/
/* 	'grid-4' : '4 Columns',*/
/* 	'grid-5' : '5 Columns',*/
/* } %}*/
/* */
/* */
/* {% set param_totalBanner = { */
/* 	'1' : 'Hover effect 1',*/
/* 	'2' : 'Hover effect 2',*/
/* 	'3' : 'Hover effect 3',*/
/* 	'4' : 'Hover effect 4',*/
/* 	'5' : 'Hover effect 5',*/
/* 	'6' : 'Hover effect 6',*/
/* 	'7' : 'Hover effect 7',*/
/* 	'8' : 'Hover effect 8',*/
/* 	'9' : 'Hover effect 9',*/
/* 	'10' : 'Hover effect 10',*/
/* 	'11' : 'Hover effect 11',*/
/* 	'12' : 'Hover effect 12',*/
/* } %}*/
/* */
/* {% set param_carticon = { */
/* 	'cart-1' : 'Cart Icon 1',*/
/* 	'cart-2' : 'Cart Icon 2',*/
/* 	'cart-3' : 'Cart Icon 3',*/
/* 	'cart-4' : 'Cart Icon 4',*/
/* 	'cart-5' : 'Cart Icon 5',*/
/* 	'cart-6' : 'Cart Icon 6'*/
/* } %}*/
/* */
/* {% set param_preloaderAnimation = { */
/* 	'line' : 'Default line',*/
/* 	'double-loop' : 'Double Bounce',*/
/* 	'cube-move' : 'Cube Move',*/
/* 	'circle-bounce' : 'Circle Bounce',*/
/* 	'folding-cube' : 'Cube Folding',*/
/* } %}*/
/* */
/* {% set param_blogColumn = { */
/* 	'blog-grid' : '1 Column',*/
/* 	'blog-2' : '2 Columns',*/
/* 	'blog-3' : '3 Columns',*/
/* 	'blog-4' : '4 Columns',*/
/* 	'blog-list' : 'List Column',*/
/* } %}*/
/* */
/* {% set param_articlesStyle= { */
/* 	'default' : 'Default',*/
/* 	'style1' : 'Style1',*/
/* 	'style2' : 'Style2',*/
/* 	'style3' : 'Style3',*/
/* 	'style4' : 'Style4',*/
/* 	'style5' : 'Style5',*/
/* } %}*/
/* */
/* {% set customSelectorsDesc = 'Add custom CSS selectors separated by a comma.' %}*/
/* {% set desc_Sidebar = 'If sidebar has no content. Then click Design → Layouts add content for sidebar' %}*/
/* {% set desc_NoSidebar = 'If no sidebar has not working.' %}*/
/* {% set desc_newcolor = 'New Color showing in box select color.' %}*/
/* {% set desc_notnewcolor = ' <b>Create New Color working : </b> </br> Tab Advanced → SCSS Compile = Off, Developer Compile Muti Color = Off' %}*/
/* {% set customCssDesc = 'You can use custom CSS use the custom.css file' %}*/
/* {% set customJSDesc = 'You can add custom JavaScript code. It loads your custom Javascript file after all other JavaScript files (except special hardcoded occasions), allowing you to be the last one who will affect your website.' %}*/
/* {% set desc_contact = '<a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank" style="display: block;float: left;width: auto;margin-top: 7px">Find your API Key »</a>' %}*/
/* */
/* {# //=============End variable So Config============= #}*/
/* */
/*     {#============= Tab General============== #}*/
/*     <div class="so-ultimate-fieldset so-ultimate-fieldset-basic clearfix">*/
/* 		{{ fields.fieldsetHeader(objlang.get('maintabs_general'),'icon-home')}} */
/* 		*/
/* 		<div class="so-ultimate-group-list">*/
/* 			{{ fields.fieldsetHeader(objlang.get('maintabs_general'),'sub-header',true)}} */
/* 			*/
/* 			<div class="so-ultimate-group-list__content">*/
/* 			{# General  Blocks---------------------------------------------  #}*/
/* 			<div class="so-ultimate-group-wrap so-ultimate-group-Style">*/
/* 				{{ fields.groupHeaderBox(objlang.get('general_tab_Styles'))}} */
/* 				*/
/* 				<div class="so-ultimate-field-list field-list--scheme {% if not validate %} disable-applyHome {% endif %}">*/
/* 					{{ fields.homepageSelect('soconfig_general_store','typelayout',homeStyle, objlang.get('general_homestyle')) }} */
/* 					{{ fields.select('soconfig_general_store','themecolor',totalLayoutColor,objlang.get('general_colorstyles'),'field--listcolor') }} */
/* 					*/
/* 					{{ fields.onOff('soconfig_advanced_store','newcolor_status',objlang.get('general_newcolor'), 'parent newcolor' )}} */
/* 					{{ fields.text('soconfig_advanced_store','name_color',objlang.get('general_namecolor'), 'child newcolor newcolor_1' ) }} */
/* 					{{ fields.field_colors('soconfig_advanced_store','theme_color',' ', 'child newcolor newcolor_1') }} */
/* 					*/
/* 					<div class="control-group control-group-advanced">*/
/* 						<div class="control-group-inner child newcolor newcolor_1">*/
/* 							<button onclick="buttonApplyColor();" class="btn btn-info" type="button"  {% if scsscompile %} {{ "disabled='disabled'" }} {% endif %}><i class="fa fa-magic" aria-hidden="true"></i> New Color</button>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="control-group control-group-advanced"> <div class="control-help control-group-inner child newcolor newcolor_1">*/
/* 						{% if scsscompile %}*/
/* 							{{desc_notnewcolor}}*/
/* 						{% else %}*/
/* 							{{desc_newcolor}} */
/* 						{% endif %}*/
/* 					</div></div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="so-ultimate-group-wrap so-ultimate-group-general">*/
/* 				{{ fields.groupHeaderBox(objlang.get('general_tab_general'))}} */
/* 				<div class="so-ultimate-field-list">*/
/* 					{{ fields.effectBanner('soconfig_general_store','type_banner',param_totalBanner, objlang.get('general_effectBanner') )}} */
/* 					{{ fields.onOff('soconfig_general_store','backtop',objlang.get('general_back_top') )}} */
/* 					{{ fields.onOff('soconfig_general_store','preloader',objlang.get('general_preloader'), 'parent preloader' )}} */
/* 					{{ fields.select('soconfig_general_store','preloader_animation', param_preloaderAnimation,'Preloader Styles', 'child preloader preloader_1 ')}} */
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		   */
/* 			<div class="so-ultimate-group-wrap so-ultimate-group-comingsoon">*/
/* 				{{ fields.groupHeaderBox(pages_comingsoon)}} */
/* 				*/
/* 			   <div class="so-ultimate-field-list">*/
/* 					*/
/* 					{{ fields.field_addimage('soconfig_pages_store','comingsoon_imglogo', objlang.get('pages_comingsoonLogo')) }} */
/* 					{{ fields.langTextarea(languages,'soconfig_pages_store','comingsoon_title', objlang.get('pages_comingsoonTitle')) }}*/
/* 					{{ fields.field_date('soconfig_pages_store','comingsoon_date',objlang.get('pages_comingsoonDate') ) }}*/
/* 					{{ fields.langTextarea(languages,'soconfig_pages_store','comingsoon_content', objlang.get('pages_comingsoonContent') ) }}*/
/* 						*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="so-ultimate-group-wrap so-ultimate-group-contactus">*/
/* 				{{ fields.groupHeaderBox(pages_contactus)}} */
/* 				*/
/* 			   <div class="so-ultimate-field-list">*/
/* 					{{ fields.text('soconfig_pages_store','mapaddress','Address Text') }} */
/* 					{{ fields.text('soconfig_pages_store','mapgeocode','Maps Geocode') }} */
/* 					{{ fields.text('soconfig_pages_store','mapkeys','API Key Text','',desc_contact) }} */
/* 					{{ fields.text('soconfig_pages_store','mapzoom','Maps Zoom') }} */
/* 					*/
/* 					*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			</div>*/
/* 		</div>*/
/*     </div>*/
/* 	{#============= /Tab General============== #}*/
/* 	*/
/* 	{#============= Tab Header & Footer ============== #}*/
/* 	<div class="so-ultimate-fieldset so-ultimate-fieldset-headerFooter" >*/
/* 		{{ fields.fieldsetHeader(objlang.get('maintabs_headerfoter'),'icon-header')}} */
/* 	*/
/* 		<div class="so-ultimate-group-list">*/
/* 			{{ fields.fieldsetHeader(objlang.get('maintabs_headerfoter'),'sub-header',true)}} */
/* 			*/
/* 			<div class="so-ultimate-group-list__content">*/
/* 				<div class="so-ultimate-group-wrap so-ultimate-group-header">*/
/* 					{{ fields.groupHeaderBox(objlang.get('general_tab_header'))}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.headerStyle('soconfig_general_store','typeheader',homeStyle, objlang.get('general_styleheader'),'' )}} */
/* 						{{ fields.goLink('Configure to Megamenu','index.php?route=extension/module/so_megamenu')}} */
/* 						{{ fields.onOff('soconfig_general_store','toppanel_status', objlang.get('general_stickyheader'),'parent stickyheader' )}} */
/* 						{{ fields.select('soconfig_general_store','toppanel_type',param_toppanel, objlang.get('general_positionheader'),'child stickyheader stickyheader_1') }} */
/* 						*/
/* 						{{ fields.onOff('soconfig_general_store','iconWishlist_status', objlang.get('design_iconWishlist') )}} */
/* 						{{ fields.onOff('soconfig_general_store','iconCompare_status', objlang.get('design_iconCompare') )}} */
/* 						*/
/* 						{{ fields.onOff('soconfig_general_store','phone_status', objlang.get('general_primaryMessage'), 'parent primaryMessage' )}} */
/* 						{{ fields.langTextarea(languages,'soconfig_general_store','contact_number',' ', 'child primaryMessage primaryMessage_1') }}*/
/* 						*/
/* 						{{ fields.onOff('soconfig_general_store','welcome_message_status', objlang.get('general_secondaryMessage'), 'parent secondaryMessage' )}} */
/* 						{{ fields.langTextarea(languages,'soconfig_general_store','welcome_message',' ', 'child secondaryMessage secondaryMessage_1') }}*/
/* 						*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				<div class="so-ultimate-group-wrap so-ultimate-group-footer">*/
/* 					{{ fields.groupHeaderBox(objlang.get('general_tab_footer'))}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.headerStyle('soconfig_general_store','typefooter',homeStyle, objlang.get('general_stylefooter'),'' )}} */
/* 						{{ fields.goLink('Configure Module Footer','index.php?route=extension/module/so_page_builder')}} */
/* 						{{ fields.onOff('soconfig_general_store','imgpayment_status',objlang.get('general_statusPayment' ) , 'parent statusPayment')}} */
/* 						{{ fields.field_addimage('soconfig_general_store','imgpayment',' ', 'child statusPayment statusPayment_1' ) }}*/
/* 						*/
/* 						{{ fields.langTextarea(languages,'soconfig_general_store','copyright', objlang.get('general_copyright') ) }} */
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		*/
/* 		</div>*/
/*     </div>*/
/* 	{#============= /Tab Header & Footer ============== #}*/
/* 	*/
/*     {#============= Tab Design Color============== #}*/
/*     <div class="so-ultimate-fieldset so-ultimate-fieldset-designcolor" >*/
/* 		{{ fields.fieldsetHeader(objlang.get('maintabs_layout'),'icon-colors')}} */
/* 	*/
/* 		<div class="so-ultimate-group-list">*/
/* 			{{ fields.fieldsetHeader(objlang.get('maintabs_layout'),'sub-header',true)}} */
/* 			*/
/* 			<div class="so-ultimate-group-list__content">*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox(objlang.get('design_tabLayout'))}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.select('soconfig_layout_store','layoutstyle', param_layoutStyle, objlang.get('design_layoutStyle'))}} */
/* 						{{ fields.shoppingIcon('soconfig_layout_store','iconcart',param_carticon, objlang.get('design_shoppingIcon') )}} */
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox(objlang.get('designtab_bodybackground') )}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						*/
/* 						{{ fields.field_colors('soconfig_layout_store','theme_bgcolor',objlang.get('design_backgroundColor')) }}  */
/* 						{{ fields.field_addimage('soconfig_layout_store','contentbg',' ',' ',objlang.get('desc_bodybackground')) }} */
/* 						*/
/* 						{{ fields.select('soconfig_layout_store','content_bg_mode',param_contentbgMode, objlang.get('design_backgroundSize') )}} */
/* 						{{ fields.select('soconfig_layout_store','content_attachment',param_contentAttachment, objlang.get('design_backgroundAttachment') )}} */
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox(objlang.get('designtab_headerbackground') )}} */
/* 					<div class="so-ultimate-field-list field-list--liveColors">*/
/* 						*/
/* 						{{ fields.onOff('soconfig_layout_store','headercolor_status', objlang.get('design_headerColor'),'parent headerColor' )}} */
/* 						{{ fields.liveColors('soconfig_layout_store','headerparent','Header Parent ','child headerColor headerColor_1 ' )}}  */
/* 						{{ fields.liveColors('soconfig_layout_store','headertop','Header Top','child headerColor headerColor_1 ' )}}  */
/* 						{{ fields.liveColors('soconfig_layout_store','headercenter','Header Middle','child headerColor headerColor_1 ' )}}  */
/* 						{{ fields.liveColors('soconfig_layout_store','headerbottom','Header Bottom','child headerColor headerColor_1 ' )}}  */
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		*/
/* 		</div>*/
/*     </div>*/
/* 	{#============= /Tab Background============== #}*/
/* 	*/
/* 	*/
/* 	{#============= Tab Fonts============== #}*/
/*     <div class="so-ultimate-fieldset so-ultimate-fieldset-fonts">*/
/* 		{{ fields.fieldsetHeader(objlang.get('maintabs_fonts'),'icon-font')}} */
/* 	*/
/* 		<div class="so-ultimate-group-list">*/
/* 			{{ fields.fieldsetHeader(objlang.get('maintabs_fonts'),'sub-header',true)}} */
/* 			*/
/* 			<div class="so-ultimate-group-list__content">*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox('Body')}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.onOff('soconfig_fonts_store','body_status','Enable','parent fontBody' )}}*/
/* 						{{ fields.gfonts('soconfig_fonts_store','body_font','child fontBody fontBody_1')}}*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox('Headings ')}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.onOff('soconfig_fonts_store','h1_font_status','Headings 1','parent h1font' )}}*/
/* 						{{ fields.gfonts('soconfig_fonts_store','h1_font','child fontheading h1font h1font_1')}}*/
/* 						*/
/* 						{{ fields.onOff('soconfig_fonts_store','h2_font_status','Headings 2','parent h2font' )}}*/
/* 						{{ fields.gfonts('soconfig_fonts_store','h2_font','child h2font h2font_1')}}*/
/* 						*/
/* 						{{ fields.onOff('soconfig_fonts_store','h3_font_status','Headings 3','parent h3font' )}}*/
/* 						{{ fields.gfonts('soconfig_fonts_store','h3_font','child h3font h3font_1')}}*/
/* 						*/
/* 						{{ fields.onOff('soconfig_fonts_store','h4_font_status','Headings 4','parent h4font' )}}*/
/* 						{{ fields.gfonts('soconfig_fonts_store','h4_font','child h4font h4font_1')}}*/
/* 						*/
/* 						*/
/* 					</div>*/
/* 				</div>	*/
/* 				*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox('Main navigation')}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.onOff('soconfig_fonts_store','navigation_font_status','Enable','parent naviFont' )}}*/
/* 						{{ fields.gfonts('soconfig_fonts_store','navigation_font','child naviFont naviFont_1')}}*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox('Store')}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.onOff('soconfig_fonts_store','moduleTitle_font_status','Widgets Titles / Module title','parent moduleTitleFont' )}}*/
/* 						{{ fields.gfonts('soconfig_fonts_store','moduleTitle_font','child moduleTitleFont moduleTitleFont_1')}}*/
/* 						*/
/* 						{{ fields.onOff('soconfig_fonts_store','productTitle_font_status','Product title','parent productTitleFont' )}}*/
/* 						{{ fields.gfonts('soconfig_fonts_store','productTitle_font','child productTitleFont productTitleFont_1')}}*/
/* 						*/
/* 						{{ fields.onOff('soconfig_fonts_store','productPrice_font_status','Product price','parent productPriceFont' )}}*/
/* 						{{ fields.gfonts('soconfig_fonts_store','productPrice_font','child productPriceFont productPriceFont_1')}}*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox('Custom Selectors')}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.onOff('soconfig_fonts_store','custom_font_status','Enable','parent fontcustom' )}}*/
/* 						{{ fields.gfonts('soconfig_fonts_store','custom_font','child fontcustom fontcustom_1')}}*/
/* 						{{ fields.textarea('soconfig_fonts_store','customFont_content','Custom Selectors',customSelectorsDesc,'child fontcustom fontcustom_1') }} */
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox('Update Font List')}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						<div class="control-group group-style-update_font">*/
/* 							<div class="control-group-inner">*/
/* 								<div class="controls"><a id="update_fonts" class="btn btn-primary btn-update-so-ultimate-fonts" href="#" target="_self">One Click update</a></div>*/
/* 							</div>*/
/* 							<div class="control-help">Click this button to refresh the list of Google fonts.</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>	*/
/* 			</div>				*/
/*    */
/* 		</div>*/
/*    </div>*/
/* 	{#============= /Tab Fonts============== #}*/
/* 	*/
/* 	*/
/* 	{#============= Tab Store============== #}*/
/*     <div class="so-ultimate-fieldset so-ultimate-fieldset-store" >*/
/* 		{{ fields.fieldsetHeader(objlang.get('maintabs_products'),'icon-shop')}} */
/* 	*/
/* 		<div class="so-ultimate-group-list">*/
/* 			{{ fields.fieldsetHeader(objlang.get('maintabs_products'),'sub-header',true)}} */
/* 			*/
/* 			<div class="so-ultimate-group-list__content">*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox(pages_common)}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.select('soconfig_pages_store','catalog_display_sidebar', {'disable' : 'No Sidebar','left':'Sidebar Left','right':'Sidebar Right','all':'Sidebar All'},objlang.get('product_catalog_sidebar_display'),'',desc_Sidebar )}} */
/* 						{{ fields.select('soconfig_pages_store','catalog_col_position', {'outside' : 'Outside content','inside':'Inside content'}, objlang.get('product_catalog_col_position'),'', desc_NoSidebar)}} */
/* 						{{ fields.select('soconfig_pages_store','catalog_col_type', {'default' : 'Default','off_canvas':'Column Off Canvas'}, objlang.get('product_catalog_col_type'),'', desc_NoSidebar )}} */
/* 						{{ fields.select('soconfig_pages_store','catalog_sidebar_sticky', {'disable' : 'Disable','left':'Sidebar Left','right':'Sidebar Right','all':'Sidebar All'},objlang.get('product_catalog_sidebar_sticky'),'', desc_NoSidebar )}} */
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox(pages_subcategory)}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.onOff('soconfig_pages_store','featured_cate_status','Display Category Featured' )}} */
/* 						{{ fields.select('soconfig_pages_store','lstimg_cate_status', {0:'Disable',1 : 'Show Description',2 : 'Show all'},objlang.get('product_catalog_show') )}} */
/* 						{{ fields.select('soconfig_pages_store','product_catalog_refine', param_refineSearch ,objlang.get('product_catalog_refine') )}} */
/* 						{{ fields.select('soconfig_pages_store','catalog_refine_number',param_columns, objlang.get('product_catalog_refine_col') ) }} */
/* 					</div>*/
/* 				</div>	*/
/* 				*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox(pages_pro_listings)}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.select('soconfig_pages_store','product_catalog_mode', param_catalogMode, objlang.get('product_catalog_mode') )}} */
/* 						{{ fields.select('soconfig_pages_store','card_gallery',param_cardGallery, objlang.get('product_catalog_gallery'))}} */
/* 						{{ fields.select('soconfig_pages_store','desktop_addcart_position',  {'left':'Align Left','right' : 'Align Right','center' : 'Align Center','bottom' : 'Align Bottom'},objlang.get('product_catalog_cartinfo'))}} */
/* 						{{ fields.onOff('soconfig_pages_store','placeholder_status', objlang.get('product_catalog_placeholder'),'parent placeholder')}} */
/* 						{{ fields.field_addimage('soconfig_pages_store','placeholder_img',' ','child placeholder placeholder_1') }} */
/* 						*/
/* 						<div class="control-group control-group-element">*/
/* 							<div class="control-group-inner ">*/
/* 								<label class="control-label">Element visibility</label>*/
/* 								<div class="controls ">*/
/* 									<table class="table" cellspacing="0">*/
/* 										<thead>*/
/* 											<tr class="s_open">*/
/* 												<th width="260">Element</th><th  class="align_center">Default</th>*/
/* 											</tr>*/
/* 										</thead>*/
/* 										<tbody>*/
/* 											<tr class="s_open s_nosep tbProductElementVisibilityCartButton">*/
/* 												<td>Add to cart button</td><td>{{ fields.checkbox('soconfig_pages_store','listing_cart_status')}} </td>*/
/* 											</tr>*/
/* 											<tr class="s_open s_nosep tbProductElementVisibilityCompareButton">*/
/* 												<td>Compare button</td><td>{{ fields.checkbox('soconfig_pages_store','listing_compare_status')}} </td>*/
/* 											</tr>*/
/* 											<tr class="s_open s_nosep tbProductElementVisibilityWishlistButton">*/
/* 												<td>Wishlist button</td><td>{{ fields.checkbox('soconfig_pages_store','listing_wishlist_status')}} </td>*/
/* 											</tr>*/
/* 											<tr class="s_open s_nosep tbProductElementVisibilityWishlistButton">*/
/* 												<td>QuickView button</td><td>{{ fields.checkbox('soconfig_pages_store','listing_quickview_status')}} </td>*/
/* 											</tr>*/
/* 											<tr class="s_open s_nosep">*/
/* 												<td>Rating</td><td>{{ fields.checkbox('soconfig_pages_store','listing_rating_status')}} </td>*/
/* 											</tr>*/
/* 											<tr class="s_open s_nosep">*/
/* 												<td>Discount label</td><td>{{ fields.checkbox('soconfig_pages_store','listing_discount_status')}} </td>*/
/* 											</tr>*/
/* 											*/
/* 											<tr class="s_open s_nosep">*/
/* 												<td>Countdown </td><td>{{ fields.checkbox('soconfig_pages_store','listing_countdown_status')}} </td>*/
/* 											</tr>*/
/* 											<tr class="s_open s_nosep">*/
/* 												<td>Image gallery</td><td>{{ fields.checkbox('soconfig_pages_store','listing_gallery_status')}} </td>*/
/* 											</tr>*/
/* 										</tbody>*/
/* 									</table>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="so-ultimate-group-wrap">*/
/* 					{{ fields.groupHeaderBox(pages_pro_detail)}} */
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.select('soconfig_pages_store','thumbnails_position', param_productGallery, objlang.get('product_catalog_productgallery') )}} */
/* 						{{ fields.onOff('soconfig_pages_store','radio_style',objlang.get('product_catalog_checkradio') )}} */
/* 						{{ fields.onOff('soconfig_pages_store','product_enablezoom',objlang.get('product_catalog_zoomimage'))}} */
/* 						*/
/* 						{{ fields.onOff('soconfig_pages_store','product_sold',objlang.get('text_productsold'))}} */
/* 						*/
/* 						{{ fields.onOff('soconfig_pages_store','product_enablesizechart',objlang.get('product_catalog_sizechart'),'parent sizechart')}} */
/* 						{{ fields.field_addimage('soconfig_general_store','img_sizechart',' ','child sizechart sizechart_1') }} */
/* 						*/
/* 						{{ fields.select('soconfig_pages_store','tabs_position', param_tabsPosition,objlang.get('product_catalog_tabs') )}} */
/* 						{{ fields.onOff('soconfig_pages_store','product_enableshowmore',objlang.get('product_catalog_showmore') )}} */
/* 						*/
/* 						{{ fields.onOff('soconfig_pages_store','product_enableshipping',objlang.get('product_catalog_shipping') ,'parent content_shipping')}} */
/* 						{{ fields.langTextarea(languages,'soconfig_pages_store','product_contentshipping',' ','child content_shipping content_shipping_1') }}*/
/* 						*/
/* 						{{ fields.onOff('soconfig_pages_store','product_page_button',objlang.get('product_catalog_shared'),'parent content_social')}} */
/* 						{{ fields.langTextarea(languages,'soconfig_pages_store','product_socialshare',' ','child content_social content_social_1') }}*/
/* 						*/
/* 						{{ fields.onOff('soconfig_pages_store','related_status',objlang.get('product_catalog_related'),'parent relatedProduct')}} */
/* 						{{ fields.devices('soconfig_pages_store','product_related_column_','Related products per row','child relatedProduct relatedProduct_1') }} */
/* 					</div>*/
/* 				</div>	*/
/* 				*/
/* 			</div>*/
/*        */
/* 		</div>*/
/*     </div>*/
/* 	{#============= Tab Store============== #}*/
/* 	*/
/* 	{#============= Tab Blog============== #}*/
/* 	<div class="so-ultimate-fieldset so-ultimate-fieldset-social">*/
/* 		{{ fields.fieldsetHeader(objlang.get('maintabs_blog'),'icon-blog')}} */
/* 		*/
/* 		<div class="so-ultimate-group-list">*/
/* 			{{ fields.fieldsetHeader(objlang.get(maintabs_blog),'sub-header',true)}} */
/* 			*/
/* 			*/
/* 			<div class="so-ultimate-group-list__content">*/
/* 				<div class="so-ultimate-group-wrap so-ultimate-group-social">*/
/* 					{{ fields.groupHeaderBox('Blog Category')}} */
/* 					*/
/* 				   <div class="so-ultimate-field-list">*/
/* 						{{ fields.text('soconfig_social_store','blogImgSize','Category Images Size',' ','E.g. Images Size: 600x340') }} */
/* 						{{ fields.select('soconfig_social_store','blogColumn', param_blogColumn,'Blog Grid View')}} */
/* 						{{ fields.onOff('soconfig_social_store','blogDateTime','Show Date Timer' )}}*/
/* 						{{ fields.onOff('soconfig_social_store','blogAuthor','Show Post Author' )}}*/
/* 						{{ fields.onOff('soconfig_social_store','blogReadmore','Show Readmore' )}}*/
/* 						*/
/* 					</div>	*/
/* 					*/
/* 				</div>*/
/* 				<div class="so-ultimate-group-wrap so-ultimate-group-social">*/
/* 					{{ fields.groupHeaderBox('Blog Articles')}} */
/* 				   <div class="so-ultimate-field-list">*/
/* 						{{ fields.onOff('soconfig_social_store','blogSocial','Social Share' )}}*/
/* 						{{ fields.blogArticle('soconfig_social_store','blogArticles', param_articlesStyle,'Blog Articles Style')}} */
/* 					*/
/* 					</div>	*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{#============= /Tab Blog============== #}*/
/*    */
/* 	{#============= Tab Social============== #}*/
/* 	<div class="so-ultimate-fieldset so-ultimate-fieldset-social">*/
/* 		{{ fields.fieldsetHeader(objlang.get('maintabs_social'),'icon-social')}} */
/* 		*/
/* 		<div class="so-ultimate-group-list">*/
/* 			{{ fields.fieldsetHeader(objlang.get('maintabs_social'),'sub-header',true)}} */
/* 			*/
/* 			*/
/* 			<div class="so-ultimate-group-list__content">*/
/* 				<div class="so-ultimate-group-wrap so-ultimate-group-social">*/
/* 					{{ fields.groupHeaderBox('Sidebar social')}} */
/* 					*/
/* 				   <div class="so-ultimate-field-list">*/
/* 						{{ fields.select('soconfig_social_store','social_sidebar', {0:'Disable',1 : 'Sidebar Left',2 : 'Sidebar Right'},'Enable Social Sidebar')}} */
/* 						*/
/* 						{{ fields.onOff('soconfig_social_store','social_fb_status','Show Facebook','parent social_fb' )}}*/
/* 						*/
/* 						{{ fields.text('soconfig_social_store','facebook','Facebook Username','child social_fb social_fb_1') }} */
/* 						*/
/* 						{{ fields.onOff('soconfig_social_store','social_twitter_status','Show Twitter','parent social_tt' )}}*/
/* 						*/
/* 						{{ fields.text('soconfig_social_store','twitter','Twitter username','child social_tt social_tt_1') }} */
/* 						*/
/* 						{{ fields.onOff('soconfig_social_store','social_custom_status','Show Youtube','parent social_custom' )}} */
/* 						*/
/* 						{{ fields.text('soconfig_social_store','video_code','Video Youtube','child social_custom social_custom_1','E.g. https://www.youtube.com/watch?v=Wdtw_A5FDGs') }}*/
/* 						*/
/* 						{{ fields.onOff('soconfig_social_store','social_instagram_status','Show Instagram','parent social_instagram' )}} */
/* 						{{ fields.text('soconfig_social_store','instagram_user','Instagram Users ID','child social_instagram social_instagram_1') }} */
/* 						{{ fields.text('soconfig_social_store','instagram_token','Access Token','child social_instagram social_instagram_1') }} */
/* 					</div>	*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{#============= /Tab Social============== #}*/
/* 	{#============= Tab Custom============== #}*/
/* 	<div class="so-ultimate-fieldset so-ultimate-fieldset-custom">*/
/* 		{{ fields.fieldsetHeader(objlang.get('maintabs_custom'),'icon-custom')}} */
/* 		*/
/* 		<div class="so-ultimate-group-list">*/
/* 			{{ fields.fieldsetHeader(objlang.get('maintabs_custom'),'sub-header',true)}} */
/* 			*/
/* 			<div class="so-ultimate-group-list__content">*/
/* 				<div class="so-ultimate-group-wrap so-ultimate-group-customcode">*/
/* 				{{ fields.groupHeaderBox(objlang.get('maintabs_custom'))}} */
/* 				*/
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.onOff('soconfig_custom_store','cssinput_status','Location Header on page ','parent customcss' )}} */
/* 						{{ fields.textarea('soconfig_custom_store','cssinput_content','Script contents',customCssDesc,'child customcss customcss_1') }} */
/* 						*/
/* 						{{ fields.onOff('soconfig_custom_store','jsinput_status','Location Footer on page ','parent customjs' )}}*/
/* 						{{ fields.textarea('soconfig_custom_store','jsinput_content','Script contents','','child customjs customjs_1') }}*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* 	{#============= /Tab Custom============== #}*/
/* 	*/
/* 	{#============= Tab Advanced============== #}*/
/* 	<div class="so-ultimate-fieldset so-ultimate-fieldset-advanced">*/
/* 		{{ fields.fieldsetHeader(objlang.get('maintabs_advanced'),'icon-wrench','')}} */
/* 		*/
/* 		<div class="so-ultimate-group-list">*/
/* 			{{ fields.fieldsetHeader(objlang.get('maintabs_advanced'),'sub-header',true)}} */
/* 		*/
/* 			<div class="so-ultimate-group-list__content">*/
/* 				<div class="so-ultimate-group-wrap so-ultimate-group-advanced">*/
/* 					{{ fields.groupHeaderBox('SCSS Compile')}} */
/* 					*/
/* 					<div class="so-ultimate-field-list">*/
/* 						{{ fields.onOff('soconfig_advanced_store','scsscompile','SCSS Compile' )}} */
/* 						{{ fields.select('soconfig_advanced_store','scssformat', param_scssFormat,'CSS Format')}} */
/* 						{{ fields.onOff('soconfig_advanced_store','compileMutiColor','Developer Compile Muti Color' )}} */
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				<div class="so-ultimate-group-wrap so-ultimate-group-performance">*/
/* 					{{ fields.groupHeaderBox('Performance')}} */
/* 					*/
/* 					<div class="so-ultimate-field-list">*/
/* 						*/
/* 						{{ fields.onOff('soconfig_advanced_store','cssminify','Show CSS Minify','parent cssminify' )}} */
/* 						*/
/* 						<div class="control-group control-group-advanced ">*/
/* 							<!-- cssminify -->*/
/* 							<div id="tab-field-cssminify" class="control-group-inner child cssminify cssminify_1">*/
/* 								*/
/* 								<div class="form-group2">*/
/* 									<a onclick="add_cssExclude();" class="btn btn-default btn-sm"> <i class="fa fa-file-o" ></i> Add file css</a>			*/
/* 								</div>*/
/* 								<table class="table table-hover" id="listgroup-cssminify">*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<td class="first">Exclude file css</td>*/
/* 											<td >Delete</td>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody >*/
/* 									{% set listcss_row = 0 %}*/
/* 									{% if cssExcludes and  cssExcludes !=''%}*/
/* */
/* 										{% for cssExclude in cssExcludes %}*/
/* 											{% if cssExclude.namecss is not empty %}*/
/* 												*/
/* 													<tr id="listcssExclude{{listcss_row}}">*/
/* 														<td class="first">*/
/* 															<input class="form-control" type="text" class="form-control" value="{{cssExclude.namecss}}" name="soconfig_advanced_store[cssExclude][{{listcss_row}}][namecss]">*/
/* 														</td>*/
/* 														<td>*/
/* 															<a onclick="$('#listcssExclude{{listcss_row}}').remove();" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></a>*/
/* 														</td>*/
/* 													</tr>*/
/* 												*/
/* 											{%set listcss_row = listcss_row + 1 %}*/
/* 											{% endif %}*/
/* 										{% endfor %}	*/
/* 									{% endif %}*/
/* 									</tbody>*/
/* 									<tfoot></tfoot>*/
/* 								</table>*/
/* */
/* 								*/
/* 								<script type="text/javascript">*/
/* 								var listcss_row = {{listcss_row}} ;*/
/* 								var languages = {{languages|json_encode}} ;*/
/* 								*/
/* 								function add_cssExclude() {*/
/* */
/* 									html  = '<tbody id="listcssExclude' + listcss_row + '">';*/
/* 									html += '  <tr>';*/
/* 									html += '    <td>';*/
/* 									html += '		<input class="form-control" type="text" value="catalog/view/javascript/font-awesome/css/font-awesome.min.css" name="soconfig_advanced_store[cssExclude][' + listcss_row + '][namecss]">';*/
/* 									html += '    </td>';*/
/* 									html += '    <td><a onclick="$(\'#listcssExclude' + listcss_row + '\').remove();" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></a></td>';*/
/* 									html += '  </tr>';*/
/* 									html += '</tbody>';*/
/* 									*/
/* 									$('#listgroup-cssminify tfoot').before(html);*/
/* 									listcss_row++;*/
/* 								}*/
/* 								</script> */
/* 								*/
/* 							</div>*/
/* 							<!--  END cssminify -->*/
/* 							*/
/* 						*/
/* 						</div>*/
/* 						*/
/* 						{{ fields.onOff('soconfig_advanced_store','jsminify','Show JS Minify','parent jsminify' )}} */
/* 						*/
/* 						<div class="control-group control-group-advanced">*/
/* 							<!-- jsminify -->*/
/* 							<div id="tab-field-jsminify" class="form-group child jsminify jsminify_1">*/
/* 								<div class="form-group2">*/
/* 									<a onclick="add_jsExclude();" class="add-item-payment btn btn-default btn-sm"> <i class="fa fa-file-o" ></i> Add file JS</a>			*/
/* 								</div>*/
/* 								<table class="table table-hover" id="listgroup-jsminify">*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<td class="first" >Exclude file Javascript</td>*/
/* 											<td>Delete</td>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody >*/
/* 									{% set listjs_row = 0 %}*/
/* 									{% if jsExcludes and  jsExcludes !=''%}*/
/* 										*/
/* 										{% for jsExclude in jsExcludes %}*/
/* 											{% if jsExclude.namecss is not empty %}*/
/* 												*/
/* 													<tr id="listjsExclude{{listjs_row}}">*/
/* 														<td class="first">*/
/* 															<input class="form-control" type="text" class="form-control" value="{{jsExclude.namecss}}" name="soconfig_advanced_store[jsExclude][{{listjs_row}}][namecss]">*/
/* 														</td>*/
/* 														*/
/* 														<td>*/
/* 															<a onclick="$('#listjsExclude{{listjs_row}}').remove();" class="btn btn-danger  btn-sm"><i class="fa fa-close"></i></a>*/
/* 														</td>*/
/* 													</tr>*/
/* 												*/
/* 											{%set listjs_row = listjs_row + 1 %}*/
/* 											{% endif %}*/
/* 										{% endfor %}	*/
/* 									{% endif %}*/
/* 									</tbody>*/
/* 									<tfoot></tfoot>*/
/* 								</table>*/
/* */
/* 								*/
/* 								<script type="text/javascript">*/
/* 								var listjs_row = {{listjs_row}} ;*/
/* 								*/
/* 								function add_jsExclude() {*/
/* */
/* 									html  = '<tbody id="listjsExclude' + listjs_row + '">';*/
/* 									html += '  <tr>';*/
/* 									html += '    <td>';*/
/* 									html += '		<input class="form-control" type="text" value="catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js" name="soconfig_advanced_store[jsExclude][' + listjs_row + '][namecss]">';*/
/* 									html += '    </td>';*/
/* 									html += '    <td><a onclick="$(\'#listjsExclude' + listjs_row + '\').remove();" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></a></td>';*/
/* 									html += '  </tr>';*/
/* 									html += '</tbody>';*/
/* 									*/
/* 									$('#listgroup-jsminify tfoot').before(html);*/
/* 									listjs_row++;*/
/* 								}*/
/* 								</script> */
/* 							</div>*/
/* 							<!--  END jsminify -->*/
/* 							<div class="control-group-inner" >*/
/* 								<a href="{{clear_cache}}"><button class="btn btn-warning btn-sm" type="button"><i class="fa fa-eraser"></i> Clear Minify</button></a>*/
/* 								<p class="control-help">Delete all of the theme css, js file path: catalog/view/theme/so-emarket/css/minify</p>*/
/* 								*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{#============= End Tab Advanced============== #}*/
/* 	*/
/* 	{#============= Tab Support============== #}*/
/* 	<div class="so-ultimate-fieldset so-ultimate-fieldset-custom">*/
/* 		{{ fields.fieldsetHeader(objlang.get('maintabs_support'),'next-account')}} */
/* 		*/
/* 		<div class="so-ultimate-group-list">*/
/* 			{{ fields.fieldsetHeader(objlang.get('maintabs_support'),'sub-header',true)}} */
/* 			*/
/* 			<div class="so-ultimate-group-list__content">*/
/* 				<div class="so-ultimate-group-wrap so-ultimate-group-customcode">*/
/* 				{{ fields.groupHeaderBox(objlang.get('maintabs_support'))}} */
/* 				*/
/* 					<div class="so-ultimate-field-list">*/
/* 						<div class="control-group control-group-advanced">*/
/* 							<div class="control-group-inner ">*/
/* 								<div class="thumbnail">*/
/* 								<svg class="next-icon" style="    margin: 20px auto 10px;display: block;width: 30px;height: 30px;"><use xlink:href="#icon-blog"></use></svg>*/
/* 								<div class="caption" style="text-align:center;padding-top:0px;"><h3>Tickets</h3><p>Want to communicate one-to-one with our tech people? Then open a support ticket.</p><p style="padding-top: 5px;"><a href="http://support.opencartworks.com/" target="_blank" class="btn btn-md btn-default">Open a Ticket</a></p></div></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="control-group control-group-advanced">*/
/* 							<div class="control-group-inner ">*/
/* 								<div class="thumbnail">*/
/* 								<svg class="next-icon" style="    margin: 20px auto 10px;display: block;width: 30px;height: 30px;"><use xlink:href="#next-account"></use></svg>*/
/* 								<div class="caption" style="text-align:center;padding-top:0px;"><h3>Pre-Sale</h3><p>Have a brilliant idea for your OpenCart? Our team of developers can make it real.</p><p style="padding-top: 5px;"><a href="http://support.opencartworks.com/" target="_blank" class="btn btn-md btn-default">Drive More Sales</a></p></div></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="control-group control-group-advanced">*/
/* 							<div class="control-group-inner ">*/
/* 								<div class="thumbnail">*/
/* 								<svg class="next-icon" style="    margin: 20px auto 10px;display: block;width: 30px;height: 30px;"><use xlink:href="#icon-colors"></use></svg>*/
/* 								<div class="caption" style="text-align:center;padding-top:0px;"><h3>Document</h3><p>This documentation  describes the installation, configuration and setting</p><p style="padding-top: 5px;"><a href="https://smartaddons.s3.amazonaws.com/userguides/so-document/index.html" target="_blank" class="btn btn-md btn-default">Read more</a></p></div></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 	</div>*/
/* 	{#============= /Tab Support============== #}*/
/* */
