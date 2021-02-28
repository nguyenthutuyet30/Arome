<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\arome/themes/aroma/partials/product/product-card.htm */
class __TwigTemplate_9e9f87b803cddcc4c5007f52d91792180a9b0682aeec557ee3288a701a48ccbe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 6, "component" => 30, "set" => 32, "for" => 111);
        $filters = array("escape" => 5, "number_format" => 34);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'component', 'set', 'for'],
                ['escape', 'number_format'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<div class=\"herboil__product-item\">
    <div class=\"product-img\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "product-page"], "method", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
            ";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 6))) {
            // line 7
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 7), "path", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\" itemprop=\"image\"
                alt=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 8), "description", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 8), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\">
            ";
        }
        // line 10
        echo "        </a>
        
        <div class=\"gift-ads\">
            <ul>
                <li style=\"margin-top: 5px;\">
                ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "sale", [], "any", false, false, true, 15)) {
            // line 16
            echo "                    <span class=\"tooltip\">
                        <i class=\"fal fa-gift\"></i>
                        <span class=\"cont\" style=\"margin: 0 auto;\">
                            ";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "sale", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "
                        </span>
                    </span>
                ";
        }
        // line 23
        echo "                </li>
            </ul>
        </div>
        
    </div>
    <div class=\"product-info\">
        <h4 class=\"product-title\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "product-page"], "method", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</a></h4>
        <p class=\"product-bmi\" ";
        // line 30
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Movie"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo ">(50mg/ml)</p>
        <div class=\"product-price\">
            ";
        // line 32
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, true, 32), "first", [], "method", false, false, true, 32);
        // line 33
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, true, 33)) {
            // line 34
            echo "            <span class=\"regular-price\"> ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 34)], "method", false, false, true, 34), 34, $this->source), 0, "", "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</span>
            ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 35) > 0)) {
                // line 36
                echo "            <del class=\"price price-sale\"> ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 36)], "method", false, false, true, 36), 36, $this->source), 0, "", "."), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "</del>
            ";
            }
            // line 38
            echo "            ";
        }
        // line 39
        echo "        </div>
    </div>
    <div class=\"product-action\">
        ";
        // line 42
        $context["countWL"] = twig_get_attribute($this->env, $this->source, ($context["Wishlist"] ?? null), "countWishlist", [0 => twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 42)], "method", false, false, true, 42);
        // line 43
        echo "        ";
        $context["checkWL"] = twig_get_attribute($this->env, $this->source, ($context["Wishlist"] ?? null), "checkWishlist", [0 => twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 43), 1 => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 43)], "method", false, false, true, 43);
        // line 44
        echo "        ";
        if (($context["checkWL"] ?? null)) {
            // line 45
            echo "        <ul>
            <div style=\"display: flex;\">
                <li>
                    <a class=\"makeWishlist heart-";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "\" data-product=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "\">
                        <i class=\"fa fa-heart\"></i>
                        <i class=\"fa fa-heart\"></i>
                    </a>
                </li>
                <li> <span class=\"count-wishlist-";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["countWL"] ?? null), 53, $this->source), "html", null, true);
            echo "</span></li>
            </div>
            <!-- <div class=\"gift-ads\">
                <li style=\"margin-top: 5px;\">
                    <span class=\"tooltip\">
                        <i class=\"fal fa-gifts\"></i>
                        <span class=\"cont\" style=\"left: 0px;\">Dành cho các
                            doanh nghiệp muốn quảng bá về dịch vụ nhà đặt đặt form
                            để liên hệ
                        </span>
                    </span>
                </li>
            </div> -->
        </ul>
        ";
        } else {
            // line 68
            echo "        <ul>
            <li>
                <a>
                    <i class=\"fa fa-heart\" style=\"color: #d60000;\"></i>
                </a>
            </li>
            <li> <span class=\"count-wishlist-";
            // line 74
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["countWL"] ?? null), 74, $this->source), "html", null, true);
            echo "</span></li>
        </ul>
        ";
        }
        // line 77
        echo "    </div>

    <div class=\"product-hover-action\">
        ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, true, 80) == 0)) {
            // line 81
            echo "        <ul><button type=\"button\" class=\"btn btn-secondary\" disabled> Hết hàng</button></ul>
        ";
        } else {
            // line 83
            echo "        <ul>
            <li><a class=\"add-to-cart-btn\" onclick=\"addCart('";
            // line 84
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "',1)\">Thêm vào giỏ</a>
            </li>
            <li><a class=\"quick-view-btn\" data-toggle=\"modal\" data-target=\"#cart-plus-";
            // line 86
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "\"><i
                        class=\"fal fa-eye\" style=\"color: #fff;\"></i></a></li>
        </ul>
        ";
        }
        // line 90
        echo "    </div>
