<?php

/* SMASMABundle:Siswa:edit.html.twig */
class __TwigTemplate_64c4ebd79e05e608f5e1a47c479dcc3065e46df4bfac2c86967121af1d884b37 extends Twig_Template
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
        echo "<h2>Ubah Data Siswa</h2>
    <form class=\"well\" id=\"form\" method=\"POST\" action=\"#\">
        <table cellspacing=10>
            <tr>
                <td>NIS</td>
                <td><input type=\"text\" name=\"nis\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "nis"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type=\"text\" name=\"nama\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "nama"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type=\"text\" name=\"email\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "email"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type=\"text\" name=\"alamat\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "alamat"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr><td valign=top>kelas</td>
                <td>
                    <select name=\"kelas\" class=\"text-input\">
                        <option value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "kelas"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "kelas"), "html", null, true);
        echo "</option>
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>
                    </select>     
                </td></tr>
            
            <tr><td valign=top>Jurusan</td>
                <td>
                    <select name=\"jurusan\" class=\"text-input\">
                        <option value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "jurusan"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "jurusan"), "html", null, true);
        echo " </option>
                        <option value=\" \"> </option>
                        <option value=\"IPA\">IPA</option>
                        <option value=\"IPS\">IPS</option>
                    </select>
                </td></tr>
            <tr><td valign=top>sub kelas</td>
                <td>
                    <select name=\"subkelas\" class=\"text-input\">
                        <option value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "kelas"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "kelas"), "html", null, true);
        echo "</option>
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>
                    </select>     
                </td></tr>            
            <tr>
                <td>Telp</td>
                <td><input type=\"text\" name=\"telp\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "telp"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>

            <tr>
                <td>alamat</td>
                <td><input type=\"text\" name=\"alamat\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "alamat"), "html", null, true);
        echo "\"></td>
            </tr><tr><td valign=top>Agama</td>
                <td>
                    <select name=\"agama\" class=\"text-input\">
                        <option value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "agama"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "agama"), "html", null, true);
        echo "</option>
                        <option value=\"Islam\">Islam</option>
                        <option value=\"Kristen Protestan\">Kristen Protestan</option>
                        <option value=\"Kristen Katolik\">Kristen Katolik</option>
                        <option value=\"Budha\">Budha</option>
                        <option value=\"Hindu\">Hindu</option>
                    </select>
                </td></tr>
            <tr><td valign=top>Jenis Kelamin</td>
                <td>
                    <select name=\"jk\" class=\"text-input\">
                        <option value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "jk"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["siswa"]) ? $context["siswa"] : $this->getContext($context, "siswa")), "jk"), "html", null, true);
        echo "</option>
                        <option value=\"Pria\">Pria</option>
                        <option value=\"Perempuan\">Perempuan</option>

                    </select>
                </td></tr>
            <tr><td>&nbsp;</td><td><input type=\"submit\" name=\"submit\" value=\"Simpan\" class=\"button\"></td></tr>
        </table>
    </form>
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Siswa:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 74,  125 => 63,  118 => 59,  109 => 53,  96 => 45,  82 => 36,  67 => 26,  59 => 21,  52 => 17,  45 => 13,  38 => 9,  31 => 4,  28 => 3,);
    }
}
