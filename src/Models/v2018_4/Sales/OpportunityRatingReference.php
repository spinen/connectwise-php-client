<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityRatingReference Version v2018_4
 *
 * Model for OpportunityRatingReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class OpportunityRatingReference extends Model
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
    ];
}
