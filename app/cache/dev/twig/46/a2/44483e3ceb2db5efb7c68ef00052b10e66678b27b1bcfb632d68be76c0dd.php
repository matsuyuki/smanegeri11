<?php

/* SMASMABundle:Public:template-detail.html.twig */
class __TwigTemplate_46a244483e3ceb2db5efb7c68ef00052b10e66678b27b1bcfb632d68be76c0dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
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
                    appId: '480763938659253',
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
                    window.location = \"authfacebook/\" + response.email;
                });

            }

            function logout()
            {
                FB.logout(function(response) {
                    checkLoginState();
                });
            }
        </script>
        <div class=\"main\">
            <div class=\"header\">
                <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("image/header3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Responsive image\">
            </div>
            <div class=\"menu\">
                <div id='cssmenu'>
                    <ul>
                        <li><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_homepage");
        echo "\">Home</a></li>

                        <li class='has-sub '><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_profil");
        echo "\">Profil</a>
                        </li>
                        <li><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_about");
        echo "\">About Us</a></li>
                        <li class='has-sub '><a href=\"#\">Download</a>
                            <ul>
                                <li><a href=\"\">Materi</a></li>
                                <li><a href=\"}\">Jadwal Sekolah</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>    


                <div class=\"konten\">

                    <div class=\"kiri-detail\">";
        // line 114
        $this->displayBlock('body', $context, $blocks);
        echo "</div>


                    <div class=\"kanan\">
                        <div style=\"font-size:14px; font-weight: bold\">===========================</div>
                        <div class=\"container\">
                            ";
        // line 120
        if (array_key_exists("name", $context)) {
            // line 121
            echo "                                <h6><center><font color=\"Red\">";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</font></center></h6>
                                    ";
        }
        // line 123
        echo "                            <form class=\"form-signin\" method =\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_homepage");
        echo "\" >
                                <h2 class=\"form-signin-heading\">Login Member</h2>
                                <input type=\"text\" id=\"username\" class=\"input-block-level\" name=\"username\" placeholder=\"Username\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
                                <input type=\"password\" class=\"input-block-level\" name=\"password\" placeholder=\"Password\" data-trigger=\"change\" data-required=\"true\">
                                <fb:login-button scope=\"public_profile,email\" onlogin=\"checkLoginState();\">
                                </fb:login-button>
                                <button class=\"btn btn-large btn-primary\" type=\"submit\">Login</button>
                                <label class=\"checkbox\">
                                    <input type=\"checkbox\" name=\"remember\" value=\"remember-me\"> Remember me
                                </label>
                            </form>
                            <div style=\"font-size:14px; font-weight: bold\">===========================</div>
                        </div> 
                    </div>

                </div><div class=\"footer\">SMA Negeri 11 Medan </div>
            </div>
        </div>  

    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "SMA NEGERI 11 Medan";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/public.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 114
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:template-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 114,  212 => 10,  207 => 9,  204 => 8,  198 => 5,  172 => 123,  166 => 121,  164 => 120,  155 => 114,  139 => 101,  134 => 99,  129 => 97,  121 => 92,  39 => 12,  37 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }
}
