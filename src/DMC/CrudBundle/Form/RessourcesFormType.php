<?php

namespace DMC\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RessourcesFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation','text')
            ->add('famille','integer') //Classification Ressources à mettre plus tard
            ->add('unite','integer')
            ->add('quantite','integer')
            ->add('prix','integer')
            ->add('estcompose','checkbox', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DMC\CrudBundle\Entity\Ressources'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dmc_crudbundle_ressources_form';
    }
}
