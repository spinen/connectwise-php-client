<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityType Version v2019_1
 *
 * Model for OpportunityType
 *
 * @property Metadata $_info
 * @property bool $inactiveFlag
 * @property int $id
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
        '_info' => Metadata::class,
        'description' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
    ];
}
