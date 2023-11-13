<?php

namespace App\Controller;

use Symfony\Component\Serializer\SerializerInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\MovieDetails;

use Doctrine\DBAL\Driver\Connection;


class AddMovieController extends AbstractController
{
    public function addmovie(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer)
    {

        $request_json = json_decode($request->getContent(), true);

        if (!isset($request_json['name']) || !isset($request_json['id'])) {
            return $this->json(['error' => 'Could not find field name or id, wich are mandatory'], 403);
        }
        try {
            $id = $request_json['id'];
            $name = $request_json['name'];
            $apiKey = '152718166a0c49e6dcceb43f7d5bfc21';
            $url = 'https://api.themoviedb.org/3/movie/' . $id . '?api_key=' . $apiKey . '&language=en-US';

            $response = @file_get_contents($url);
            $httpStatus = $http_response_header[0];
            if (strpos($httpStatus, '404') !== false) {
                return $this->json(['error' => 'Could not GET movie info from id ' . $id . ', please check if the id is correct.'], 404);
            }
            $data = json_decode($response, true);
            $genreIdsResponse = $data['genres'];
            $genre_ids = [];
            foreach ($genreIdsResponse as $genre) {
                $genre_ids[] = $genre['id'];
            }

            $movieDetails = new MovieDetails();
            $movieDetails->setId($data['id']);
            $movieDetails->setName($request_json['name']);
            $movieDetails->setTitle($data['title']);
            $movieDetails->setOriginalTitle($data['original_title']);
            $movieDetails->setGenre($genre_ids);
            $movieDetails->setOverview($data['overview']);
            $movieDetails->setReleaseDate($data['release_date']);
            $movieDetails->setPosterPath($data['poster_path']);
            $movieDetails->setBackdropPath($data['backdrop_path']);
            $movieDetails->setPopularity($data['popularity']);
            $movieDetails->setAdult($data['adult']);
            $movieDetails->setVideo($data['video']);
            $movieDetails->setVoteAverage($data['vote_average']);
            $movieDetails->setVoteCount($data['vote_count']);
            $movieDetails->setOriginalLanguage($data["original_language"]);

            // Obtener el EntityManager y persistir el objeto
            $entityManager->persist($movieDetails);

            // Realizar la inserción en la base de datos
            $entityManager->flush();
            $title = $movieDetails->getTitle();
            $id = $movieDetails->getId();
            $name = $movieDetails->getName();

            return $this->json(['Success', 'Movie : ' . $title . ' has been inserted successfully with the name : ' . $name . ' and id: ' . $id]);
        } catch (\Throwable $th) {
            return $this->json(['error' => 'Something went wrong' . $th->getMessage()], 401);
        }
        return $this->json(['message' => $request_json]);
    }
}
