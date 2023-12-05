<?php

namespace App\Controller;

use App\Entity\Animaux;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Gites;


class AnimauxController extends AbstractController
{
    #[Route('/animaux', name: 'app_animaux')]
    public function index(): Response
    {
        return $this->render('animaux/index.html.twig', [
            'controller_name' => 'AnimauxController',
        ]);
    }


    #[Route('/animaux/add', name: 'add_animaux')]
    public function addEquipements(EntityManagerInterface $entityManager): Response
    {
        $animaux = new Animaux();
        $animaux->setAccepteAnimaux(true);
        $animaux->setTarifAnimaux(20.0);
      
        $gite = $entityManager->getRepository(Gites::class)->find(5);
        $animaux->setGite($gite);

        // Ajoutez les équipements à la base de données
        $entityManager->persist($animaux);
        $entityManager->flush();

        return $this->render('animaux/add.html.twig', [
            'controller_name' => 'animauxController',
            'adjectif' => 'ajouté',
            'animaux' => $animaux,
        ]);
    }
}
