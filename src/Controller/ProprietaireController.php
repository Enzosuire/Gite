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
        $proprietaire->setNom('Michel'); // Remplacez par le nom réel
        $proprietaire->setPrenom('Léo'); // Remplacez par le prénom réel
        $proprietaire->setAdresse('2 rue des oranges '); // Remplacez par l'adresse réelle
        $proprietaire->setTelephone('06/50/88/12/22'); // Remplacez par le numéro de téléphone réel
        $proprietaire->setEmail('michel@Léo.fr'); // Remplacez par l'email réel

        // Ajoutez d'autres propriétés selon vos besoins

        $entityManager->persist($proprietaire);
        $entityManager->flush();

        return $this->render('proprietaire/addpro.html.twig', [
            'controller_name' => 'ProprietaireController',
            'adjectif' => 'ajouté',
            'proprietaire' => $proprietaire,
        ]);
    }



}
