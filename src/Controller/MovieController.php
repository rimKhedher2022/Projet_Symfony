<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MovieRepository;
class MovieController extends AbstractController
{
    #[Route('/movie', name: 'movie')]
    public function index(MovieRepository $movieRepository ): Response
    {

        $movies = $movieRepository->findAll();
        dd($movies);
        return $this->render('movie/index.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }
}
