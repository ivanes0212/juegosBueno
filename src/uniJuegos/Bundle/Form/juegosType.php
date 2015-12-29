<?php

namespace uniJuegos\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class juegosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tituloJue')
            ->add('descJue')
            ->add('compJue')
            ->add('fotoJue')
            ->add('iconoJue')
            ->add('juecat')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uniJuegos\Bundle\Entity\juegos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'unijuegos_bundle_juegos';
    }
}
