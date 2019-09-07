<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BundleResult Version v2019_4
 *
 * Model for BundleResult
 *
 * @property ErrorResponseMessage $Error
 * @property array $Entities
 * @property boolean $Success
 * @property integer $Count
 * @property integer $SequenceNumber
 * @property integer $StatusCode
 * @property string $ResourceType
 * @property string $Version
 */
class BundleResult extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'Count' => 'integer',
        'Entities' => 'array',
        'Error' => ErrorResponseMessage::class,
        'ResourceType' => 'string',
        'SequenceNumber' => 'integer',
        'StatusCode' => 'integer',
        'Success' => 'boolean',
        'Version' => 'string'
    ];
}
