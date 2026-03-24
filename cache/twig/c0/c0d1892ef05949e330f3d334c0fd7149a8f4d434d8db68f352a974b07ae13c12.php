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

/* partials/logo.html.twig */
class __TwigTemplate_8131625c7bcb700c0a5e83990310ad91e6d62f3a4d81f957e007d0340772a64f extends \Twig\Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" class=\"navbar-brand mr-2\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo/logo.png"), "html", null, true);
        echo "\" />
    <span class=\"logo-text\">
        <span class=\"logo-line1\">Belgian Junior</span>
        <span class=\"logo-line2\">Gliding Team</span>
    </span>
</a>";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ home_url }}\" class=\"navbar-brand mr-2\">
    <img src=\"{{ url('theme://images/logo/logo.png') }}\" />
    <span class=\"logo-text\">
        <span class=\"logo-line1\">Belgian Junior</span>
        <span class=\"logo-line2\">Gliding Team</span>
    </span>
</a>", "partials/logo.html.twig", "/home/user/decordtferre/www/user/themes/quark/templates/partials/logo.html.twig");
    }
}
