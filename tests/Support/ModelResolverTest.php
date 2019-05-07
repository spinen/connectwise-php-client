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
        $resolver = new ModelResolver();

        $this->assertEquals('Some/Model', $resolver->find('some/uri', '1.2.3'), 'simple uri');
        $this->assertEquals(
            'Some/Model',
            $resolver->find('/some/uri', '1.2.3'),
            'simple uri with leading slash'
        );
        $this->assertEquals(
            'Some/Model',
            $resolver->find('some/uri/', '1.2.3'),
            'simple uris with trailing slash'
        );
        $this->assertEquals(
            'Some/Model',
            $resolver->find('/some/uri/', '1.2.3'),
            'simple uris with leading & trailing slash'
        );
        $this->assertEquals(
            'Some/ModelWithParam',
            $resolver->find('some/uri/45', '1.2.3'),
            'uri to direct resource'
        );
        $this->assertEquals(
            'Some/ModelWithParam',
            $resolver->find('some/uri/45?param=1&param=2', '1.2.3'),
            'uri to direct resource'
        );
        $this->assertEquals(
            'Some/Model',
            $resolver->find('some/uri?param=1&param=2', '1.2.3'),
            'uri with parameters'
        );

        $this->assertEquals('Other/Model', $resolver->find('specific/987/uri', '1.2.3'), 'nested resource uri');
        $this->assertEquals(
            'Other/Model',
            $resolver->find('/specific/987/uri', '1.2.3'),
            'nested resource uri with leading slash'
        );
        $this->assertEquals(
            'Other/Model',
            $resolver->find('specific/987/uri/', '1.2.3'),
            'nested resource uri with trialing slash'
        );
        $this->assertEquals(
            'Other/Model',
            $resolver->find('/specific/987/uri/', '1.2.3'),
            'nested resource uri with leading & trialing slash'
        );
        $this->assertEquals(
            'Other/Model',
            $resolver->find('specific/987/uri?param=1&param=2', '1.2.3'),
            'nested resource uri with parameters'
        );
    }

    /**
     * @test
     */
    public function it_returns_null_for_uris_that_dont_match()
    {
        $resolver = new ModelResolver();

        $this->assertNull($resolver->find('invalid/uri', '1.2.3'));
    }
}

/**
 * Override to inject "fake" file
 *
 * @param $file
 *
 * @return false|string
 */
function file_get_contents($file)
{
    return json_encode(
        [
            '/some/uri'          => 'Some/Model',
            '/some/uri/{id}'     => 'Some/ModelWithParam',
            '/specific/{id}/uri' => 'Other/Model',
        ]
    );
}
