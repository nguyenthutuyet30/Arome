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

/* C:\xampp\htdocs\arome/themes/aroma/partials/cart/mini-cart.htm */
class __TwigTemplate_d33ac4689f27dcaa2f92587abd70c25cab35a8ae8cd0aae9c16f34e0391574be extends \Twig\Template
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
        $tags = array("set" => 2, "if" => 3, "partial" => 12);
        $filters = array("escape" => 7, "number_format" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'partial'],
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
        $context["obCartPositionList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, true, 2);
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "isNotEmpty", [], "method", false, false, true, 3)) {
            // line 4
            echo "<div class=\"header\">
    <a href=\"/arome/cart\">
        <i class=\"fa fa-shopping-basket\"></i>
        <span class=\"item_txt\"> Giỏ hàng <span class=\"item_count\">";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "count", [], "method", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "</span></span> -
        <span class=\"item_total\">";
            // line 8
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, true, 8)], "method", false, false, true, 8), 8, $this->source), 0, "", "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</span>
    </a>
    <div class=\"body\">
        <div class=\"price_content\">
            ";
            // line 12
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['obCartPosition'] = ($context["obCartPositionList"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart/cart-position"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "            <div class=\"cart-total price_inline\">
                <span class=\"label\">Tổng</span>
                <span class=\"value\">";
            // line 15
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, true, 15)], "method", false, false, true, 15), 15, $this->source), 0, "", "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 16
($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</span>
            </div>
        </div>
        <div style=\"display: flex;\">
            <div class=\"checkout col-6\" style=\"padding-right: 0;\">
                <a href=\"/arome/checkout\">Thanh toán</a>
            </div>
            <div class=\"checkout col-6\">
                <a href=\"/arome/cart\">Xem Giỏ hàng</a>
            </div>
        </div>
    </div>
</div>
";
        } else {
            // line 30
            echo "<div class=\"header\"> <i class=\"fa fa-shopping-basket\"></i> <span class=\"item_txt\"> Giỏ hàng <span class=\"item_count\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/cart/mini-cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  96 => 16,  93 => 15,  89 => 13,  84 => 12,  75 => 8,  71 => 7,  66 => 4,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Get cart positions #}
{% set obCartPositionList = Cart.get() %}
{% if obCartPositionList.isNotEmpty() %}
<div class=\"header\">
    <a href=\"/arome/cart\">
        <i class=\"fa fa-shopping-basket\"></i>
        <span class=\"item_txt\"> Giỏ hàng <span class=\"item_count\">{{obCartPositionList.count()}}</span></span> -
        <span class=\"item_total\">{{ Cart.StringToInt(obCartPositionList.getTotalPrice()) | number_format(0,\"\",\".\") }} {{ obCartPositionList.getCurrency() }}</span>
    </a>
    <div class=\"body\">
        <div class=\"price_content\">
            {% partial 'cart/cart-position' obCartPosition=obCartPositionList %}
            <div class=\"cart-total price_inline\">
                <span class=\"label\">Tổng</span>
                <span class=\"value\">{{ Cart.StringToInt(obCartPositionList.getTotalPrice()) | number_format(0,\"\",\".\") }} {{
                    obCartPositionList.getCurrency() }}</span>
            </div>
        </div>
        <div style=\"display: flex;\">
            <div class=\"checkout col-6\" style=\"padding-right: 0;\">
                <a href=\"/arome/checkout\">Thanh toán</a>
            </div>
            <div class=\"checkout col-6\">
                <a href=\"/arome/cart\">Xem Giỏ hàng</a>
            </div>
        </div>
    </div>
</div>
{% else %}
<div class=\"header\"> <i class=\"fa fa-shopping-basket\"></i> <span class=\"item_txt\"> Giỏ hàng <span class=\"item_count\"></div>
{% endif %}", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/cart/mini-cart.htm", "");
    }
}
