<?php

namespace SixBySix\FloatPM\Tests;

use PHPUnit\Framework\TestCase;
use SixBySix\FloatPM\FloatClient;

class FloatClientTest extends TestCase
{
    /**
     * @test
     */
    public function setApiKey()
    {
        FloatClient::setApiKey($_ENV['API_KEY']);

        $float = new FloatClient();
        $this->assertEquals($float->getApiKey(), $_ENV['API_KEY']);
    }
}
