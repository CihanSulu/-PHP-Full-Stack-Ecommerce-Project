<?php

/* so-mobile/template/common/footer.twig */
class __TwigTemplate_2f3f98a33342d80c2ff64b7ce9b231c62777db6fe0168e78ec03ada157f066ae extends Twig_Template
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
        echo "\t\t<div class=\"container footer-content\">

\t\t\t";
        // line 4
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mphone_status"), "method") || $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "memail_status"), "method"))) {
            // line 5
            echo "\t\t\t<div class=\"footernav-top\">
\t\t\t\t<div class=\"need-help\">
\t\t\t\t\t<p>";
            // line 7
            echo (isset($context["text_needhelp"]) ? $context["text_needhelp"] : null);
            echo "</p>
\t\t\t\t\t<div class=\"nh-contact\">
\t\t\t\t\t\t";
            // line 9
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mphone_status"), "method")) {
                // line 10
                echo "\t\t\t\t\t\t\t<a href=\"tel:";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mphone_text"), "method");
                echo "\"><i class=\"fa fa-phone\"></i> ";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mphone_text"), "method");
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "memail_status"), "method")) {
                // line 13
                echo "\t\t\t\t\t\t\t<a href=\"mailto:";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "memail_text"), "method");
                echo "\" class=\"need-help-padding\" target=\"_top\"><i class=\"fa fa-envelope-o\"></i>  ";
                echo (isset($context["text_emailus"]) ? $context["text_emailus"] : null);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 19
        echo "
\t\t\t";
        // line 20
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "customfooter_status"), "method")) {
            // line 21
            echo "\t\t\t<div class=\"footernav-social\">
\t\t\t\t";
            // line 22
            echo (isset($context["customfooter_text"]) ? $context["customfooter_text"] : null);
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 25
        echo "
\t\t\t";
        // line 26
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menufooter_status"), "method")) {
            // line 27
            echo "\t\t\t<div class=\"footernav-midde\">
\t\t\t\t<ul class=\"footer-link-list row\">
\t\t\t\t";
            // line 29
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "footermenus"), "method")) {
                // line 30
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "footermenus"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
                    // line 32
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menuitem"], "name", array()));
                    foreach ($context['_seq'] as $context["nameid"] => $context["menuname"]) {
                        // line 33
                        echo "\t\t\t\t\t\t\t";
                        if (($context["nameid"] == (isset($context["lang_id"]) ? $context["lang_id"] : null))) {
                            // line 34
                            echo "\t\t\t\t\t\t\t<li class=\"col-xs-6\"><a href=\"";
                            echo $this->getAttribute($context["menuitem"], "link", array());
                            echo "\">";
                            echo $context["menuname"];
                            echo "</a></li>
\t\t\t\t\t\t\t";
                        }
                        // line 36
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nameid'], $context['menuname'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        }
        // line 42
        echo "
\t\t\t<div class=\"footernav-bottom\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t";
        // line 45
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mimgpayment"), "method")) {
            // line 46
            echo "\t\t\t\t\t\t<p class=\"nomargin\"><img alt=\"Footer Image\" class=\"form-group\" src=\"image/";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mimgpayment"), "method");
            echo "\"></p>
\t\t\t\t\t";
        }
        // line 48
        echo "
\t\t\t\t\t";
        // line 49
        if (twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mcopyright"), "method"))) {
            // line 50
            echo "\t\t\t\t\t\t";
            echo (isset($context["powered"]) ? $context["powered"] : null);
            echo "
\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t";
            echo twig_replace_filter($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "mcopyright"), "method")), "method"), array("{year}" => twig_date_format_filter($this->env, "now", "Y")));
            echo "
\t\t\t\t\t";
        }
        // line 54
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t

\t</div>
\t<!-- End Main Content -->
\t
\t</div>
\t<!-- End Main wrapper -->
\t
\t


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 54,  153 => 52,  147 => 50,  145 => 49,  142 => 48,  136 => 46,  134 => 45,  129 => 42,  124 => 39,  121 => 38,  115 => 37,  109 => 36,  101 => 34,  98 => 33,  93 => 32,  89 => 31,  86 => 30,  84 => 29,  80 => 27,  78 => 26,  75 => 25,  69 => 22,  66 => 21,  64 => 20,  61 => 19,  55 => 15,  47 => 13,  44 => 12,  36 => 10,  34 => 9,  29 => 7,  25 => 5,  23 => 4,  19 => 2,);
    }
}
/* {# =========== Show Footer ==============#}*/
/* 		<div class="container footer-content">*/
/* */
/* 			{% if soconfig.get_settings('mphone_status') or soconfig.get_settings('memail_status') %}*/
/* 			<div class="footernav-top">*/
/* 				<div class="need-help">*/
/* 					<p>{{ text_needhelp }}</p>*/
/* 					<div class="nh-contact">*/
/* 						{% if soconfig.get_settings('mphone_status') %}*/
/* 							<a href="tel:{{soconfig.get_settings('mphone_text')}}"><i class="fa fa-phone"></i> {{soconfig.get_settings('mphone_text')}}</a>*/
/* 						{% endif %}*/
/* 						{% if soconfig.get_settings('memail_status') %}*/
/* 							<a href="mailto:{{soconfig.get_settings('memail_text')}}" class="need-help-padding" target="_top"><i class="fa fa-envelope-o"></i>  {{text_emailus}}</a>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endif %}*/
/* */
/* 			{% if soconfig.get_settings('customfooter_status') %}*/
/* 			<div class="footernav-social">*/
/* 				{{customfooter_text}}*/
/* 			</div>*/
/* 			{% endif %}*/
/* */
/* 			{% if soconfig.get_settings('menufooter_status') %}*/
/* 			<div class="footernav-midde">*/
/* 				<ul class="footer-link-list row">*/
/* 				{% if soconfig.get_settings('footermenus') %}*/
/* 					*/
/* 					{% for menuitem in soconfig.get_settings('footermenus') %}*/
/* 						{% for nameid, menuname in menuitem.name %}*/
/* 							{% if nameid == lang_id %}*/
/* 							<li class="col-xs-6"><a href="{{ menuitem.link }}">{{ menuname }}</a></li>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					{% endfor %}*/
/* 				{% endif %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			{% endif %}*/
/* */
/* 			<div class="footernav-bottom">*/
/* 				<div class="text-center">*/
/* 					{% if soconfig.get_settings('mimgpayment') %}*/
/* 						<p class="nomargin"><img alt="Footer Image" class="form-group" src="image/{{soconfig.get_settings('mimgpayment')}}"></p>*/
/* 					{% endif %}*/
/* */
/* 					{% if soconfig.get_settings('mcopyright') is empty %}*/
/* 						{{ powered }}*/
/* 					{% else %}*/
/* 						{{ soconfig.decode_entities(soconfig.get_settings('mcopyright'))|replace({'{year}': "now"|date("Y")}) }}*/
/* 					{% endif %}*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	*/
/* */
/* 	</div>*/
/* 	<!-- End Main Content -->*/
/* 	*/
/* 	</div>*/
/* 	<!-- End Main wrapper -->*/
/* 	*/
/* 	*/
/* */
/* */
/* </body>*/
/* </html>*/
