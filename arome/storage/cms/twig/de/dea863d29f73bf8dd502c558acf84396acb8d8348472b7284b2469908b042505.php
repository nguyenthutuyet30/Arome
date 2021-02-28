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

/* C:\xampp\htdocs\arome/themes/aroma/partials/product/product-card-lage.htm */
class __TwigTemplate_3e07c480569b843b0117df648e8f103031201d21306031587f227499e1092401 extends \Twig\Template
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
        $tags = array("if" => 4, "set" => 17, "for" => 83);
        $filters = array("escape" => 3);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape'],
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
        // line 1
        echo "<div class=\"herboil__product-item\">
    <div class=\"product-img\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "product-page"], "method", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "\">
            ";
        // line 4
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 4))) {
            // line 5
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 5), "path", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\" itemprop=\"image\"
                alt=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 6), "description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\">
            ";
        }
        // line 8
        echo "        </a>
    </div>
    <div class=\"product-info\">
        <h4 class=\"product-title\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "product-page"], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
            </a>
        </h4>
        <p class=\"product-bmi\">(50mg/ml)</p>
        <div class=\"product-price\">
            ";
        // line 17
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, true, 17), "first", [], "method", false, false, true, 17);
        // line 18
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, true, 18)) {
            // line 19
            echo "            <span class=\"regular-price\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</span>
            ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 20) > 0)) {
                // line 21
                echo "            <del class=\"price price-sale\"> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</del>
            ";
            }
            // line 23
            echo "            ";
        }
        // line 24
        echo "        </div>
        ";
        // line 25
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, true, 25))) {
            // line 26
            echo "        <div itemprop=\"description\">
            ";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 30
        echo "    </div>
    <div class=\"product-action\">
        ";
        // line 32
        $context["countWL"] = twig_get_attribute($this->env, $this->source, ($context["Wishlist"] ?? null), "countWishlist", [0 => twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 32)], "method", false, false, true, 32);
        // line 33
        echo "        ";
        $context["checkWL"] = twig_get_attribute($this->env, $this->source, ($context["Wishlist"] ?? null), "checkWishlist", [0 => twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 33), 1 => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 33)], "method", false, false, true, 33);
        // line 34
        echo "        ";
        if (($context["checkWL"] ?? null)) {
            // line 35
            echo "        <ul>
            <li>
                <a class=\"makeWishlist heart-";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\" data-product=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\">
                    <i class=\"fa fa-heart\"></i>
                    <i class=\"fa fa-heart\"></i>
                </a>
            </li>
            <li> <span class=\"count-wishlist-";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["countWL"] ?? null), 42, $this->source), "html", null, true);
            echo "</span></li>
        </ul>
        ";
        } else {
            // line 45
            echo "        <ul>
            <li>
                <a>
                    <i class=\"fa fa-heart\" style=\"color: #d60000;\"></i>
                </a>
            </li>
            <li> <span class=\"count-wishlist-";
            // line 51
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["countWL"] ?? null), 51, $this->source), "html", null, true);
            echo "</span></li>
        </ul>
        ";
        }
        // line 54
        echo "    </div>
    <div class=\"product-hover-action\">
        <ul>
            <li><a class=\"add-to-cart-btn\" onclick=\"addCart('";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "')\">Thêm vào giỏ</a>
            </li>
            <li><a class=\"quick-view-btn\" data-toggle=\"modal\" data-target=\"#cart-plus2-";
        // line 59
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "\"><i
                        class=\"fa fa-plus\"></i></a></li>
        </ul>
    </div>
</div>

<!-- Popup Product -->

