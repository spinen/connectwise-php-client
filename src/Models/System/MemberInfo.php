<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class MemberInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'firstName' => 'string',
        'middleInitial' => 'string',
        'lastName' => 'string',
        'fullName' => 'string',
        'defaultEmail' => 'string',
    ];
}
