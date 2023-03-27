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

/* themes/custom/specd/templates/views-view-unformatted--conferrence--block-3.html.twig */
class __TwigTemplate_ae4e017faf77f863c70ab254834461801e56af3fedc5c753c7c523708b018d36 extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"tab-slider-wrapper tab-slider-wrapper-past\">
\t";
        // line 2
        if (($context["title"] ?? null)) {
            // line 3
            echo "\t\t<h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 3, $this->source), "html", null, true);
            echo "</h3>
\t";
        }
        // line 5
        echo "
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "\t\t";
            $context["row_classes"] = [0 => ((            // line 8
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 10
            echo "
\t\t<div";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 11), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
            echo ">
\t\t\t";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/specd/templates/views-view-unformatted--conferrence--block-3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  68 => 12,  64 => 11,  61 => 10,  59 => 8,  57 => 7,  53 => 6,  50 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab-slider-wrapper tab-slider-wrapper-past\">
\t{% if title %}
\t\t<h3>{{ title }}</h3>
\t{% endif %}

\t{% for row in rows %}
\t\t{% set row_classes = [
      default_row_class ? 'views-row',
    ] %}

\t\t<div{{row.attributes.addClass(row_classes)}}>
\t\t\t{{ row.content }}
\t\t</div>
\t{% endfor %}
</div>
", "themes/custom/specd/templates/views-view-unformatted--conferrence--block-3.html.twig", "/var/www/html/web/themes/custom/specd/templates/views-view-unformatted--conferrence--block-3.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 6, "set" => 7);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
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
}
