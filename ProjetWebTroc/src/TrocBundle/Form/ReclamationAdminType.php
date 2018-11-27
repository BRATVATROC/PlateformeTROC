<?php

namespace TrocBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationAdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('description')->add('date')
            ->add('etatReclamation')->add('idAnnonce',EntityType::class,
                array('class'=>'TrocBundle\Entity\Annonce',
                    'choice_label'=>'idAnnonce',
                    'multiple'=>false))
            ->add('idRuser',EntityType::class,array('class'=>'AppBundle\Entity\User',
                'choice_label'=>'id',
                'multiple'=>false))->add('typeReclamation')->add('idUser',EntityType::class,array('class'=>'AppBundle\Entity\User',
                'choice_label'=>'id',
                'multiple'=>false))
        ;

    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TrocBundle\Entity\Reclamation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'trocbundle_reclamation';
    }


}
