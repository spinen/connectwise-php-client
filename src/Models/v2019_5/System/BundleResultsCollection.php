<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class BundleResultsCollection Version v2019_5
 *
 * Model for BundleResultsCollection
 *
 * @property Metadata $Info
 * @property array $Results
 */
class BundleResultsCollection extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'Info' => Metadata::class,
        'Results' => 'array'
    ];
}
