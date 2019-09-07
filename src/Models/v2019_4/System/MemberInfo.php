<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberInfo Version v2019_4
 *
 * Model for MemberInfo
 *
 * @property DocumentReference $photo
 * @property Metadata $_info
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $defaultEmail
 * @property string $firstName
 * @property string $fullName
 * @property string $identifier
 * @property string $lastName
 * @property string $licenseClass
 * @property string $middleInitial
 */
class MemberInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'defaultEmail' => 'string',
        'firstName' => 'string',
        'fullName' => 'string',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveFlag' => 'boolean',
        'lastName' => 'string',
        'licenseClass' => 'string',
        'middleInitial' => 'string',
        'photo' => DocumentReference::class
    ];
}
