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
}
