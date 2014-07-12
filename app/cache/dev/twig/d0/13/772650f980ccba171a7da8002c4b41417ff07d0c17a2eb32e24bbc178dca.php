<?php

/* SMASMABundle:Public:templatedetail.html.twig */
class __TwigTemplate_d013772650f980ccba171a7da8002c4b41417ff07d0c17a2eb32e24bbc178dca extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_homepage");
        echo "\">Home</a></li>
                        <li class='has-sub '><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_profil");
        echo "\">Profil</a></li>
                        <li class='has-sub '><a href=\"\">Kelas</a>
                            <ul>
                                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("check_pegawai_satu");
        echo "\">Kelas 1-1</a></li>
                                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("check_pegawai_satu1");
        echo "\">Kelas 1-2</a></li>
                                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua1");
        echo "\">Kelas 2 IPA-1</a></li>
                                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua2");
        echo "\">Kelas 2 IPA-2</a></li>
                                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua3");
        echo "\">Kelas 2 IPS-1</a></li>
                                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua4");
        echo "\">Kelas 2 IPS-2</a></li>
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga1");
        echo "\">Kelas 3 IPA-1</a></li>
                                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga2");
        echo "\">Kelas 3 IPA-2</a></li>
                                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga3");
        echo "\">Kelas 3 IPS-1</a></li>
                                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga4");
        echo "\">Kelas 3 IPS-2</a></li>
                            </ul>
                        </li> 
                        <li class='has-sub '><a href=\"\">Pegawai</a>
                            <ul>
                                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("check_kuis_kelas_satu");
        echo "\">Wali Kelas</a></li>
                                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("check_kuis_kelas_dua");
        echo "\">Guru</a></li>
                                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("check_kuis_kelas_tiga");
        echo "\">Guru Honorer</a></li>
                            </ul>
                        </li>
                        <li class='has-sub '><a href=\"\">Absensi</a>
                            <ul>
                                <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("check_pegawai_satu");
        echo "\">Kelas 1-1</a></li>
                                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("check_absensi1");
        echo "\">Kelas 1-2</a></li>
                                <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua1");
        echo "\">Kelas 2 IPA-1</a></li>
                                <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua2");
        echo "\">Kelas 2 IPA-2</a></li>
                                <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua3");
        echo "\">Kelas 2 IPS-1</a></li>
                                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua4");
        echo "\">Kelas 2 IPS-2</a></li>
                                <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga1");
        echo "\">Kelas 3 IPA-1</a></li>
                                <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga2");
        echo "\">Kelas 3 IPA-2</a></li>
                                <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga3");
        echo "\">Kelas 3 IPS-1</a></li>
                                <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga4");
        echo "\">Kelas 3 IPS-2</a></li>
                            </ul>
                        </li> 
                        <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("check_nilai");
        echo "\">Nilai</a></li>
                        <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("download");
        echo "\">Download</a></li>
                        <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_about");
        echo "\">About Us</a></li>

                    </ul>
                </div>  


                <div class=\"konten\">

                    <div class=\"kiri-detail\">";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        echo "</div>


                    <div class=\"kanan\">
                        <div style=\"font-size:14px; font-weight: bold\">=============================</div>

                        <div class=\"container\">
                            <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_homepage");
        echo "\" >
                                <h2 class=\"form-signin-heading\">Area Member</h2>
                                <p>selamat Datang, <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("showmember");
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a></p>
                                <div style=\"float:right; margin-top:4px; margin-right: 10px;\">
                                    <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>
                                </div>
                            </form>
                            <div style=\"font-size:14px; font-weight: bold\">=============================</div>
                        </div> 
                        <h2>Kata Pengantar</h2>
                        <p align=\"justify\"> 
                            <img src=\"";
        // line 89
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
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/calender.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:templatedetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 71,  295 => 12,  291 => 11,  287 => 10,  282 => 9,  279 => 8,  273 => 5,  217 => 89,  207 => 82,  200 => 80,  195 => 78,  185 => 71,  174 => 63,  170 => 62,  166 => 61,  160 => 58,  156 => 57,  152 => 56,  148 => 55,  144 => 54,  140 => 53,  136 => 52,  132 => 51,  128 => 50,  124 => 49,  116 => 44,  112 => 43,  108 => 42,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  68 => 29,  64 => 28,  58 => 25,  54 => 24,  46 => 19,  39 => 14,  37 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }
}
