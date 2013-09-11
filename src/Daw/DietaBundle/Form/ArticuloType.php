<?php

namespace Daw\DietaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticuloType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo', 'text', array('label'  => 'Título',))
            ->add('descripcion', 'textarea', array('label'  => 'Artículo',))
            ->add('tipo', 'choice', array('choices'  => array(1 => 'Principal', 2 => 'Qué comer', 3 => 'Qué beber'),))
            ->add('fuente', 'text', array('label'  => 'Fuente',))
            ->add('img', 'text', array('label'  => 'Imagen',))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Daw\DietaBundle\Entity\Articulo'
        ));
    }

    public function getName()
    {
        return 'daw_dietabundle_articulotype';
    }
}
