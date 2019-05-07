<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ApiMember
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property string $emailAddress
 * @property boolean $inactiveFlag
 * @property carbon $inactiveDate
 * @property string $notes
 * @property array $excludedServiceBoardIds
 */
class ApiMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'emailAddress' => 'string',
        'inactiveFlag' => 'boolean',
        'inactiveDate' => 'carbon',
        'notes' => 'string',
        'excludedServiceBoardIds' => 'array',
    ];
}
