<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentTypeReference Version v2019_3
 *
 * Model for AdjustmentTypeReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 * @property integer $id
 * @property string $identifier
 */
class AdjustmentTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
    ];
}
