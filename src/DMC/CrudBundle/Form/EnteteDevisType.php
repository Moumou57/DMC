<?php

namespace DMC\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnteteDevisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_societe','entity',array(
                'class' => 'DMCCrudBundle:Societes',
                'choice_label' => 'nomsociete'
                ))
            ->add('num_devis', 'text')
            ->add('version', 'text')
            ->add('intitule_devis','text')
            ->add('id_client', 'entity',array(
                'class' => 'DMCCrudBundle:Clients',
                'choice_label' => 'nom'
                ))
            ->add('lignes','collection',array(
                'type' => new LignesDevisType()
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
            'data_class' => 'DMC\CrudBundle\Entity\EnteteDevis'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dmc_crudbundle_entetedevis';
    }
}
