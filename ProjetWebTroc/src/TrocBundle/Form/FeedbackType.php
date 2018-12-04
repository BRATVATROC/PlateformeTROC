<?php

namespace TrocBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FeedbackType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('likeFeed')
            ->add('dislike')
            ->add('note')
            ->add('date')
            ->add('idUser',EntityType::class,array('class'=>'AppBundle\Entity\User',
                'choice_label'=>'id',
                'multiple'=>false))
            ->add('idAnnonce',EntityType::class,array('class'=>'TrocBundle\Entity\Annonce',
                'choice_label'=>'idAnnonce',
                'multiple'=>false));


    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TrocBundle\Entity\Feedback'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'trocbundle_feedback';
    }


}
