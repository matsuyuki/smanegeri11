<?php

/* SMASMABundle:Admin:new.html.twig */
class __TwigTemplate_bd242f6d50729aab0bffdd77ad4f72a750ea0631bb3dc3348e797ff54dd1ea3e extends Twig_Template
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
        echo "<div class=\"judul-halaman\">Tambah Data Member</div>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("page_simpanmember");
        echo "\" method=\"post\">
        <table cellspacing=10>
            <tr><td width=120>Username</td><td><input type=\"text\" name=\"username\" required=\"required\" class=\"text-input\"></td></tr>
            <tr><td width=120>Password</td><td><input type=\"text\" name=\"password\" required=\"required\" class=\"text-input\"></td></tr>  
            <tr><td valign=top>Nama</td><td><input type=\"text\" name=\"nama\" required=\"required\" class=\"text-input\"></td></tr>
            <tr><td valign=top>Email</td><td><input type=\"email\" name=\"email\" required=\"required\" class=\"text-input\" size=\"30\"></td></tr>
            <tr><td valign=top>Alamat</td><td><input type=\"text\" name=\"alamat\" required=\"required\" class=\"text-input\" size=\"80\"></td></tr>
            <tr><td valign=top>Status</td>
                <td>
                    <select name=\"status\" class=\"text-input\">
                        <option value=\"Guru\">Guru</option>
                        <option value=\"Siswa\">Siswa</option>
                    </select     
                </td></tr>
            
            <tr><td>&nbsp;</td><td><input type=\"submit\" name=\"submit\" value=\"Simpan\" class=\"button\"></td></tr>
        </table>

    </form>  
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Admin:new.html.twig";
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
