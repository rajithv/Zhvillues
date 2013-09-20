<?php

namespace System\ProjectBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BudgetCreationControllerTest extends WebTestCase
{
    public function testCreatebudget()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createBudget');
    }

}
