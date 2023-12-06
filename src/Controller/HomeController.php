<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Gites;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\SearchType;
use App\Repository\GitesRepository;



class HomeController extends AbstractController
{
    
    #[Route('/home', name: 'home')]
    public function index(Request $request, EntityManagerInterface $entityManager, GitesRepository $gitesRepository): Response
    {
      
        // Créez le formulaire de recherche
        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);

        // Initialisez la variable gites avec tous les gîtes par défaut
        $gites = $gitesRepository->findAll();

        // Si le formulaire est soumis et valide, filtrez les gîtes
        if ($form->isSubmitted() && $form->isValid()) {
            $equipementCriteria = $form->getData();
            $gites = $gitesRepository->searchByEquipements($equipementCriteria);
            
        }

        // Rendez le template avec les gîtes et le formulaire, peu importe si le formulaire a été soumis ou non
        return $this->render('home/index.html.twig', [
            'gites' => $gites,
            'form' => $form->createView(),
        ]);
    }
}



  
    // public function index(Request $request): Response
    // {
    //     $searchData = new SearchData();
    //     $form = $this->createForm(SearchType::class, $searchData);

    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //        dd($searchData);

            

    //         return $this->render('home/index.html.twig', [
    //             'form' => $form->createView(),
    //         ]);
    //     }
    // }

  



