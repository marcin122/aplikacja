<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array(
                'label'=>false
            ))
            ->add('email',null, array(
                'label'=>false
            ))
            ->add('plainPassword',RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => false,),
                'second_options' => array('label' => false,),
            ))
            ->add('name',null, array(
                'label'=>false,
            ))
            ->add('secondName',null, array(
                'label'=>false,
            ))
            ->add('address',null, array(
                'label'=>false,
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }


}
