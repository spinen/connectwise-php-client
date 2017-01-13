<?php

namespace Spinen\ConnectWise\Api;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Psr7\Response;
use InvalidArgumentException;
use Mockery;
use Mockery\Mock;
use Spinen\ConnectWise\Models\System\Info;
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
    protected $token;

    protected function setUp()
    {
        $this->token = Mockery::mock(Token::class);
        // I know that you don't mock what you don't own, but we cannot make actual API calls
        // to ConnectWise, so we are mocking it out for the test...
        $this->guzzle = Mockery::mock(Guzzle::class);

        $this->resolver = Mockery::mock(ModelResolver::class);

        $this->client = new Client($this->token, $this->guzzle, $this->resolver);
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(Client::class, $this->client);
    }

    /**
     * @test
     */
    public function it_returns_a_model_for_an_object_response()
    {
        $response = Mockery::mock(Response::class);

        $response->shouldReceive('getBody')
                 ->once()
                 ->withNoArgs()
                 ->andReturn('{"version":"v2016.6.43325","isCloud":false,"serverTimeZone":"Eastern Standard Time"}');

        $this->guzzle->shouldReceive('request')
                     ->once()
                     ->withAnyArgs()
                     ->andReturn($response);

        $this->resolver->shouldReceive('find')
                       ->once()
                       ->with('uri')
                       ->andReturn('System\Info');

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

        $this->assertInstanceOf(Info::class, $this->client->get('uri'));
    }

    /**
     * @test
     */
    public function it_returns_a_collection_for_an_array_response()
    {
        $response = Mockery::mock(Response::class);

        $response->shouldReceive('getBody')
                 ->once()
                 ->withNoArgs()
                 ->andReturn('[{"version":"v2016.6.43325","isCloud":false,"serverTimeZone":"Eastern Standard Time"},{"version":"v2016.6.43325","isCloud":false,"serverTimeZone":"Eastern Standard Time"}]');

        $this->guzzle->shouldReceive('request')
                     ->once()
                     ->withAnyArgs()
                     ->andReturn($response);

        $this->resolver->shouldReceive('find')
                       ->once()
                       ->with('uri')
                       ->andReturn('System\Info');

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

        $this->assertInstanceOf(Collection::class, $this->client->get('uri'));
    }

    /**
     * @test
     */
    public function it_returns_an_array_when_there_is_not_a_model_to_map()
    {
        $response = Mockery::mock(Response::class);

        $response->shouldReceive('getBody')
                 ->once()
                 ->withNoArgs()
                 ->andReturn('{"version":"v2016.6.43325","isCloud":false,"serverTimeZone":"Eastern Standard Time"}');

        $this->guzzle->shouldReceive('request')
                     ->once()
                     ->withAnyArgs()
                     ->andReturn($response);

        $this->resolver->shouldReceive('find')
                       ->once()
                       ->with('uri')
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

        $this->assertTrue(is_array($this->client->get('uri')));
    }

    /**
     * @test
     */
    public function it_has_functioning_integrator_getters_and_setters()
    {
        $integrator = 'integrator';
        $password = 'password';

        $this->client->setIntegrator($integrator);
        $this->client->setPassword($password);

        $this->assertEquals($integrator, $this->client->getIntegrator());
        $this->assertEquals($password, $this->client->getPassword());
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_setting_an_invalid_url()
    {
        $this->client->setUrl('invalid');
    }

    /**
     * @test
     */
    public function it_builds_the_auth_array_with_integrator_info_for_non_loaded_tokens()
    {
        $integrator = 'integrator';
        $password = 'password';

        $this->client->setIntegrator($integrator);
        $this->client->setPassword($password);

        $this->token->shouldReceive('needsRefreshing')
                    ->once()
                    ->withNoArgs()
                    ->andReturn(true);

        $this->token->shouldReceive('refresh')
                    ->once()
                    ->with($this->client)
                    ->andReturnNull();

        $this->token->shouldReceive('getUsername')
                    ->once()
                    ->withNoArgs()
                    ->andReturn($integrator);

        $this->token->shouldReceive('getPassword')
                    ->once()
                    ->withNoArgs()
                    ->andReturn($password);

        list($user, $pass) = $this->client->buildAuth();

        $this->assertEquals($integrator, $user);
        $this->assertEquals($password, $pass);
    }

    /**
     * @test
     */
    public function it_builds_the_auth_array_with_member_info_for_loaded_tokens()
    {
        $member = 'member';
        $password = 'password';

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

        list($user, $pass) = $this->client->buildAuth();

        $this->assertEquals($member, $user);
        $this->assertEquals($password, $pass);
    }

    /**
     * @test
     */
    public function it_builds_the_expected_options_array()
    {
        $username = 'username';
        $password = 'password';

        $this->client->setIntegrator($username);

        $options = [
            'extra'   => 'option',
            'auth'    => [
                'extra',
                $username,
                $password,
            ],
            'headers' => [
                'added' => 'header',
            ],
        ];

        $extras = [
            'extra' => 'option',
            'auth'  => [
                'extra',
            ],
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

        $this->client->addHeader(['added' => 'header']);

        $built = $this->client->buildOptions($extras);

        $this->assertEquals($options, $built);
    }

    /**
     * @test
     */
    public function it_builds_the_full_uri_for_a_resource()
    {
        $this->client->setUrl('https://host.tld');

        $this->assertEquals('https://host.tld/v4_6_release/apis/3.0/some/resource',
            $this->client->buildUri('/some/resource'));
    }

    /**
     * @test
     */
    public function it_allows_the_headers_to_be_worked_with()
    {
        $integrator = 'integrator';

        $this->client->setIntegrator($integrator);

        $this->token->shouldReceive('isForUser')
                    ->times(4)
                    ->with($integrator)
                    ->andReturn(false);

        $this->assertEquals([], $this->client->getHeaders());

        $this->client->addHeader([
            'added' => 'header',
        ]);

        $this->assertEquals(['added' => 'header'], $this->client->getHeaders());

        $this->client->setHeaders([
            'set' => 'headers',
        ]);

        $this->assertEquals(['set' => 'headers'], $this->client->getHeaders());

        $this->client->emptyHeaders();

        $this->assertEquals([], $this->client->getHeaders());
    }

    /**
     * @test
     */
    public function it_gives_specific_headers_for_integrator_token()
    {
        $integrator = 'integrator';

        $this->client->setIntegrator($integrator);

        $this->token->shouldReceive('isForUser')
                    ->once()
                    ->with($integrator)
                    ->andReturn(true);

        $this->client->addHeader([
            'added' => 'header',
        ]);

        $this->assertEquals(['x-cw-usertype' => 'integrator'], $this->client->getHeaders());
    }

    /**
     * @test
     */
    public function it_has_a_delete_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled();

        $this->client->delete('uri');
    }

    /**
     * @test
     */
    public function it_has_a_get_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled();

        $this->client->get('uri');
    }

    /**
     * @test
     */
    public function it_has_a_head_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled();

        $this->client->head('uri');
    }

    /**
     * @test
     */
    public function it_has_a_patch_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled();

        $this->client->patch('uri');
    }

    /**
     * @test
     */
    public function it_has_a_post_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled();

        $this->client->post('uri');
    }

    /**
     * @test
     */
    public function it_has_a_put_method_that_it_passes_to_guzzle()
    {
        $this->mockOutEverythingForTestingThatGuzzleIsCalled();

        $this->client->put('uri');
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_calling_a_non_supported_verb()
    {
        $this->client->invalid('uri');
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_raises_exception_when_making_a_request_without_a_uri()
    {
        $this->client->get();
    }

    protected function mockOutEverythingForTestingThatGuzzleIsCalled()
    {
        $response = Mockery::mock(Response::class);

        $response->shouldReceive('getBody')
                 ->once()
                 ->withNoArgs()
                 ->andReturn("{'responded': true}");

        $this->guzzle->shouldReceive('request')
                     ->once()
                     ->withAnyArgs()
                     ->andReturn($response);

        $this->resolver->shouldReceive('find')
                       ->once()
                       ->with('uri')
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
    }
}
