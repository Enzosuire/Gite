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
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('localisation')
            ->add('surface_habitable')
            ->add('nombre_chambres')
            ->add('nombres_couchages')
            ->add('equipements')
            ->add('proprietaire', EntityType::class, [
                'class' => Proprietaire::class,
'choice_label' => 'id',
            ])
            ->add('Contact', EntityType::class, [
                'class' => Contacts::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gites::class,
        ]);
    }
}
