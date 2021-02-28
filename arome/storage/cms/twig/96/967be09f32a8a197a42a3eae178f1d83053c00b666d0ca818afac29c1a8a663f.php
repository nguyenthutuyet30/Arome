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

/* C:\xampp\htdocs\arome/themes/aroma/partials/footer.htm */
class __TwigTemplate_971e97c9ee25a18e8d26b448302227d8d09215a84e5fdc1144c9335e79713156 extends \Twig\Template
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
        $tags = array();
        $filters = array("theme" => 53, "page" => 91);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
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
        echo "<div class=\"footer-top section-bg-1\">
    <div class=\"container\">
        <div class=\"row custom-gutter\">
            <div class=\"col-xl-6 col-lg-6 col-md-6\">
                <div class=\"footer-widget widget\">
                    <div class=\"about_us_widget\">
                        <div class=\"footer-address\">
                            <ul>
                                <h4 class=\"name-company\">Công ty TNHH SX-TM-DV-Xuất Nhập khẩu HQ
                                </h4>
                                <li>
                                    <div class=\"footer-address-icon\">
                                        <i class=\"far fa-map-marker-alt\"></i>
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p class=\"address-home\">17/3/11, đường Gò Dầu, phường Tân Quý, quận Tân Phú, Tp.
                                            Hồ Chí Minh, Việt
                                            Nam</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"footer-address-icon\">
                                        <i class=\"fal fa-building\"></i>
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p>Vp giao dịch: Kho A75, Bạch Đằng, Phường 2,
                                            Quận Tân Bình, TP.
                                            Hồ Chí Minh</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"footer-address-icon\">
                                        <i class=\"fal fa-envelope\"></i>
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p><a href=\"mailto:contact@hqvietnam.com\">contact@hqvietnam.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"footer-address-icon\">
                                        <!-- <i class=\"fal fa-mobile-android\" style=margin-right:5px></i> -->
                                        <i class=\"far fa-phone-alt\" style=margin-right:-2px;font-size:18px></i>
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p><a href=\"tel:+84 36 63 69 830\">036 63 69 830</a> </p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"footer-address-icon\">
                                        <!-- <i class=\"fa fa-globe\"></i> -->
                                        <i class=\"fab fa-stripe-s\"></i>
                                        <!-- <img style=\"width:25px\" src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/shopee.png");
        echo "\" alt=\"\"> -->
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p><a href=\"https://shopee.vn/arome.vietnam\" target=\"_blank\">Shopee:
                                                arome.vietnam</a></p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"footer-address-icon\">
                                        <i class=\"fal fa-award\"></i>
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p>Giấy CNĐKD: 0316579880 <br>
                                            Ngày cấp: 11/11/2020<br>
                                            Nơi cấp: Sở kế hoạch và đầu tư TP.HCM
                                        </p>
                                    </div>
                                </li>

                                ";
        // line 81
        echo "
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-2 col-lg-2 col-md-6\">
                <div class=\"footer-widget widget widget_nav_menu\">
                    <h4 class=\"widget-title name-link\">Liên kết</h4>
                    <ul class=\"link-menu\">
                        <li><a href=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Trang Chủ</a></li>
                        <li><a href=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Giới Thiệu</a></li>
                        <li><a href=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("all-product");
        echo "\">Sản Phẩm</a></li>
                        <li><a href=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
                        <li><a href=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Liên Hệ</a></li>
                    </ul>
                </div>
            </div>

            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                <div class=\"social-us\">
                    <h3>Kết nối với chúng tôi</h3>
                    <ul class=\"icon-social-footer\">
                        <li>
                            <a href=\"https://www.facebook.com/aromevietnam\" target=\"_blank\">
                                <i class=\"fab fa-facebook-f face-ft\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://www.tiktok.com/@aromevn\" target=\"_blank\">
                                <img src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/tik-tok.png");
        echo "\" alt=\"\" class=\"tiktok\">
                            </a>
                        </li>
                        <li>
                            <a href=\"https://www.instagram.com/arome_essentialoil/\" target=\"_blank\">
                                <i class=\"fab fa-instagram insta-ft\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"footer-widget widget widget_nav_menu\">
                    <h4 class=\"widget-title name-fanpage p-top-20\">Fanpage</h4>
                    <iframe
                        src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Faromevietnam&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId\"
                        width=\"500\" height=\"auto\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\"
                        allowfullscreen=\"true\"
                        allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe>

                    <!-- <div class=\"\">
                        <img src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/card-2.png");
        echo "\" alt=\"#\">
                    </div> -->
                    <div class=\"logo-info\">
                        <!-- <a href=\"\">
                            <img src=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/dadangky.png");
        echo "\" alt=\"\">
                        </a> -->
                        <a href=\"\">
                            <img src=\"";
        // line 137
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/dathongbao.png");
        echo "\" alt=\"\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"copyright-area\">
    <div class=\"copyright-area-inner\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-lg-6 align-self-center\">
                    <div class=\"copyright-text\">
                        <!-- <span><i class=\"fal fa-certificate\" style=margin-right:5px></i>Giấy CNĐKD: 0316579880, ngày cấp:
                            11/11/2020, TP. HCM</span> <br> -->
                        <span> &copy; Copyright <span class=\"current-year\"></span><a href=\"../../index.htm\"
                                target=\"_blank\"> HQ- create polinasoft</a> - All rights reserved.</span>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"card-accept\">
                        <img src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/card-2.png");
        echo "\" alt=\"#\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 159,  221 => 137,  215 => 134,  208 => 130,  186 => 111,  167 => 95,  163 => 94,  159 => 93,  155 => 92,  151 => 91,  139 => 81,  116 => 53,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-top section-bg-1\">
    <div class=\"container\">
        <div class=\"row custom-gutter\">
            <div class=\"col-xl-6 col-lg-6 col-md-6\">
                <div class=\"footer-widget widget\">
                    <div class=\"about_us_widget\">
                        <div class=\"footer-address\">
                            <ul>
                                <h4 class=\"name-company\">Công ty TNHH SX-TM-DV-Xuất Nhập khẩu HQ
                                </h4>
                                <li>
                                    <div class=\"footer-address-icon\">
                                        <i class=\"far fa-map-marker-alt\"></i>
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p class=\"address-home\">17/3/11, đường Gò Dầu, phường Tân Quý, quận Tân Phú, Tp.
                                            Hồ Chí Minh, Việt
                                            Nam</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"footer-address-icon\">
                                        <i class=\"fal fa-building\"></i>
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p>Vp giao dịch: Kho A75, Bạch Đằng, Phường 2,
                                            Quận Tân Bình, TP.
                                            Hồ Chí Minh</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"footer-address-icon\">
                                        <i class=\"fal fa-envelope\"></i>
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p><a href=\"mailto:contact@hqvietnam.com\">contact@hqvietnam.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"footer-address-icon\">
                                        <!-- <i class=\"fal fa-mobile-android\" style=margin-right:5px></i> -->
                                        <i class=\"far fa-phone-alt\" style=margin-right:-2px;font-size:18px></i>
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p><a href=\"tel:+84 36 63 69 830\">036 63 69 830</a> </p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"footer-address-icon\">
                                        <!-- <i class=\"fa fa-globe\"></i> -->
                                        <i class=\"fab fa-stripe-s\"></i>
                                        <!-- <img style=\"width:25px\" src=\"{{ 'assets/img/icon/shopee.png'| theme}}\" alt=\"\"> -->
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p><a href=\"https://shopee.vn/arome.vietnam\" target=\"_blank\">Shopee:
                                                arome.vietnam</a></p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"footer-address-icon\">
                                        <i class=\"fal fa-award\"></i>
                                    </div>
                                    <div class=\"footer-address-info\">
                                        <p>Giấy CNĐKD: 0316579880 <br>
                                            Ngày cấp: 11/11/2020<br>
                                            Nơi cấp: Sở kế hoạch và đầu tư TP.HCM
                                        </p>
                                    </div>
                                </li>

                                {#<div class=\"logo-info\">
                                    <!-- <a href=\"\">
                                        <img src=\"{{ 'assets/img/icon/dadangky.png' | theme }}\" alt=\"\">
                                    </a> -->
                                    <a href=\"\">
                                        <img src=\"{{ 'assets/img/icon/dathongbao.png' | theme }}\" alt=\"\">
                                    </a>
                                </div>#}

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-2 col-lg-2 col-md-6\">
                <div class=\"footer-widget widget widget_nav_menu\">
                    <h4 class=\"widget-title name-link\">Liên kết</h4>
                    <ul class=\"link-menu\">
                        <li><a href=\"{{ 'home' | page }}\">Trang Chủ</a></li>
                        <li><a href=\"{{ 'about' | page }}\">Giới Thiệu</a></li>
                        <li><a href=\"{{ 'all-product' | page }}\">Sản Phẩm</a></li>
                        <li><a href=\"{{ 'blog' | page }}\">Blog</a></li>
                        <li><a href=\"{{ 'contact' | page }}\">Liên Hệ</a></li>
                    </ul>
                </div>
            </div>

            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                <div class=\"social-us\">
                    <h3>Kết nối với chúng tôi</h3>
                    <ul class=\"icon-social-footer\">
                        <li>
                            <a href=\"https://www.facebook.com/aromevietnam\" target=\"_blank\">
                                <i class=\"fab fa-facebook-f face-ft\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://www.tiktok.com/@aromevn\" target=\"_blank\">
                                <img src=\"{{ 'assets/img/icon/tik-tok.png' | theme}}\" alt=\"\" class=\"tiktok\">
                            </a>
                        </li>
                        <li>
                            <a href=\"https://www.instagram.com/arome_essentialoil/\" target=\"_blank\">
                                <i class=\"fab fa-instagram insta-ft\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"footer-widget widget widget_nav_menu\">
                    <h4 class=\"widget-title name-fanpage p-top-20\">Fanpage</h4>
                    <iframe
                        src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Faromevietnam&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId\"
                        width=\"500\" height=\"auto\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\"
                        allowfullscreen=\"true\"
                        allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe>

                    <!-- <div class=\"\">
                        <img src=\"{{'assets/img/icon/card-2.png'|theme}}\" alt=\"#\">
                    </div> -->
                    <div class=\"logo-info\">
                        <!-- <a href=\"\">
                            <img src=\"{{ 'assets/img/icon/dadangky.png' | theme }}\" alt=\"\">
                        </a> -->
                        <a href=\"\">
                            <img src=\"{{ 'assets/img/icon/dathongbao.png' | theme }}\" alt=\"\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"copyright-area\">
    <div class=\"copyright-area-inner\">
        <div class=\"container\">
            <div class=\"row custom-gutter\">
                <div class=\"col-lg-6 align-self-center\">
                    <div class=\"copyright-text\">
                        <!-- <span><i class=\"fal fa-certificate\" style=margin-right:5px></i>Giấy CNĐKD: 0316579880, ngày cấp:
                            11/11/2020, TP. HCM</span> <br> -->
                        <span> &copy; Copyright <span class=\"current-year\"></span><a href=\"../../index.htm\"
                                target=\"_blank\"> HQ- create polinasoft</a> - All rights reserved.</span>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"card-accept\">
                        <img src=\"{{'assets/img/icon/card-2.png'|theme}}\" alt=\"#\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/footer.htm", "");
    }
}
