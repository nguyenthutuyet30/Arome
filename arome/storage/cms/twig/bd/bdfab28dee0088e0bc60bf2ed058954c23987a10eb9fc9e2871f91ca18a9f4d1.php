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

/* C:\xampp\htdocs\arome/themes/aroma/pages/registor.htm */
class __TwigTemplate_62f791ae931af3b7673004528c6b46772138944de23fbf482b49dd90144eccd1 extends \Twig\Template
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
        $tags = array("if" => 2);
        $filters = array("page" => 53);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page'],
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
";
        // line 2
        if ( !($context["user"] ?? null)) {
            // line 3
            echo "<div class=\"account-login-area  margin-bottom-100  mobile-mb-75\">
    <div class=\"banner-header banner-registor\">
        <div class=\"container text-center\">
            <h1>Đăng ký</h1>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"herboil__section-title text-center\">
                    <h4 class=\"section-title-2\">Đăng kí thành viên </h4>
                    <p>Thêm các mục vào danh sách mong muốn của bạn các đề xuất được cá nhân hóa<br>
                        kiểm tra nhanh hơn theo dõi đơn hàng của bạn đăng ký</p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"account-login-inner\">
                    <form data-request=\"onRegister\" class=\"form-input-box account-login-form\">
                        <input name=\"name\" type=\"text\" placeholder=\"Họ và tên\" class=\"form-control enter-data\">
                        <div class=\"form-group\">
                            <input name=\"email\" type=\"email\" class=\"form-control enter-data\" placeholder=\"Email\"
                                data-request=\"onCheckEmail\"
                                data-request-success=\"\$('#loginTaken').toggle(!!data.isTaken)\" data-track-input />
                        </div>
                        <div id=\"loginTaken\" class=\"alert alert-danger\" style=\"display: none\">
                            Email đã được xử dụng
                        </div>
                        <input name=\"username\" data-request=\"onCheckUsername\"
                            data-request-success=\"\$('#usernameTaken').toggle(!!data.usernameTaken)\" data-track-input
                            type=\"text\" placeholder=\"Tên đăng nhập\" class=\"enter-data\">
                        <div id=\"usernameTaken\" class=\"alert alert-danger\" style=\"display: none\">
                            Tên đăng nhập đã được xử dụng
                        </div>
                        <input name=\"password\" type=\"password\" placeholder=\"Mật khẩu\" class=\"enter-data\">
                        <input name=\"password_confirmation\" type=\"password\" placeholder=\"Xác nhận mật khẩu\"
                            class=\"enter-data\">
                        <div class=\"btn-wrapper\">
                            <button class=\"boxed-btn reverse-color\" type=\"submit\">ĐĂNG KÍ</button>
                        </div>
                    </form>
                    <!-- <div class=\"by-agree\">
                        <p>Bằng cách tạo một tài khoản, bạn đồng ý với:</p>
                        <p><a href=\"#\">ĐIỀU KIỆN &nbsp; &nbsp; | &nbsp; &nbsp;
                                CHÍNH SÁCH BẢO MẬT</a></p>
                    </div> -->
                    <div class=\"go-to-btn\">
                        <a href=\"";
            // line 53
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">BẠN ĐÃ CÓ TÀI KHOẢN ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        } else {
            // line 61
            echo "<div class=\"account-login-area margin-top-110 margin-bottom-100 mobile-mt-65  mobile-mb-75\">
    <div class=\"container text-center\">
        <h4>Bạn đã Đăng nhập</h4>
        <button type=\"submit\" class=\"btn btn-primary\">
            <span class=\"boxed-btn\">Tiếp tục mua hàng</span>
        </button>
    </div>
</div>

";
        }
        // line 71
        echo "<!-- SHOPING CART AREA END -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/registor.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 71,  130 => 61,  119 => 53,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- SHOPING CART AREA START -->
{% if not user %}
<div class=\"account-login-area  margin-bottom-100  mobile-mb-75\">
    <div class=\"banner-header banner-registor\">
        <div class=\"container text-center\">
            <h1>Đăng ký</h1>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"herboil__section-title text-center\">
                    <h4 class=\"section-title-2\">Đăng kí thành viên </h4>
                    <p>Thêm các mục vào danh sách mong muốn của bạn các đề xuất được cá nhân hóa<br>
                        kiểm tra nhanh hơn theo dõi đơn hàng của bạn đăng ký</p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6 offset-lg-3\">
                <div class=\"account-login-inner\">
                    <form data-request=\"onRegister\" class=\"form-input-box account-login-form\">
                        <input name=\"name\" type=\"text\" placeholder=\"Họ và tên\" class=\"form-control enter-data\">
                        <div class=\"form-group\">
                            <input name=\"email\" type=\"email\" class=\"form-control enter-data\" placeholder=\"Email\"
                                data-request=\"onCheckEmail\"
                                data-request-success=\"\$('#loginTaken').toggle(!!data.isTaken)\" data-track-input />
                        </div>
                        <div id=\"loginTaken\" class=\"alert alert-danger\" style=\"display: none\">
                            Email đã được xử dụng
                        </div>
                        <input name=\"username\" data-request=\"onCheckUsername\"
                            data-request-success=\"\$('#usernameTaken').toggle(!!data.usernameTaken)\" data-track-input
                            type=\"text\" placeholder=\"Tên đăng nhập\" class=\"enter-data\">
                        <div id=\"usernameTaken\" class=\"alert alert-danger\" style=\"display: none\">
                            Tên đăng nhập đã được xử dụng
                        </div>
                        <input name=\"password\" type=\"password\" placeholder=\"Mật khẩu\" class=\"enter-data\">
                        <input name=\"password_confirmation\" type=\"password\" placeholder=\"Xác nhận mật khẩu\"
                            class=\"enter-data\">
                        <div class=\"btn-wrapper\">
                            <button class=\"boxed-btn reverse-color\" type=\"submit\">ĐĂNG KÍ</button>
                        </div>
                    </form>
                    <!-- <div class=\"by-agree\">
                        <p>Bằng cách tạo một tài khoản, bạn đồng ý với:</p>
                        <p><a href=\"#\">ĐIỀU KIỆN &nbsp; &nbsp; | &nbsp; &nbsp;
                                CHÍNH SÁCH BẢO MẬT</a></p>
                    </div> -->
                    <div class=\"go-to-btn\">
                        <a href=\"{{ 'login' | page }}\">BẠN ĐÃ CÓ TÀI KHOẢN ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% else%}
<div class=\"account-login-area margin-top-110 margin-bottom-100 mobile-mt-65  mobile-mb-75\">
    <div class=\"container text-center\">
        <h4>Bạn đã Đăng nhập</h4>
        <button type=\"submit\" class=\"btn btn-primary\">
            <span class=\"boxed-btn\">Tiếp tục mua hàng</span>
        </button>
    </div>
</div>

{% endif %}
<!-- SHOPING CART AREA END -->", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/registor.htm", "");
    }
}
