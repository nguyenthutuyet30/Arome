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

/* C:\xampp\htdocs\arome/themes/aroma/partials/top-footer.htm */
class __TwigTemplate_ac1942886d88ecfdcfc6faedb6a81b9c6cf0f452cedb5b9185ca8c1aadadb187 extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"section_newletter\">
    <div class=\"container\">
        <div class=\"wrap-register\">
            <div class=\"title-register text-center\">
                <h3>Đăng ký nhận tin</h3>
                <p>
                    Bạn có thể đăng ký nhận tin khuyến mãi bất cứ lúc nào, những thông tin sẽ được gửi tới bạn nhanh
                    nhất.
                </p>
            </div>
            <div class=\"main_footer\">
                <div class=\"form-footer\">
                    <form class=\"margin-bottom-0\">
                        <input type=\"email\" name=\"Email\" placeholder=\"Vui lòng nhập email tại đây ...\" id=\"email\">
                        <button class=\"btn btn-primary subscribe\" name=\"subscribe\" id=\"subscribe\">
                            <i class=\"fa fa-paper-plane\"></i>&nbsp;
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/top-footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section_newletter\">
    <div class=\"container\">
        <div class=\"wrap-register\">
            <div class=\"title-register text-center\">
                <h3>Đăng ký nhận tin</h3>
                <p>
                    Bạn có thể đăng ký nhận tin khuyến mãi bất cứ lúc nào, những thông tin sẽ được gửi tới bạn nhanh
                    nhất.
                </p>
            </div>
            <div class=\"main_footer\">
                <div class=\"form-footer\">
                    <form class=\"margin-bottom-0\">
                        <input type=\"email\" name=\"Email\" placeholder=\"Vui lòng nhập email tại đây ...\" id=\"email\">
                        <button class=\"btn btn-primary subscribe\" name=\"subscribe\" id=\"subscribe\">
                            <i class=\"fa fa-paper-plane\"></i>&nbsp;
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/top-footer.htm", "");
    }
}
