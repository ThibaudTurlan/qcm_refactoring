<?php

namespace App\Form;

use App\Entity\QcmTable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QcmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleMovie')
            ->add('posterMovie')
            ->add('dateAt')
            ->add('questionTableIdQestion')
            ->add('userIdUser')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => QcmTable::class,
        ]);
    }
}
