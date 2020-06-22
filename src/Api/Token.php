<?php

namespace Spinen\ConnectWise\Api;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Arrayable;

/**
 * Class Token
 *
 * @package Spinen\ConnectWise\Api
 */
class Token
{
    /**
     * Company Id to scope calls to
     *
     * @var string|null
     */
    protected $company_id = null;

    /**
     * Member Id making calls
     *
     * @var string|null
     */
    protected $member_id = null;

    /**
     * Expiration timestamp of token
     *
     * @var Carbon|null
     */
    protected $expiration = null;

    /**
     * Password for the user that is making the calls
     *
     * This is really the private key from the user impersonation token.
     *
     * @var string|null
     */
    protected $password = null;

    /**
     * User that is making the calls
     *
     * This is really the public key from the user impersonation token.
     *
     * @var string|null
     */
    protected $username = null;

    /**
     * Path to the endpoint that returns tokens
     *
     * @return string
     */
    protected function endpoint()
    {
        return 'system/members/' . $this->member_id . '/tokens';
    }

    /**
     * Call CW & get temp tokens for the user
     *
     * @param Client $client
     */
    public function fetch(Client $client)
    {
        $this->parse($client->post($this->endpoint()));
    }

    /**
     * Expose the company id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Expose the expiration of the token
     *
     * @return Carbon|null
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Expose the member id
     *
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Expose the password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * The name for the basic auth needs the company_id "+" member_id
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->company_id . '+' . $this->username;
    }

    /**
     * Check to see if tokens have expired
     *
     * @return bool
     */
    public function isExpired()
    {
        return !is_null($this->expiration) &&
               Carbon::now()
                     ->gte($this->expiration);
    }

    /**
     * Check to see if the token is for the integrator
     *
     * @param $username
     *
     * @return bool
     */
    public function isForUser($username)
    {
        return $username === $this->username;
    }

    /**
     * Check to see if tokens have been setup
     *
     * @return bool
     */
    public function isLoaded()
    {
        return $this->password && $this->username;
    }

    /**
     * Determine if the token needs to be refreshed
     *
     * @return bool
     */
    public function needsRefreshing()
    {
        return $this->isExpired() || !$this->isLoaded();
    }

    /**
     * Parse the tokens into properties
     *
     * @param Arrayable|array $token
     */
    protected function parse($token)
    {
        // TODO: Put guard here to make sure that we got a token.
        $this->setExpiration($token['expiration']);
        $this->password = $token['privateKey'];
        $this->username = $token['publicKey'];
    }

    /**
     * Erase the token & get new one
     *
     * @param Client $client
     */
    public function refresh(Client $client)
    {
        $this->username = $client->getIntegrator();
        $this->password = $client->getPassword();

        $this->fetch($client);
    }

    /**
     * Setter for the company id
     *
     * @param $company_id
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->company_id = $company_id;

        return $this;
    }

    /**
     * Setter for the member id
     *
     * @param $member_id
     *
     * @return $this
     */
    public function setMemberId($member_id)
    {
        $this->member_id = $member_id;

        return $this;
    }

    /**
     * Setter for the expiration timestamp
     *
     * Make sure to cast it to a Carbon object
     *
     * @param $expiration
     *
     * @return $this
     */
    protected function setExpiration($expiration)
    {
        $this->expiration = Carbon::parse($expiration);

        return $this;
    }
}
