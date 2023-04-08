<?php

namespace Spinen\ConnectWise\Models\v2019_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class FilterValues Version v2019_5
 *
 * Model for FilterValues
 *
 * @property string $childconditions
 * @property string $conditions
 * @property string $customfieldconditions
 * @property string $fields
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
        'fields' => 'string',
        'orderBy' => 'string',
    ];
}