<div class=\"modal fade\" id=\"cart-plus2-";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\"
    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            ";
        // line 75
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 75))) {
            // line 76
            echo "                            <div class=\"carousel-item active\">
                                <img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 77), "path", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "\" itemprop=\"image\"
                                    alt=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 78), "description", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "\"
                                    title=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 79), "title", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "\">
                            </div>
                            ";
        }
        // line 82
        echo "                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 82))) {
            // line 83
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "images", [], "any", false, false, true, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 84
                echo "                            <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "\">
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                            ";
        }
        // line 89
        echo "                        </div>
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
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
                    <div class=\"info-product\">
                        <h3> ";
        // line 104
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "</h3>
                        <p>
                            ";
        // line 106
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", [], "any", false, false, true, 106), "first", [], "method", false, false, true, 106);
        // line 107
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, true, 107)) {
            // line 108
            echo "                            <span class=\"regular-price\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "</span>
                            ";
            // line 109
            if ((twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 109) > 0)) {
                // line 110
                echo "                            <del class=\"price price-sale\"> ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "old_price", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo "</del>
                            ";
            }
            // line 112
            echo "                            ";
        }
        // line 113
        echo "                        </p>
                        <div class=\"product-short-des\">
                            <p>";
        // line 115
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"button-add\">
                            <span class=\"input-number-decrement\">–</span>
                            <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                            <span class=\"input-number-increment\">+</span>
                        </div>

                        <div class=\"btn-cart\" onclick=\"addCart('";
        // line 123
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "')\">
                            <span>Mua Hàng</span>
                        </div>

                        <div class=\"btn-cart\" onclick=\"addCart('";
        // line 127
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "')\">
                            <span>Tìm Hiểu Thêm</span>
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
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/product/product-card-lage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 127,  328 => 123,  317 => 115,  313 => 113,  310 => 112,  302 => 110,  300 => 109,  293 => 108,  290 => 107,  288 => 106,  283 => 104,  266 => 89,  263 => 88,  252 => 85,  249 => 84,  244 => 83,  241 => 82,  235 => 79,  231 => 78,  227 => 77,  224 => 76,  222 => 75,  211 => 67,  200 => 59,  195 => 57,  190 => 54,  182 => 51,  174 => 45,  166 => 42,  156 => 37,  152 => 35,  149 => 34,  146 => 33,  144 => 32,  140 => 30,  134 => 27,  131 => 26,  129 => 25,  126 => 24,  123 => 23,  115 => 21,  113 => 20,  106 => 19,  103 => 18,  101 => 17,  93 => 12,  89 => 11,  84 => 8,  77 => 6,  72 => 5,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"herboil__product-item\">
    <div class=\"product-img\">
        <a href=\"{{ obProduct.getPageUrl('product-page') }}\">
            {% if obProduct.preview_image is not empty %}
            <img src=\"{{ obProduct.preview_image.path }}\" itemprop=\"image\"
                alt=\"{{ obProduct.preview_image.description }}\" title=\"{{ obProduct.preview_image.title }}\">
            {% endif %}
        </a>
    </div>
    <div class=\"product-info\">
        <h4 class=\"product-title\"><a href=\"{{ obProduct.getPageUrl('product-page') }}\">
                {{ obProduct.name }}
            </a>
        </h4>
        <p class=\"product-bmi\">(50mg/ml)</p>
        <div class=\"product-price\">
            {% set obOffer = obProduct.offer.first() %}
            {% if obOffer.isNotEmpty()%}
            <span class=\"regular-price\"> {{ obOffer.price }} {{ obOffer.currency }}</span>
            {% if obOffer.old_price > 0 %}
            <del class=\"price price-sale\"> {{ obOffer.old_price }} {{ obOffer.currency }}</del>
            {% endif %}
            {% endif %}
        </div>
        {% if obProduct.preview_text is not empty %}
        <div itemprop=\"description\">
            {{ obProduct.preview_text }}
        </div>
        {% endif %}
    </div>
    <div class=\"product-action\">
        {% set countWL= Wishlist.countWishlist(obProduct.id) %}
        {% set checkWL= Wishlist.checkWishlist(obProduct.id,user.id) %}
        {% if(checkWL) %}
        <ul>
            <li>
                <a class=\"makeWishlist heart-{{obProduct.id}}\" data-product=\"{{obProduct.id}}\">
                    <i class=\"fa fa-heart\"></i>
                    <i class=\"fa fa-heart\"></i>
                </a>
            </li>
            <li> <span class=\"count-wishlist-{{obProduct.id}}\">{{countWL}}</span></li>
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
        <ul>
            <li><a class=\"add-to-cart-btn\" onclick=\"addCart('{{obOffer.id}}')\">Thêm vào giỏ</a>
            </li>
            <li><a class=\"quick-view-btn\" data-toggle=\"modal\" data-target=\"#cart-plus2-{{obProduct.id}}\"><i
                        class=\"fa fa-plus\"></i></a></li>
        </ul>
    </div>
</div>

<!-- Popup Product -->

<div class=\"modal fade\" id=\"cart-plus2-{{obProduct.id}}\" tabindex=\"-1\" role=\"dialog\"
    aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            {% if obProduct.preview_image is not empty %}
                            <div class=\"carousel-item active\">
                                <img src=\"{{ obProduct.preview_image.path }}\" itemprop=\"image\"
                                    alt=\"{{ obProduct.preview_image.description }}\"
                                    title=\"{{ obProduct.preview_image.title }}\">
                            </div>
                            {% endif %}
                            {% if obProduct.images is not empty %}
                            {% for img in obProduct.images %}
                            <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"{{img.path}}\" alt=\"{{obProduct.name}}\">
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
                <div class=\"col-lg-6 col-md-6 col-xs-12\">
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

                        <div class=\"btn-cart\" onclick=\"addCart('{{obOffer.id}}')\">
                            <span>Tìm Hiểu Thêm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/product/product-card-lage.htm", "");
    }
}
