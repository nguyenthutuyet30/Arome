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

/* C:\xampp\htdocs\arome/themes/aroma/partials/cart/checkout.htm */
class __TwigTemplate_f63a90e53c3b3f409a99c44afc1cdd06d56010974e40267e36fb9b87ca83b5f3 extends \Twig\Template
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
        $tags = array("set" => 2, "if" => 67, "for" => 81);
        $filters = array("escape" => 74, "number_format" => 74);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
        $context["obShippingTypeList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ShippingTypeList"] ?? null), "make", [], "method", false, false, true, 2), "active", [], "method", false, false, true, 2), "sort", [], "method", false, false, true, 2);
        // line 3
        $context["obActiveShippingType"] = twig_get_attribute($this->env, $this->source, ($context["obShippingTypeList"] ?? null), "first", [], "method", false, false, true, 3);
        // line 4
        echo "
";
        // line 5
        $context["obPaymentMethodList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PaymentMethodList"] ?? null), "make", [], "method", false, false, true, 5), "active", [], "method", false, false, true, 5), "sort", [], "method", false, false, true, 5);
        // line 6
        $context["obActivePaymentMethod"] = twig_get_attribute($this->env, $this->source, ($context["obPaymentMethodList"] ?? null), "first", [], "method", false, false, true, 6);
        // line 7
        echo "
";
        // line 9
        $context["obCartPositionList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "get", [0 => ($context["obActiveShippingType"] ?? null), 1 => ($context["obActivePaymentMethod"] ?? null)], "method", false, false, true, 9);
        // line 11
        $context["arCouponList"] = twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "getAppliedCouponList", [], "method", false, false, true, 11);
        // line 12
        echo "<!-- SHOPING CART AREA START -->
