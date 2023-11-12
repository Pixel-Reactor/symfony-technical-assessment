<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface; // Cambiado a EntityManagerInterface

use Doctrine\DBAL\Driver\Connection;


class PingController extends AbstractController
{
    public function ping(Request $request, EntityManagerInterface $entityManager)
    {
        
        $sql = "SELECT NOW() as 'current_time'";
        $result = $entityManager->getConnection()->executeQuery($sql);
        $row = $result->fetchAssociative();

        
        $jsonResponse = json_encode($row);
       
        echo($jsonResponse);
        return new Response('Received! Server running' );
    }

}