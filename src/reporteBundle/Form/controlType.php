<?php

namespace reporteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class controlType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion')
            ->add('observaciones')
            ->add('fechaInicio', DateTimeType::class,array(
               'widget' => 'single_text',
            'format' => 'dd-MM-yyyy',
            'attr' => array('class' => 'form-control input-inline datepicker',
                'data-provide' => 'datepicker',
                'data-date-format' => 'dd-mm-yyyy'
                )))
            ->add('fechaFin', DateTimeType::class,array(
               'widget' => 'single_text',
            'format' => 'dd-MM-yyyy',
            'attr' => array('class' => 'form-control input-inline datepicker',
                'data-provide' => 'datepicker',
                'data-date-format' => 'dd-mm-yyyy'
                )))
            ->add('alumnos')
            ->add('encargado')
            ->add('equipo')
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'reporteBundle\Entity\control'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'reportebundle_control';
    }


}
