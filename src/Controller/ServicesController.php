<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Services;

class ServicesController extends AbstractController
{
    #[Route('/services', name: 'app_services')]
    public function index(): Response
    {
        return $this->render('services/index.html.twig', [
            'controller_name' => 'ServicesController',
        ]);
    }




    #[Route('/services/add', name: 'add_services')]
    public function addServices(EntityManagerInterface $entityManager): Response
    {
        $services = new Services();
        $services->setAccesInternet(false); // Remplacez par la valeur réelle
        $services->setLocationLinge(false); // Remplacez par la valeur réelle
        $services->setMenageFinSejour(true); 
    
      

        // Ajoutez les équipements à la base de données
        $entityManager->persist($services);
        $entityManager->flush();

        return $this->render('services/add.html.twig', [
            'controller_name' => 'servicesController',
            'adjectif' => 'ajouté',
            'services' => $services,
            
        ]);
    }
}
