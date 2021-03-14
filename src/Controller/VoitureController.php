<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voiture/ajouter", name="ajouterVoiture")
     */
    public function ajouterVoiture(): Response
    {
        
        return $this->render('voiture/ajouterVoiture.html.twig', [
         
        ]);
    }
    /**
     * @Route("/voiture/consulter/{id}", name="consulterVoiture")
     */
    public function consulterVoiture(): Response
    {
        
        return $this->render('voiture/consulterVoiture.html.twig', [
         
        ]);
    }
     /**
     * @Route("/Voiture/modifier/{id}", name="modifierVoiture")
     */
    public function modifierVoiture(): Response
    {
      
        return $this->render('voiture/modifierVoiture.html.twig', [
         
        ]);
    }
     /**
     * @Route("/voiture/supprimer/{id}", name="supprimerVoiture")
     */
    public function supprimerVoiture(): Response
    {
        return $this->render('voiture/supprimerVoiture.html.twig', [
         
        ]);
    }
}
