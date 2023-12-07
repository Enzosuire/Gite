<?php

namespace App\Form;

use App\Entity\Equipements;
use App\Model\SearchData;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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

            ->add('region', ChoiceType::class, [
                'label' => 'Région',
                'required' => false,
                'choices' => [
                    'Pays de la Loire' => 'Pays de la Loire',
                    'Auvergne-Rhône-Alpes' => 'Auvergne-Rhône-Alpes',
                    'Bourgogne-Franche-Comté' => 'Bourgogne-Franche-Comté',
                    'Bretagne' => 'Bretagne',
                    'Centre-Val de Loire' => 'Centre-Val de Loire',
                    'Corse' => 'Corse',
                    'Grand Est' => 'Grand Est',
                    'Hauts-de-France' => 'Hauts-de-France',
                    'Île-de-France' => 'Île-de-France',
                    'Normandie' => 'Normandie',
                    'Nouvelle-Aquitaine' => 'Nouvelle-Aquitaine',
                    'Occitanie' => 'Occitanie',
                    'Provence-Alpes-Côte d\'Azur' => 'Provence-Alpes-Côte d\'Azur',
                    // Ajoutez d'autres régions selon vos besoins
                ],
            ])   
            
            ->add('departement', ChoiceType::class, [
                'label' => 'Département',
                'required' => false,
                'choices' => [
                    'Indre-et-Loire' => 'Indre-et-Loire',
                    'Meuse ' => 'Meuse',
                    'Morbihan' => 'Morbihan',
                    'Var' => 'Var',
                    'Yvelines' => 'Yvelines',
                    'Landes' => 'Landes',
                    'Rhône' => 'Rhône',
                    'Ariège' => 'Ariège',
                    
                ],
            ])
            // ->add('departement', TextType::class, [
            //     'label' => 'Département',
            //     'required' => false,
            // ])

            ->add('ville', ChoiceType::class, [
                'label' => 'ville',
                'required' => false,
                'choices' => [
                    'Angers' => 'Angers',
                    'Chinon ' => 'Chinon',
                    'Verdun' => 'Verdun',
                    'Vannes' => 'Vannes',
                    'Versailles' => 'Versailles',
                    'Foix' => 'Foix',
                    'Biscarrosse' => 'Biscarrosse',
                    'Lyon' => 'Lyon',
                    
                ],
            ])
    
    
            ->add('rechercher', SubmitType::class);

            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
           
        ]);
    }
}

