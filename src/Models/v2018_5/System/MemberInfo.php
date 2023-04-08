<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberInfo Version v2018_5
 *
 * Model for MemberInfo
 *
 * @property DocumentReference $photo
 * @property Metadata $_info
 * @property int $id
 * @property string $defaultEmail
 * @property string $firstName
 * @property string $fullName
 * @property string $identifier
 * @property string $lastName
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
        'lastName' => 'string',
        'middleInitial' => 'string',
        'photo' => DocumentReference::class,
    ];
}
