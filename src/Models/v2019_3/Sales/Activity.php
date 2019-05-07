<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Activity
 *
 * @property integer $id
 * @property string $name
 * @property string $phoneNumber
 * @property string $email
 * @property string $notes
 * @property carbon $dateStart
 * @property carbon $dateEnd
 * @property boolean $notifyFlag
 * @property array $customFields
 */
class Activity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phoneNumber' => 'string',
        'email' => 'string',
        'notes' => 'string',
        'dateStart' => 'carbon',
        'dateEnd' => 'carbon',
        'notifyFlag' => 'boolean',
        'customFields' => 'array',
    ];
}
