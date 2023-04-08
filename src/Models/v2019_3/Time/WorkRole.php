<?php

namespace Spinen\ConnectWise\Models\v2019_3\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRole Version v2019_3
 *
 * Model for WorkRole
 *
 * @property Metadata $_info
 * @property array $locationIds
 * @property bool $addAllAgreementExclusions
 * @property bool $addAllLocations
 * @property bool $inactiveFlag
 * @property bool $removeAllLocations
 * @property float $hourlyRate
 * @property int $id
 * @property string $integrationXref
 * @property string $name
 */
class WorkRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addAllAgreementExclusions' => 'boolean',
        'addAllLocations' => 'boolean',
        'hourlyRate' => 'float',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'integrationXref' => 'string',
        'locationIds' => 'array',
        'name' => 'string',
        'removeAllLocations' => 'boolean',
    ];
}
