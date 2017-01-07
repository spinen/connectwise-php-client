<?php

namespace Spinen\ConnectWise\Api;

use Spinen\ConnectWise\TestCase;

class TokenTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $token = new Token();

        $this->assertInstanceOf(Token::class, $token);
    }
}
