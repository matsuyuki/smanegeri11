<?php

/* SMASMABundle:Facebook:profil2.html.twig */
class __TwigTemplate_2014e40f3e870739a5cdcd1e06bcfa816a41029c787485582624eb98a191da6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SMASMABundle:Facebook:templatedetail.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMASMABundle:Facebook:templatedetail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Tentang Kami</h2>
    <dl class=\"dl-horizontal\">
        <dt>Sejarah</dt> 
        <dd>\tSMA Negeri Medan berdiri sejak tahun 1978 dengan nama SMA Neegeri 10 Medan. Luas tanah SMA Negeri 11 Medan seluas 10.020m2. Kepala sekolah yang pertama kali menajabat adalah Drs. Basyuruddin Harahap yang menjabat dari tahun 1978-1982. Saat ini SMA Negeri 11 Medan memiliki dua penjurusan bagi peserta didiknya, yaitu jurusan Ilmu Pengetahuan Alam (IPA) dan jurusan Ilmu Pengetahuan Sosial (IPS). </dd>
        <dt>Visi</dt>
        <dd>Mewujudkan sumber daya manusia yang cerdas, religius, unggul, kompetitif dan berbudaya lingkungan. </dd>
        <dt>Misi</dt>
        <dd>
            <ol>
                <li>Meningkatkan pembinaan akhlak dan budi pekerti yang luhur. </li>
                <li>Mengembangkan minat,bakat dan kreativitas peserta didik agar tumbuh dan berkembang.</li>
                <li>Meningkatkan profesionalisme tenaga pendidik dan kependidikan melalui kegitan IHT dan MGMP.</li>
                <li>Meningkatkan kualitas KBM melalui pengembangan multimedia yang dapat memotivasi peserta didik untuk kreatif, inisiatif dan inovatif baik dalam kegiatan intra maupun ekstra kulikuler.</li>
                <li>Mampu bersaing secar akademik melalui peningkatan KBM, les tambahan dan pengembangan diri</li>
                <li>Meningkatkan infastruktur yang mendukung pelaksanaan program sekolah.</li>
                <li>Menjalin kerjasama dengan mita kerja dan alumni.</li>
                <li>Menciptakan lingkungan kerja yang religius,kondusif,bersih dan asri</li>
            </ol>
        </dd>  
    </dl>

";
    }

    public function getTemplateName()
    {
        return "SMASMABundle:Facebook:profil2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
