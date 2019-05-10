<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityPriorityReference Version v2019_3
 *
 * Model for OpportunityPriorityReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class OpportunityPriorityReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
