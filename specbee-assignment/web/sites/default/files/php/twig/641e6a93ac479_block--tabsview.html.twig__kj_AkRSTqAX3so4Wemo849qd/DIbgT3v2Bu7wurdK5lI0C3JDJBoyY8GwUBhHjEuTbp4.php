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

/* themes/custom/specd/templates/block--tabsview.html.twig */
class __TwigTemplate_702c4df2239be7593f729c7063d60d7538a4d6b40afcd23a1bc52035bd26fd28 extends \Twig\Template
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
        echo "<div class=\"tabs-wrapper container\">
\t<div class=\"tab-header\">
\t\t<h1>Lorem ipsum dolor. Ismet</h1>
\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
\t\t<p></p>
\t</div>
\t<div class=\"tabs\">
\t\t<ul id=\"tabs-nav\" class=\"row\">
\t\t\t<li class=\"col-md-4 col-sm-12\">
\t\t\t\t<a href=\"#tab1\">Featured Conferences</a>
\t\t\t</li>
\t\t\t<li class=\"col-md-4 col-sm-12\">
\t\t\t\t<a href=\"#tab2\">Recommended Conferences</a>
\t\t\t</li>
\t\t\t<li class=\"col-md-4 col-sm-12\">
\t\t\t\t<a href=\"#tab3\">Past Conferences</a>
\t\t\t</li>
\t\t</ul>
\t\t<div id=\"tabs-content\">
\t\t\t<div id=\"tab1\" class=\"tab-content\">
\t\t\t\t";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("conferrence", "block_1"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div id=\"tab2\" class=\"tab-content\">
\t\t\t\t";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("conferrence", "block_3"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div id=\"tab3\" class=\"tab-content\">
\t\t\t\t";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("conferrence", "block_2"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/specd/templates/block--tabsview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 24,  61 => 21,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tabs-wrapper container\">
\t<div class=\"tab-header\">
\t\t<h1>Lorem ipsum dolor. Ismet</h1>
\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
\t\t<p></p>
\t</div>
\t<div class=\"tabs\">
\t\t<ul id=\"tabs-nav\" class=\"row\">
\t\t\t<li class=\"col-md-4 col-sm-12\">
\t\t\t\t<a href=\"#tab1\">Featured Conferences</a>
\t\t\t</li>
\t\t\t<li class=\"col-md-4 col-sm-12\">
\t\t\t\t<a href=\"#tab2\">Recommended Conferences</a>
\t\t\t</li>
\t\t\t<li class=\"col-md-4 col-sm-12\">
\t\t\t\t<a href=\"#tab3\">Past Conferences</a>
\t\t\t</li>
\t\t</ul>
\t\t<div id=\"tabs-content\">
\t\t\t<div id=\"tab1\" class=\"tab-content\">
\t\t\t\t{{ drupal_view('conferrence', 'block_1') }}
\t\t\t</div>
\t\t\t<div id=\"tab2\" class=\"tab-content\">
\t\t\t\t{{ drupal_view('conferrence', 'block_3') }}
\t\t\t</div>
\t\t\t<div id=\"tab3\" class=\"tab-content\">
\t\t\t\t{{ drupal_view('conferrence', 'block_2') }}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "themes/custom/specd/templates/block--tabsview.html.twig", "/var/www/html/web/themes/custom/specd/templates/block--tabsview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 21);
        static $functions = array("drupal_view" => 21);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['drupal_view']
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
