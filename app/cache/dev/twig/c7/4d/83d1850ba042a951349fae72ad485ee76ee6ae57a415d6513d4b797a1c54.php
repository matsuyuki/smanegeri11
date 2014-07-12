<?php

/* SMASMABundle:nilai:new.html.twig */
class __TwigTemplate_c74d83d1850ba042a951349fae72ad485ee76ee6ae57a415d6513d4b797a1c54 extends Twig_Template
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
        echo "<div class=\"judul-halaman\">Input Nilai siswa</div>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("page_simpannilai");
        echo "\" method=\"post\">
        <table cellspacing=10>
            <tr><td valign=top>NIS</td><td><input type=\"text\" name=\"nis\" required=\"required\" class=\"text-input\"></td></tr>
            <tr><td valign=top>Nama</td><td><input type=\"text\" name=\"nama\"  class=\"text-input\"></td></tr>
            <tr><td valign=top>MATA PELAJARAN</td>
                <td>
                    <select name=\"matapelajaran\" class=\"text-input\">
                        <option value=\"Matematika\">matematika</option>
                        <option value=\"fisika\">fisika</option>
                        <option value=\"kimia\">kimia</option>
                        <option value=\"ekonomi\">ekonomi</option>
                        <option value=\"sejarah\">sejarah</option>
                        <option value=\"akuntasi\">akuntasi</option>
                        <option value=\"bahasa indonesia\">bahasa indonesia</option>
                        <option value=\"bahasa inggris\">bahasa inggris</option>
                        
                    </select></td></tr>
            <tr><td valign=top>TUGAS</td><td><input type=\"text\" name=\"tugas\"  class=\"text-input\"></td></tr>
            <tr><td valign=top>UTS</td><td><input type=\"text\" name=\"uts\"  class=\"text-input\"></td></tr>
            <tr><td valign=top>UAS</td><td><input type=\"text\" name=\"uas\" class=\"text-input\"></td></tr>
          

                    </select>
                    <tr><td>&nbsp;</td><td><input type=\"submit\" name=\"submit\" value=\"Simpan\" class=\"button\"></td></tr>
                </td></tr>
            </table>
    </form>  
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:nilai:new.html.twig";
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
