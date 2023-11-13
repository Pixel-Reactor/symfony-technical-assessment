<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(): Response
    {
        // Puedes renderizar un template Twig si lo prefieres
        // return $this->render('default/index.html.twig');

        // O puedes devolver una respuesta HTML directamente
        $htmlContent = "<html>
        <head>
        <title>Synfony Movie DB technical assessment</title>
        <link rel='stylesheet' href='css/styles.css'>
        </head>
        <body>
        <h1>Synfony movie storage Technical assessment</h1>
        <p>This is a server side project that handles request to store a movie details in a batadase.</p>
        <p>It get movie data from the themoviebd database to store all movie details retrieved from it and store a movie.</p>
        <h2>Endpoints</h2>
        <article> 
        <div>   
        <p class='get'>GET<p>
        <code>/api/ping</code>
        </div>
     
        <p>
        Route test that send and retieve current time from the db to check if the connection is working.
        </p>
        </article>
        <article> 
        <div>   <p class='get'>GET<p>
        <code>/api/all</code></div>
     
        <p>
        Retrieve all Movies stored in the database  and send the list of them with full details of each one.
        </p>
        </article>
        <article> 
        <div> 
        <p class='post'>POST<p>
        <code>api/add/movie</code>
        </div>
       <div>
       <p>
        Add a new movie to the BD. the request has to be in JSON format. </br>
        <strong>Required fields:</strong> </br>
        <strong>name</strong> : 'a choosen name to store in the db' </br>
        <strong>id</strong>: 'the movie id to get the movie details from the Api' </br>
        ex. </br> <code>{'name':'Oppenhaimer', 'id':872585}</code>
        </p>
      </div>
        </article>
        <article> 
        <div> 
        <p class='get'>GET<p>
        <code>api/movie/:id</code>
        </div>
        <div> 
        <p>
        Make a call to the Api retrieving the movie details from the id field in the url request.
        </p>
        </div>
       
        </article>
        </body>
        </html>";
        return new Response($htmlContent);
    }
}
