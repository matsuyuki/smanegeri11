<?php

/* SMASMABundle:Pegawai:edit.html.twig */
class __TwigTemplate_5d74ce85c7a4340bee3a1f846586ceb607ec403859daf5969e8761fe74820934 extends Twig_Template
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
        echo "<h2>Ubah Data Pegawai</h2>
    <form class=\"well\" id=\"form\" method=\"POST\" action=\"#\">
        <table cellspacing=10>
            <tr>
                <td>NIS</td>
                <td><input type=\"text\" name=\"nis\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "nis"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type=\"text\" name=\"nama\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "nama"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type=\"text\" name=\"email\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "email"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type=\"text\" name=\"alamat\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "alamat"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr><td valign=top>Jabatan</td>
                <td>
                    <select name=\"jabatan\" class=\"text-input\">
                        <option value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "jabatan"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "jabatan"), "html", null, true);
        echo " </option>
                        <option value=\"Wali Kelas\">Wali Kelas</option>
                        <option value=\"Guru\">Guru</option>
                        <option value=\"Honorer\">Guru Honorer</option>
                    </select>

                </td></tr>
            <tr>
                <td>Bidang</td>
                <td><input type=\"text\" name=\"bidang\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "bidang"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type=\"text\" name=\"telp\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "telp"), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>

            <tr>
                <td>alamat</td>
                <td><input type=\"text\" name=\"alamat\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "alamat"), "html", null, true);
        echo "\"></td>
            </tr><tr><td valign=top>Agama</td>
                <td>
                    <select name=\"agama\" class=\"text-input\">
                        <option value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "agama"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "agama"), "html", null, true);
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
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "jk"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pegawai"]) ? $context["pegawai"] : $this->getContext($context, "pegawai")), "jk"), "html", null, true);
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
        return "SMASMABundle:Pegawai:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 60,  104 => 49,  97 => 45,  88 => 39,  81 => 35,  67 => 26,  59 => 21,  52 => 17,  45 => 13,  38 => 9,  31 => 4,  28 => 3,);
    }
}
