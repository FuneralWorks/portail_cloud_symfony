<?php

namespace PortailCloudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class testType extends AbstractType
{

    public function buildForm(FormBuiLderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', array('required' => false))
            ->add('name')
            ->add('sexe', 'choice', array('choices' => array('0' =>  'homme',
                                                            '1' => 'femme',
                                                            '2' => 'autre'), 'expanded' => false))
            ->add('contenu', 'textarea')
            ->add('date','datetime')
            ->add('utilisateurs', 'entity', array('class' => 'UtilisateursBundle\Entity\Utilisateurs'))
            ->add('envoyer','submit');
    }

    public function getName()
    {
        return 'portailcloudbundle_test';
    }
} 