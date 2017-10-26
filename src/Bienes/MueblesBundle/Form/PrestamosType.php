<?php

namespace Bienes\MueblesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PrestamosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('fechaInicio', DateType::class,array(
               'widget' => 'single_text',
            'format' => 'dd-MM-yyyy',
            'attr' => array('class' => 'form-control input-inline datepicker',
                'data-provide' => 'datepicker',
                'data-date-format' => 'dd-mm-yyyy'
                )))
        ->add('fechaFin', DateType::class,array(
               'widget' => 'single_text',
            'format' => 'dd-MM-yyyy',
            'attr' => array('class' => 'form-control input-inline datepicker',
                'data-provide' => 'datepicker',
                'data-date-format' => 'dd-mm-yyyy'
                )))
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
