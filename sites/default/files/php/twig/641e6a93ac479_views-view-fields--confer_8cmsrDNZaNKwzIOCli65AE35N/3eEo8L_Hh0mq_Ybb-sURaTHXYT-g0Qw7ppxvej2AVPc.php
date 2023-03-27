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

/* themes/custom/specd/templates/views-view-fields--conferrence.html.twig */
class __TwigTemplate_1dafdb668cf018e0f3c34b7eb951a742797f3f739578c8f7c34804cce8fdb9de extends \Twig\Template
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
        echo "<div class=\"con-card-wrapper\">
    <div class=\"con-card-image-wrapper\">
        ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_con_image", [], "any", false, false, true, 3), "content", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
        <div class=\"star-mark\">
            <i class=\"fa fa-star\"></i>
        </div>
        <div class=\"price\">
            ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_price", [], "any", false, false, true, 8), "content", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"con-card-content\">
        <div class=\"title\">
            ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 13), "content", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"tag\">
            <i class=\"fa fa-tags\"></i>
            ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_tag", [], "any", false, false, true, 17), "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"date\">
            <i class=\"fa fa-calendar\"></i>
            ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_date", [], "any", false, false, true, 21), "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"location\">
            <i class=\"fa fa-map-marker\"></i>
            ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_address", [], "any", false, false, true, 25), "content", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"con-card-footer\">
        <ul>
            <li>
                ";
        // line 31
        if ((twig_trim_filter(twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_like", [], "any", false, false, true, 31), "content", [], "any", false, false, true, 31))) == 1)) {
            // line 32
            echo "                <i class=\"fa fa-heart liked\" aria-hidden=\"true\"></i>
                ";
        }
        // line 34
        echo "                ";
        if ((twig_trim_filter(twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_like", [], "any", false, false, true, 34), "content", [], "any", false, false, true, 34))) == 0)) {
            // line 35
            echo "                <i class=\"fa fa-heart-o unliked\" aria-hidden=\"true\"></i>
                ";
        }
        // line 37
        echo "            </li>
            <li>
                <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i>
            </li>
             <li>
                <i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i>
            </li>
            <li>
                ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 45), "content", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
            </li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/specd/templates/views-view-fields--conferrence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  102 => 37,  98 => 35,  95 => 34,  91 => 32,  89 => 31,  80 => 25,  73 => 21,  66 => 17,  59 => 13,  51 => 8,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"con-card-wrapper\">
    <div class=\"con-card-image-wrapper\">
        {{ fields.field_con_image.content }}
        <div class=\"star-mark\">
            <i class=\"fa fa-star\"></i>
        </div>
        <div class=\"price\">
            {{ fields.field_price.content }}
        </div>
    </div>
    <div class=\"con-card-content\">
        <div class=\"title\">
            {{ fields.title.content }}
        </div>
        <div class=\"tag\">
            <i class=\"fa fa-tags\"></i>
            {{ fields.field_tag.content }}
        </div>
        <div class=\"date\">
            <i class=\"fa fa-calendar\"></i>
            {{ fields.field_date.content }}
        </div>
        <div class=\"location\">
            <i class=\"fa fa-map-marker\"></i>
            {{ fields.field_address.content }}
        </div>
    </div>
    <div class=\"con-card-footer\">
        <ul>
            <li>
                {% if fields.field_like.content|striptags|trim == 1 %}
                <i class=\"fa fa-heart liked\" aria-hidden=\"true\"></i>
                {% endif %}
                {% if fields.field_like.content|striptags|trim == 0 %}
                <i class=\"fa fa-heart-o unliked\" aria-hidden=\"true\"></i>
                {% endif %}
            </li>
            <li>
                <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i>
            </li>
             <li>
                <i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i>
            </li>
            <li>
                {{ fields.view_node.content }}
            </li>
        </ul>
    </div>
</div>", "themes/custom/specd/templates/views-view-fields--conferrence.html.twig", "/var/www/html/web/themes/custom/specd/templates/views-view-fields--conferrence.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 31);
        static $filters = array("escape" => 3, "trim" => 31, "striptags" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trim', 'striptags'],
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
