<?php

namespace SMA\SMABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Nilai2Type extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nim')
            ->add('matapelajaran')
            ->add('nilaiangka')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SMA\SMABundle\Entity\Nilai2'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sma_smabundle_nilai2';
    }
}
