<?php

/* SMASMABundle:Public:login.html.twig */
class __TwigTemplate_dd6c359b96a10b1865fae4a10382226f11b4cdb17311a9966d6eb117659c963d extends Twig_Template
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
        <title>Login Member </title>

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
        
        <script>
            function statusChangeCallback(response)
            {
                console.log('statusChangeCallback');
                console.log(response);

                if (response.status === 'connected')
                {
                    cekValidasi();
                }
                else if (response.status === 'not_authorized')
                {
                    document.getElementById('status').innerHTML = 'Please log ' +
                            'into this app.';
                }
                else
                {
                    document.getElementById('status').innerHTML = 'Please log ' +
                            'into Facebook.';
                }
            }

            function checkLoginState()
            {
                FB.getLoginStatus(function(response) {
                    statusChangeCallback(response);
                });
            }

            window.fbAsyncInit = function()
            {
                FB.init({
                    appId: '578575225575022',
                    cookie: true, // enable cookies to allow the server to access 
                    // the session
                    xfbml: true, // parse social plugins on this page
                    version: 'v2.0' // use version 2.0
                });

                FB.getLoginStatus(function(response)
                {
                    statusChangeCallback(response);
                });

            };

// Load the SDK asynchronously
            (function(d, s, id)
            {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = \"//connect.facebook.net/en_US/sdk.js\";
                fjs.parentNode.insertBefore(js, fjs);
            }

            (document, 'script', 'facebook-jssdk'));

            function cekValidasi()
            {
                FB.api('/me', function(response) {
                    console.log('Successful login for: ' + response.name);
                    window.location = \"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("index_facebook");
        echo "\";
                });

            }

            function logout()
            {
                FB.logout(function(response) {
                    checkLoginState();
                });
            }
        </script>
        <div class=\"container\">
            ";
        // line 119
        if (array_key_exists("name", $context)) {
            // line 120
            echo "                <h6><center><font color=\"Red\">";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</font></center></h6>
                    ";
        }
        // line 122
        echo "            <form class=\"form-signin\" method =\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login_homepage1");
        echo "\" >
                <h2 class=\"form-signin-heading\">Login</h2>
                <input type=\"text\" id=\"username\" class=\"input-block-level\" name=\"username\" placeholder=\"Username\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
                <input type=\"password\" class=\"input-block-level\" name=\"password\" placeholder=\"Password\" data-trigger=\"change\" data-required=\"true\">
                <label class=\"checkbox\">
                    <input type=\"checkbox\" name=\"remember\" value=\"remember-me\"> Remember me
                </label>
                <button class=\"btn btn-large btn-primary\" type=\"submit\">Login</button>
                <fb:login-button scope=\"public_profile,email\" onlogin=\"checkLoginState();\">
                </fb:login-button>
            </form>

        </div> 
        <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasmajs/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasmajs/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/js/jquery-2.1.0.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 138,  181 => 137,  177 => 136,  173 => 135,  156 => 122,  150 => 120,  148 => 119,  132 => 106,  30 => 7,  26 => 6,  19 => 1,);
    }
}
