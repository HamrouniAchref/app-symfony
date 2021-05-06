<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\Voiture;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * 
     * @Route("/Admin", name="admin")
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $agences = $entityManager->getRepository(Agence::class)->findAll();
        $voitures = $entityManager->getRepository(Voiture::class)->findAll();

        //dd($voitures);
    
        return $this->render('admin/index.html.twig', [
            "agences"=>$agences,
            "voitures"=>$voitures,

        ]);
    }
}
