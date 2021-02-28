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

/* C:\xampp\htdocs\arome/themes/aroma/pages/login.htm */
class __TwigTemplate_9c3fac94f86bf158f0e7b45f5d4b76577745adcc801fe86c32a5ed8382d2dedc extends \Twig\Template
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
        $tags = array("if" => 2, "flash" => 11);
        $filters = array("escape" => 12, "page" => 24);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'flash'],
                ['escape', 'page'],
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
            echo "<div class=\"account-login-area mobile-mb-75\">
    <div class=\"banner-header banner-login\">
        <div class=\"container text-center\">
            <h1>Đăng nhập</h1>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            ";
            $_type = isset($context["type"]) ? $context["type"] : null;            $_message = isset($context["message"]) ? $context["message"] : null;            // line 11
            foreach (Flash::getMessages() as $type => $messages) {
                foreach ($messages as $message) {
                    $context["type"] = $type;                    $context["message"] = $message;                    // line 12
                    echo "            <div class=\"alert alert-";
                    (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 12, $this->source), "html", null, true);
                    echo "</div>
            ";
                }
            }
            $context["type"] = $_type;            $context["message"] = $_message;            // line 14
            echo "        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 mt-5 mb-5\">
                <div class=\"account-login-inner\">
                    <form data-request=\"onSignin\" data-request-redirect=\"./\" class=\"form-account-login\">
                        <label class=\"enter-login\">Email*</label>
                        <input type=\"text\" name=\"email\" placeholder=\"Vui lòng nhập email...\">
                        <label class=\"enter-login\">Mật khẩu*</label>
                        <input type=\"password\" name=\"password\" placeholder=\"Vui lòng nhập mật khẩu...\">
                        <div class=\"go-to-btn text-right\" style=\"margin: 0;\">
                            <a href=\"";
            // line 24
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("my-acount");
            echo "\">Quên mật khẩu?</a>
                        </div>
                        <div class=\"btn-wrapper text-center\">
                            <button class=\"boxed-btn black-btn btn-login\" type=\"submit\">Đăng Nhập</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"account-create text-center padding-top-50\">
                    <h4>BẠN CHƯA CÓ TÀI KHOẢN ?</h4>
                    <p class=\"short-login-des\">Tạo tài khoản để nhận được nhiều ưu đãi chỉ dành riêng cho Thành viên, và
                        theo dõi đơn hàng của bạn nhanh hơn.<br>
                    </p>
                    <div class=\"btn-wrapper\">
                        <a href=\"./dang-ky-thanh-vien\" class=\"boxed-btn black-btn btn-register btn-res\">Tạo Tài
                            Khoản</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        } else {
            // line 49
            echo "

";
        }
        // line 52
        echo "<!-- SHOPING CART AREA END -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  129 => 49,  101 => 24,  89 => 14,  80 => 12,  77 => 11,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- SHOPING CART AREA START -->
{% if not user %}
<div class=\"account-login-area mobile-mb-75\">
    <div class=\"banner-header banner-login\">
        <div class=\"container text-center\">
            <h1>Đăng nhập</h1>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            {% flash %}
            <div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">{{ message }}</div>
            {% endflash %}
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 mt-5 mb-5\">
                <div class=\"account-login-inner\">
                    <form data-request=\"onSignin\" data-request-redirect=\"./\" class=\"form-account-login\">
                        <label class=\"enter-login\">Email*</label>
                        <input type=\"text\" name=\"email\" placeholder=\"Vui lòng nhập email...\">
                        <label class=\"enter-login\">Mật khẩu*</label>
                        <input type=\"password\" name=\"password\" placeholder=\"Vui lòng nhập mật khẩu...\">
                        <div class=\"go-to-btn text-right\" style=\"margin: 0;\">
                            <a href=\"{{ 'my-acount' | page }}\">Quên mật khẩu?</a>
                        </div>
                        <div class=\"btn-wrapper text-center\">
                            <button class=\"boxed-btn black-btn btn-login\" type=\"submit\">Đăng Nhập</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"account-create text-center padding-top-50\">
                    <h4>BẠN CHƯA CÓ TÀI KHOẢN ?</h4>
                    <p class=\"short-login-des\">Tạo tài khoản để nhận được nhiều ưu đãi chỉ dành riêng cho Thành viên, và
                        theo dõi đơn hàng của bạn nhanh hơn.<br>
                    </p>
                    <div class=\"btn-wrapper\">
                        <a href=\"./dang-ky-thanh-vien\" class=\"boxed-btn black-btn btn-register btn-res\">Tạo Tài
                            Khoản</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% else%}


{% endif %}
<!-- SHOPING CART AREA END -->", "C:\\xampp\\htdocs\\arome/themes/aroma/pages/login.htm", "");
    }
}
