<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AdjustmentTypeReference Version v2018_6
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
