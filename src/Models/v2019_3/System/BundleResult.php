<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BundleResult Version v2019_3
 * 
 * Model for BundleResult
 *
 * @property integer $SequenceNumber
 * @property string $ResourceType
 * @property array $Entities
 * @property integer $Count
 * @property string $Version
 * @property boolean $Success
 * @property integer $StatusCode
 * @property Spinen\ConnectWise\Models\v2019_3\System\ErrorResponseMessage $Error
 */
class BundleResult extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'SequenceNumber' => 'integer',
        'ResourceType' => 'string',
        'Entities' => 'array',
        'Count' => 'integer',
        'Version' => 'string',
        'Success' => 'boolean',
        'StatusCode' => 'integer',
        'Error' => 'Spinen\ConnectWise\Models\v2019_3\System\ErrorResponseMessage',
    ];
}
