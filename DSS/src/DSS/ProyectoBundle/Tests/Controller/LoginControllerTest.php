<?php

namespace DSS\ProyectoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/registro/login');
    }

    public function testRegistro()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/registro/registro');
    }

}
