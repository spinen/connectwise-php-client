<?php

namespace Spinen\ConnectWise\Support;

use Spinen\ConnectWise\TestCase;

class ModelTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $model = new Stubs\Model([]);

        $this->assertInstanceOf(Model::class, $model);
    }

    /**
     * @test
     */
    public function it_needs_a_bunch_more_test()
    {
        $this->markTestIncomplete("Need to write a bunch more tests");
    }
}
