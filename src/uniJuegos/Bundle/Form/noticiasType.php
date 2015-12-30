<?php

namespace uniJuegos\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class noticiasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tituloNot')
            ->add('textoNot')
            ->add('fotoNot')
            ->add('notjue')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uniJuegos\Bundle\Entity\noticias'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'unijuegos_bundle_noticias';
    }
}
