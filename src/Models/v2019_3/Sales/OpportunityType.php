<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityType Version v2019_3
 * 
 * Model for OpportunityType
 *
 * @property integer $id
 * @property string $description
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 */
class OpportunityType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'inactiveFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
    ];
}
