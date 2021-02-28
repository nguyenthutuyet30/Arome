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

/* C:\xampp\htdocs\arome/themes/aroma/partials/cart/cart-position.htm */
class __TwigTemplate_baa1d4cb97dd4d58a9f702cd661691d94f2782571a7931c2e9e3f642e441d554 extends \Twig\Template
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
        $tags = array("for" => 2, "set" => 4, "if" => 8);
        $filters = array("escape" => 6, "number_format" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
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
        // line 1
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obCartPosition"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obCart"]) {
            // line 3
            echo "    ";
            // line 4
            echo "    ";
            $context["obOffer"] = twig_get_attribute($this->env, $this->source, $context["obCart"], "item", [], "any", false, false, true, 4);
            // line 5
            echo "    ";
            $context["obProduct"] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "product", [], "any", false, false, true, 5);
            // line 6
            echo "    <li id=\"offered_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\" data-qty='";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obCart"], "quantity", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "'>
        <div class=\"img_content\">
            ";
            // line 8
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 8))) {
                // line 9
                echo "            <img class=\"product-image-cart\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 9), "path", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" itemprop=\"image\"
                alt=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 10), "description", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", [], "any", false, false, true, 10), "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\">
            ";
            }
            // line 12
            echo "            <span class=\"product-quantity\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obCart"], "quantity", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "x</span>
        </div>
        <div class=\"right_block\">
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "getPageUrl", [0 => "product-page"], "method", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">
                <span class=\"product-name\">";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</span>
            </a>
            <span class=\"product-price\">";
            // line 18
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, $context["obCart"], "price", [], "any", false, false, true, 18)], "method", false, false, true, 18), 18, $this->source), 0, "", "."), "html", null, true);
            echo "</span>
            <a href=\"#\" class=\"remove-from-cart\" onclick=\"removeItem(";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "id", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo ")\" ><i class=\"fa fa-remove pull-xs-left\"></i></a>
            ";
            // line 23
            echo "        </div>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/cart/cart-position.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 26,  123 => 23,  119 => 19,  115 => 18,  110 => 16,  106 => 15,  99 => 12,  92 => 10,  87 => 9,  85 => 8,  77 => 6,  74 => 5,  71 => 4,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    {% for obCart in obCartPosition %}
    {# Get offer and product objects #}
    {% set obOffer = obCart.item %}
    {% set obProduct = obOffer.product %}
    <li id=\"offered_{{obOffer.id}}\" data-qty='{{obCart.quantity}}'>
        <div class=\"img_content\">
            {% if obProduct.preview_image is not empty %}
            <img class=\"product-image-cart\" src=\"{{ obProduct.preview_image.path }}\" itemprop=\"image\"
                alt=\"{{ obProduct.preview_image.description }}\" title=\"{{ obProduct.preview_image.title }}\">
            {% endif %}
            <span class=\"product-quantity\">{{ obCart.quantity }}x</span>
        </div>
        <div class=\"right_block\">
            <a href=\"{{ obProduct.getPageUrl('product-page') }}\">
                <span class=\"product-name\">{{ obProduct.name }}</span>
            </a>
            <span class=\"product-price\">{{ Cart.StringToInt(obCart.price) | number_format(0,\"\",\".\") }}</span>
            <a href=\"#\" class=\"remove-from-cart\" onclick=\"removeItem({{obOffer.id}})\" ><i class=\"fa fa-remove pull-xs-left\"></i></a>
            {#<div class=\"attributes_content\">
                <span><strong>Dimension</strong>: 40x60cm</span><br>
            </div>#}
        </div>
    </li>
    {% endfor %}
</ul>", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/cart/cart-position.htm", "");
    }
}
