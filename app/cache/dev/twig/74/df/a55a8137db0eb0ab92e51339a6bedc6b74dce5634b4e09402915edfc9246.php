<?php

/* SMASMABundle:Siswa:new.html.twig */
class __TwigTemplate_74dfa55a8137db0eb0ab92e51339a6bedc6b74dce5634b4e09402915edfc9246 extends Twig_Template
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
        echo "<div class=\"judul-halaman\">Tambah Data Siswa</div>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("page_simpansiswa");
        echo "\" method=\"post\">
        <table cellspacing=10>
            <tr><td width=120>Nis</td><td><input type=\"text\" name=\"nis\" required=\"required\" class=\"text-input\"></td></tr>        
            <tr><td valign=top>Nama</td><td><input type=\"text\" name=\"nama\" required=\"required\" class=\"text-input\"></td></tr>
            <tr><td valign=top>Email</td><td><input type=\"email\" name=\"email\" required=\"required\" class=\"text-input\" size=\"30\"></td></tr>
            <tr><td valign=top>Kelas</td>
                <td>
                    <select name=\"kelas\" class=\"text-input\">
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>

                    </select     
                </td></tr>
            <tr><td valign=top>Jurusan</td>
                <td>
                            <select name=\"jurusan\" class=\"text-input\">
                                <option value=\" \"> </option>
                                <option value=\"IPA\">IPA</option>
                                <option value=\"IPS\">IPS</option>
                            </select>

                </td></tr>
             <tr><td valign=top>Sub-Kelas</td>
                <td>
                    <select name=\"subkelas\" class=\"text-input\">
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>

                    </select     
                </td></tr>
            <tr><td valign=top>Alamat</td><td><input type=\"text\" name=\"alamat\" required=\"required\" class=\"text-input\" size=\"80\"></td></tr>
            <tr><td valign=top>Telp</td><td><input type=\"text\" name=\"telp\" required=\"required\" class=\"text-input\"></td></tr>
            <tr><td valign=top>Tanggal Lahir</td><td><input type=\"text\" name=\"tanggal_lahir\" required=\"required\" class=\"text-input\"> </td></tr> 
            <tr><td valign=top>Agama</td><td>
                    <select name=\"agama\" class=\"text-input\">
                        <option value=\"Islam\">Islam</option>
                        <option value=\"Kristen Protestan\">Kristen Protestan</option>
                        <option value=\"Kristen Katolik\">Kristen Katolik</option>
                        <option value=\"Budha\">Budha</option>
                        <option value=\"Hindu\">Hindu</option>
                    </select>
                </td></tr>
            <tr><td valign=top>Jenis Kelamin</td><td>
                    <input type=\"radio\" name=\"kelamin\" value=\"Laki-laki\" required=\"required\">Laki-laki
                    <input type=\"radio\" name=\"kelamin\" value=\"perempuan\">Perempuan
                </td></tr>
            <tr><td>&nbsp;</td><td><input type=\"submit\" name=\"submit\" value=\"Simpan\" class=\"button\"></td></tr>
        </table>

    </form>  
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Siswa:new.html.twig";
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
