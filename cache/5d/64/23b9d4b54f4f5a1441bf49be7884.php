<?php

/* header.html.twig */
class __TwigTemplate_5d6423b9d4b54f4f5a1441bf49be7884 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-static-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"index.php\">
                <img alt=\"SmartNET\" src=\"images/logo.png\">
            </a>
        </div>
        <ul class=\"nav navbar-nav navbar-left\">
            <li><a href=\"moscow.php\">Москва</a></li>
            <li><a href=\"piter.php\">Питер</a></li>
            <li><a href=\"kazan.php\">Казань</a></li>
        </ul>
        <p class=\"navbar-text navbar-right\">Подписан как <a href=\"#\" class=\"navbar-link\">И.Качинский</a></p>
        <form class=\"navbar-form navbar-right\" role=\"search\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Чего изволим...\">
            </div>
            <button type=\"submit\" class=\"btn btn-default\">Искать</button>
        </form>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}
