<?php

/* SMASMABundle:Public:kelas211.html.twig */
class __TwigTemplate_aa801715fd3c5baa77b3c562b32d789b72cf5c5d6990cc3278e8315e30ec4698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMASMABundle:Public:template.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMASMABundle:Public:template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <legend><center>Kelas 11 </center></legend>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Sub-Kelas</th>
                <th>jurusan</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entity1"]) ? $context["entity1"] : $this->getContext($context, "entity1")));
        foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
            // line 18
            echo "                <tr>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "nis"), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "nama"), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "kelas"), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "subkelas"), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "jurusan"), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "email"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:kelas211.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,);
    }
}
