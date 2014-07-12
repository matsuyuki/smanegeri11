<?php

namespace SMA\SMABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SiswaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nis')
            ->add('nama')
            ->add('kelas')
            ->add('jurusan')
            ->add('telp')
            ->add('email')
            ->add('alamat')
            ->add('tglLahir')
            ->add('agama')
            ->add('jk')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SMA\SMABundle\Entity\Siswa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sma_smabundle_siswa';
    }
}
