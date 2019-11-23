<?php

namespace Oneup\FlysystemBundle\Tests\Model;

use Symfony\Bridge\PhpUnit\SetUpTearDownTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContainerAwareTestCase extends WebTestCase
{
    use SetUpTearDownTrait;

    protected $client;
    protected static $container;

    private function doSetUp()
    {
        $this->client = static::createClient();
        self::$container = $this->client->getContainer();
    }

    private function doTearDown()
    {
        parent::tearDown();

        unset($this->client);
    }
}
