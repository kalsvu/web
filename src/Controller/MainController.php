<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/test')]
    public function homepage(): Response
    {
        $starshipCount = 457;
        $myShip = [
            'name' => 'KalonGOATBOAT',
            'class' => 'Garden',
            'captain' => 'KalonGOAT',
            'status' => 'Built',
        ];
        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $starshipCount, 'myShip' => $myShip,
        ]);
        #return new Response('<strong>Startshop</strong>: your monopoly-blusting option for Starship parts!');
    }
}
