<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BundleRequestsCollection Version v2019_2
 *
 * Model for BundleRequestsCollection
 *
 * @property array $Requests
 */
class BundleRequestsCollection extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'Requests' => 'array'
    ];
}
