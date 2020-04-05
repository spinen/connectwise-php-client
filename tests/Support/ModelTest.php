<?php

namespace Spinen\ConnectWise\Support;

use ArrayIterator;
use Carbon\Carbon;
use InvalidArgumentException;
use Spinen\ConnectWise\Models\v2019_4\System\Info;
use Spinen\ConnectWise\Support\Stubs\Model;
use Spinen\ConnectWise\TestCase;

class ModelTest extends TestCase
{
    /**
     * @var Model
     */
    protected $model;

    protected function setUp(): void
    {
        parent::setUp();

        $this->model = new Model(
            [
                'array_attribute'      => [],
                'boolean_attribute'    => "false",
                'carbon_attribute'     => 'January 1, 2017',
                'collection_attribute' => [],
                'float_attribute'      => "1.2",
                'info_attribute'       => [],
                'integer_attribute'    => "1",
                'json_attribute'       => ['property' => 1],
                'null_attribute'       => null,
                'object_attribute'     => [],
                'string_attribute'     => 'something',
            ]
        );
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(Model::class, $this->model);
    }

    /**
     * @test
     */
    public function it_can_be_constructed_with_an_array_of_attributes()
    {
        $model = new Model(
            [
                'attribute' => 'one',
            ]
        );

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
        $model = new Model(
            [
                'array_attribute'      => [],
                'boolean_attribute'    => "false",
                'carbon_attribute'     => 'January 1, 2017',
                'collection_attribute' => [],
                'float_attribute'      => "1.2",
                'info_attribute'       => [],
                'integer_attribute'    => "1",
                'json_attribute'       => ['property' => 1],
                'null_attribute'       => null,
                'object_attribute'     => [],
                'string_attribute'     => 'something',
            ]
        );

        $this->assertEquals('something', $model['string_attribute'], 'string value');
        $this->assertEquals(1, $model['integer_attribute'], 'integer value');
        $this->assertEquals(1.2, $model['float_attribute'], 'float value');
        $this->assertEquals(false, $model['boolean_attribute'], 'boolean value');
        $this->assertInstanceOf(Carbon::class, $model['carbon_attribute'], 'Carbon');
        $this->assertInstanceOf(Collection::class, $model['collection_attribute'], 'collection');
        $this->assertInstanceOf(Info::class, $model['info_attribute'], 'info');
        $this->assertIsArray($model['array_attribute'], 'array');
        $this->assertIsBool($model['boolean_attribute'], 'boolean');
        $this->assertIsFloat($model['float_attribute'], 'float');
        $this->assertIsInt($model['integer_attribute'], 'integer');
        $this->assertIsObject($model['object_attribute'], 'object');
        $this->assertIsString($model['string_attribute'], 'string');
        $this->assertJson($model['json_attribute'], 'json');
        $this->assertNull($model['null_attribute'], 'null');
    }

    /**
     * @test
     */
    public function it_raises_exception_when_invalid_type_is_set()
    {
        $this->expectException(InvalidArgumentException::class);

        new Model(
            [
                'invalid_attribute' => 'whatever',
            ]
        );
    }

    /**
     * @test
     */
    public function it_uses_getters_and_setters_if_they_are_defined()
    {
        $model = new Model(
            [
                'getter' => 'Raw getter value',
                'setter' => 'Raw setter value',
            ]
        );

        $this->assertEquals('From getter', $model['getter']);
        $this->assertEquals('From setter', $model['setter']);
    }

    /**
     * @test
     */
    public function it_can_be_cast_to_an_array()
    {
        $this->assertIsArray((array) $this->model, 'casts');
        $this->assertIsArray($this->model->toArray(), 'method');
    }

    /**
     * @test
     */
    public function it_can_serialize_model_as_json()
    {
        $this->assertJson($this->model->toJson());
    }

    /**
     * @test
     */
    public function it_gives_json_when_cast_as_a_string()
    {
        $this->assertJson((string) $this->model);
    }

    /**
     * @test
     */
    public function it_can_act_as_an_array()
    {
        $this->assertIsInt(count($this->model), 'countable');

        $this->assertTrue(is_iterable($this->model), 'is_iterable');

        $this->assertInstanceOf(ArrayIterator::class, $this->model->getIterator(), 'iterable');

        $this->assertTrue(isset($this->model['string_attribute']), 'offsetExists');

        $this->assertTrue((boolean) $this->model['string_attribute'], 'offsetGet');

        $this->model['string_attribute'] = 'something else';

        $this->assertEquals('something else', $this->model['string_attribute'], 'offsetSet');

        unset($this->model['string_attribute']);

        $this->assertFalse(isset($this->model['string_attribute']), 'offsetUnset');
    }

    /**
     * @test
     */
    public function it_can_be_serialized_and_unserialized()
    {
        $serialized = serialize($this->model);

        $this->assertIsString($serialized, 'serialized');

        $unserialized = unserialize($serialized);

        $this->assertInstanceOf(Model::class, $unserialized, 'unserialized');
    }

    /**
     * @test
     */
    public function it_only_returns_the_attributes_when_debugging()
    {
        $this->assertIsArray($this->model->__debugInfo(), 'array');
    }
}
