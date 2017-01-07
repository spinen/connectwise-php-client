<?php

namespace Spinen\ConnectWise\Api;

use Carbon\Carbon;
use Mockery;
use Spinen\ConnectWise\TestCase;

class TokenTest extends TestCase
{
    /**
     * @var Token
     */
    protected $token;

    protected function setUp()
    {
        parent::setUp();

        $this->token = new Token();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(Token::class, $this->token);
    }

    /**
     * @test
     */
    public function it_allows_configuration()
    {
        $company_id = 'Acme';
        $member_id = 'joedoe';

        $this->token->setCompanyId($company_id);
        $this->token->setMemberId($member_id);

        $this->assertEquals($company_id, $this->token->getCompanyId());
        $this->assertEquals($member_id, $this->token->getMemberId());
    }

    /**
     * @test
     */
    public function it_fetches_a_public_and_private_key_from_connectwise()
    {
        $client = Mockery::mock(Client::class);

        $company_id = 'Acme';
        $member_id = 'joedoe';

        $response = [
            'expiration' => Carbon::now()
                                  ->addHours(4),
            'privateKey' => 'private',
            'publicKey'  => 'public',
        ];

        $this->token->setCompanyId($company_id);
        $this->token->setMemberId($member_id);

        $client->shouldReceive('post')
               ->once()
               ->with('system/members/' . $member_id . '/tokens')
               ->andReturn($response);

        $this->token->fetch($client);

        $this->assertInstanceOf(Carbon::class, $this->token->getExpiration());
        $this->assertTrue($response['expiration']->eq($this->token->getExpiration()));
        $this->assertEquals('Acme+public', $this->token->getUsername());
        $this->assertEquals('private', $this->token->getPassword());
    }

    /**
     * @test
     */
    public function it_refreshes_a_token_by_using_the_integrator_username_and_password_from_the_client()
    {
        $client = Mockery::mock(Client::class);

        $company_id = 'Acme';

        $response = [
            'expiration' => Carbon::now()
                                  ->addHours(4),
            'privateKey' => 'private',
            'publicKey'  => 'public',
        ];

        $this->token->setCompanyId($company_id);

        $client->shouldReceive('post')
               ->once()
               ->with(Mockery::any())
               ->andReturn($response);

        $client->shouldReceive('getIntegrator')
               ->once()
               ->withNoArgs()
               ->andReturn('integrator');

        $client->shouldReceive('getPassword')
               ->once()
               ->withNoArgs()
               ->andReturn('password');

        $this->token->refresh($client);

        $this->assertInstanceOf(Carbon::class, $this->token->getExpiration());
        $this->assertTrue($response['expiration']->eq($this->token->getExpiration()));
        $this->assertEquals('Acme+public', $this->token->getUsername());
        $this->assertEquals('private', $this->token->getPassword());
    }

    /**
     * @test
     */
    public function it_considers_the_username_the_company_id_and_username_with_a_plus_between_them()
    {
        $client = Mockery::mock(Client::class);

        $company_id = 'Acme';

        $response = [
            'expiration' => Carbon::now()
                                  ->addHours(4),
            'privateKey' => 'private',
            'publicKey'  => 'public',
        ];

        $this->token->setCompanyId($company_id);

        $client->shouldReceive('post')
               ->once()
               ->with(Mockery::any())
               ->andReturn($response);

        $this->token->fetch($client);

        $this->assertEquals($company_id . '+' . $response['publicKey'], $this->token->getUsername());
    }

    /**
     * @test
     */
    public function it_knows_when_a_token_expires()
    {
        $client = Mockery::mock(Client::class);

        $response = [
            'expiration' => Carbon::now()
                                  ->addHours(4),
            'privateKey' => 'private',
            'publicKey'  => 'public',
        ];

        $client->shouldReceive('post')
               ->once()
               ->with(Mockery::any())
               ->andReturn($response);

        $this->token->fetch($client);

        $this->assertFalse($this->token->isExpired());

        // Make test believe that it is now the time that the token expires
        Carbon::setTestNow($response['expiration']);

        $this->assertTrue($this->token->isExpired());
    }

    /**
     * @test
     */
    public function it_does_not_consider_an_unpopulated_token_as_expired()
    {
        $this->assertFalse($this->token->isLoaded());
        $this->assertFalse($this->token->isExpired());
    }

    /**
     * @test
     */
    public function it_checks_if_a_token_is_for_a_specific_username()
    {
        $client = Mockery::mock(Client::class);

        $response = [
            'expiration' => Carbon::now()
                                  ->addHours(4),
            'privateKey' => 'private',
            'publicKey'  => 'public',
        ];

        $client->shouldReceive('post')
               ->once()
               ->with(Mockery::any())
               ->andReturn($response);

        $this->assertFalse($this->token->isForUser($response['publicKey']));

        $this->token->fetch($client);

        $this->assertTrue($this->token->isForUser($response['publicKey']));
    }

    /**
     * @test
     */
    public function it_knows_if_a_token_has_been_loaded()
    {
        $client = Mockery::mock(Client::class);

        $response = [
            'expiration' => Carbon::now()
                                  ->addHours(4),
            'privateKey' => 'private',
            'publicKey'  => 'public',
        ];

        $client->shouldReceive('post')
               ->once()
               ->with(Mockery::any())
               ->andReturn($response);

        $this->assertFalse($this->token->isLoaded());

        $this->token->fetch($client);

        $this->assertTrue($this->token->isLoaded());
    }

    /**
     * @test
     */
    public function it_only_needs_to_be_refreshed_if_the_expiration_has_passed_or_it_has_not_been_loaded()
    {
        $client = Mockery::mock(Client::class);

        $response = [
            'expiration' => Carbon::now()
                                  ->addHours(4),
            'privateKey' => 'private',
            'publicKey'  => 'public',
        ];

        $client->shouldReceive('post')
               ->once()
               ->with(Mockery::any())
               ->andReturn($response);

        $this->assertTrue($this->token->needsRefreshing());

        $this->token->fetch($client);

        $this->assertFalse($this->token->needsRefreshing());

        // Make test believe that it is now the time that the token expires
        Carbon::setTestNow($response['expiration']);

        $this->assertTrue($this->token->needsRefreshing());
    }
}
