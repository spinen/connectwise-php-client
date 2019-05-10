<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentReference Version v2019_1
 *
 * Model for AdjustmentReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class AdjustmentReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
