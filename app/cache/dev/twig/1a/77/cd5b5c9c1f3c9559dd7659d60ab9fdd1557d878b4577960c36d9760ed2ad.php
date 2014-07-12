<?php

/* SMASMABundle:Facebook:templatedetail.html.twig */
class __TwigTemplate_1a77cd5b5c9c1f3c9559dd7659d60ab9fdd1557d878b4577960c36d9760ed2ad extends Twig_Template
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
        // line 14
        echo "    </head>
    <body>

        <div class=\"main\">
            <div class=\"header\">
                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("image/header3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Responsive image\">
            </div>
            <div class=\"menu\">
                <div id='cssmenu'>
                    <ul>
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("index_facebook");
        echo "\">Home</a></li>
                        <li class='has-sub '><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("profil2");
        echo "\">Profil</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("about2");
        echo "\">About Us</a></li>
                    </ul>
                </div>  


                <div class=\"konten\">

                    <div class=\"kiri-detail\">";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        echo "</div>


                    <div class=\"kanan\">
                        <div style=\"font-size:14px; font-weight: bold\">=============================</div>

                        <div class=\"container\">
                            <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_homepage");
        echo "\" >
                                <h2 class=\"form-signin-heading\">Area Logout</h2>
                                <div style=\"float:right; margin-top:4px; margin-right: 10px;\">
                                    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("logout_fb");
        echo "\">Logout</a>
                                </div>
                            </form>
                            <div style=\"font-size:14px; font-weight: bold\">=============================</div>
                            <h2>Kata Pengantar</h2>
                            <p align=\"justify\"> 
                                <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("image/kepsek.png"), "html", null, true);
        echo "\" width=\"150\" style=\"float:left\">
                                Puji syukur kami panjatkan ke hadirat Tuhan yang atas berkat rahmat 
                                dan hidayah-Nya kami bisa meluncurkan situs web..
                            </p>
                            <div style=\"font-size:14px; font-weight: bold\">=============================</div>
                            <table id=\"wp-calendar\">
                                <caption>June 2014</caption>

                                <thead>
                                    <tr>
                                        <th scope=\"col\" title=\"Monday\">M</th>
                                        <th scope=\"col\" title=\"Tuesday\">T</th>
                                        <th scope=\"col\" title=\"Wednesday\">W</th>
                                        <th scope=\"col\" title=\"Thursday\">T</th>
                                        <th scope=\"col\" title=\"Friday\">F</th>
                                        <th scope=\"col\" title=\"Saturday\">S</th>
                                        <th scope=\"col\" title=\"Sunday\">S</th>
                                    </tr>
                                </thead>

                                <tr>
                                    <td colspan=\"3\">&nbsp;</td><td>1</td><td>2</td><td>3</td><td>4</td>
                                </tr>

                                <tr>
                                    <td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td>
                                </tr>

                                <tr>

                                    <td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td>
                                </tr>

                                <tr>
                                    <td>19</td><td>20</td><td>21</td><td>22</td><td id=\"today\">23</td><td>24</td><td>25</td>
                                </tr>

                                <tr>
                                    <td><a href=\"#\" title=\"\">26</a></td><td>27</td><td>28</td><td>29</td><td>30</td><td colspan=\"2\">&nbsp;</td>
                                </tr>

                                </tbody>

                            </table>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/public.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/calender.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Facebook:templatedetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 33,  176 => 12,  172 => 11,  168 => 10,  163 => 9,  160 => 8,  154 => 5,  97 => 49,  88 => 43,  82 => 40,  72 => 33,  62 => 26,  58 => 25,  54 => 24,  46 => 19,  39 => 14,  37 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }
}
