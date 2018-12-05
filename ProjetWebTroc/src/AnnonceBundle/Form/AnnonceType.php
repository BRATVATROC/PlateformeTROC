<?php

namespace AnnonceBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titreAnnonce')
            ->add('prix')
            ->add('typeAnnonce',ChoiceType::class, array('choices' => array('Annonce'=> 'Annonce', 'Non annonce'=> ' Non annonce')))
            ->add('etatAnnonce', ChoiceType::class, array('choices' => array('Disponible'=> 'Disponible', 'Non Disponible'=> ' Non Disponible')))
            ->add('adresse')
            ->add('description')
            ->add('iditems', EntityType::class, array(
                'class' => 'TrocBundle\Entity\Items',
                'choice_label'=> 'nomitems',
                'multiple' => false
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TrocBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'annoncebundle_annonce';
    }


}
