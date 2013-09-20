<?php

namespace System\ProjectBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectCreationControllerTest extends WebTestCase
{
    public function testCreateproject()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createProject');
    }

}
