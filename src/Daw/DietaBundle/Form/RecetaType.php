<?php

namespace Daw\DietaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecetaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo', 'text', array('label'  => 'Título',))
            ->add('ingredientes', 'textarea', array('label'  => 'Ingredientes',))
            ->add('preparacion', 'textarea', array('label'  => 'Preparación',))
            ->add('calorias', 'text', array('label'  => 'Calorías',))
            ->add('img', 'text', array('label'  => 'Imagen',))
            ->add('autor', 'hidden', array('data'  => '{{app.user}}',))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Daw\DietaBundle\Entity\Receta'
        ));
    }

    public function getName()
    {
        return 'daw_dietabundle_recetatype';
    }
}
