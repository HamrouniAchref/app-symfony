<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Form\VoitureType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voiture/ajouter", name="ajouterVoiture")
     */
    public function ajouterVoiture(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
     
        $Voiture = new Voiture();
      #  $form = $this.createFormBuilder($Voiture);
      $form = $this->createForm(VoitureType::class, $Voiture);
      $form->handleRequest($request);
  
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($Voiture);
            $entityManager->flush();


            return $this->redirectToRoute('admin');


        }
        return $this->render('voiture/ajouterVoiture.html.twig', [
            'form' => $form->createView(),
         
        ]);
    }
    /**
     * @Route("/voiture/consulter/{id}", name="consulterVoiture")
     */
    public function consulterVoiture(Voiture $voiture): Response
    {
        
        return $this->render('voiture/consulterVoiture.html.twig', [ 
            "voiture"=>$voiture,
         
        ]);
    }
     /**
     * @Route("/Voiture/modifier/{id}", name="modifierVoiture")
     */
    public function modifierVoiture(Request $request,Voiture $voiture ): Response
    {
   
        $form = $this->createForm(VoitureType::class, $voiture);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
       //  dd($voiture);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($voiture);
            $entityManager->flush();


            return $this->redirectToRoute('admin');


        }
      
        return $this->render('voiture/modifierVoiture.html.twig', [
         "form"=>$form->createView(),
        ]);
    }
     /**
     * @Route("/voiture/supprimer/{id}", name="supprimerVoiture")
     */
    public function supprimerVoiture(Voiture $voiture): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->remove($voiture);
        $entityManager->flush();
        return $this->redirectToRoute('admin');
         
         
       
    }
}
