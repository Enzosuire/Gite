<?php

namespace App\Form;

use App\Entity\Equipements;
use App\Model\SearchData;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lavelinge', CheckboxType::class, [
                'label' => 'Lave-linge',
                'required' => false,
            ])
            ->add('climatisation', CheckboxType::class, [
                'label' => 'Climatisation',
                'required' => false,
            ])
            ->add('television', CheckboxType::class, [
                'label' => 'Télévision',
                'required' => false,
            ])
            ->add('terrasse', CheckboxType::class, [
                'label' => 'Terrasse',
                'required' => false,
            ])
            ->add('barbecue', CheckboxType::class, [
                'label' => 'Barbecue',
                'required' => false,
            ])
            ->add('piscinePrivee', CheckboxType::class, [
                'label' => 'Piscine Privée',
                'required' => false,
            ])
            ->add('piscinePartagee', CheckboxType::class, [
                'label' => 'Piscine Partagée',
                'required' => false,
            ])
            ->add('tennis', CheckboxType::class, [
                'label' => 'Tennis',
                'required' => false,
            ])
            ->add('pingPong', CheckboxType::class, [
                'label' => 'Ping Pong',
                'required' => false,
            ])

            ->add('locationLinge', CheckboxType::class, [
                'label' => 'Location de linge',
                'required' => false,
            ])
            ->add('menageFinSejour', CheckboxType::class, [
                'label' => 'Ménage en fin de séjour',
                'required' => false,
            ])
            ->add('accesInternet', CheckboxType::class, [
                'label' => 'Accès Internet',
                'required' => false,
            ])
            ->add('lavevaiselle', CheckboxType::class, [
                'label' => 'Lave-vaiselle',
                'required' => false,
            ])

            // ->add('motCle', TextType::class, [
            //     'label' => 'Mot-clé',
            //     'required' => false,
            //     'attr' => ['placeholder' => 'Rechercher...']
            // ])
           
            // ->add('rechercher', SubmitType::class, [
            //     'attr' => ['class' => 'btn btn-primary']
            // ]);
    
            ->add('rechercher', SubmitType::class);

            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
           
        ]);
    }
}

