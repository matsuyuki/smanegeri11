<?php

/* SMASMABundle:Public:welcome.html.twig */
class __TwigTemplate_345cde50e9b97e18bfb466f3eb9e3d929fddb197d9ea6f34cd0fdff6df4bf0a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        // line 13
        echo "    </head>
    <body>

        <div class=\"main\">
            <div class=\"header\">
                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("image/header3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive img-thumbnail\" alt=\"Responsive image\">
            </div>
            <div class=\"menu\">
                <div id='cssmenu'>
                    <ul>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("welcome");
        echo "\">Home</a></li>
                        <li class='has-sub '><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("profil");
        echo "\">Profil</a></li>
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About Us</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("login_homepage");
        echo "\">Login</a></li>
                    </ul>
                </div>  


                <div class=\"konten\">

                    <div class=\"kiri-detail\"><h1 style=\"margin:0; padding: 0; color:#003B99\">News Update</h1>
                        <br>
                        <div class=\"berita\">
                            ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["berita"]) ? $context["berita"] : $this->getContext($context, "berita")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showberita", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "Id"))), "html", null, true);
            echo "\" target=\"_blank\"><center><div class=\"title-news\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "judul"), "html", null, true);
            echo "</div></center>  </a>      
                                <div class=\"form\">        
                                    <p> ";
            // line 39
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "isi");
            echo "</p>
                                </div>


                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo " 
                        </div>
                    </div>


                    <div class=\"kanan\">
                        <div style=\"font-size:14px; font-weight: bold\">=============================</div>
                        <h2>Kata Pengantar</h2>
                        <p align=\"justify\"> 
                            <img src=\"";
        // line 52
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
                            <tbody>

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
                <div class=\"footer\">SMA Negeri 11 Medan </div>
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
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/calender.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 11,  184 => 10,  179 => 9,  176 => 8,  170 => 5,  112 => 52,  101 => 43,  90 => 39,  82 => 37,  78 => 36,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  45 => 18,  38 => 13,  36 => 8,  31 => 6,  27 => 5,  21 => 1,);
    }
}
