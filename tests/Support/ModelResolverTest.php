<?php

namespace Spinen\ConnectWise\Support;

use Spinen\ConnectWise\TestCase;

class ModelResolverTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $resolver = new ModelResolver();

        $this->assertInstanceOf(ModelResolver::class, $resolver);
    }

    /**
     * @test
     */
    public function it_finds_the_expected_model()
    {
        $resolver = new ModelResolver([
            'some/uri'          => 'Some/Model',
            'specific/{id}/uri' => 'Other/Model',
        ]);

        $this->assertEquals('Some/Model', $resolver->find('some/uri'));
        $this->assertEquals('Some/Model', $resolver->find('/some/uri'));
        $this->assertEquals('Some/Model', $resolver->find('some/uri/45'));
        $this->assertEquals('Some/Model', $resolver->find('some/uri?param=1&param=2'));

        $this->assertEquals('Other/Model', $resolver->find('specific/987/uri'));
        $this->assertEquals('Other/Model', $resolver->find('/specific/987/uri'));
        $this->assertEquals('Other/Model', $resolver->find('specific/987/uri/45'));
        $this->assertEquals('Other/Model', $resolver->find('specific/987/uri?param=1&param=2'));
    }

    /**
     * @test
     */
    public function it_returns_null_for_uris_that_dont_match()
    {

        $resolver = new ModelResolver([
            'some/uri' => 'Some/Model',
        ]);

        $this->assertNull($resolver->find('invalid/uri'));
    }
}
