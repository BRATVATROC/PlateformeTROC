<?php
/**
 * Created by PhpStorm.
 * User: Choubi
 * Date: 03/12/2018
 * Time: 00:46
 */

namespace ItemsBundle\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class itemUpdateType extends  AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomitems')
            ->add('idsouscat', EntityType::class, array(
                'class' => 'TrocBundle\Entity\Souscategorie',
                'choice_label' => 'Nomsouscat',
                'multiple' => false
            ));
    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TrocBundle\Entity\Items'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'itemsbundle_items';
    }
}