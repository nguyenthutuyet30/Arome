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

/* C:\xampp\htdocs\arome/themes/aroma/pages/cart.htm */
class __TwigTemplate_6a04008c93f57561a8feb7eac9ea1ffd31df010ed2121e3bb75591c956f1611d extends \Twig\Template
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
        $tags = array("set" => 15, "if" => 16, "for" => 23, "partial" => 24);
        $filters = array("escape" => 54, "number_format" => 54);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'partial'],
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
        echo "<!-- SHOPING CART AREA START -->
<input type=\"hidden\" id=\"checkUser\">
<div class=\"shoping-cart-area  margin-bottom-100 mobile-mt-65  mobile-mb-75\">
    <div class=\"banner-cart cart-image \">
        <h4 class=\"section-title-2\">Giỏ hàng</h4>
    </div>
    <div class=\"container\">
        <!-- <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"herboil__section-title text-center banner-cart cart-image \">
                    <h4 class=\"section-title-2\">Giỏ hàng</h4>
                </div>
            </div>
        </div> -->
        ";
        // line 15
        $context["obCartPositionList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [], "method", false, false, true, 15);
        // line 16
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "isNotEmpty", [], "method", false, false, true, 16)) {
            // line 17
            echo "        <div class=\"row\">
            <div class=\"col-xl-7 col-lg-7 mt-5\">
                <div class=\"shoping-cart-inner\">
                    <div class=\"table-content table-responsive mb-50\">
                        <table class=\"shoping-cart-table\">
                            <tbody class=\"checkItem\">
                                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCartPositionList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCartPosition"]) {
                // line 24
                echo "                                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['obCartPosition'] = $context["obCartPosition"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart/cart"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 25
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCartPosition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"shoping-cart-btn-area\">
                        <ul>
                            <li>
                                <div class=\"btn-wrapper\">
                                    <a class=\"boxed-btn\" href=\"#\">Sử dụng mã khuyến mại</a>
                                </div>
                            </li>
                            <li>
                                <div class=\"btn-wrapper\">
                                    <a class=\"boxed-btn btn-black black-btn\" href=\"#\">Cập nhật giỏ hàng</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 offset-xl-1 col-lg-5 mt-5\">
                <div class=\"shoping-cart-total-area mobile-mt-75 tab-mt-80\">
                    <div class=\"shoping-cart-total-inner\">
                        <h4>Tổng Tiền</h4>
                        <div class=\"table-content table-responsive mb-50\">
                            <table class=\"shoping-cart-total-table payment-details\">
                                <tbody>
                                    <tr>
                                        <td>Tạm Tính:</td>
                                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, true, 54)], "method", false, false, true, 54), 54, $this->source), 0, "", "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 55
