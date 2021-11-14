<?php

namespace App\Form;

use App\Entity\QuestionTable;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionTableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question')
            ->add('reply1')
            ->add('reply2')
            ->add('reply3')
            ->add('reply4')
            ->add('goodReply')
            ->add('reply1', ChoiceType::class, array(
                'choices' => array(
                    'Vrai' => 1,
                    'Faux' => 0,
                    'Ne sais pas' => 2,
                ),
                'expanded' => true,
                'multiple' => false
            ))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => QuestionTable::class,
        ]);
    }
}
