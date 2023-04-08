<?php

namespace Spinen\ConnectWise\Models\v2019_5\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentTypeReference Version v2019_5
 *
 * Model for AdjustmentTypeReference
 *
 * @property Metadata $_info
 * @property int $id
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
    ];
}
