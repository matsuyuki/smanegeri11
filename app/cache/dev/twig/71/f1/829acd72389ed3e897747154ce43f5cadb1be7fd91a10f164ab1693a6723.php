<?php

/* SMASMABundle:Admin:template.html.twig */
class __TwigTemplate_71f1829acd72389ed3e897747154ce43f5cadb1be7fd91a10f164ab1693a6723 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("smasma_homepage");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("pegawai");
        echo "\">Data Pegawai</a></li>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("siswa");
        echo "\">Data Siswa</a></li> 
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("member");
        echo "\">Data User</a></li> 
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("berita");
        echo "\">Berita</a></li> 
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("absensi");
        echo "\">Absensi</a></li> 
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("nilai");
        echo "\">Nilai</a></li> 
                    </ul>
                </div>    
                <div style=\"float:right; margin-top:4px; margin-right: 10px;\">
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("smasma_logout");
        echo "\">Logout</a>
                </div>
            </div>
            <div class=\"konten\">
            ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
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
        echo "Halaman Admin";
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

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Admin:template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  128 => 10,  123 => 9,  120 => 8,  114 => 5,  100 => 40,  98 => 39,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  51 => 19,  42 => 13,  39 => 12,  37 => 8,  32 => 6,  22 => 1,  107 => 42,  103 => 40,  91 => 35,  85 => 31,  78 => 27,  74 => 26,  70 => 25,  66 => 24,  62 => 23,  56 => 22,  53 => 21,  49 => 20,  31 => 4,  28 => 5,);
    }
}
