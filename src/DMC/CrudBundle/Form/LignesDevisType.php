<?php

namespace DMC\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LignesDevisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type','choice', array(
                'choices' => array(
                    'Description' => 'Description',
                    'Article'     => 'Article',
                    ),
                'choices_as_values' => true,
                ))
            ->add('position','number')
            ->add('article','text')
            ->add('libelle','text')
            ->add('unite','choice', array(
                'choices' => array(
                    'm' => 'm',
                    'm²' => 'm2',
                    'm3' => 'm3',
                    '' => '<null>',
                    ),
                'choices_as_values' => true,
                ))
            ->add('quantite','number')
            ->add('puHt','number')
            ->add('totalHt','number')
            ->add('souligne','checkbox', array('required' => false))
            ->add('gras','checkbox', array('required' => false))
            ->add('italique','checkbox', array('required' => false))
            ->add('affprix','checkbox', array('required' => false))
            ->add('affqte','checkbox', array('required' => false))
            ->add('idEntete','number')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DMC\CrudBundle\Entity\LignesDevis'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dmc_crudbundle_lignesdevis';
    }
}
