<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UserDefinedField Version v2019_2
 * 
 * Model for UserDefinedField
 *
 * @property integer $id
 * @property integer $podId
 * @property string $caption
 * @property integer $sequenceNumber
 * @property string $helpText
 * @property string $fieldTypeIdentifier
 * @property integer $numberDecimals
 * @property string $entryTypeIdentifier
 * @property boolean $requiredFlag
 * @property boolean $displayOnScreenFlag
 * @property boolean $readOnlyFlag
 * @property boolean $listViewFlag
 * @property string $buttonUrl
 * @property array $options
 * @property array $businessUnitIds
 * @property array $locationIds
 * @property boolean $addAllBusinessUnits
 * @property boolean $removeAllBusinessUnits
 * @property boolean $addAllLocations
 * @property boolean $removeAllLocations
 * @property string $dateCreated
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 */
class UserDefinedField extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'podId' => 'integer',
        'caption' => 'string',
        'sequenceNumber' => 'integer',
        'helpText' => 'string',
        'fieldTypeIdentifier' => 'string',
        'numberDecimals' => 'integer',
        'entryTypeIdentifier' => 'string',
        'requiredFlag' => 'boolean',
        'displayOnScreenFlag' => 'boolean',
        'readOnlyFlag' => 'boolean',
        'listViewFlag' => 'boolean',
        'buttonUrl' => 'string',
        'options' => 'array',
        'businessUnitIds' => 'array',
        'locationIds' => 'array',
        'addAllBusinessUnits' => 'boolean',
        'removeAllBusinessUnits' => 'boolean',
        'addAllLocations' => 'boolean',
        'removeAllLocations' => 'boolean',
        'dateCreated' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
