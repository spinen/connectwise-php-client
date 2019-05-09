<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BundleRequest Version v2019_3
 * 
 * Model for BundleRequest
 *
 * @property integer $SequenceNumber
 * @property string $ResourceType
 * @property string $Version
 * @property Spinen\ConnectWise\Models\v2019_3\System\ApiRequest $ApiRequest
 */
class BundleRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'SequenceNumber' => 'integer',
        'ResourceType' => 'string',
        'Version' => 'string',
        'ApiRequest' => 'Spinen\ConnectWise\Models\v2019_3\System\ApiRequest',
    ];
}
