<?php

namespace Daw\DietaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text', array('label'  => 'Nombre',))
            ->add('apellido', 'text', array('label'  => 'Apellido',))
            ->add('telefono', 'text', array('label'  => 'Teléfono',))
            ->add('fechanac', 'birthday', array('label'  => 'Fecha de Nacimiento',))
            ->add('correo', 'email',  array('label'  => 'Correo electrónico',))
            ->add('password', 'password',  array('label'  => 'Contraseña',))
            ->add('altura', 'text', array('label'  => 'Altura (cm)',))
            ->add('peso', 'text', array('label'  => 'Peso (kg)',))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Daw\DietaBundle\Entity\Usuario'
        ));
    }

    public function getName()
    {
        return 'daw_dietabundle_usuariotype';
    }
}
