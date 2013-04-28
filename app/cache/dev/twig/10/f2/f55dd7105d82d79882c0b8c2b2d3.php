<?php

/* flaminuxmioBundle:Default:dammiUnNome.html.twig */
class __TwigTemplate_10f2f55dd7105d82d79882c0b8c2b2d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "Il risultato è  ";
        echo twig_escape_filter($this->env, (isset($context["stocazzo"]) ? $context["stocazzo"] : $this->getContext($context, "stocazzo")), "html", null, true);
        echo "!";
    }

    public function getTemplateName()
    {
        return "flaminuxmioBundle:Default:dammiUnNome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }
}
