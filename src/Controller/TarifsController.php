<?php

namespace App\Controller;

use App\Entity\Tarifs;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Gites;

class TarifsController extends AbstractController
{
    #[Route('/tarifs', name: 'app_tarifs')]
    public function index(): Response
    {
        return $this->render('tarifs/index.html.twig', [
            'controller_name' => 'TarifsController',
        ]);
    }



    #[Route('/tarifs/add', name: 'add_tarif')]
    public function addTarif(EntityManagerInterface $entityManager): Response
    {
        $tarif = new Tarifs();
        $tarif->setPeriodeDebut(new \DateTime('2023-01-01')); // Replace with the actual start date
        $tarif->setPeriodeFin(new \DateTime('2023-12-31'));   // Replace with the actual end date
        $tarif->setTarifHebdomadaire(500.0);                  // Replace with the actual weekly rate

        // Assuming you have a Gite with ID 1 in the database
        $gite = $entityManager->getRepository(Gites::class)->find(8);
        $tarif->setGite($gite);

        // Add the tarif to the database
        $entityManager->persist($tarif);
        $entityManager->flush();

        return $this->render('tarifs/add.html.twig', [
            'controller_name' => 'TarifsController',
            'adjectif' => 'ajouté',
            'tarif' => $tarif,
        ]);
    }
}
