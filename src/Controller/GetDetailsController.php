<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GetDetailsController extends AbstractController
{
    public function getmovie( $id)
    {   
        
        $apiKey = '152718166a0c49e6dcceb43f7d5bfc21';
        $url = 'https://api.themoviedb.org/3/movie/' . $id . '?api_key=' . $apiKey . '&language=en-US';
       

        try {
            $response = @file_get_contents($url);
            $httpStatus = $http_response_header[0];

            if (strpos($httpStatus, '404') !== false) {
                return $this->json(['error' => 'Could not GET movie info from id ' . $id . ', please check if the id is correct.'], 404);
            }

            $data = json_decode($response, true);
          
            $movieDetails = [
                'name' => '',
                'full_details' => [
                    'adult' => $data['adult'],
                    'backdrop_path' => $data['backdrop_path'],
                    'genre_ids' => $data['genres'],
                    'id' => $data['id'],
                    'original_language' => $data["original_language"], 
                    'original_title' => $data['original_title'],
                    'overview' => $data['overview'],
                    'popularity' => $data['popularity'], 
                    'poster_path' => $data['poster_path'], 
                    "release_date" => $data['release_date'], 
                    'title' => $data['title'],
                    'video' => $data['video'],
                    "vote_average" => $data['vote_average'],
                    "vote_count" => $data['vote_average'],
                ],
            ]; 

            return $this->json($movieDetails);
        } catch (\Throwable $th) {
            return $this->json(['error' => 'Server error' . $th->getMessage()], 404);
        }

       

      
    }
}
