<?php

/* SMASMABundle:admin:index.html.twig */
class __TwigTemplate_3ed231d8c50485e6dbbf35ae036b195324ae4ec6ee61cfc1d8231e4bae26a60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMASMABundle:Admin:template.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMASMABundle:Admin:template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <H4> ADMIN PANEL</H4>


    <div class=\"menu-home\">
        <div class=\"label-menu\">        
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("berita_new");
        echo "\"><button class=\"button\">Tambah Berita</button></a>
            
        </div>
    </div>


  <div class=\"menu-home\">
        <div class=\"label-menu\">        
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("pegawai_new");
        echo "\"><button class=\"button\">Tambah Data Pegawai</button></a>
            
        </div>
    </div>

   <div class=\"menu-home\">
        <div class=\"label-menu\">        
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("siswa_new");
        echo "\"><button class=\"button\">Tambah Data Siswa</button></a>
            
        </div>
    </div>

   <div class=\"menu-home\">
        <div class=\"label-menu\">        
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("users_new");
        echo "\"><button class=\"button\">Tambah Data User</button></a>
            
        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 33,  59 => 26,  49 => 19,  38 => 11,  31 => 6,  28 => 5,);
    }
}
