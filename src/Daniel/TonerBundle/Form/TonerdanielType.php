<?php

namespace Daniel\TonerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TonerdanielType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('noToner')
        ->add('observaciones')
        ->add('fechaEntrega')
        ->add('alumnos')
        ->add('encargado')


        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Daniel\TonerBundle\Entity\Tonerdaniel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'daniel_tonerbundle_tonerdaniel';
    }


}
