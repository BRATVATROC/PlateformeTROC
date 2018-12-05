<?php

namespace TrocBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivraisonType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateenregistrement',null,array('label' => 'Registration Date:') )->add('fraislivraison',null,array('label' => 'Shipping Cost:'))->add('livraisonrecue',null,array('label' => 'Order Received:'))->add('adresselivraison',null,array('label' => 'Client Address:'))->add('etatlivraison',null,array('label' => ' Cancel Order:'))->add('save',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TrocBundle\Entity\Livraison'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'trocbundle_livraison';
    }


}
