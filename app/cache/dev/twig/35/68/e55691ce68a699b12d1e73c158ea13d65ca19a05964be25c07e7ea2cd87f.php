<?php

/* SMASMABundle:Public:showberita.html.twig */
class __TwigTemplate_3568e55691ce68a699b12d1e73c158ea13d65ca19a05964be25c07e7ea2cd87f extends Twig_Template
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
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <title>News</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/bootstrap-responsive.css"), "html", null, true);
        echo "\">
            <style type=\"text/css\">
                body{background-color: gray;}
            </style>
    </head>
    <body>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-10\"><br><br></div>
                <div class=\"col-md-1\"></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-10 well\">
                    <center><label><h3>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "Judul"), "html", null, true);
        echo "</h3></label></center><hr><br>
                    <label class=\"pull-right\"><h4>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tanggal"), "d-m-Y"), "html", null, true);
        echo "</h4></label><br><br>
                        <label>";
        // line 25
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "Isi");
        echo "</label><br>
                    
                </div>
                <div class=\"col-md-1\"></div>
            </div>
            <div class=\"footer\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-10\">
                    <hr>
                    <p class=\"muted pull-right\">© 2014 Mikroskil. All rights reserved</p>
                </div>
                <div class=\"col-md-1\"></div>
            </div>
            
        </div>
        
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifoadmin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifoadmin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifoadmin/js/jquery-2.1.0.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:showberita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 43,  83 => 42,  79 => 41,  60 => 25,  56 => 24,  52 => 23,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
