<?php

namespace Spinen\ConnectWise\Models\v2019_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class State Version v2019_4
 *
 * Model for State
 *
 * @property CountryReference $country
 * @property Metadata $_info
 * @property int $id
 * @property string $identifier
 * @property string $name
 */
class State extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'country' => CountryReference::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
