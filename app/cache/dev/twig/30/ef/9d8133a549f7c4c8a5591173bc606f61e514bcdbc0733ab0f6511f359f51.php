<?php

/* SMASMABundle:absensi:new.html.twig */
class __TwigTemplate_30ef9d8133a549f7c4c8a5591173bc606f61e514bcdbc0733ab0f6511f359f51 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"judul-halaman\">Tambah Absen Siswa</div>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("page_simpanabsensi");
        echo "\" method=\"post\">
        <table cellspacing=10>      
            <tr><td valign=top>Nama</td><td><input type=\"text\" name=\"nama\" required=\"required\" class=\"text-input\"></td></tr>
            <tr><td valign=top>Kelas</td>
                <td>
                    <select name=\"kelas\" class=\"text-input\">
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>

                    </select     
                </td></tr>
            <tr><td valign=top>Sub-Kelas</td>
                <td>
                    <select name=\"subkelas\" class=\"text-input\">
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>

                    </select     
                </td></tr>
            <tr><td valign=top>Kehadiran</td>
                <td>
                    <select name=\"absen\" class=\"text-input\">
                        <option value=\"Hadir\">Hadir</option>
                        <option value=\"Absen\">Absen</option>
                        <option value=\"Sakit\">Sakit</option>
                        <option value=\"Izin\">Izin</option>
                        
                    </select></td></tr>
                    
                    <tr><td>&nbsp;</td><td><input type=\"submit\" name=\"submit\" value=\"Simpan\" class=\"button\"></td></tr>
            </table>
    </form>  
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:absensi:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,);
    }
}
