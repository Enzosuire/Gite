<?php

namespace App\Controller;

use App\Entity\Contacts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ContactsController extends AbstractController
{
    #[Route('/contacts', name: 'app_contacts')]
    public function index(): Response
    {
        return $this->render('contacts/index.html.twig', [
            'controller_name' => 'ContactsController',
        ]);
    }



    #[Route('/contact/add', name: 'add_contact')]
    public function addContacts(EntityManagerInterface $entityManager): Response
    {
        $contacts = new Contacts();
        $contacts->setNom('Suire'); // Remplacez par le nom réel
        $contacts->setPrenom('Enzo'); // Remplacez par le prénom réel
        $contacts->setHorairesDisponibilite('15 h '); // Remplacez par l'adresse réelle
        $contacts->setTelephone('07/50/88/12/22'); // Remplacez par le numéro de téléphone réel
        $contacts->setEmail('suire@enzo.fr'); // Remplacez par l'email réel

        // Ajoutez d'autres propriétés selon vos besoins

        $entityManager->persist($contacts);
        $entityManager->flush();

        return $this->render('contacts/addcon.html.twig', [
            'controller_name' => 'contactsController',
            'adjectif' => 'ajouté',
            'contacts' => $contacts,
        ]);
    }

}
