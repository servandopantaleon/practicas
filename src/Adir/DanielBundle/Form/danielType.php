<?php

namespace Adir\DanielBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class danielType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('horaInicio')
        ->add('horaFin')
        ->add('software')
        ->add('totalAlumnos')
        ->add('observaciones')
        ->add('fecha', DateTimeType::class,array(
               'widget' => 'single_text',
            'format' => 'dd-MM-yyyy',
            'required' => false,
            'attr' => array('class' => 'form-control input-inline datepicker',
                'data-provide' => 'datepicker',
                'data-date-format' => 'dd-mm-yyyy',
                'required' => false
                )))
        ->add('Materia')
        ->add('Profesores');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Adir\DanielBundle\Entity\daniel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adir_danielbundle_daniel';
    }


}