<div class=\"account-login-area margin-bottom-100 mobile-mt-65  mobile-mb-75\">
    <div class=\"herboil__section-title  banner-cart checkout-image \">
        <h4 class=\"section-title-2\">Thanh Toán</h4>
    </div>
    <div class=\"container\">
        <!-- <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"herboil__section-title text-center\">
                    <h4 class=\"section-title-2\">Kiểm Tra Giỏ Hàng</h4>
                </div>
            </div>
        </div> -->
        <div class=\"shopping-cart-info shipping-info\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"shoping-cart-inner shipping-info-inner\">
                        <div class=\"row\">
                            <div class=\"col-xl-6 col-md-5\">
                                <div class=\"shipping-address\">
                                    <h4>Thông Tin Khách Hàng</h4>
                                    <form href=\"\" action=\"#\" class=\"form-input-box\">
                                        <label>Họ Và Tên*</label>
                                        <input type=\"text\" id=\"name\" name=\"name\">
                                        <p id=\"error-name\" style=\"color: red\"></p>
                                        
                                        <label>Số điện thoại*</label>
                                        <input type=\"text\" id=\"phone\" name=\"phone\">
                                        <p id=\"error-phone\" style=\"color: red\"></p>

                                        <label>Thành phố / Tỉnh*</label>
                                        <select id=\"province_select\" class=\"form-control custom-select\"
                                            data-minimum-input-length=\"2\" data-ajax--delay=\"300\" select-no-search>
                                            <option value=\"404\" selected=\"selected\">Chọn tỉnh/thành phố</option>
                                        </select>
                                        <p id=\"error-province\" style=\"color: red\"></p>

                                        <label>Quận/huyện*</label>
                                        <select id=\"district_select\" class=\"form-control custom-select\"
                                            data-minimum-input-length=\"2\" data-ajax--delay=\"300\" select-no-search>
                                        </select>
                                        <p id=\"error-district\" style=\"color: red\"></p>

                                        <label>Địa chỉ chi tiết*</label>
                                        <input type=\"text\" id=\"address-detail\" name=\"address\">
                                        <p id=\"error-detail\" style=\"color: red\"></p>

                                    </form>
                                </div>
                            </div>
                            <div class=\"col-xl-6 col-md-7\">
                                <div class=\"shoping-cart-total-area mobile-mt-75 tab-mt-80\">
                                    <div class=\"shoping-cart-total-inner\">
                                        <h4>Tổng Tiền</h4>
                                        <div class=\"table-content table-responsive mb-50\">
                                            ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "isNotEmpty", [], "method", false, false, true, 67)) {
            // line 68
            echo "                                            <table class=\"shoping-cart-total-table payment-details\">
                                                <tbody>
                                                    <tr>
                                                        <td>Tạm Tính: </td>
                                                        <td id=\"tamtinh\">";
            // line 72
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 73
($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, true, 73)], "method", false, false, true, 73), 73, $this->source), 0, "", ","), "html", null, true);
            // line 74
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 75
($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "</td>
                                                    </tr>
                                                    <!-- tr -->
                                                    ";
            // line 78
            if ( !twig_test_empty(($context["arCouponList"] ?? null))) {
                // line 79
                echo "                                                    <tr>
                                                        <td>Phí giảm: </td>
                                                        ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["arCouponList"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["obCoupon"]) {
                    // line 82
                    echo "                                                        <td>{ obCoupon.code }}</td>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCoupon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                                                    </tr>
                                                    ";
            }
            // line 86
            echo "                                                    <!-- tr -->
                                                    <tr>
                                                        <td>Phí vận chuyển: </td>
                                                        <td id=\"fee\"></td>
                                                    </tr>
                                                    <!-- tr -->
                                                    <tr>
                                                        <td>Tổng Cộng: </td>
                                                        <td><strong id=\"total\">";
            // line 94
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 95
($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, true, 95)], "method", false, false, true, 95), 95, $this->source), 0, "", ","), "html", null, true);
            // line 96
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 97
($context["obCartPositionList"] ?? null), "getCurrency", [], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            ";
        }
        // line 102
        echo "                                        </div>
                                        <div class=\"shoping-cart-btn-area shoping-cart-total-btn\">
                                            <ul>
                                                <li>
                                                    <div class=\"btn-wrapper text-center\">
                                                        <button id=\"continue-payment\" class=\"boxed-btn reverse-color\" type=\"submit\"
                                                          onclick=\"continuePayment( ";
        // line 108
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, ($context["obCartPositionList"] ?? null), "getTotalPrice", [], "method", false, false, true, 108)], "method", false, false, true, 108), 108, $this->source), "html", null, true);
        echo ")\" 
                                                          data-toggle=\"modal\" 
                                                         >Tiếp
                                                            tục thanh toán</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-6\">
                                <div class=\"shipping-method\">
                                    <h4>Đơn Vị Vận Chuyển</h4>
                                    ";
        // line 121
        $context["obShippingTypeList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ShippingTypeList"] ?? null), "make", [], "method", false, false, true, 121), "sort", [], "method", false, false, true, 121), "active", [], "method", false, false, true, 121);
        // line 122
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["obShippingTypeList"] ?? null), "isNotEmpty", [], "method", false, false, true, 122)) {
            // line 123
            echo "                                    <ul>
                                        ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obShippingTypeList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obShippingType"]) {
                // line 125
                echo "                                        <li>
                                            <input type=\"radio\" id=\"shipping-type-";
                // line 126
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
                echo "\"
                                                name=\"shipping_type\" checked=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo "\">
                                            <label for=\"shipping-type-";
                // line 128
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "id", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obShippingType"], "name", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo "
                                                <br>
                                            </label>
                                            <div class=\"check\"></div>
                                        </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obShippingType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                                        ";
            // line 142
            echo "                                    </ul>
                                    ";
        }
        // line 144
        echo "
                                </div>
                                    <div class=\"payment-method\">
                                    <h4>Phương Thức Thanh Toán</h4>
                                    ";
        // line 148
        $context["obPaymentMethodList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PaymentMethodList"] ?? null), "make", [], "method", false, false, true, 148), "sort", [], "method", false, false, true, 148), "active", [], "method", false, false, true, 148);
        // line 149
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["obPaymentMethodList"] ?? null), "isNotEmpty", [], "method", false, false, true, 149)) {
            // line 150
            echo "                                    <div>

                                        ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obPaymentMethodList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obPaymentMethod"]) {
                // line 153
                echo "                                        <input type=\"radio\" id=\"payment-method-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "\" checked=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
                echo "\"
                                            name=\"payment_method\" value=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
                echo "\">
                                        <label for=\"payment-method-";
                // line 155
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "id", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "name", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
                // line 156
                echo "</label>
                                        <span> : Thanh toán [ ";
                // line 157
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["obPaymentMethod"], "name", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
                echo " ]</span> <br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obPaymentMethod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                                    </div>
                                    ";
        }
        // line 161
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPING CART AREA END -->

<!-- Popup checkout -->
<div id=\"popupcheckout\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title title-popupcheckout\">Chi tiết đơn hàng</h4>
                <div class=\"loader\">
                    <div class=\"loader__image\">
                        <div class=\"loader__coin\">
                            <img src=\"https://www.dropbox.com/s/fzc3fidyxqbqhnj/loader-coin.png?raw=1\" alt=\"\">
                        </div>
                        <div class=\"loader__hand\">
                            <img src=\"https://www.dropbox.com/s/y8uqvjn811z6npu/loader-hand.png?raw=1\" alt=\"\">
                        </div>
                    </div>
                </div>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div class=\"modal-body\">
                <table>
                    <tr>
                        <th>Khách hàng</th>
                        <th id=\"name-customer\"></th>
                    </tr>

                    <tr>
                        <td>Số điện thoại</td>
                        <td id=\"phone-customer\"/>
                    </tr>
                    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obCartPositionList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obCart"]) {
            // line 203
            echo "                    ";
            $context["obOffer"] = twig_get_attribute($this->env, $this->source, $context["obCart"], "item", [], "any", false, false, true, 203);
            // line 204
            echo "                    ";
            $context["obProduct"] = twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "product", [], "any", false, false, true, 204);
            // line 205
            echo "                    <tr>
                        <td>";
            // line 206
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
            echo "</td>
                        <td>";
            // line 207
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Cart"] ?? null), "StringToInt", [0 => twig_get_attribute($this->env, $this->source, $context["obCart"], "price", [], "any", false, false, true, 207)], "method", false, false, true, 207), 207, $this->source), 0, "", "."), "html", null, true);
            echo " đ</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                    <tr>
                        <td>Địa chỉ giao hàng</td>
                        <td id=\"address-express\"/>
                    </tr>

                    <tr>
                        <td>Đơn vị vận chuyển</td>
                        <td>Giao hàng tiết kiệm</td>
                    </tr>
                    <tr>
                        <td>Phí giao hàng</td>
                        <td id=\"fee-express\"/>
                    </tr>

                    <tr>
                        <td>Tổng tiền</td>
                        <td id=\"total-payment\"/>
                    </tr>


                </table>

               ";
        // line 233
        echo "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" id=\"comfirm-order\" onclick=\"comfirm()\">Xác nhận</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/cart/checkout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 233,  387 => 210,  378 => 207,  374 => 206,  371 => 205,  368 => 204,  365 => 203,  361 => 202,  318 => 161,  314 => 159,  306 => 157,  303 => 156,  299 => 155,  295 => 154,  288 => 153,  284 => 152,  280 => 150,  277 => 149,  275 => 148,  269 => 144,  265 => 142,  263 => 134,  249 => 128,  243 => 127,  239 => 126,  236 => 125,  232 => 124,  229 => 123,  226 => 122,  224 => 121,  208 => 108,  200 => 102,  192 => 97,  190 => 96,  188 => 95,  187 => 94,  177 => 86,  173 => 84,  166 => 82,  162 => 81,  158 => 79,  156 => 78,  150 => 75,  148 => 74,  146 => 73,  145 => 72,  139 => 68,  137 => 67,  80 => 12,  78 => 11,  76 => 9,  73 => 7,  71 => 6,  69 => 5,  66 => 4,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Get active shipping type and payment method #}
{% set obShippingTypeList = ShippingTypeList.make().active().sort() %}
{% set obActiveShippingType = obShippingTypeList.first() %}

