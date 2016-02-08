<?php

namespace DMC\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RessourcesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation','text')
            ->add('famille')
            ->add('unite','choice', array(
                'choices' => array(
                    '' => '',   // <null>
                    'm' => 'm',
                    'm²' => 'm2',
                    'm3' => 'm3',
                    'to' => 'to', // Tonne(s)
                    'u' => 'u',  // Unité(s)
                    'h' => 'h',  // Heure(s)
                    ),
                'choices_as_values' => true,
                ))
            ->add('prix', 'integer')
            ->add('estcompose','checkbox', array('required' => false))
            ->add('lignesArticles','collection',array(
                'type' => new LignesArticlesType(), //RessourcesFormType
                'allow_delete' => true,
                'allow_add'    => true,
                'by_reference' => true
                )
            )
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
        return 'dmc_crudbundle_ressources';
    }
}
