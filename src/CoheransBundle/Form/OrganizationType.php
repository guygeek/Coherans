<?php

namespace CoheransBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganizationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label'=>'Nom'))
            ->add('parent', 'entity', array('label'=>'Organisation mère','class' => 'CoheransBundle:Organization','property' => 'name', 'required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoheransBundle\Entity\Organization'
        ));
        
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'organization';
    }
}
