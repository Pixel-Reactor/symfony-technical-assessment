<?php
namespace App\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GetAllControllerTest extends WebTestCase
{
    public function testMyEndpoint()
    {
        $client = static::createClient();

        $client->request('GET', '/api/all');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $responseData = json_decode($client->getResponse()->getContent(), true);
        $this->assertIsArray($responseData);

        foreach ($responseData as $item) {
            $this->assertArrayHasKey('full_details', $item);
            $this->assertArrayHasKey('name', $item);
        }
   
    }
}
