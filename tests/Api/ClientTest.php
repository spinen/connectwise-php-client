<?php

namespace Spinen\ConnectWise\Api;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Mockery;
use Mockery\Mock;
use Spinen\ConnectWise\Exceptions\MalformedRequest;
use Spinen\ConnectWise\Models\v2019_4\System\Info;
use Spinen\ConnectWise\Support\Collection;
use Spinen\ConnectWise\Support\ModelResolver;
use Spinen\ConnectWise\TestCase;

class ClientTest extends TestCase
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Mock
     */
    protected $guzzle;

    /**
     * @var Mock
     */
    protected $resolver;

    /**
     * @var Mock
     */
    protected $response;

    /**
     * @var Mock
     */
    protected $token;

    protected function setUp(): void
    {
        $this->token = Mockery::mock(Token::class);
        // I know that you don't mock what you don't own, but we cannot make actual API calls
        // to ConnectWise, so we are mocking it out for the test...
        $this->guzzle = Mockery::mock(Guzzle::class);

        $this->resolver = Mockery::mock(ModelResolver::class);

        // $client = (new Client($this->token, $this->guzzle, $this->resolver))->setClientId('some-client-id');
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(Client::class, new Client());
    }

    /**
     * @test
     */
    public function it_returns_a_model_for_an_object_response()
    {
        $this->resolver->shouldReceive('find')
                       ->once()
                       ->with('uri', Mockery::any())
                       ->andReturn('Spinen\ConnectWise\Models\v2019_4\System\Info');

        $this->token->shouldReceive('needsRefreshing')
                    ->once()
                    ->withNoArgs()
                    ->andReturn(false);

        $this->token->shouldReceive('getUsername')
                    ->once()
                    ->withNoArgs()
                    ->andReturn('integrator');

        $this->token->shouldReceive('getPassword')
                    ->once()
                    ->withNoArgs()
                    ->andReturn('pass');

        $this->token->shouldReceive('isForUser')
                    ->once()
                    ->with(Mockery::any())
                    ->andReturn(false);

        $client = (new Client(
            guzzle: new Guzzle([
                'handler' => HandlerStack::create(new MockHandler([
                    new Response(body: '{"version":"v2016.6.43325","isCloud":false,"serverTimeZone":"Eastern Standard Time"}'),
                ])),
            ]),
            resolver: $this->resolver,
            token: $this->token,
        ));

        $this->assertInstanceOf(Info::class, $client->get('uri'));
    }

    /**
     * @test
     */
    public function it_returns_a_collection_for_an_array_response()
    {
        $this->resolver->shouldReceive('find')
                       ->once()
                       ->with('uri', '2019.5')
                       ->andReturn('Spinen\ConnectWise\Models\v2019_4\System\Info');

        $this->token->shouldReceive('needsRefreshing')
                    ->once()
                    ->withNoArgs()
                    ->andReturn(false);

        $this->token->shouldReceive('getUsername')
                    ->once()
                    ->withNoArgs()
                    ->andReturn('integrator');

        $this->token->shouldReceive('getPassword')
                    ->once()
                    ->withNoArgs()
                    ->andReturn('pass');

        $this->token->shouldReceive('isForUser')
                    ->once()
                    ->with(Mockery::any())
                    ->andReturn(false);

        $client = (new Client(
            guzzle: new Guzzle([
                'handler' => HandlerStack::create(new MockHandler([
                    new Response(body: '[{"version":"v2016.6.43325","isCloud":false,"serverTimeZone":"Eastern Standard Time"},{"version":"v2016.6.43325","isCloud":false,"serverTimeZone":"Eastern Standard Time"}]'),
                ])),
            ]),
            resolver: $this->resolver,
            token: $this->token,
        ));

        $this->assertInstanceOf(Collection::class, $client->get('uri'));
    }

    /**
     * @test
     */
    public function it_returns_an_array_when_there_is_not_a_model_to_map()
    {

        $this->resolver->shouldReceive('find')
                       ->once()
                       ->with('uri', '2019.5')
                       ->andReturnNull();

        $this->token->shouldReceive('needsRefreshing')
                    ->once()
                    ->withNoArgs()
                    ->andReturn(false);

        $this->token->shouldReceive('getUsername')
                    ->once()
                    ->withNoArgs()
                    ->andReturn('integrator');

        $this->token->shouldReceive('getPassword')
                    ->once()
                    ->withNoArgs()
                    ->andReturn('pass');

        $this->token->shouldReceive('isForUser')
                    ->once()
                    ->with(Mockery::any())
                    ->andReturn(false);

        $client = (new Client(
            guzzle: new Guzzle([
                'handler' => HandlerStack::create(new MockHandler([
                    new Response(body: '{"version":"v2016.6.43325","isCloud":false,"serverTimeZone":"Eastern Standard Time"}'),
                ])),
            ]),
            resolver: $this->resolver,
            token: $this->token,
        ));

        $this->assertTrue(is_array($client->get('uri')));
    }

    /**
     * @test
     */
    public function it_has_functioning_integrator_getters_and_setters()
    {
        $integrator = Str::random();
        $password = Str::random();

        $client = (new Client(token: $this->token))
            ->setIntegrator($integrator)
            ->setPassword($password);

        $this->assertEquals($integrator, $client->getIntegrator());
        $this->assertEquals($password, $client->getPassword());
    }

    /**
     * @test
     */
    public function it_raises_exception_when_setting_an_invalid_url()
    {
        $client = new Client;

        $this->expectException(InvalidArgumentException::class);

        $client->setUrl('invalid');
    }

    /**
     * @test
     */
    public function it_builds_the_auth_array_with_integrator_info_for_non_loaded_tokens()
    {
        $integrator = Str::random();
        $password = Str::random();

        $client = (new Client(token: $this->token))
            ->setIntegrator($integrator)
            ->setPassword($password);

        $this->token->shouldReceive('needsRefreshing')
                    ->once()
                    ->withNoArgs()
                    ->andReturn(true);

        $this->token->shouldReceive('refresh')
                    ->once()
                    ->with($client)
                    ->andReturnNull();

        $this->token->shouldReceive('getUsername')
                    ->once()
                    ->withNoArgs()
                    ->andReturn($integrator);

        $this->token->shouldReceive('getPassword')
                    ->once()
                    ->withNoArgs()
                    ->andReturn($password);

        $this->assertEquals('Basic '.base64_encode($integrator.':'.$password), $client->buildAuth());
    }

    /**
     * @test
     */
    public function it_builds_the_auth_array_with_member_info_for_loaded_tokens()
    {
        $client = new Client(token: $this->token);

        $member = Str::random();
        $password = Str::random();

        $this->token->shouldReceive('needsRefreshing')
                    ->once()
                    ->withNoArgs()
                    ->andReturn(false);

        $this->token->shouldReceive('getUsername')
                    ->once()
                    ->withNoArgs()
                    ->andReturn($member);

        $this->token->shouldReceive('getPassword')
                    ->once()
                    ->withNoArgs()
                    ->andReturn($password);

        $this->assertEquals('Basic '.base64_encode($member.':'.$password), $client->buildAuth());
    }

    /**
     * @test
     */
    public function it_builds_the_expected_options_array()
    {
        $username = Str::random();
        $password = Str::random();
        $clientId = Str::random();

        $client = (new Client(token: $this->token))
            ->setClientId($clientId)
            ->setIntegrator($username);

        $options = [
            'body' => json_encode(['extra' => 'option']),
            'headers' => [
                'added' => 'header',
                'Accept' => 'application/vnd.connectwise.com+json; version=2019.5',
                'x-cw-usertype' => 'member',
                'Authorization' => 'Basic '.base64_encode($username.':'.$password),
                'clientId' => $clientId,
            ],
        ];

        $extras = [
            'extra' => 'option',
        ];

        $this->token->shouldReceive('needsRefreshing')
                    ->once()
                    ->withNoArgs()
                    ->andReturn(false);

        $this->token->shouldReceive('getUsername')
                    ->once()
                    ->withNoArgs()
                    ->andReturn($username);

        $this->token->shouldReceive('getPassword')
                    ->once()
                    ->withNoArgs()
                    ->andReturn($password);

        $this->token->shouldReceive('isForUser')
                    ->once()
                    ->with($username)
                    ->andReturn(false);

        $client->addHeader(['added' => 'header']);

        $built = $client->buildOptions($extras);

        $this->assertEquals($options, $built);
    }

    /**
     * @test
     */
    public function it_builds_the_full_uri_for_a_resource()
    {
        $client = (new Client)
            ->setUrl('https://host.tld');

        $this->assertEquals(
            'https://host.tld/v4_6_release/apis/3.0/some/resource',
            $client->buildUri('/some/resource')
        );
    }

    /**
     * @test
     */
    public function it_raises_exception_when_query_is_over_2000_characters()
    {
        $client = (new Client)
            ->setUrl('https://host.tld');

        // Long enough to get 2000 with the rest of the uri
        $resource = Str::random(2000 - strlen($client->buildUri(null)));

        $this->assertEquals(2000, strlen($client->buildUri($resource)), 'Top of the limit');

        $this->expectException(MalformedRequest::class);

        $client->buildUri($resource.'1');
    }

    /**
     * @test
     */
    public function it_allows_the_headers_to_be_worked_with()
    {
        $integrator = Str::random();
        $password = Str::random();
        $clientId = Str::random();

        $client = (new Client(token: $this->token))
            ->setClientId($clientId)
            ->setIntegrator($integrator);

        $this->token->shouldReceive('needsRefreshing')
                    ->times(4)
                    ->withNoArgs()
                    ->andReturn(false);

        $this->token->shouldReceive('getUsername')
                    ->times(4)
                    ->withNoArgs()
                    ->andReturn($integrator);

        $this->token->shouldReceive('getPassword')
                    ->times(4)
                    ->withNoArgs()
                    ->andReturn($password);

        $this->token->shouldReceive('isForUser')
                    ->times(4)
                    ->with($integrator)
                    ->andReturn(false);

        $this->assertEquals(
            [
                'Accept' => 'application/vnd.connectwise.com+json; version=2019.5',
                'Authorization' => 'Basic '.base64_encode($integrator.':'.$password),
                'x-cw-usertype' => 'member',
                'clientId' => $clientId,
            ],
            $client->getHeaders(),
            'Normal headers'
        );

        $client->addHeader(
            [
                'added' => 'header',
            ]
        );

        $this->assertEquals(
            [
                'added' => 'header',
                'Accept' => 'application/vnd.connectwise.com+json; version=2019.5',
                'x-cw-usertype' => 'member',
                'Authorization' => 'Basic '.base64_encode($integrator.':'.$password),
                'clientId' => $clientId,
            ],
            $client->getHeaders(),
            'Added header'
        );

        $client->setHeaders(
            [
                'set' => 'headers',
            ]
        );

        $this->assertEquals(
            [
                'set' => 'headers',
                'Accept' => 'application/vnd.connectwise.com+json; version=2019.5',
                'x-cw-usertype' => 'member',
                'Authorization' => 'Basic '.base64_encode($integrator.':'.$password),
                'clientId' => $clientId,
            ],
            $client->getHeaders(),
            'Set header'
        );

        $client->emptyHeaders();

        $this->assertEquals(
            [
                'Accept' => 'application/vnd.connectwise.com+json; version=2019.5',
                'x-cw-usertype' => 'member',
                'Authorization' => 'Basic '.base64_encode($integrator.':'.$password),
                'clientId' => $clientId,
            ],
            $client->getHeaders(),
            'Empty headers'
        );
    }

    /**
     * @test
     */
    public function it_gives_specific_headers_for_integrator_token()
    {
        $integrator = Str::random();
        $password = Str::random();
        $clientId = Str::random();

        $client = (new Client(token: $this->token))
            ->setClientId($clientId)
            ->setIntegrator($integrator);

        $this->token->shouldReceive('isForUser')
                    ->once()
                    ->with($integrator)
                    ->andReturn(true);

        $this->token->shouldReceive('needsRefreshing')
                    ->once()
                    ->withNoArgs()
                    ->andReturn(false);

        $this->token->shouldReceive('getUsername')
                    ->once()
                    ->withNoArgs()
                    ->andReturn($integrator);

        $this->token->shouldReceive('getPassword')
                    ->once()
                    ->withNoArgs()
                    ->andReturn($password);

        $client->addHeader(
            [
                'added' => 'header',
            ]
        );

        $this->assertEquals(
            [
                'x-cw-usertype' => 'integrator',
                'Authorization' => 'Basic '.base64_encode($integrator.':'.$password),
                'clientId' => $clientId,
            ],
            $client->getHeaders()
        );
    }

    /**
     * @test
     */
    public function it_has_a_delete_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled()
            ->delete('uri');
    }

    /**
     * @test
     */
    public function it_has_a_get_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled()
            ->get('uri');
    }

    /**
     * @test
     */
    public function it_has_a_head_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled()
            ->head('uri');
    }

    /**
     * @test
     */
    public function it_has_a_patch_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled()
            ->patch('uri');
    }

    /**
     * @test
     */
    public function it_has_a_post_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled()
            ->post('uri');
    }

    /**
     * @test
     */
    public function it_has_a_put_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled()
            ->put('uri');
    }

    /**
     * @test
     */
    public function it_raises_exception_when_calling_a_non_supported_verb()
    {
        $this->expectException(InvalidArgumentException::class);

        (new Client)->invalid('uri');
    }

    /**
     * @test
     */
    public function it_raises_exception_when_making_a_request_without_a_uri()
    {
        $this->expectException(InvalidArgumentException::class);

        (new Client)->get();
    }

    protected function mockOutEverythingForTestingThatGuzzleIsCalled()
    {
        $this->resolver->shouldReceive('find')
                       ->once()
                       ->with('uri', '2019.5')
                       ->andReturn('Model');

        $this->token->shouldReceive('needsRefreshing')
                    ->once()
                    ->withNoArgs()
                    ->andReturn(false);

        $this->token->shouldReceive('getUsername')
                    ->once()
                    ->withNoArgs()
                    ->andReturn('integrator');

        $this->token->shouldReceive('getPassword')
                    ->once()
                    ->withNoArgs()
                    ->andReturn('pass');

        $this->token->shouldReceive('isForUser')
                    ->once()
                    ->with(Mockery::any())
                    ->andReturn(false);

        return new Client(
            guzzle: new Guzzle([
                'handler' => HandlerStack::create(new MockHandler([
                    new Response(body: "{'responded': true}"),
                ])),
            ]),
            resolver: $this->resolver,
            token: $this->token,
        );
    }

    /**
     * @test
     */
    public function it_returns_supported_version_numbers()
    {
        $client = new Client;

        $client->setVersion('2019.5');
        $this->assertEquals('2019.5', $client->getVersion());
    }

    /**
     * @test
     */
    public function it_throws_an_exception_on_non_supported_versions()
    {
        $client = new Client;

        $this->expectException(InvalidArgumentException::class);

        $client->setVersion('2012.2');
        $this->assertNotEquals('2012.2', $client->getVersion());
    }

    /**
     * @test
     */
    public function it_has_a_getAll_method_that_it_passes_to_guzzle_as_paginated_get_calls()
    {
        $this->markTestSkipped('TODO: Fix this at some point');

        $client = $this->mockOutEverythingForTestingThatGuzzleIsCalled();

        $get_header_link = '<https://some.host/v4_6_release/apis/3.0/finance/agreements&pageSize=10&page=2>; \
               rel="next", <https://some.host/v4_6_release/apis/3.0/finance/agreements&pageSize=10&page=3>; rel="last"';

        $this->response->shouldReceive('getHeader')
                       ->once()
                       ->with('Link')
                       ->andReturn($get_header_link);

        $client->getAll('uri');
    }
}
