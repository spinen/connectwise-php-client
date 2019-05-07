<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDelegation
 *
 * @property integer $id
 * @property string $delegationType
 * @property carbon $dateStart
 * @property carbon $dateEnd
 */
class MemberDelegation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'delegationType' => 'string',
        'dateStart' => 'carbon',
        'dateEnd' => 'carbon',
    ];
}
