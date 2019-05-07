<?php

namespace Spinen\ConnectWise\Models\v2019_1\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRole
 *
 * @property integer $id
 * @property string $name
 * @property double $hourlyRate
 * @property string $integrationXref
 * @property boolean $inactiveFlag
 * @property boolean $addAllLocations
 * @property boolean $removeAllLocations
 * @property boolean $addAllAgreementExclusions
 * @property array $locationIds
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
        'hourlyRate' => 'double',
        'integrationXref' => 'string',
        'inactiveFlag' => 'boolean',
        'addAllLocations' => 'boolean',
        'removeAllLocations' => 'boolean',
        'addAllAgreementExclusions' => 'boolean',
        'locationIds' => 'array',
    ];
}