</div>

<!-- Popup Product -->
<div class=\"modal fade\" id=\"cart-plus-";
        // line 94
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\"
    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-xs-12 mt-3 mb-3\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                ";
        // line 103
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 103))) {
            // line 104
            echo "                                <div class=\"carousel-item active\">
                                    <img class=\"d-block w-100\" src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 105), "path", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "\"
                                        alt=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 106), "description", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "\"
                                        title=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 107), "title", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "\">
                                </div>
                                ";
        }
        // line 110
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 110))) {
            // line 111
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 111));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 112
                echo "                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                echo "\"
                                        alt=\"Second slide\">
                                </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                ";
        }
        // line 118
        echo "                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\"
                                data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\"
                                data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-xs-12 mt-3 mb-3\" style=\"display: flex;align-items: center;\">
                        <div class=\"info-product\">
                            <h3> ";
        // line 133
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "</h3>
                            <p>
                                ";
        // line 135
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, true, 135), "first", [], "method", false, false, true, 135);
        // line 136
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, true, 136)) {
            // line 137
            echo "                                <span class=\"regular-price\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "</span>
                                ";
            // line 138
            if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 138) > 0)) {
                // line 139
                echo "                                <del class=\"price price-sale\"> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
                echo "</del>
                                ";
            }
            // line 141
            echo "                                ";
        }
        // line 142
        echo "                            </p>
                            <div class=\"product-short-des\">
                                <p>";
        // line 144
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        echo "</p>
                            </div>
                            <div class=\"button-add\">
                                <span class=\"input-number-decrement\">–</span>
                                <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                                <span class=\"input-number-increment\">+</span>
                            </div>

                            <div class=\"btn-cart\" onclick=\"addCart('";
        // line 152
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "')\">
                                <span>Mua Hàng</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/product/product-card.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 152,  356 => 144,  352 => 142,  349 => 141,  341 => 139,  339 => 138,  332 => 137,  329 => 136,  327 => 135,  322 => 133,  305 => 118,  302 => 117,  290 => 113,  287 => 112,  282 => 111,  279 => 110,  273 => 107,  269 => 106,  265 => 105,  262 => 104,  260 => 103,  248 => 94,  242 => 90,  235 => 86,  230 => 84,  227 => 83,  223 => 81,  221 => 80,  216 => 77,  208 => 74,  200 => 68,  180 => 53,  170 => 48,  165 => 45,  162 => 44,  159 => 43,  157 => 42,  152 => 39,  149 => 38,  141 => 36,  139 => 35,  132 => 34,  129 => 33,  127 => 32,  120 => 30,  114 => 29,  106 => 23,  99 => 19,  94 => 16,  92 => 15,  85 => 10,  78 => 8,  73 => 7,  71 => 6,  67 => 5,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var obProduct \\Lovata\\Shopaholic\\Classes\\Item\\ProductItem #}

