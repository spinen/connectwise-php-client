<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AddressFormat Version v2019_2
 *
 * Model for AddressFormat
 *
 * @property integer $id
 * @property string $name
 * @property string $format
 * @property boolean $defaultFlag
 * @property array $countryIds
 * @property boolean $addAllCountries
 * @property boolean $removeAllCountries
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 */
class AddressFormat extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'format' => 'string',
        'defaultFlag' => 'boolean',
        'countryIds' => 'array',
        'addAllCountries' => 'boolean',
        'removeAllCountries' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
    ];
}
