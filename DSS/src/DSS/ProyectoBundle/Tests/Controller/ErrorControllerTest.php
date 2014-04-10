<?php

namespace DSS\ProyectoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ErrorControllerTest extends WebTestCase
{
    public function testDenegado()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/denegado');
    }

}
