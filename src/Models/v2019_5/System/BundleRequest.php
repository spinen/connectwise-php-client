<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BundleRequest Version v2019_5
 *
 * Model for BundleRequest
 *
 * @property ApiRequest $ApiRequest
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
        'ApiRequest' => ApiRequest::class,
        'ResourceType' => 'string',
        'SequenceNumber' => 'integer',
        'Version' => 'string'
    ];
}
