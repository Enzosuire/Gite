<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Proprietaire;
use App\Entity\Contacts;
use App\Entity\Equipements;
use App\Entity\Animaux;
use App\Entity\Services;
use App\Form\GiteType;
use App\Entity\Gites;
use App\Repository\GitesRepository;

class GiteController extends AbstractController
{


    // #[Route('/gites', name: 'gites_index')]
    // public function index(): Response
    // {
    //     return $this->render('gite/index.html.twig', [
    //         'controller_name' => 'GiteController',
    //     ]);
    // }


    #[Route('/gites/add', name: 'add_gite')]
    public function addGite(Request $request, EntityManagerInterface $entityManager): Response
    {

        $gite = new Gites();
        $gite->setLocalisation('Marseille');
        $gite->setSurfaceHabitable(400);
        $gite->setNombreChambres(8);
        $gite->setNombresCouchages(13);
        $gite->setEquipements('Équipements du gîte');
        $gite->setNom('Bateau');



        // Assurez-vous d'ajuster ces valeurs selon vos besoins

        $proprietaire = $entityManager->getRepository(Proprietaire::class)->find(3);
        $contact = $entityManager->getRepository(Contacts::class)->find(4);

        $gite->setProprietaire($proprietaire);
        $gite->setContact($contact);

        // Récupérez les équipements associés au gîte (assuming you have an array of equipement IDs)
        $equipementIds = [4]; // Replace with the actual IDs selected in your form
        foreach ($equipementIds as $equipementId) {
            $equipement = $entityManager->getRepository(Equipements::class)->find($equipementId);
            if ($equipement) {
                $gite->addEquipement($equipement);
            }
        }


        $animauxIds = [1]; // Replace with the actual IDs selected in your form
        foreach ($animauxIds as $animauxId) {
            $animaux = $entityManager->getRepository(Animaux::class)->find($animauxId);
            if ($animaux) {
                $gite->addAnimaux($animaux);
            }
        }

        $serviceIds = [1, 2]; // Remplacez par les IDs réels
        foreach ($serviceIds as $serviceId) {
            $service = $entityManager->getRepository(Services::class)->find($serviceId);
            if ($service) {
                $gite->addService($service);
            }
        }

        $entityManager->persist($gite);
        $entityManager->flush();

        return $this->render('gite/show.html.twig', [
            'controller_name' => 'GiteController',
            'gite' => $gite,
            'adjectif' => 'ajouté'
        ]);
    }




 


    // #[Route('/gites/{id}', name:'gites_show')]
    // public function show($id): Response
    // {
    //     // Ajoutez ici la logique pour afficher les détails d'un gîte en fonction de son ID
    //     return $this->render('gite/show.html.twig', [
    //         'controller_name' => 'GiteController',
    //     ]);
    // }






}
