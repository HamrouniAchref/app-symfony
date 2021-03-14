<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/Admin", name="admin")
     */
    public function index(): Response
    {
        $agences =[
            1=>
            array(
            
                "id" => "1",
                "nom"=>"agence1",
                "telAgence"=>"24335154",
                "adresseVille"=>"tunis",
         

            ),
            2=>array(
            
                "id" => "2",
                "nom"=>"agence2",
                "telAgence"=>"2555445",
                "adresseVille"=>"Berline",
                

            ),
            8=>array(
            
                "id" => "3",
                "nom"=>"agnece3",
                "telAgence"=>"2455645",
                "adresseVille"=>"Paris",
             

            ),

        ];
      /*  $agence= array(
            
            "id" => "4",
            "nom"=>"agnece3",
            "telAgence"=>"2455645",
            "adresseVille"=>"Paris",
            "actions"=>"action3",

        );
        $agences[1]=$agence;
        array_push($agences, $agence);
        dd($agences);   */
        $voitures =[
            array(
        
                "id"=>"1",
                "marque"=>"Toyota",
                "couleur"=>"noir",
                "description"=>"tres puissante",
                "nommbreDePlaces"=>"5",
                "nomAgence"=>"agence1",
                

            ),
            array(
        
                "id"=>"2",
                "marque"=>"Alfa Romio",
                "couleur"=>"bleu",
                "description"=>"tres pratique",
                "nommbreDePlaces"=>"2",
                "nomAgence"=>"agence2",
             

            ),

        ];
        //dd($agences);

        return $this->render('admin/index.html.twig', [
            "agences"=>$agences,
            "voitures"=>$voitures,

        ]);
    }
}
