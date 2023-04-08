<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RelationshipReference Version v2019_3
 *
 * Model for RelationshipReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class RelationshipReference extends Model
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
