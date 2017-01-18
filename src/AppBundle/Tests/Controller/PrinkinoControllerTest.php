<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PrinkinoControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/home');
    }

    public function testCliente()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cliente');
    }

    public function testOrdine()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ordine');
    }

}
