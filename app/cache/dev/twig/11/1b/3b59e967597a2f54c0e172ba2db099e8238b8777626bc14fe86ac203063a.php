<?php

/* SMASMABundle:Absensi:edit.html.twig */
class __TwigTemplate_111b3b59e967597a2f54c0e172ba2db099e8238b8777626bc14fe86ac203063a extends Twig_Template
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
                <td>Nama</td>
                <td><input type=\"text\" name=\"nama\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absensi"]) ? $context["absensi"] : $this->getContext($context, "absensi")), "nama"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr><td valign=top>kelas</td>
                <td>
                    <select name=\"kelas\" class=\"text-input\">
                        <option value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absensi"]) ? $context["absensi"] : $this->getContext($context, "absensi")), "kelas"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absensi"]) ? $context["absensi"] : $this->getContext($context, "absensi")), "kelas"), "html", null, true);
        echo "</option>
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>
                    </select>     
                </td></tr>
            <tr><td valign=top>sub kelas</td>
                <td>
                    <select name=\"subkelas\" class=\"text-input\">
                        <option value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absensi"]) ? $context["absensi"] : $this->getContext($context, "absensi")), "subkelas"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absensi"]) ? $context["absensi"] : $this->getContext($context, "absensi")), "subkelas"), "html", null, true);
        echo "</option>
                        <option value=\"1\">1</option>
                        <option value=\"2\">2</option>
                        <option value=\"3\">3</option>
                    </select>     
                </td></tr>
           
            <tr><td valign=top>Kehadiran</td>
                <td>
                    <select name=\"absen\" class=\"text-input\">
                        <option value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absensi"]) ? $context["absensi"] : $this->getContext($context, "absensi")), "absen"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absensi"]) ? $context["absensi"] : $this->getContext($context, "absensi")), "absen"), "html", null, true);
        echo "</option>
                        <option value=\"Hadir\">hadir</option>
                        <option value=\"Absen\">absen</option>
                        <option value=\"Sakit\">sakit</option>
                        <option value=\"Izin\">izin</option>
                    </select>     
                </td></tr>            
            
            <tr><td>&nbsp;</td><td><input type=\"submit\" name=\"submit\" value=\"Simpan\" class=\"button\"></td></tr>
        </table>
    </form>
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Absensi:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 33,  60 => 23,  46 => 14,  38 => 9,  31 => 4,  28 => 3,);
    }
}
