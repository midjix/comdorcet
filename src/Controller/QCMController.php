<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class QCMController extends AbstractController
{
    const QCM = [
        [
            "titre" => "Quelle est votre motivation pour ce projet ?",
            "explication" => "Expliquez brièvement ce qui vous pousse à réaliser ce projet et quels sont vos objectifs."
        ],
        [
            "titre" => "Quelles sont vos compétences techniques ?",
            "explication" => "Décrivez les technologies, langages ou outils que vous maîtrisez et que vous utiliserez dans ce projet."
        ],
        [
            "titre" => "Quels sont les défis que vous anticipez ?",
            "explication" => "Identifiez les éventuelles difficultés ou problèmes que vous pourriez rencontrer au cours de ce projet."
        ],
        [
            "titre" => "Comment comptez-vous organiser votre travail ?",
            "explication" => "Présentez les étapes de votre planification, les échéances, ainsi que la méthode de travail que vous prévoyez."
        ],
        [
            "titre" => "Avez-vous besoin de ressources supplémentaires ?",
            "explication" => "Précisez si vous aurez besoin d'une aide extérieure, d'outils ou de formations spécifiques."
        ]
    ];

    #[Route('/qcm', name: 'app_qcm')]
    public function index(): Response
    {
        return $this->render('qcm/qcm.html.twig', [
            'controller_name' => 'QCMController',
            'qcm' => self::QCM
        ]);
    }
}
