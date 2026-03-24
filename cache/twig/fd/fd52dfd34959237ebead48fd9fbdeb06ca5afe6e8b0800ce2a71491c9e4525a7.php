<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/navigation.html.twig */
class __TwigTemplate_6ac7071e6612b406dda914533c64018a4ace944e8752970f363c73fe658401ea extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<ul class=\"navigation\">
    ";
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            echo "        ";
            // line 5
            echo "        ";
            if (( !$this->getAttribute($context["page"], "home", []) && (twig_lower_filter($this->env, $this->getAttribute($context["page"], "menu", [])) != "pictures"))) {
                // line 6
                echo "            <li class=\"";
                echo (($this->getAttribute($context["page"], "active", [])) ? ("active") : (""));
                echo "\">
                <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    ";
        // line 13
        echo "    ";
        // line 14
        echo "    <li><a href=\"";
        (((($context["base_url"] ?? null) == "")) ? (print ("/")) : (print (twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true))));
        echo "#tracking\">Live Tracking</a></li>
    <li><a href=\"";
        // line 15
        (((($context["base_url"] ?? null) == "")) ? (print ("/")) : (print (twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true))));
        echo "#results\">Results</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  67 => 14,  65 => 13,  62 => 11,  56 => 10,  48 => 7,  43 => 6,  40 => 5,  38 => 4,  33 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"navigation\">
    {# De dynamische pagina's (Blog) #}
    {% for page in pages.children.visible %}
        {# We filteren Home EN Pictures eruit #}
        {% if not page.home and page.menu|lower != 'pictures' %}
            <li class=\"{{ page.active ? 'active' : '' }}\">
                <a href=\"{{ page.url }}\">{{ page.menu }}</a>
            </li>
        {% endif %}
    {% endfor %}

    {# De handmatige links naar de secties op de homepagina #}
    {# De '/' zorgt ervoor dat hij altijd eerst naar de homepage gaat #}
    <li><a href=\"{{ base_url == '' ? '/' : base_url }}#tracking\">Live Tracking</a></li>
    <li><a href=\"{{ base_url == '' ? '/' : base_url }}#results\">Results</a></li>
</ul>", "partials/navigation.html.twig", "/home/user/decordtferre/www/user/themes/quark/templates/partials/navigation.html.twig");
    }
}
