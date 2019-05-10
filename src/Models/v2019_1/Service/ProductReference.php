<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductReference Version v2019_1
 *
 * Model for ProductReference
 *
 * @property integer $id
 * @property string $description
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 */
class ProductReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
    ];
}
