<?php

/* SMASMABundle:Admin:admin.html.twig */
class __TwigTemplate_8c3babb7a57c14c9a8820ff54d49b833b9697abfcc4f8af82663735e4548fd8d extends Twig_Template
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
        echo "<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Login Admin </title>

        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/bootstrap.css"), "html", null, true);
        echo "\" >
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style type=\"text/css\">
            .form-signin {
                max-width: 250px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type=\"text\"],
            .form-signin input[type=\"password\"] {
                font-size: 14px;
                height: auto;
                margin-bottom: 15px;
            }

            .page_header h5{
                color: #fff;
                font:normal 50px fontsatu;
            }

        </style>
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 42
        if (array_key_exists("name", $context)) {
            // line 43
            echo "                <h6><center><font color=\"Red\">";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</font></center></h6>
                    ";
        }
        // line 45
        echo "            <form class=\"form-signin\" method =\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("smasma_admin_homepage");
        echo "\" >
                <h2 class=\"form-signin-heading\">Login Admin</h2>
                <input type=\"text\" id=\"username\" class=\"input-block-level\" name=\"username\" placeholder=\"Username\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
                <input type=\"password\" class=\"input-block-level\" name=\"password\" placeholder=\"Password\" data-trigger=\"change\" data-required=\"true\">
                <label class=\"checkbox\">
                    <input type=\"checkbox\" name=\"remember\" value=\"remember-me\"> Remember me
                </label>
                <button class=\"btn btn-large btn-primary\" type=\"submit\">Login</button>

            </form>

        </div> 
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasmajs/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasmajs/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/js/jquery-2.1.0.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 60,  100 => 59,  96 => 58,  92 => 57,  76 => 45,  70 => 43,  68 => 42,  30 => 7,  26 => 6,  19 => 1,);
    }
}
