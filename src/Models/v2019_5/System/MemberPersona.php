<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberPersona Version v2019_5
 *
 * Model for MemberPersona
 *
 * @property MemberReference $member
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class MemberPersona extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'member' => MemberReference::class,
        'name' => 'string',
    ];
}
