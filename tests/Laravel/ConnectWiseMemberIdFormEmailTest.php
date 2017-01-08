<?php

namespace Spinen\ConnectWise\Laravel;

use Spinen\ConnectWise\Laravel\Stubs\User;
use Spinen\ConnectWise\TestCase;

class ConnectWiseMemberIdFormEmailTest extends TestCase
{
    /**
     * @var User
     */
    protected $user;

    protected function setUp()
    {
        parent::setUp();

        $this->user = new User();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(User::class, $this->user);
    }

    /**
     * @test
     */
    public function it_has_an_accessor_to_make_member_id()
    {
        $this->assertEquals('joedoe', $this->user->getConnectWiseMemberIdAttribute());
    }
}
