<?php

/* SMASMABundle:Public:template.html.twig */
class __TwigTemplate_dd09d85c201e16d0558bd703002264c2d7a418db24aa737c6cff09f3c9faafc5 extends Twig_Template
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
        echo "
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>

    </head>
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
        // line 25
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_homepage");
        echo "\">Home</a></li>

                        <li class='has-sub '><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_profil");
        echo "\">Profil</a></li>
                        <li class='has-sub '><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("check_kelas");
        echo "\">Kelas</a>
                            <ul>
                                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("check_pegawai_satu");
        echo "\">Kelas 1-1</a></li>
                                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("check_pegawai_satu1");
        echo "\">Kelas 1-2</a></li>
                                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua1");
        echo "\">Kelas 2 IPA-1</a></li>
                                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua2");
        echo "\">Kelas 2 IPA-2</a></li>
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua3");
        echo "\">Kelas 2 IPS-1</a></li>
                                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua4");
        echo "\">Kelas 2 IPS-2</a></li>
                                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga1");
        echo "\">Kelas 3 IPA-1</a></li>
                                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga2");
        echo "\">Kelas 3 IPA-2</a></li>
                                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga3");
        echo "\">Kelas 3 IPS-1</a></li>
                                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga4");
        echo "\">Kelas 3 IPS-2</a></li>
                            </ul>
                        </li> 
                        <li class='has-sub '><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("check_pegawai");
        echo "\">Pegawai</a>
                            <ul>
                                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("check_kuis_kelas_satu");
        echo "\">Wali Kelas</a></li>
                                <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("check_kuis_kelas_dua");
        echo "\">Guru</a></li>
                                <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("check_kuis_kelas_tiga");
        echo "\">Guru Honorer</a></li>
                            </ul>
                        </li>
                       <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("check_nilai");
        echo "\">Nilai</a></li>
                        <li class='has-sub '><a href=\"\">Absensi</a>
                            <ul>
                                <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("check_pegawai_satu");
        echo "\">Kelas 1-1</a></li>
                                <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("check_absensi1");
        echo "\">Kelas 1-2</a></li>
                                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua1");
        echo "\">Kelas 2 IPA-1</a></li>
                                <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua2");
        echo "\">Kelas 2 IPA-2</a></li>
                                <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua3");
        echo "\">Kelas 2 IPS-1</a></li>
                                <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("check_pegawai_dua4");
        echo "\">Kelas 2 IPS-2</a></li>
                                <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga1");
        echo "\">Kelas 3 IPA-1</a></li>
                                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga2");
        echo "\">Kelas 3 IPA-2</a></li>
                                <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga3");
        echo "\">Kelas 3 IPS-1</a></li>
                                <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("check_pegawai_tiga4");
        echo "\">Kelas 3 IPS-2</a></li>
                            </ul>
                        </li> 
                        <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("download");
        echo "\">Download</a></li>
                        <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("SMASMABundle_about");
        echo "\">About Us</a></li>

                    </ul>
                </div>    
                <div style=\"float:right; margin-top:4px; margin-right: 10px;\">
                    <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("welcome");
        echo "\">Logout</a>
                </div>
            </div>
            <div class=\"konten\">
            ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "
        </div>
        <div class=\"footer\">SMA NEGERI 11 MEDAN</div>
    </div>





</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Halaman Member";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smasma/css/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 74,  232 => 10,  227 => 9,  224 => 8,  218 => 5,  204 => 75,  202 => 74,  195 => 70,  187 => 65,  183 => 64,  177 => 61,  173 => 60,  169 => 59,  165 => 58,  161 => 57,  157 => 56,  153 => 55,  149 => 54,  145 => 53,  141 => 52,  135 => 49,  129 => 46,  125 => 45,  121 => 44,  116 => 42,  110 => 39,  106 => 38,  102 => 37,  98 => 36,  94 => 35,  90 => 34,  86 => 33,  82 => 32,  78 => 31,  74 => 30,  69 => 28,  65 => 27,  60 => 25,  51 => 19,  42 => 13,  39 => 12,  37 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }
}
