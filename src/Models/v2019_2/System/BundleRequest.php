<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BundleRequest Version v2019_2
 *
 * Model for BundleRequest
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\ApiRequest $ApiRequest
 * @property integer $SequenceNumber
 * @property string $ResourceType
 * @property string $Version
 */
class BundleRequest extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'ApiRequest' => 'Spinen\ConnectWise\Models\v2019_2\System\ApiRequest',
        'ResourceType' => 'string',
        'SequenceNumber' => 'integer',
        'Version' => 'string',
    ];
}
