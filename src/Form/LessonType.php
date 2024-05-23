<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Lesson;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LessonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fileName', FileType::class , [
                'label' => 'Enter a Lesson File',
                'mapped' => false , 
            ])
            ->add('categorie' , EntityType::class ,[
                'class' => Categorie::class , 
                'choice_label' =>  'categorie' ,
                'mapped' => true ,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lesson::class,
        ]);
    }
}
