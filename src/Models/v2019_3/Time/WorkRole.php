<?php

namespace Spinen\ConnectWise\Models\v2019_3\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRole Version v2019_3
 *
 * Model for WorkRole
 *
 * @property integer $id
 * @property string $name
 * @property float $hourlyRate
 * @property string $integrationXref
 * @property boolean $inactiveFlag
 * @property boolean $addAllLocations
 * @property boolean $removeAllLocations
 * @property boolean $addAllAgreementExclusions
 * @property array $locationIds
 * @property Spinen\ConnectWise\Models\v2019_3\Time\Metadata $_info
 */
class WorkRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'hourlyRate' => 'float',
        'integrationXref' => 'string',
        'inactiveFlag' => 'boolean',
        'addAllLocations' => 'boolean',
        'removeAllLocations' => 'boolean',
        'addAllAgreementExclusions' => 'boolean',
        'locationIds' => 'array',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Time\Metadata',
    ];
}
