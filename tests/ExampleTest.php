<?php

namespace FishpondServices\:service_namespace\Test;

use PHPUnit\Framework\TestCase;

use FishpondServices\:service_namespace\:service_nameClient as Client;
use FishpondServices\:service_namespace\:service_nameAdapter as Adapter;
class ExampleTest extends TestCase
{
    private $credentials = [

    ];

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function authTest()
    {
        $this->markTestSkipped();

        $client = new Client([
            'credentials' => $this->credentials,
        ]);

        $adapter = new Adapter($client);
    }

    /** @test */
    public function transferTest()
    {
        $this->markTestSkipped();

        $client = new Client([
            'credentials' => $this->credentials,
        ]);

        $adapter = new Adapter($client);
    }

    /** @test */
    public function recordTest()
    {
        $this->markTestSkipped();

        $client = new Client([
            'credentials' => $this->credentials,
        ]);

        $adapter = new Adapter($client);
    }

}
