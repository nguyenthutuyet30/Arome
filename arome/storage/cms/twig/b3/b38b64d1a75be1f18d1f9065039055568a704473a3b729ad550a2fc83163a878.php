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

/* C:\xampp\htdocs\arome/themes/aroma/pages/checkout.htm */
class __TwigTemplate_6c6047b518685430b988690f1e1de44a7109f22c417189336aaefe55dd739e72 extends \Twig\Template
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
        $tags = array("partial" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart/checkout"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 110
        echo "<!-- SHOPI";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/checkout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 110,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'cart/checkout' %}
{# <div class=\"account-login-area margin-top-110 margin-bottom-100 mobile-mt-65  mobile-mb-75\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"herboil__section-title text-center\">
                    <h4 class=\"section-title-2\">Checkout</h4>
                </div>
            </div>
        </div>
        <div class=\"shopping-cart-info shipping-info\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"shoping-cart-inner shipping-info-inner\">
                        <div class=\"row\">
                            <div class=\"col-xl-6 col-md-5\">
                                <div class=\"shipping-address\">
                                    <h4>ADDRESS</h4>
                                    <form href=\"{{orders | page}}\" action=\"#\" class=\"form-input-box\">
                                        <label>First name*</label>
                                        <input type=\"text\" name=\"user[mail]\" placeholder=\"Rumaisa\">
                                        <label>Last name*</label>
                                        <input type=\"text\" name=\"lastname\" placeholder=\"Adam\">
                                        <label>Street name*</label>
                                        <input type=\"text\" name=\"streetname\" placeholder=\"Edwards street\">
                                        <label>House number*</label>
                                        <input type=\"text\" name=\"housenumber\" placeholder=\"22\">
                                        <label>State*</label>
                                        <input type=\"text\" name=\"state\" placeholder=\"Valley Pitot\">
                                        <label>City*</label>
                                        <input type=\"text\" name=\"city\" placeholder=\"Port Louis\">
                                        <label>Country*</label>
                                        <input type=\"text\" name=\"cuntry\" placeholder=\"Mauritius\">
                                        <label>Postal code*</label>
                                        <input type=\"text\" name=\"postalcode\" placeholder=\"12345\">
                                    </form>
                                </div>
                            </div>
                            <div class=\"col-xl-6 col-md-7\">
                                <div class=\"shoping-cart-total-area mobile-mt-75 tab-mt-80\">
                                    <div class=\"shoping-cart-total-inner\">
                                        <h4>Cart Totals</h4>
                                        <div class=\"table-content table-responsive mb-50\">
                                            <table class=\"shoping-cart-total-table payment-details\">
                                                <tbody>
                                                    <tr>
                                                        <td>Tổng Tiền Hàng: </td>
                                                        <td>\$450.00</td>
                                                    </tr>
                                                    <!-- tr -->
                                                    <tr>
                                                        <td>Phí giảm: </td>
                                                        <td>\$15.00</td>
                                                    </tr>
                                                    <!-- tr -->
                                                    <tr>
                                                        <td>Phí vận chuyển: </td>
                                                        <td>\$25.00</td>
                                                    </tr>
                                                    <!-- tr -->
                                                    <tr>
                                                        <td>Tổng Cộng: </td>
                                                        <td><strong>\$520.00</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class=\"shoping-cart-btn-area shoping-cart-total-btn\">
                                            <ul>
                                                <li>
                                                    <div class=\"btn-wrapper\">
                                                        <button class=\"boxed-btn reverse-color\" type=\"submit\">Continue
                                                            to Payment</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-6\">
                                <div class=\"shipping-method\">
                                    <h4>SHIPPING AND HANDLING</h4>
                                    <ul>
                                        <li>
                                            <input type=\"radio\" id=\"201\" name=\"selector\" checked=\"checked\">
                                            <label for=\"201\">Express shipping <br> Delivery in 2 to 3 business
                                                days</label>
                                            <div class=\"check\"></div>
                                        </li>
                                        <li>
                                            <input type=\"radio\" id=\"202\" name=\"selector\">
                                            <label for=\"202\">BStandard shipping <br> Delivery in 10 to 15 business
                                                days</label>
                                            <div class=\"check\">
                                                <div class=\"inside\"></div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>#}
<!-- SHOPI", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/checkout.htm", "");
    }
}
