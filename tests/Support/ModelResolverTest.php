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
            '/some/uri'          => 'Some/Model',
            '/some/uri/{id}'     => 'Some/ModelWithParam',
            '/specific/{id}/uri' => 'Other/Model',
        ]);

        $this->assertEquals('Some/Model', $resolver->find('some/uri'), 'simple uri');
        $this->assertEquals('Some/Model', $resolver->find('/some/uri'), 'simple uri with leading slash');
        $this->assertEquals('Some/Model', $resolver->find('some/uri/'), 'simple uris with trailing slash');
        $this->assertEquals('Some/Model', $resolver->find('/some/uri/'), 'simple uris with leading & trailing slash');
        $this->assertEquals('Some/ModelWithParam', $resolver->find('some/uri/45'), 'uri to direct resource');
        $this->assertEquals('Some/Model', $resolver->find('some/uri?param=1&param=2'), 'uri with parameters');

        $this->assertEquals('Other/Model', $resolver->find('specific/987/uri'), 'nested resource uri');
        $this->assertEquals(
            'Other/Model',
            $resolver->find('/specific/987/uri'),
            'nested resource uri with leading slash'
        );
        $this->assertEquals(
            'Other/Model',
            $resolver->find('specific/987/uri/'),
            'nested resource uri with trialing slash'
        );
        $this->assertEquals(
            'Other/Model',
            $resolver->find('/specific/987/uri/'),
            'nested resource uri with leading & trialing slash'
        );
        $this->assertEquals(
            'Other/Model',
            $resolver->find('specific/987/uri?param=1&param=2'),
            'nested resource uri with parameters'
        );
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
