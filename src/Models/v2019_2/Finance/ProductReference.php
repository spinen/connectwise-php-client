<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductReference Version v2019_2
 *
 * Model for ProductReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 * @property integer $id
 * @property string $description
 */
class ProductReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
        'description' => 'string',
        'id' => 'integer',
    ];
}
