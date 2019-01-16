<?php

namespace EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre', TextType::class, array('attr' => array('class'=>'form-control')))
                ->add('description', TextareaType::class, array('attr' => array('class'=>'form-control')))
                ->add('max',NumberType::class, array('attr' => array('class'=>'form-control')))
                ->add('location', TextType::class, array('attr' => array('class'=>'form-control')))
                ->add('date', DateTimeType::class, array('attr' => array('class'=>'form-control')))
                ->add('image', FileType::class, array('attr' => array('class'=>'insert image')));
//                ->add('createdBy','text',array('mapped'=>false));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TrocBundle\Entity\Event'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'eventbundle_event';
    }
}