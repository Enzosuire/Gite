<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Equipements;

class EquipementsController extends AbstractController
{
    #[Route('/equipements', name: 'app_equipements')]
    public function index(): Response
    {
        return $this->render('equipements/index.html.twig', [
            'controller_name' => 'EquipementsController',
        ]);
    }



    #[Route('/equipements/add', name: 'add_equipements')]
    public function addEquipements(EntityManagerInterface $entityManager): Response
    {
        $equipements = new Equipements();
        $equipements->setLavelinge(false); // Remplacez par la valeur réelle
        $equipements->setClimatisation(true); // Remplacez par la valeur réelle
        $equipements->setTerrasse(true); 
        $equipements->setTelevision(true); 
        $equipements->setBarbecue(true); 
        $equipements->setPisicinePrivee(true); 
        $equipements->setPiscinePartagee(true); 
        $equipements->setTennis(true); 
        $equipements->setPingPong(true); 
      

        // Ajoutez les équipements à la base de données
        $entityManager->persist($equipements);
        $entityManager->flush();

        return $this->render('equipements/add.html.twig', [
            'controller_name' => 'EquipementsController',
            'adjectif' => 'ajouté',
            'equipements' => $equipements,
            
        ]);
    }
}
