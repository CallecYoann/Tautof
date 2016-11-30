<?php

namespace tautof\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
                ->add('description')
                ->add('modele')
                ->add('couleur')
                ->add('boite')
                ->add('prix')
                ->add('km')
                ->add('photo1' , FileType::class, array('label' => 'photo1 (PDF file)'))
                ->add('photo2')
                ->add('photo3');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'tautof\PlatformBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tautof_platformbundle_annonce';
    }


}
