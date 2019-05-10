<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class UserDefinedField Version v2019_1
 *
 * Model for UserDefinedField
 *
 * @property Carbon $dateCreated
 * @property Metadata $_info
 * @property array $businessUnitIds
 * @property array $locationIds
 * @property array $options
 * @property boolean $addAllBusinessUnits
 * @property boolean $addAllLocations
 * @property boolean $displayOnScreenFlag
 * @property boolean $listViewFlag
 * @property boolean $readOnlyFlag
 * @property boolean $removeAllBusinessUnits
 * @property boolean $removeAllLocations
 * @property boolean $requiredFlag
 * @property integer $id
 * @property integer $numberDecimals
 * @property integer $podId
 * @property integer $sequenceNumber
 * @property string $buttonUrl
 * @property string $caption
 * @property string $entryTypeIdentifier
 * @property string $fieldTypeIdentifier
 * @property string $helpText
 */
class UserDefinedField extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addAllBusinessUnits' => 'boolean',
        'addAllLocations' => 'boolean',
        'businessUnitIds' => 'array',
        'buttonUrl' => 'string',
        'caption' => 'string',
        'dateCreated' => Carbon::class,
        'displayOnScreenFlag' => 'boolean',
        'entryTypeIdentifier' => 'string',
        'fieldTypeIdentifier' => 'string',
        'helpText' => 'string',
        'id' => 'integer',
        'listViewFlag' => 'boolean',
        'locationIds' => 'array',
        'numberDecimals' => 'integer',
        'options' => 'array',
        'podId' => 'integer',
        'readOnlyFlag' => 'boolean',
        'removeAllBusinessUnits' => 'boolean',
        'removeAllLocations' => 'boolean',
        'requiredFlag' => 'boolean',
        'sequenceNumber' => 'integer'
    ];
}
