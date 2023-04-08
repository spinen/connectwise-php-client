<?php

namespace Spinen\ConnectWise\Models\v2019_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityRating Version v2019_5
 *
 * Model for OpportunityRating
 *
 * @property Metadata $_info
 * @property int $id
 * @property int $sortOrder
 * @property string $name
 */
class OpportunityRating extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
