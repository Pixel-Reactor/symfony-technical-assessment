<?php
namespace App\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GetDetailsControllerTest extends WebTestCase
{
    public function testMyEndpoint()
    {
        $client = static::createClient();

        $client->request('GET', '/api/movie/123');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJson($client->getResponse()->getContent());

        $responseData = json_decode($client->getResponse()->getContent(), true);

        $this->assertArrayHasKey('full_details', $responseData);
    //    $this->assertEquals(123, $responseData['fulldeta']);
    }
}
