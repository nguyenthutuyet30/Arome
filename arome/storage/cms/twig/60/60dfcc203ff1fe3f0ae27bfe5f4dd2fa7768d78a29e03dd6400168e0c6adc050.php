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

/* C:\xampp\htdocs\arome/themes/aroma/partials/callnow.htm */
class __TwigTemplate_5bda7f6479f52a4b42f0f6e5920356fb2537d0e39b0a4a01b82a5bf3047826ea extends \Twig\Template
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
        echo "<!-- <label for=\"identifier-1\"></label> -->
<div>
    <div class=\"ppocta-ft-fix\">
        <a id=\"calltrap-btn\" class=\"b-calltrap-btn calltrap_offline hidden-phone visible-tablet\" href=\"tel:0366369830\">
            <div id=\"calltrap-ico\"></div><span><strong>036 63 69 830</strong></span>
        </a>
        <a id=\"messengerButton\" href=\"https://www.facebook.com/aromevietnam\" target=\"_blank\"><span>Nhắn tin qua
                Facebook</span></a>

        <a id=\"zaloButton\" href=\"https://zalo.me/0366369830\" target=\"_blank\"><span>Nhắn tin qua
                Zalo</span></a>
        <!-- <a id=\"zaloButton\" href=\"skype:izdesigner?chat\" target=\"_blank\"><span>Skype: izdesigner</span></a> -->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/themes/aroma/partials/callnow.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <label for=\"identifier-1\"></label> -->
<div>
    <div class=\"ppocta-ft-fix\">
        <a id=\"calltrap-btn\" class=\"b-calltrap-btn calltrap_offline hidden-phone visible-tablet\" href=\"tel:0366369830\">
            <div id=\"calltrap-ico\"></div><span><strong>036 63 69 830</strong></span>
        </a>
        <a id=\"messengerButton\" href=\"https://www.facebook.com/aromevietnam\" target=\"_blank\"><span>Nhắn tin qua
                Facebook</span></a>

        <a id=\"zaloButton\" href=\"https://zalo.me/0366369830\" target=\"_blank\"><span>Nhắn tin qua
                Zalo</span></a>
        <!-- <a id=\"zaloButton\" href=\"skype:izdesigner?chat\" target=\"_blank\"><span>Skype: izdesigner</span></a> -->
    </div>
</div>", "C:\\xampp\\htdocs\\arome/themes/aroma/partials/callnow.htm", "");
    }
}
