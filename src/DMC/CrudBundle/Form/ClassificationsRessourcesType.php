<?php

namespace DMC\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClassificationsRessourcesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation')
            ->add('idfamille', 'entity',array(
                'class' => 'DMCCrudBundle:ClassificationsRessources',
                'choice_label' => 'designation'
                ))
            ->add('save', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DMC\CrudBundle\Entity\ClassificationsRessources'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dmc_crudbundle_classificationsressources';
    }
}
