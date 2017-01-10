<?php

namespace Spinen\ConnectWise\Support;

use Spinen\ConnectWise\TestCase;

class CollectionTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $collection = new Collection();

        $this->assertInstanceOf(Collection::class, $collection);
    }

    /**
     * @test
     */
    public function it_needs_a_bunch_more_test()
    {
        $this->markTestIncomplete("Need to write a bunch more tests");
    }
}
