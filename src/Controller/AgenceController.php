<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AgenceController extends AbstractController
{
    /**
     * @Route("/agence/ajouter", name="ajouterAgence")
     */
    public function ajouterAgence(): Response
    {
        
        return $this->render('agence/ajouterAgence.html.twig', [
         
        ]);
    }
    /**
     * @Route("/agence/consulter/{id}", name="consulterAgence")
     */
    public function consulterAgence(): Response
    {
        
        return $this->render('agence/consulterAgence.html.twig', [
         
        ]);
    }
     /**
     * @Route("/agence/modifier/{id}", name="modifierAgence")
     */
    public function modifierAgence(): Response
    {
      
        return $this->render('agence/modifierAgence.html.twig', [
         
        ]);
    }
     /**
     * @Route("/agence/supprimer/{id}", name="supprimerAgence")
     */
    public function supprimerAgence(): Response
    {
        return $this->render('agence/supprimerAgence.html.twig', [
         
        ]);
    }
}
