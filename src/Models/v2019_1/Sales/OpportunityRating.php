<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityRating Version v2019_1
 * 
 * Model for OpportunityRating
 *
 * @property integer $id
 * @property string $name
 * @property integer $sortOrder
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
 */
class OpportunityRating extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'sortOrder' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
    ];
}
