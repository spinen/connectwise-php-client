<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberInfo Version v2019_1
 * 
 * Model for MemberInfo
 *
 * @property integer $id
 * @property string $identifier
 * @property string $firstName
 * @property string $middleInitial
 * @property string $lastName
 * @property string $fullName
 * @property string $defaultEmail
 * @property Spinen\ConnectWise\Models\v2019_1\System\DocumentReference $photo
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
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
        'photo' => 'Spinen\ConnectWise\Models\v2019_1\System\DocumentReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
