<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class UserDefinedField Version v2018_5
 *
 * Model for UserDefinedField
 *
 * @property Carbon $dateCreated
 * @property Metadata $_info
 * @property array $businessUnitIds
 * @property array $locationIds
 * @property array $options
 * @property bool $addAllBusinessUnits
 * @property bool $addAllLocations
 * @property bool $displayOnScreenFlag
 * @property bool $listViewFlag
 * @property bool $readOnlyFlag
 * @property bool $removeAllBusinessUnits
 * @property bool $removeAllLocations
 * @property bool $requiredFlag
 * @property int $id
 * @property int $numberDecimals
 * @property int $podId
 * @property int $sequenceNumber
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
        'sequenceNumber' => 'integer',
    ];
}
