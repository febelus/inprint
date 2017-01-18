<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ResponsabileProduzioneControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/home');
    }

    public function testOperatori()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/operatori');
    }

    public function testDaeseguire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/daeseguire');
    }

    public function testInproduzione()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/inProduzione');
    }

    public function testConclusi()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/conclusi');
    }

}
