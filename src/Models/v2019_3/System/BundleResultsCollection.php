<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BundleResultsCollection Version v2019_3
 *
 * Model for BundleResultsCollection
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $Info
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
        'Info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'Results' => 'array',
    ];
}
