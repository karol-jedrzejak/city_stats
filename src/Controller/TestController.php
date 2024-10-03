<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', methods:['GET'], name: 'app_test.index')]
    public function index(): Response
    {
        return $this->render('test.html.twig');
    } 

    #[Route('/test/{id}', methods:['GET'], name: 'app_test.nr')]
    public function jakis_id(int $id): Response
    {
        return new Response (
            "<div>test $id</div>".
            $this->generateUrl('app_test.index')
        );
    } 

/*     #[Route('/test', name: 'app_test')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TestController.php',
        ]);
    } */
}
