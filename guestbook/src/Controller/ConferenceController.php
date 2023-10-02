<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(Request $request): Response
    {
        {
            return new Response(<<<EOF
                <html>
                    <body style="display:flex;justify-content:center;background-color:lightgrey;">
                    <img src="/images/under-construction.gif" /></body>
                </html>
            EOF);
        }
}
}
