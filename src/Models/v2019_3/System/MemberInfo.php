<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberInfo
 *
 * @property integer $id
 * @property string $identifier
 * @property string $firstName
 * @property string $middleInitial
 * @property string $lastName
 * @property string $fullName
 * @property string $defaultEmail
 * @property string $licenseClass
 * @property boolean $inactiveFlag
 */
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
        'licenseClass' => 'string',
        'inactiveFlag' => 'boolean',
    ];
}
