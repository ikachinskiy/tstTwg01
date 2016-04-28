<?php

/* main.html.twig */
class __TwigTemplate_4d8074ef0c309dcfd99783020d573824 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <title>Тест Twig 01-2</title>
    <link rel=\"stylesheet\" href=\"css/main.css\">
    <link rel=\"stylesheet\" href=\"res/bootstrap/css/bootstrap.min.css\">
</head>
<body>
    ";
        // line 10
        $this->env->loadTemplate("header.html.twig")->display($context);
        // line 11
        echo "    <div id=\"content\">
        <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
        <h3>Тема: ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["topic"]) ? $context["topic"] : null), "html", null, true);
        echo "</h3>
    </div>
    ";
        // line 15
        $this->env->loadTemplate("footer.html.twig")->display($context);
        // line 16
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"res/bootstrap/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  42 => 15,  37 => 13,  33 => 12,  30 => 11,  28 => 10,  17 => 1,);
    }
}
