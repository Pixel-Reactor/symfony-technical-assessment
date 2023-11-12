<?php
// src/Entity/MovieDetails.php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;


 #[ORM\Entity]
 #[ORM\Table(name:"movie_detail")]

class MovieDetails
{
    
    
     #[ORM\Id]
     #[ORM\Column(name:"id",type:"integer")]
     
     private $id;

     #[ORM\Column(name:"name",type:"string", length:255)]
     
     private $name;

      #[ORM\Column(name:"title",type:"string", length:255)]
     
     private $title;
 
     
      #[ORM\Column(name:"original_title", type:"string", length:255)]
      
     private $originalTitle;
 
     
    
     #[ORM\Column(name:"genre",type:"json")] 
      
     private $genre;

      #[ORM\Column(name:"overview",type:"text")] 
      
     private $overview;
 
     
       #[ORM\Column(name:"release_date", type:"string")]
      
     private $releaseDate;
 
     
       #[ORM\Column(name:"poster_path", type:"string", length:255)]
      
     private $posterPath;
 
     
       #[ORM\Column(name:"backdrop_path", type:"string", length:255)]
      
     private $backdropPath;
 
     
       #[ORM\Column(name:"popularity",type:"float")]
      
     private $popularity;
 
     
       #[ORM\Column(name:"adult",type:"boolean")]
      
     private $adult;
 
     
       #[ORM\Column(name:"video",type:"boolean")]
      
     private $video;
 
     
       #[ORM\Column(name:"vote_average", type:"float")]
      
     private $voteAverage;
 
     
       #[ORM\Column(name:"vote_count", type:"integer")]
      
     private $voteCount;
 
     
       #[ORM\Column(name:"original_language", type:"string", length:20)]
      
     private $originalLanguage;
 

 
     public function getId()
     {
         return $this->id;
     }
     public function setId($id)
     {
        $this->id = $id;
     }
     public function getName()
     {
         return $this->name;
     }
 
     public function setName($name)
     {
         $this->name = $name;
     }
     public function getTitle()
     {
         return $this->title;
     }
 
     public function setTitle($title)
     {
         $this->title = $title;
     }
 
     public function getOriginalTitle()
     {
         return $this->originalTitle;
     }
 
     public function setOriginalTitle($originalTitle)
     {
         $this->originalTitle = $originalTitle;
     }

     public function getGenre()
     {
         return $this->genre;
     }
 
     public function setGenre($genre)
     {
         $this->genre = $genre;
     }

 
     public function getOverview()
     {
         return $this->overview;
     }
 
     public function setOverview($overview)
     {
         $this->overview = $overview;
     }
 
     public function getReleaseDate()
     {
         return $this->releaseDate;
     }
 
     public function setReleaseDate($releaseDate)
     {
         $this->releaseDate = $releaseDate;
     }
 
     public function getPosterPath()
     {
         return $this->posterPath;
     }
 
     public function setPosterPath($posterPath)
     {
         $this->posterPath = $posterPath;
     }
 
     public function getBackdropPath()
     {
         return $this->backdropPath;
     }
 
     public function setBackdropPath($backdropPath)
     {
         $this->backdropPath = $backdropPath;
     }
 
     public function getPopularity()
     {
         return $this->popularity;
     }
 
     public function setPopularity($popularity)
     {
         $this->popularity = $popularity;
     }
 
     public function getAdult()
     {
         return $this->adult;
     }
 
     public function setAdult($adult)
     {
         $this->adult = $adult;
     }
 
     public function getVideo()
     {
         return $this->video;
     }
 
     public function setVideo($video)
     {
         $this->video = $video;
     }
 
     public function getVoteAverage()
     {
         return $this->voteAverage;
     }
 
     public function setVoteAverage($voteAverage)
     {
         $this->voteAverage = $voteAverage;
     }
 
     public function getVoteCount()
     {
         return $this->voteCount;
     }
 
     public function setVoteCount($voteCount)
     {
         $this->voteCount = $voteCount;
     }
 
     public function getOriginalLanguage()
     {
         return $this->originalLanguage;
     }
 
     public function setOriginalLanguage($originalLanguage)
     {
         $this->originalLanguage = $originalLanguage;
     }
 }

