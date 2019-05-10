<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CountryReference Version v2019_1
 *
 * Model for CountryReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Service\Metadata $_info
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Service\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
