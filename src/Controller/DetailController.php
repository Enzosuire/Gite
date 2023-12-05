<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Gites;
use Doctrine\ORM\EntityManagerInterface;

class DetailController extends AbstractController
{

        #[Route('/gite/{id}', name: 'gite_detail')]
        public function show(Gites $gite): Response
        {
            return $this->render('detail/index.html.twig', [
                'gite' => $gite,
            ]);
        }
    


   
}
