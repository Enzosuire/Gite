<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Proprietaire;
use Doctrine\ORM\EntityManagerInterface;

class ProprietaireController extends AbstractController
{
    #[Route('/proprietaire', name: 'app_proprietaire')]
    public function index(): Response
    {
        return $this->render('proprietaire/index.html.twig', [
            'controller_name' => 'ProprietaireController',
        ]);
    }


      
    #[Route('/proprietaires/add', name: 'add_proprietaire')]
    public function addProprietaire(EntityManagerInterface $entityManager): Response
    {
        $proprietaire = new Proprietaire();
        $proprietaire->setNom('Jackie'); // Remplacez par le nom réel
        $proprietaire->setPrenom('enzo'); // Remplacez par le prénom réel
        $proprietaire->setAdresse('5 rue des duranderies '); // Remplacez par l'adresse réelle
        $proprietaire->setTelephone('07/50/88/12/22'); // Remplacez par le numéro de téléphone réel
        $proprietaire->setEmail('enzo@antoine.fr'); // Remplacez par l'email réel

        // Ajoutez d'autres propriétés selon vos besoins

        $entityManager->persist($proprietaire);
        $entityManager->flush();

        return $this->render('proprietaire/addpro.html.twig', [
            'controller_name' => 'ProprietaireController',
            'adjectif' => 'ajouté',
            'proprietaire' => $proprietaire,
        ]);
    }


//     use App\Entity\Proprietaire;
// use App\Form\ProprietaireType; // Assurez-vous d'importer le formulaire approprié

// #[Route('/proprietaires/add', name: 'add_proprietaire')]
// public function addProprietaire(Request $request, EntityManagerInterface $entityManager): Response
// {
//     $proprietaire = new Proprietaire();
    
//     // Utilisez le formulaire ProprietaireType que vous devez créer pour les champs du propriétaire
//     $form = $this->createForm(ProprietaireType::class, $proprietaire);
//     $form->handleRequest($request);

//     if ($form->isSubmitted() && $form->isValid()) {
//         // Ajoutez ici la logique pour sauvegarder le propriétaire dans la base de données
//         $entityManager->persist($proprietaire);
//         $entityManager->flush();

//         // Redirigez l'utilisateur vers une page de confirmation ou une autre action
//         return $this->redirectToRoute('proprietaires_index');
//     }

//     return $this->render('proprietaire/new.html.twig', [
//         'form' => $form->createView(),
//     ]);
// }


}
