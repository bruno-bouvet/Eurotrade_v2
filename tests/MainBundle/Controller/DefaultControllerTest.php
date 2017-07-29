<?php

namespace MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    /**
     * Do testIndex
     * @return void
     */
    public function testIndex(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertContains('Hello World', $client->getResponse()->getContent());
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }

    private function assertContains($string, $getContent)
    {
    }
}
