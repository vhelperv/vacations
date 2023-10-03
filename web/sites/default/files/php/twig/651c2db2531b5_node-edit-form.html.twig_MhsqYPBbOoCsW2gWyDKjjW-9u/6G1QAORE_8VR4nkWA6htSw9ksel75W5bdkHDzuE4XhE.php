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

/* themes/contrib/gin/templates/node/node-edit-form.html.twig */
class __TwigTemplate_0ebd4f57ca459bd853e5f8ffb2010297 extends \Twig\Template
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
        // line 18
        echo "<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 20, $this->source), "advanced", "footer", "actions", "gin_actions", "gin_sidebar", "gin_sidebar_toggle"), "html", null, true);
        echo "
  </div>
  <div class=\"layout-region layout-region-node-secondary\" id=\"gin_sidebar\">
    <div class=\"layout-region__content\">
      ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "advanced", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
      ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gin_sidebar_toggle", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
    </div>
  </div>
  <div class=\"layout-node-form__actions\">
    ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gin_actions", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
  </div>
</div>

";
        // line 33
        if ((($context["gin_layout_paragraphs"] ?? null) == 1)) {
            // line 34
            echo "<style>
  .layout-node-form {
    --gin-lp-layout: \"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Layout"));
            echo "\";
    --gin-lp-content: \"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Content"));
            echo "\";
  }
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/node/node-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 37,  74 => 36,  70 => 34,  68 => 33,  61 => 29,  54 => 25,  50 => 24,  43 => 20,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/node/node-edit-form.html.twig", "/var/www/web/themes/contrib/gin/templates/node/node-edit-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33);
        static $filters = array("escape" => 20, "without" => 20, "t" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without', 't'],
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
