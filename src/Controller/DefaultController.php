<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DefaultController extends AbstractController
{
    const peoples = [
        ["nom"=> "Nogueira", "prenom"=> "Matthieu", "ville"=> "Melun"],
        ["nom"=> "Chassier", "prenom"=> "Benjamin", "ville"=> "Villemomble"],
        ["nom"=> "Goncalves", "prenom"=> "Philippe", "ville"=> "Paris"],
        ["nom"=> "Baal", "prenom"=> "William", "ville"=> "Paris"]
    ];

    // Route interrogée par l'utilisateur
    #[Route('/default', name: 'app_default')]
    public function index(): Response
    {
        // la fonction render construit la page HTML à partir de données
        // à partir d'un gabarit d'affichage
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'people' => self::peoples
        ]);
    }
}
