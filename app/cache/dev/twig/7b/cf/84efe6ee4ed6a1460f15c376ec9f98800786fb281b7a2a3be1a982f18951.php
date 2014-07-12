<?php

/* SMASMABundle:Public:nilai.html.twig */
class __TwigTemplate_7bcf84efe6ee4ed6a1460f15c376ec9f98800786fb281b7a2a3be1a982f18951 extends Twig_Template
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
        echo "    <legend><center>Daftar Nilai</center></legend>
    <table class=\"table\">
        <thead>
            <tr>
                
                <th>Mata Pelajaran</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                
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
                    
                    <td align=\"center\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "matapelajaran"), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "tugas"), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "uts"), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "uas"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Public:nilai.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  66 => 23,  62 => 22,  58 => 21,  54 => 20,  50 => 18,  46 => 17,  31 => 4,  28 => 3,);
    }
}
