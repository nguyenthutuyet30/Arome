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

/* C:\xampp\htdocs\arome/plugins/jiri/map/components/googlemap/default.htm */
class __TwigTemplate_ef239ed6b51099d7028f0bed1cc5a0480d95c4473600b8cefc5c2ed70b8ce7ea extends \Twig\Template
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
        $tags = array("if" => 19);
        $filters = array("escape" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        echo "<!-- Map -->
<div id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\" class=\"google-map\" style=\"height: ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "height"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "; width: ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "width"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        echo ";\"></div>

<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "apiKey"], "method", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\"></script>
<script>
// This example adds a marker to indicate the position
// of Bondi Beach in Sydney, Australia
function initialize() {
    var center = new google.maps.LatLng(";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "latitude"], "method", false, false, true, 9), 9, $this->source), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "longitude"], "method", false, false, true, 9), 9, $this->source), "html", null, true);
        echo ");
    
    var mapOptions = {
      zoom: ";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "zoom"], "method", false, false, true, 12), 12, $this->source), "html", null, true);
        echo ",
      center: center,
      mapTypeId: google.maps.MapTypeId.";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "mapTypeId"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
    }
    var map = new google.maps.Map(document.getElementById('";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "'),
                                    mapOptions);

    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "showMarker"], "method", false, false, true, 19)) {
            // line 20
            echo "        var beachMarker = new google.maps.Marker({
            position: center,
            map: map
        });
    ";
        }
        // line 25
        echo "}

google.maps.event.addDomListener(window, 'load', initialize);
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\arome/plugins/jiri/map/components/googlemap/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  108 => 20,  106 => 19,  100 => 16,  95 => 14,  90 => 12,  82 => 9,  74 => 4,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Map -->
<div id=\"{{__SELF__.id}}\" class=\"google-map\" style=\"height: {{__SELF__.property('height')}}; width: {{__SELF__.property('width')}};\"></div>

<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key={{__SELF__.property('apiKey')}}\"></script>
<script>
// This example adds a marker to indicate the position
// of Bondi Beach in Sydney, Australia
function initialize() {
    var center = new google.maps.LatLng({{__SELF__.property('latitude')}}, {{__SELF__.property('longitude')}});
    
    var mapOptions = {
      zoom: {{__SELF__.property('zoom')}},
      center: center,
      mapTypeId: google.maps.MapTypeId.{{__SELF__.property('mapTypeId')}}
    }
    var map = new google.maps.Map(document.getElementById('{{__SELF__.id}}'),
                                    mapOptions);

    {% if (__SELF__.property('showMarker')) %}
        var beachMarker = new google.maps.Marker({
            position: center,
            map: map
        });
    {% endif %}
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>", "C:\\xampp\\htdocs\\arome/plugins/jiri/map/components/googlemap/default.htm", "");
    }
}
