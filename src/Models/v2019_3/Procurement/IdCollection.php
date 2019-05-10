<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class IdCollection Version v2019_3
 *
 * Model for IdCollection
 *
 * @property array $ids
 */
class IdCollection extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'ids' => 'array'
    ];
}