($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</td>
                                    </tr>
                                    <!-- tr -->
                                    <tr>
                                        <td>Tổng:</td>
                                        <td> <span class=\"total-price-cart\">";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, true, 60)], "method", false, false, true, 60), 60, $this->source), 0, "", "."), "html", null, true);
            // line 61
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 62
($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"shoping-cart-btn-area shoping-cart-total-btn\">
                            <ul>
                                <li>
                                    <div class=\"btn-wrapper\">
                                        <a class=\"boxed-btn  btn-black black-btn btncart\" href=\"/arome/checkout\">THANH TOÁN</a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"btn-wrapper\">
                                        <a class=\"boxed-btn btn-black black-btn btncart\" href=\"/arome/all-product\">TIẾP
                                            TỤC MUA
                                            HÀNG</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        } else {
            // line 88
            echo "        <div>Cart is empty</div>
        ";
        }
        // line 90
        echo "    </div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"userLogin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"User\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body text-center p-30\">
                <h3 style=\"font-size: 30px;font-weight: bold;\"> Bạn chưa đăng nhập</h3>
                <p style=\"margin-bottom: 7%;\">Xin quý khách vui lòng đăng nhập để mua hàng, thanh toán tiện lợi hơn và
                    tận hưởng những ưu đãi hấp dẫn của chúng tôi !</p>
                <!-- <div class=\"row\">
                    <div class=\"col-6\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"login\">Đăng nhập</button>
                    </div>
                    <div class=\"col-6\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"close\">Đóng</button>
                    </div>
                </div> -->
                <div class=\"text-center\">
                    <a href=\"./login\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"login\">Đăng nhập</button>
                    </a>
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"close\">Bỏ qua</button>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 90,  181 => 88,  152 => 62,  150 => 61,  148 => 60,  140 => 55,  137 => 54,  107 => 26,  101 => 25,  95 => 24,  91 => 23,  83 => 17,  80 => 16,  78 => 15,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- SHOPING CART AREA START -->
<input type=\"hidden\" id=\"checkUser\">
<div class=\"shoping-cart-area  margin-bottom-100 mobile-mt-65  mobile-mb-75\">
    <div class=\"banner-cart cart-image \">
        <h4 class=\"section-title-2\">Giỏ hàng</h4>
    </div>
    <div class=\"container\">
        <!-- <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"herboil__section-title text-center banner-cart cart-image \">
                    <h4 class=\"section-title-2\">Giỏ hàng</h4>
                </div>
            </div>
        </div> -->
        {% set obCartPositionList = Cart.get() %}
        {% if obCartPositionList.isNotEmpty() %}
        <div class=\"row\">
            <div class=\"col-xl-7 col-lg-7 mt-5\">
                <div class=\"shoping-cart-inner\">
                    <div class=\"table-content table-responsive mb-50\">
                        <table class=\"shoping-cart-table\">
                            <tbody class=\"checkItem\">
                                {% for obCartPosition in obCartPositionList %}
                                {% partial 'cart/cart' obCartPosition=obCartPosition %}
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <div class=\"shoping-cart-btn-area\">
                        <ul>
                            <li>
                                <div class=\"btn-wrapper\">
                                    <a class=\"boxed-btn\" href=\"#\">Sử dụng mã khuyến mại</a>
                                </div>
                            </li>
                            <li>
                                <div class=\"btn-wrapper\">
                                    <a class=\"boxed-btn btn-black black-btn\" href=\"#\">Cập nhật giỏ hàng</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 offset-xl-1 col-lg-5 mt-5\">
                <div class=\"shoping-cart-total-area mobile-mt-75 tab-mt-80\">
                    <div class=\"shoping-cart-total-inner\">
                        <h4>Tổng Tiền</h4>
                        <div class=\"table-content table-responsive mb-50\">
                            <table class=\"shoping-cart-total-table payment-details\">
                                <tbody>
                                    <tr>
                                        <td>Tạm Tính:</td>
                                        <td>{{ Cart.StringToInt(obCartPositionList.getTotalPrice()) | number_format(0,\"\",\".\") }} {{
                                            obCartPositionList.getCurrency() }}</td>
                                    </tr>
                                    <!-- tr -->
                                    <tr>
                                        <td>Tổng:</td>
                                        <td> <span class=\"total-price-cart\">{{ Cart.StringToInt(obCartPositionList.getTotalPrice()) | number_format(0,\"\",\".\")
                                                }}</span> {{
                                            obCartPositionList.getCurrency() }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"shoping-cart-btn-area shoping-cart-total-btn\">
                            <ul>
                                <li>
                                    <div class=\"btn-wrapper\">
                                        <a class=\"boxed-btn  btn-black black-btn btncart\" href=\"/arome/checkout\">THANH TOÁN</a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"btn-wrapper\">
                                        <a class=\"boxed-btn btn-black black-btn btncart\" href=\"/arome/all-product\">TIẾP
                                            TỤC MUA
                                            HÀNG</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div>Cart is empty</div>
        {% endif %}
    </div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"userLogin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"User\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body text-center p-30\">
                <h3 style=\"font-size: 30px;font-weight: bold;\"> Bạn chưa đăng nhập</h3>
                <p style=\"margin-bottom: 7%;\">Xin quý khách vui lòng đăng nhập để mua hàng, thanh toán tiện lợi hơn và
                    tận hưởng những ưu đãi hấp dẫn của chúng tôi !</p>
                <!-- <div class=\"row\">
                    <div class=\"col-6\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"login\">Đăng nhập</button>
                    </div>
                    <div class=\"col-6\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"close\">Đóng</button>
                    </div>
                </div> -->
                <div class=\"text-center\">
                    <a href=\"./login\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"login\">Đăng nhập</button>
                    </a>
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"close\">Bỏ qua</button>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/cart.htm", "");
    }
}
