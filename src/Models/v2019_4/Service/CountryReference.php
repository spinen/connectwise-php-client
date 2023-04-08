<?php

namespace Spinen\ConnectWise\Models\v2019_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CountryReference Version v2019_4
 *
 * Model for CountryReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $identifier
 * @property string $name
 */
class CountryReference extends Model
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
        'name' => 'string',
    ];
}