<div class=\"herboil__product-item\">
    <div class=\"product-img\">
        <a href=\"{{ obProduct.getPageUrl('product-page') }}\">
            {% if obProduct.preview_image is not empty %}
            <img src=\"{{ obProduct.preview_image.path }}\" itemprop=\"image\"
                alt=\"{{ obProduct.preview_image.description }}\" title=\"{{ obProduct.preview_image.title }}\">
            {% endif %}
        </a>
        
        <div class=\"gift-ads\">
            <ul>
                <li style=\"margin-top: 5px;\">
                {% if obProduct.sale %}
                    <span class=\"tooltip\">
                        <i class=\"fal fa-gift\"></i>
                        <span class=\"cont\" style=\"margin: 0 auto;\">
                            {{ obProduct.sale }}
                        </span>
                    </span>
                {% endif %}
                </li>
            </ul>
        </div>
        
    </div>
    <div class=\"product-info\">
        <h4 class=\"product-title\"><a href=\"{{ obProduct.getPageUrl('product-page') }}\">{{ obProduct.name }}</a></h4>
        <p class=\"product-bmi\" {% component 'Movie' %}>(50mg/ml)</p>
        <div class=\"product-price\">
            {% set obOffer = obProduct.offer.first() %}
            {% if obOffer.isNotEmpty()%}
            <span class=\"regular-price\"> {{ ProductList.StringToInt(obOffer.price) | number_format(0,\"\",\".\") }} {{ obOffer.currency }}</span>
            {% if obOffer.old_price > 0 %}
            <del class=\"price price-sale\"> {{ ProductList.StringToInt(obOffer.old_price) | number_format(0,\"\",\".\") }} {{ obOffer.currency }}</del>
            {% endif %}
            {% endif %}
        </div>
    </div>
    <div class=\"product-action\">
        {% set countWL= Wishlist.countWishlist(obProduct.id) %}
        {% set checkWL= Wishlist.checkWishlist(obProduct.id,user.id) %}
        {% if(checkWL) %}
        <ul>
            <div style=\"display: flex;\">
                <li>
                    <a class=\"makeWishlist heart-{{obProduct.id}}\" data-product=\"{{obProduct.id}}\">
                        <i class=\"fa fa-heart\"></i>
                        <i class=\"fa fa-heart\"></i>
                    </a>
                </li>
                <li> <span class=\"count-wishlist-{{obProduct.id}}\">{{countWL}}</span></li>
            </div>
            <!-- <div class=\"gift-ads\">
                <li style=\"margin-top: 5px;\">
                    <span class=\"tooltip\">
                        <i class=\"fal fa-gifts\"></i>
                        <span class=\"cont\" style=\"left: 0px;\">Dành cho các
                            doanh nghiệp muốn quảng bá về dịch vụ nhà đặt đặt form
                            để liên hệ
                        </span>
                    </span>
                </li>
            </div> -->
        </ul>
        {% else %}
        <ul>
            <li>
                <a>
                    <i class=\"fa fa-heart\" style=\"color: #d60000;\"></i>
                </a>
            </li>
            <li> <span class=\"count-wishlist-{{obProduct.id}}\">{{countWL}}</span></li>
        </ul>
        {% endif %}
    </div>

    <div class=\"product-hover-action\">
        {% if obOffer.quantity == 0 %}
        <ul><button type=\"button\" class=\"btn btn-secondary\" disabled> Hết hàng</button></ul>
        {% else %}
        <ul>
            <li><a class=\"add-to-cart-btn\" onclick=\"addCart('{{obOffer.id}}',1)\">Thêm vào giỏ</a>
            </li>
            <li><a class=\"quick-view-btn\" data-toggle=\"modal\" data-target=\"#cart-plus-{{obProduct.id}}\"><i
                        class=\"fal fa-eye\" style=\"color: #fff;\"></i></a></li>
        </ul>
        {% endif %}
    </div>
</div>

<!-- Popup Product -->
<div class=\"modal fade\" id=\"cart-plus-{{obProduct.id}}\" tabindex=\"-1\" role=\"dialog\"
    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-xs-12 mt-3 mb-3\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                {% if obProduct.preview_image is not empty %}
                                <div class=\"carousel-item active\">
                                    <img class=\"d-block w-100\" src=\"{{ obProduct.preview_image.path }}\"
                                        alt=\"{{ obProduct.preview_image.description }}\"
                                        title=\"{{ obProduct.preview_image.title }}\">
                                </div>
                                {% endif %}
                                {% if obProduct.images is not empty %}
                                {% for img in obProduct.images %}
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"{{img.path}}\" alt=\"{{obProduct.name}}\"
                                        alt=\"Second slide\">
                                </div>
                                {% endfor %}
                                {% endif %}
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\"
                                data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\"
                                data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-xs-12 mt-3 mb-3\" style=\"display: flex;align-items: center;\">
                        <div class=\"info-product\">
                            <h3> {{ obProduct.name }}</h3>
                            <p>
                                {% set obOffer = obProduct.offer.first() %}
                                {% if obOffer.isNotEmpty()%}
                                <span class=\"regular-price\"> {{ obOffer.price }} {{ obOffer.currency }}</span>
                                {% if obOffer.old_price > 0 %}
                                <del class=\"price price-sale\"> {{ obOffer.old_price }} {{ obOffer.currency }}</del>
                                {% endif %}
                                {% endif %}
                            </p>
                            <div class=\"product-short-des\">
                                <p>{{ obProduct.preview_text }}</p>
                            </div>
                            <div class=\"button-add\">
                                <span class=\"input-number-decrement\">–</span>
                                <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                                <span class=\"input-number-increment\">+</span>
                            </div>

                            <div class=\"btn-cart\" onclick=\"addCart('{{obOffer.id}}')\">
                                <span>Mua Hàng</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/product/product-card.htm", "");
    }
}
