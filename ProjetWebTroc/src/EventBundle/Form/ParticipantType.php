<?php

namespace EventBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParticipantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('event', EntityType::class, array
        ('class'=>'TrocBundle\Entity\Event','text'=>'number', 'multiple'=>false))
                ->add('participant', EntityType::class, array
        ('class'=>'vendor\friendsofsymfony\user-bundle\Model\User','number'=>'id', 'multiple'=>false));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'TrocBundle\Entity\Participant'));
    }

    public function getBlockPrefix()
    {
        return 'eventBundle_participant';
    }
}