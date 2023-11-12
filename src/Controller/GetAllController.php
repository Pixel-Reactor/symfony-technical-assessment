<?php
// src/Controller/MovieController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\MovieDetails;

class GetAllController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/api/all", name="movie_detail", methods={"GET"})
     */
    public function getAllMovies()
    {
        $repository = $this->entityManager->getRepository(MovieDetails::class);
        $movies = $repository->findAll();

          // Convertir los objetos a un array antes de devolver la respuesta JSON
           $moviesArray = [];
          

        foreach ($movies as $movie) {
            $moviesArray[] = [  
                'name' => $movie->getName(),
                'full_details' => (object)[
                    'adult' => $movie->getAdult(),
                    'backdrop_path' => $movie->getBackdropPath(),
                    'genre_ids' => $movie->getGenre(),
                    'id' => $movie->getId(),
                    'original_language' => $movie->getOriginalLanguage(), 
                    'original_title' => $movie ->getOriginalTitle(),
                    'overview' => $movie->getOverview(),
                    'popularity' => $movie->getPopularity(), 
                    'poster_path' =>$movie->getPosterPath(), 
                    "release_date" => $movie->getReleaseDate(),
                    'title' => $movie->getTitle(),
                    'video' =>$movie->getVideo(),
                    "vote_average"=>$movie->getVoteAverage(),
                    "vote_count"=>$movie->getVoteCount(),
                    ],
            ];
        }
        return new JsonResponse($moviesArray, JsonResponse::HTTP_OK);

    }
}
