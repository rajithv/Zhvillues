<?php

namespace System\TrackingBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ActualExpencesControllerTest extends WebTestCase
{
    public function testCreateactualexpences()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createActualExpences');
    }

}
