<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class FilterValues Version v2018_5
 *
 * Model for FilterValues
 *
 * @property string $childconditions
 * @property string $conditions
 * @property string $customfieldconditions
 * @property string $orderBy
 */
class FilterValues extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'childconditions' => 'string',
        'conditions' => 'string',
        'customfieldconditions' => 'string',
        'orderBy' => 'string'
    ];
}
