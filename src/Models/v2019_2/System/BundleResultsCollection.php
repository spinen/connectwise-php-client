<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BundleResultsCollection Version v2019_2
 * 
 * Model for BundleResultsCollection
 *
 * @property array $Results
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $Info
 */
class BundleResultsCollection extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'Results' => 'array',
        'Info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
    ];
}