{% set obPaymentMethodList = PaymentMethodList.make().active().sort() %}
{% set obActivePaymentMethod = obPaymentMethodList.first() %}

{# Get cart positions #}
{% set obCartPositionList = Cart.get(obActiveShippingType, obActivePaymentMethod) %}
{# Get array with applied coupons #}
{% set arCouponList = Cart.getAppliedCouponList() %}
<!-- SHOPING CART AREA START -->
<div class=\"account-login-area margin-bottom-100 mobile-mt-65  mobile-mb-75\">
    <div class=\"herboil__section-title  banner-cart checkout-image \">
        <h4 class=\"section-title-2\">Thanh Toán</h4>
    </div>
    <div class=\"container\">
        <!-- <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"herboil__section-title text-center\">
                    <h4 class=\"section-title-2\">Kiểm Tra Giỏ Hàng</h4>
                </div>
            </div>
        </div> -->
        <div class=\"shopping-cart-info shipping-info\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"shoping-cart-inner shipping-info-inner\">
                        <div class=\"row\">
                            <div class=\"col-xl-6 col-md-5\">
                                <div class=\"shipping-address\">
                                    <h4>Thông Tin Khách Hàng</h4>
                                    <form href=\"\" action=\"#\" class=\"form-input-box\">
                                        <label>Họ Và Tên*</label>
                                        <input type=\"text\" id=\"name\" name=\"name\">
                                        <p id=\"error-name\" style=\"color: red\"></p>
                                        
                                        <label>Số điện thoại*</label>
                                        <input type=\"text\" id=\"phone\" name=\"phone\">
                                        <p id=\"error-phone\" style=\"color: red\"></p>

                                        <label>Thành phố / Tỉnh*</label>
                                        <select id=\"province_select\" class=\"form-control custom-select\"
                                            data-minimum-input-length=\"2\" data-ajax--delay=\"300\" select-no-search>
                                            <option value=\"404\" selected=\"selected\">Chọn tỉnh/thành phố</option>
                                        </select>
                                        <p id=\"error-province\" style=\"color: red\"></p>

                                        <label>Quận/huyện*</label>
                                        <select id=\"district_select\" class=\"form-control custom-select\"
                                            data-minimum-input-length=\"2\" data-ajax--delay=\"300\" select-no-search>
                                        </select>
                                        <p id=\"error-district\" style=\"color: red\"></p>

                                        <label>Địa chỉ chi tiết*</label>
                                        <input type=\"text\" id=\"address-detail\" name=\"address\">
                                        <p id=\"error-detail\" style=\"color: red\"></p>

                                    </form>
                                </div>
                            </div>
                            <div class=\"col-xl-6 col-md-7\">
                                <div class=\"shoping-cart-total-area mobile-mt-75 tab-mt-80\">
                                    <div class=\"shoping-cart-total-inner\">
                                        <h4>Tổng Tiền</h4>
                                        <div class=\"table-content table-responsive mb-50\">
                                            {% if obCartPositionList.isNotEmpty() %}
                                            <table class=\"shoping-cart-total-table payment-details\">
                                                <tbody>
                                                    <tr>
                                                        <td>Tạm Tính: </td>
                                                        <td id=\"tamtinh\">{{
                                                            Cart.StringToInt(obCartPositionList.getTotalPrice()) |
                                                            number_format(0,\"\",\",\") }} {{
                                                            obCartPositionList.getCurrency() }}</td>
                                                    </tr>
                                                    <!-- tr -->
                                                    {% if arCouponList is not empty %}
                                                    <tr>
                                                        <td>Phí giảm: </td>
                                                        {% for obCoupon in arCouponList %}
                                                        <td>{ obCoupon.code }}</td>
                                                        {% endfor %}
                                                    </tr>
                                                    {% endif %}
                                                    <!-- tr -->
                                                    <tr>
                                                        <td>Phí vận chuyển: </td>
                                                        <td id=\"fee\"></td>
                                                    </tr>
                                                    <!-- tr -->
                                                    <tr>
                                                        <td>Tổng Cộng: </td>
                                                        <td><strong id=\"total\">{{
                                                                Cart.StringToInt(obCartPositionList.getTotalPrice()) |
                                                                number_format(0,\"\",\",\") }} {{
                                                                obCartPositionList.getCurrency() }}</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            {% endif %}
                                        </div>
                                        <div class=\"shoping-cart-btn-area shoping-cart-total-btn\">
                                            <ul>
                                                <li>
                                                    <div class=\"btn-wrapper text-center\">
                                                        <button id=\"continue-payment\" class=\"boxed-btn reverse-color\" type=\"submit\"
                                                          onclick=\"continuePayment( {{Cart.StringToInt(obCartPositionList.getTotalPrice())}})\" 
                                                          data-toggle=\"modal\" 
                                                         >Tiếp
                                                            tục thanh toán</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-6\">
                                <div class=\"shipping-method\">
                                    <h4>Đơn Vị Vận Chuyển</h4>
                                    {% set obShippingTypeList = ShippingTypeList.make().sort().active() %}
                                    {% if obShippingTypeList.isNotEmpty() %}
                                    <ul>
                                        {% for obShippingType in obShippingTypeList %}
                                        <li>
                                            <input type=\"radio\" id=\"shipping-type-{{ obShippingType.id }}\"
                                                name=\"shipping_type\" checked=\"{{ obShippingType.id }}\" value=\"{{obShippingType.id}}\">
                                            <label for=\"shipping-type-{{ obShippingType.id }}\">{{ obShippingType.name }}
                                                <br>
                                            </label>
                                            <div class=\"check\"></div>
                                        </li>
                                        {% endfor %}
                                        {# <li>
                                            <input type=\"radio\" id=\"202\" name=\"selector\">
                                            <label for=\"202\">BStandard shipping <br> Delivery in 10 to 15 business
                                                days</label>
                                            <div class=\"check\">
                                                <div class=\"inside\"></div>
                                            </div>
                                        </li> #}
                                    </ul>
                                    {% endif %}

                                </div>
                                    <div class=\"payment-method\">
                                    <h4>Phương Thức Thanh Toán</h4>
                                    {% set obPaymentMethodList = PaymentMethodList.make().sort().active() %}
                                    {% if obPaymentMethodList.isNotEmpty() %}
                                    <div>

                                        {% for obPaymentMethod in obPaymentMethodList %}
                                        <input type=\"radio\" id=\"payment-method-{{ obPaymentMethod.id }}\" checked=\"{{ obPaymentMethod.id }}\"
                                            name=\"payment_method\" value=\"{{ obPaymentMethod.id }}\">
                                        <label for=\"payment-method-{{ obPaymentMethod.id }}\">{{ obPaymentMethod.name
                                            }}</label>
                                        <span> : Thanh toán [ {{ obPaymentMethod.name }} ]</span> <br>
                                        {% endfor %}
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPING CART AREA END -->

