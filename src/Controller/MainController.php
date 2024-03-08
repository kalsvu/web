<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController

{
    #[Route('/test')]
    public function homepage()
    {
        return new Response('<strong>Startshop</strong>: your monopoly-blusting option for Starship parts!');
    }
}