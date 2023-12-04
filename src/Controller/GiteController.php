<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Proprietaire;
use App\Entity\Contacts;

use App\Entity\Gites;
use App\Form\GiteType;


class GiteController extends AbstractController
{
    
    
    #[Route('/gites', name:'gites_index')]
    public function index(): Response
    {
        return $this->render('gite/index.html.twig', [
            'controller_name' => 'GiteController',
        ]);
    }


    #[Route('/gites/add', name: 'add_gite')]
    public function addGite(Request $request,EntityManagerInterface $entityManager): Response
    {
        
            $gite = new Gites();
            $gite->setLocalisation('Localisation du gîte');
            $gite->setSurfaceHabitable(100.0);
            $gite->setNombreChambres(3);
            $gite->setNombresCouchages(6);
            $gite->setEquipements('Équipements du gîte');

            // Récupérez les équipements sélectionnés depuis la requête
            // $equipementsSelectionnes = $request->request->get('equipements');
            // $gite->setEquipements(implode(', ', $equipementsSelectionnes));

            // Assurez-vous d'ajuster ces valeurs selon vos besoins

            // Récupérez les propriétaire et contact associés au gîte
            $proprietaire = $entityManager->getRepository(Proprietaire::class)->find(1); // Remplacez 1 par l'ID du propriétaire
            $contact = $entityManager->getRepository(Contacts::class)->find(1); // Remplacez 1 par l'ID du contact

            $gite->setProprietaire($proprietaire);
            $gite->setContact($contact);

            $entityManager->persist($gite);
            $entityManager->flush();

            return $this->render('gite/show.html.twig', [
                'controller_name' => 'GiteController',
                'gite' => $gite,
                'adjectif' => 'ajouté'
            ]);
            
        
    }

  
    #[Route('/gites/{id}', name:'gites_show')]
    public function show($id): Response
    {
        // Ajoutez ici la logique pour afficher les détails d'un gîte en fonction de son ID
        return $this->render('gite/show.html.twig', [
            'controller_name' => 'GiteController',
        ]);
    }


    


    // #[Route('/gites/new', name:'gites_new')]
    // public function new(Request $request): Response
    // {
    //     $gite = new Gites();
    //     $form = $this->createForm(GiteType::class, $gite);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         // Ajoutez ici la logique pour sauvegarder le gîte dans la base de données
    //         // par exemple, utilisez Doctrine EntityManager
    //         $entityManager = $this->getDoctrine()->getManager();
    //         $entityManager->persist($gite);
    //         $entityManager->flush();

    //         return $this->redirectToRoute('gites_index');
    //     }

    //     return $this->render('gite/new.html.twig', [
    //         'form' => $form->createView(),
    //     ]);
    // }



     #[Route('/gites/{id}', name:'gites_edit')]
    public function edit($id): Response
    {
        // Ajoutez ici la logique pour éditer un gîte existant (formulaire d'édition)
        return $this->render('gite/edit.html.twig', [
            'controller_name' => 'GiteController',
        ]);
    }


   
    #[Route('/gites/{id}', name:'gites_delete , methods={"DELETE"}')]
    public function delete($id): Response
    {
        // Ajoutez ici la logique pour supprimer un gîte
        return $this->redirectToRoute('gites_index');
    }


     

}