<!-- Popup checkout -->
<div id=\"popupcheckout\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title title-popupcheckout\">Chi tiết đơn hàng</h4>
                <div class=\"loader\">
                    <div class=\"loader__image\">
                        <div class=\"loader__coin\">
                            <img src=\"https://www.dropbox.com/s/fzc3fidyxqbqhnj/loader-coin.png?raw=1\" alt=\"\">
                        </div>
                        <div class=\"loader__hand\">
                            <img src=\"https://www.dropbox.com/s/y8uqvjn811z6npu/loader-hand.png?raw=1\" alt=\"\">
                        </div>
                    </div>
                </div>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div class=\"modal-body\">
                <table>
                    <tr>
                        <th>Khách hàng</th>
                        <th id=\"name-customer\"></th>
                    </tr>

                    <tr>
                        <td>Số điện thoại</td>
                        <td id=\"phone-customer\"/>
                    </tr>
                    {% for obCart in obCartPositionList %}
                    {% set obOffer = obCart.item %}
                    {% set obProduct = obOffer.product %}
                    <tr>
                        <td>{{ obProduct.name }}</td>
                        <td>{{ Cart.StringToInt(obCart.price) | number_format(0,\"\",\".\") }} đ</td>
                    </tr>
                    {% endfor %}
                    <tr>
                        <td>Địa chỉ giao hàng</td>
                        <td id=\"address-express\"/>
                    </tr>

                    <tr>
                        <td>Đơn vị vận chuyển</td>
                        <td>Giao hàng tiết kiệm</td>
                    </tr>
                    <tr>
                        <td>Phí giao hàng</td>
                        <td id=\"fee-express\"/>
                    </tr>

                    <tr>
                        <td>Tổng tiền</td>
                        <td id=\"total-payment\"/>
                    </tr>


                </table>

               {# <div class=\"grateful\">Cảm ơn bạn. Đơn hàng của bạn đã được nhận</div> #}

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" id=\"comfirm-order\" onclick=\"comfirm()\">Xác nhận</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>

    </div>
</div>", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/cart/checkout.htm", "");
    }
}
