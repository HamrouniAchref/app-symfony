<?php

namespace App\Controller;

use DateTime;
use App\Entity\Agence;
use App\Form\AgenceType;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AgenceController extends AbstractController
{
    /**
     * @Route("/agence/ajouter", name="ajouterAgence")
     */
    public function ajouterAgence(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
     
        $agence = new Agence();
      #  $form = $this.createFormBuilder($agence);
      $form = $this->createForm(AgenceType::class, $agence);
      $form->handleRequest($request);
  
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($agence);
            $entityManager->flush();


            return $this->redirectToRoute('admin');


        }
        return $this->render('agence/ajouterAgence.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/agence/consulter/{id}", name="consulterAgence")
     */
    public function consulterAgence(Agence $agence): Response
    {
        
        return $this->render('agence/consulterAgence.html.twig', [
            "agence" => $agence,
         
        ]); 
    }
     /**
     * @Route("/agence/modifier/{id}", name="modifierAgence")
     */
    public function modifierAgence(Request $request ,Agence $agence): Response
    {
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager->persist($agence);
            $entityManager->flush();


            return $this->redirectToRoute('admin');


        }
      
        return $this->render('agence/modifierAgence.html.twig', [
            'form' => $form->createView(),
         
        ]);
    }
     /**
     * @Route("/agence/supprimer/{id}", name="supprimerAgence")
     */
    public function supprimerAgence(Agence $agence): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->remove($agence);
        $entityManager->flush();
        return $this->redirectToRoute('admin');
         

    }
}
