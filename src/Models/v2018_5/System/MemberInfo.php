<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberInfo Version v2018_5
 *
 * Model for MemberInfo
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\DocumentReference $photo
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'defaultEmail' => 'string',
        'firstName' => 'string',
        'fullName' => 'string',
        'id' => 'integer',
        'identifier' => 'string',
        'lastName' => 'string',
        'middleInitial' => 'string',
        'photo' => 'Spinen\ConnectWise\Models\v2018_5\System\DocumentReference',
    ];
}
