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

/* C:\xampp\htdocs\arome/themes/aroma/partials/top-header.htm */
class __TwigTemplate_c2a22c6eab68b139b5081c3f93dbfb847e250392a83d66c271beb7a6e803ab02 extends \Twig\Template
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
        $tags = array("if" => 31);
        $filters = array("escape" => 35, "page" => 42, "theme" => 53);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'page', 'theme'],
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
        echo "<!-- Header top area start -->
<div class=\"header-top-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"top-bar-left\">
                    <div class=\"contact-link\">
                        <div class=\"info_box phone\">
                            Liên hệ: <span>036 63 69 830</span>
                        </div>
                        <div class=\"info_box email\">
                            email : <a href=\"mailto:demo@example.com\">contact@hqvietnam.com</a>
                        </div>
                    </div>
                    <div class=\"social_follow\">
                        <ul>
                            <li class=\"facebook\"><a href=\"#\"></a></li>
                            <li class=\"twitter\"><a href=\"#\"></a></li>
                            <li class=\"youtube\"><a href=\"#\"></a></li>
                            <li class=\"googleplus\"><a href=\"#\"></a></li>
                            <li class=\"instagram\"><a href=\"#\"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"topbar-nav\">
                    <div class=\"wpb_wrapper\">
                        <!-- my account -->
                        <div class=\"menu-my-account-container\">
                            ";
        // line 31
        if ( !($context["user"] ?? null)) {
            // line 32
            echo "                            <a href=\"#\"><i class=\"first-icon fa fa-user-circle\"></i> Tài khoản <i
                                    class=\"fal fa-angle-down\"></i></a>
                            ";
        } else {
            // line 35
            echo "                            <a href=\"#\"><i class=\"first-icon fa fa-user-circle\"></i> Xin chào ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo " <i
                                    class=\"fal fa-angle-down\"></i></a>
                            ";
        }
        // line 38
        echo "                            <ul>
                                
                                <!-- <li><a href=\"checkout.html\">Kiểm tra tài khoản</a></li> -->
                                ";
        // line 41
        if ( !($context["user"] ?? null)) {
            // line 42
            echo "                                <li><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Đăng nhập</a></li>
                                ";
        } else {
            // line 44
            echo "                                <li><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("quanlytaikhoan");
            echo "\">Quản lý tài khoản</a></li>
                                <li><a href=\"javascript:;\" data-request=\"onLogout\">Đăng xuất</a></li>
                                ";
        }
        // line 47
        echo "                            </ul>
                        </div>
                        <div class=\"switcher\">
                            <!-- language-menu -->
                            <div class=\"language\">
                                <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'vi'\">
                                    <img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/vi.png");
        echo "\" alt=\"language-selector\">Tiếng Việt
                                    <i class=\"fal fa-angle-down\"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">
                                            <img src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/en.png");
        echo "\" alt=\"English\">
                                            <span>English</span>
                                        </a>
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
<!-- Top bar area end -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/top-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 59,  136 => 53,  128 => 47,  121 => 44,  115 => 42,  113 => 41,  108 => 38,  101 => 35,  96 => 32,  94 => 31,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header top area start -->
<div class=\"header-top-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"top-bar-left\">
                    <div class=\"contact-link\">
                        <div class=\"info_box phone\">
                            Liên hệ: <span>036 63 69 830</span>
                        </div>
                        <div class=\"info_box email\">
                            email : <a href=\"mailto:demo@example.com\">contact@hqvietnam.com</a>
                        </div>
                    </div>
                    <div class=\"social_follow\">
                        <ul>
                            <li class=\"facebook\"><a href=\"#\"></a></li>
                            <li class=\"twitter\"><a href=\"#\"></a></li>
                            <li class=\"youtube\"><a href=\"#\"></a></li>
                            <li class=\"googleplus\"><a href=\"#\"></a></li>
                            <li class=\"instagram\"><a href=\"#\"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"topbar-nav\">
                    <div class=\"wpb_wrapper\">
                        <!-- my account -->
                        <div class=\"menu-my-account-container\">
                            {% if not user %}
                            <a href=\"#\"><i class=\"first-icon fa fa-user-circle\"></i> Tài khoản <i
                                    class=\"fal fa-angle-down\"></i></a>
                            {% else%}
                            <a href=\"#\"><i class=\"first-icon fa fa-user-circle\"></i> Xin chào {{user.username}} <i
                                    class=\"fal fa-angle-down\"></i></a>
                            {% endif %}
                            <ul>
                                
                                <!-- <li><a href=\"checkout.html\">Kiểm tra tài khoản</a></li> -->
                                {% if not user %}
                                <li><a href=\"{{ 'login' | page }}\">Đăng nhập</a></li>
                                {% else%}
                                <li><a href=\"{{ 'quanlytaikhoan' | page }}\">Quản lý tài khoản</a></li>
                                <li><a href=\"javascript:;\" data-request=\"onLogout\">Đăng xuất</a></li>
                                {% endif %}
                            </ul>
                        </div>
                        <div class=\"switcher\">
                            <!-- language-menu -->
                            <div class=\"language\">
                                <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'vi'\">
                                    <img src=\"{{ 'assets/img/icon/vi.png' | theme }}\" alt=\"language-selector\">Tiếng Việt
                                    <i class=\"fal fa-angle-down\"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">
                                            <img src=\"{{ 'assets/img/icon/en.png' | theme }}\" alt=\"English\">
                                            <span>English</span>
                                        </a>
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
<!-- Top bar area end -->", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/top-header.htm", "");
    }
}
