<?php

namespace Spinen\ConnectWise\Api;

use GuzzleHttp\Client as Guzzle;
use Mockery;
use Spinen\ConnectWise\TestCase;

class ClientTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $token = Mockery::mock(Token::class);
        $guzzle = new Guzzle();

        $client = new Client($token, $guzzle);

        $this->assertInstanceOf(Client::class, $client);
    }
}
