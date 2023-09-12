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

/* themes/contrib/gin/templates/form/datetime-wrapper.html.twig */
class __TwigTemplate_d8e5c27301d04ab68720906720de8663 extends \Twig\Template
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
        // line 11
        $context["show_description_toggle"] = (($context["description_toggle"] ?? null) && ($context["description"] ?? null));
        // line 13
        $context["classes"] = [0 => "form-item", 1 => "form-datetime-wrapper", 2 => ((        // line 16
($context["show_description_toggle"] ?? null)) ? ("help-icon__description-container") : (""))];
        // line 20
        $context["title_classes"] = [0 => "form-item__label", 1 => ((        // line 22
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 23
($context["required"] ?? null)) ? ("form-required") : ("")), 3 => ((        // line 24
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 28
        $context["description_classes"] = [0 => "form-item__description", 1 => (((        // line 30
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 33
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        echo ">
  ";
        // line 34
        if (($context["show_description_toggle"] ?? null)) {
            // line 35
            echo "  <div class=\"help-icon\">
  ";
        }
        // line 37
        echo "  ";
        if (($context["title"] ?? null)) {
            // line 38
            echo "  <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 38, $this->source), "html", null, true);
            echo "</h4>
  ";
        }
        // line 40
        echo "  ";
        if (($context["show_description_toggle"] ?? null)) {
            // line 41
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_description_toggle"), "html", null, true);
            echo "
    <button class=\"help-icon__description-toggle\"></button>
  </div>
  ";
        }
        // line 45
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 45, $this->source), "html", null, true);
        echo "
";
        // line 46
        if (($context["errors"] ?? null)) {
            // line 47
            echo "  <div class=\"form-item__error-message\">
    ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 48, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 51
        if (($context["description"] ?? null)) {
            // line 52
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description_attributes"] ?? null), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            echo ">
    ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 53, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 56
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/form/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 56,  108 => 53,  103 => 52,  101 => 51,  95 => 48,  92 => 47,  90 => 46,  85 => 45,  77 => 41,  74 => 40,  66 => 38,  63 => 37,  59 => 35,  57 => 34,  52 => 33,  50 => 30,  49 => 28,  47 => 24,  46 => 23,  45 => 22,  44 => 20,  42 => 16,  41 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/form/datetime-wrapper.html.twig", "/var/www/web/themes/contrib/gin/templates/form/datetime-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 34);
        static $filters = array("escape" => 33);
        static $functions = array("attach_library" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['attach_library']
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
