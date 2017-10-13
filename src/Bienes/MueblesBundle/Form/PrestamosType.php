<?php

namespace Bienes\MueblesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PrestamosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('fechaInicio')
        ->add('fechaFin')
        ->add('atendido')
        ->add('ubicacion')
        ->add('alumnos')
        ->add('encargado')
        ->add('equipo');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bienes\MueblesBundle\Entity\Prestamos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bienes_mueblesbundle_prestamos';
    }


}
