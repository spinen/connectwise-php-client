<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityTypeReference Version v2019_3
 *
 * Model for OpportunityTypeReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class OpportunityTypeReference extends Model
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
