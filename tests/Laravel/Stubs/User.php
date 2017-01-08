<?php

namespace Spinen\ConnectWise\Laravel\Stubs;

use Spinen\ConnectWise\Laravel\ConnectWiseMemberIdFromEmail;

class User
{
    use ConnectWiseMemberIdFromEmail;

    protected $email = 'joe.doe@domain.tld';
}
