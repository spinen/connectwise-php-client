<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class State Version v2018_6
 *
 * Model for State
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Company\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
        'country' => 'Spinen\ConnectWise\Models\v2018_6\Company\CountryReference',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
