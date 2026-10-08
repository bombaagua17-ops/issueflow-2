<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bridge\Twig\Attribute\Template;

final class HomeController
{
    #[Route('/', name: 'app_home', methods: ['GET'])]
    #[Template('home/index.html.twig')]
    public function index(): array {
        return [
            'projectName' => 'IssueFlow',
            'message' => 'Symfony 8.1 ha resuelyo la ruta y twig ha construido la ruta'
        ];
    
    }

    #[Route('/health', name: 'app_health', methods: ['GET'])]
    public function health(): Response
    {
        return new Response(
            'IssueFlow OK',
            Response::HTTP_OK,
            ['Content-Type' => 'text/plain; charset=UTF-8']
        );
    }
}
