<?php
namespace App\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AddMovieControllerTest extends WebTestCase
{
    public function testMyEndpoint()
    {
        $client = static::createClient();

        $data = [
            'name' => 'Oppenhaimer',
            'id' => 872585,
        ];
        $client->request(
            'POST',
            '/api/add/movie',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            json_encode($data)
        );
        $statusCode = $client->getResponse()->getStatusCode();
       
        if ($statusCode !== 200){
            $responseData = json_decode($client->getResponse()->getContent(), true);
            $this->assertArrayHasKey('error', $responseData);
            $this->assertEquals(401,$statusCode);
            return;
        }  
        $this->assertEquals(200, $statusCode);
        $this->assertJson($client->getResponse()->getContent());

        $responseData = json_decode($client->getResponse()->getContent(), true);
    }
}
