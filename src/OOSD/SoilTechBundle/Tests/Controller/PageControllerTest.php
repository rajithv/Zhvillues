<?php

namespace OOSD\SoilTechBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testNewmachinery()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newMachinery');
    }

}
