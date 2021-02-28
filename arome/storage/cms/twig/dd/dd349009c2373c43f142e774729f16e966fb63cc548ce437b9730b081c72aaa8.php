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

/* C:\xampp\htdocs\arome/themes/aroma/partials/cart/cart.htm */
class __TwigTemplate_e3b353d49cff368b621ea69404e43b1dedf987b140c55e5889c09aff11c21294 extends \Twig\Template
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
        $tags = array("set" => 2, "if" => 10);
        $filters = array("escape" => 7, "number_format" => 22);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "item", [], "any", false, false, true, 2);
        // line 3
        $context["obProduct"] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "product", [], "any", false, false, true, 3);
        // line 4
        echo "


<tr class=\"cart-inner-item-";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
    <td class=\"cart-product-thumbnail\">
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "product-page"], "method", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">
            ";
        // line 10
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 10))) {
            // line 11
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 11), "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" itemprop=\"image\"
                alt=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 12), "description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\">
            ";
        }
        // line 13
        echo "</a>
    </td>
    <td class=\"cart-product-info\" style=\"width: 100%;\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h4 class=\"product-title\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "product-page"], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</a>
                </h4>
            </div>
            <div class=\"col-4\">
                <span class=\"cart-product-subtotal\">";
        // line 22
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, true, 22)], "method", false, false, true, 22), 22, $this->source), 0, "", "."), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "currency", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "</span>
                <span class=\"cart-product-remove\" onclick=\"removeItem(";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo ")\">
                    <i class=\"fa fa-remove pull-xs-left\"></i>
                </span>
            </div>
        </div>
        <p class=\"product-bmi\">(50mg/ml)</p>
        <p class=\"product-bmi\">Kho: ";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo " sản phẩm</p>
        <div class=\"cart-product-count-price\">
            <ul>
                <li>
                    <div class=\"cart-plus-minus\">
                        <div class=\"dec qtybutton dec-";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "\" data-offer=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "\"
                            data-cart=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "id", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "\" data-qty=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "quantity", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "\">-</div>
                        <input type=\"number\" class=\"cart-plus-minus-box input-qty-cart itemqty-";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "id", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "\" name=\"quantity\"
                            value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "quantity", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\" data-qty=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "quantity", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\" max=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\" min=\"1\"data-max=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\" data-offer=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\"  data-cart=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "\">
                        <div class=\"inc qtybutton inc-";
        // line 38
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "id", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "\" data-offer=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "\"
                            data-cart=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "id", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "\" data-max=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "quantity", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "\"
                            data-qty=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "quantity", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "\">+</div>
                    </div>
                </li>
                <li>
                    <span
                        class=\"cart-product-subtotal total-price-";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "id", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "price", [], "any", false, false, true, 45)], "method", false, false, true, 45), 45, $this->source), 0, "", "."), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "currency", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "</span>
                    ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "discount_price_value", [], "any", false, false, true, 46) > 0)) {
            // line 47
            echo "                    <del class=\"old-price-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "id", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obCartPosition"] ?? null), "old_price", [], "any", false, false, true, 47)], "method", false, false, true, 47), 47, $this->source), 0, "", "."), "html", null, true);
            echo "</del>
                    ";
        }
        // line 49
        echo "                </li>
                <li>
                </li>
            </ul>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/cart/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 49,  193 => 47,  191 => 46,  183 => 45,  175 => 40,  169 => 39,  163 => 38,  149 => 37,  145 => 36,  139 => 35,  133 => 34,  125 => 29,  116 => 23,  110 => 22,  101 => 18,  94 => 13,  87 => 12,  82 => 11,  80 => 10,  76 => 9,  71 => 7,  66 => 4,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Get offer and product objects #}
{% set obOffer = obCartPosition.item %}
{% set obProduct = obOffer.product %}



<tr class=\"cart-inner-item-{{obOffer.id}}\">
    <td class=\"cart-product-thumbnail\">
        <a href=\"{{ obProduct.getPageUrl('product-page') }}\">
            {% if obProduct.preview_image is not empty %}
            <img src=\"{{ obProduct.preview_image.path }}\" itemprop=\"image\"
                alt=\"{{ obProduct.preview_image.description }}\" title=\"{{ obProduct.preview_image.title }}\">
            {% endif %}</a>
    </td>
    <td class=\"cart-product-info\" style=\"width: 100%;\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h4 class=\"product-title\"><a href=\"{{ obProduct.getPageUrl('product-page') }}\">{{ obProduct.name }}</a>
                </h4>
            </div>
            <div class=\"col-4\">
                <span class=\"cart-product-subtotal\">{{Cart.StringToInt(obOffer.price) | number_format(0,\"\",\".\")}} {{obCartPosition.currency}}</span>
                <span class=\"cart-product-remove\" onclick=\"removeItem({{obOffer.id}})\">
                    <i class=\"fa fa-remove pull-xs-left\"></i>
                </span>
            </div>
        </div>
        <p class=\"product-bmi\">(50mg/ml)</p>
        <p class=\"product-bmi\">Kho: {{ obOffer.quantity }} sản phẩm</p>
        <div class=\"cart-product-count-price\">
            <ul>
                <li>
                    <div class=\"cart-plus-minus\">
                        <div class=\"dec qtybutton dec-{{obCartPosition.id}}\" data-offer=\"{{obOffer.id}}\"
                            data-cart=\"{{obCartPosition.id}}\" data-qty=\"{{obCartPosition.quantity}}\">-</div>
                        <input type=\"number\" class=\"cart-plus-minus-box input-qty-cart itemqty-{{obCartPosition.id}}\" name=\"quantity\"
                            value=\"{{ obCartPosition.quantity }}\" data-qty=\"{{ obCartPosition.quantity }}\" max=\"{{ obOffer.quantity }}\" min=\"1\"data-max=\"{{ obOffer.quantity }}\" data-offer=\"{{obOffer.id}}\"  data-cart=\"{{obCartPosition.id}}\">
                        <div class=\"inc qtybutton inc-{{obCartPosition.id}}\" data-offer=\"{{obOffer.id}}\"
                            data-cart=\"{{obCartPosition.id}}\" data-max=\"{{ obOffer.quantity }}\"
                            data-qty=\"{{ obCartPosition.quantity}}\">+</div>
                    </div>
                </li>
                <li>
                    <span
                        class=\"cart-product-subtotal total-price-{{obCartPosition.id}}\">{{Cart.StringToInt(obCartPosition.price) | number_format(0,\"\",\".\")}} {{obCartPosition.currency}}</span>
                    {% if obCartPosition.discount_price_value > 0 %}
                    <del class=\"old-price-{{obCartPosition.id}}\">{{ Cart.StringToInt(obCartPosition.old_price) | number_format(0,\"\",\".\") }}</del>
                    {% endif %}
                </li>
                <li>
                </li>
            </ul>
        </div>
    </td>
</tr>", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/cart/cart.htm", "");
    }
}
