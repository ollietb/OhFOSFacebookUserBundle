<?php

namespace Oh\FOSFacebookUserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('firstname');
		
        $builder->add('lastname');
    }

    public function getName()
    {
        return 'fos_user_registration';
    }
}