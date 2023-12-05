<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Gites;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les gîtes depuis la base de données
        $gitesRepository = $entityManager->getRepository(Gites::class);
        $gites = $gitesRepository->findAll();

        return $this->render('home/index.html.twig', [
            'gites' => $gites,
        ]);
    }

  


}
