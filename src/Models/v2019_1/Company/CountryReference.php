<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CountryReference Version v2019_1
 *
 * At least one address field is required -- addressLine1, addressLine2, city, state, zip and/or country
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
