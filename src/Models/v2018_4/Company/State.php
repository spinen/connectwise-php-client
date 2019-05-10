<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class State Version v2018_4
 *
 * Model for State
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 */
class State extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'country' => 'Spinen\ConnectWise\Models\v2018_4\Company\CountryReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
    ];
}
