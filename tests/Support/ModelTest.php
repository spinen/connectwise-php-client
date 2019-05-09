<?php

namespace Spinen\ConnectWise\Support;

use Carbon\Carbon;
use InvalidArgumentException;
use Spinen\ConnectWise\Models\v2019_2\System\Info;
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
    public function it_can_be_constructed_with_an_array_of_attributes()
    {
        $model = new Stubs\Model([
            'attribute' => 'one',
        ]);

        $this->assertTrue(isset($model->attribute));
        $this->assertTrue(isset($model['attribute']));
        $this->assertEquals('one', $model->attribute);
        $this->assertEquals('one', $model['attribute']);
    }

    /**
     * @test
     */
    public function it_cast_attributes_it_they_are_configured_in_the_casts_array()
    {
        $model = new Stubs\Model([
            'object_attribute'     => [],
            'carbon_attribute'     => 'January 1, 2017',
            'json_attribute'       => ['property' => 1],
            'collection_attribute' => [],
            'boolean_attribute'    => "false",
            'null_attribute'       => null,
        ]);

        $this->assertInstanceOf(Info::class, $model['object_attribute']);
        $this->assertInstanceOf(Carbon::class, $model['carbon_attribute']);
        $this->assertJson($model['json_attribute']);
        $this->assertInstanceOf(Collection::class, $model['collection_attribute']);
        $this->assertTrue(false === $model['boolean_attribute']);
        $this->assertNull($model['null_attribute']);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_invalid_type_is_set()
    {
        new Stubs\Model([
            'invalid_attribute' => 'whatever',
        ]);
    }

    /**
     * @test
     */
    public function it_uses_getters_and_setters_if_they_are_defined()
    {
        $model = new Stubs\Model([
            'getter' => 'Raw getter value',
            'setter' => 'Raw setter value',
        ]);

        $this->assertEquals('From getter', $model['getter']);
        $this->assertEquals('From setter', $model['setter']);
    }

    /**
     * @test
     */
    public function it_can_serialize_model_as_json()
    {
        $model = new Stubs\Model(
            [
                'object_attribute'     => [],
                'carbon_attribute'     => 'January 1, 2017',
                'json_attribute'       => ['property' => 1],
                'collection_attribute' => [],
                'boolean_attribute'    => "false",
                'null_attribute'       => null,
            ]
        );

        $expected = '{"object_attribute":[],"carbon_attribute":{"date":"2017-01-01 00:00:00.000000","timezone_type":3,"timezone":"UTC"},"json_attribute":"{\"property\":1}","collection_attribute":[],"boolean_attribute":false,"null_attribute":null}';

        $this->assertEquals($expected, $model->toJson());
    }
}
