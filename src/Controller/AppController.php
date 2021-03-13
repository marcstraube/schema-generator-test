<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'index')]
    #[Route('/{vueRoute}', name: 'vue_route', requirements: ['vueRoute' => '^(?!.*api|_(wdt|profiler)).+'])]
    public function index(): Response
    {
        return $this->render('app/index.html.twig');
    }
}
