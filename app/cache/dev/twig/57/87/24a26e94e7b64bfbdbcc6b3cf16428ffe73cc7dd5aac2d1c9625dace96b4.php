<?php

/* SMASMABundle:Siswa:index.html.twig */
class __TwigTemplate_578724a26e94e7b64bfbdbcc6b3cf16428ffe73cc7dd5aac2d1c9625dace96b4 extends Twig_Template
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
        echo "<h1>Data Siswa</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th align=\"center\">Nis</th>
                <th align=\"center\">Nama</th>
                <th align=\"center\">Kelas</th>
                <th align=\"center\">Sub-Kelas</th>
                <th align=\"center\">Jurusan</th>
                <th align=\"center\">Telp</th>
                <th align=\"center\">Email</th>
                <th align=\"center\">Alamat</th>
                <th align=\"center\">Tgllahir</th>
                <th align=\"center\">Agama</th>
                <th align=\"center\">Jk</th>
                <th align=\"center\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "            <tr>
                <td align=\"center\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("siswa_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nis"), "html", null, true);
            echo "</a></td>
                <td align=\"center\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nama"), "html", null, true);
            echo "</td>
                <td align=\"center\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "kelas"), "html", null, true);
            echo "</td>
                <td align=\"center\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subkelas"), "html", null, true);
            echo "</td>
                <td align=\"center\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jurusan"), "html", null, true);
            echo "</td>
                <td align=\"center\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telp"), "html", null, true);
            echo "</td>
                <td align=\"center\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td align=\"center\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "alamat"), "html", null, true);
            echo "</td>
                <td align=\"center\">";
            // line 34
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tglLahir")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tglLahir"), "Y-m-d "), "html", null, true);
            }
            echo "</td>
                <td align=\"center\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agama"), "html", null, true);
            echo "</td>
                <td align=\"center\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jk"), "html", null, true);
            echo "</td>
                <td align=\"center\">
                <ul>
                    <li>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("siswa_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("siswa_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
<a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("siswa_new");
        echo "\"><button class=\"button\">Tambah Data</button></a>
    ";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Siswa:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 51,  129 => 49,  117 => 43,  111 => 40,  104 => 36,  100 => 35,  94 => 34,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  60 => 26,  57 => 25,  53 => 24,  31 => 4,  28 => 3,);
    }
}
