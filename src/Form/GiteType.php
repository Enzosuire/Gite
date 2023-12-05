<?php

namespace App\Form;

use App\Entity\Contacts;
use App\Entity\Gites;
use App\Entity\Proprietaire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('localisation')
            ->add('surfaceHabitable')
            ->add('nombreChambres')
            ->add('nombresCouchages')
            // Ajoutez ici les champs supplémentaires du formulaire (équipements, animaux, etc.)
            ->add('equipements', EntityType::class, [
                'class' => 'App\Entity\Equipements',
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('animaux', EntityType::class, [
                'class' => 'App\Entity\Animaux',
                'multiple' => true,
                'expanded' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gites::class,
        ]);
    }
}

