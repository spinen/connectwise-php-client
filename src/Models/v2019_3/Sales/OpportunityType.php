<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityType Version v2019_3
 *
 * Model for OpportunityType
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $description
 */
class OpportunityType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
        'description' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
    ];
}
