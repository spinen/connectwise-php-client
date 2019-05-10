<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AddressFormat Version v2018_6
 *
 * Model for AddressFormat
 *
 * @property Metadata $_info
 * @property array $countryIds
 * @property boolean $addAllCountries
 * @property boolean $defaultFlag
 * @property boolean $removeAllCountries
 * @property integer $id
 * @property string $format
 * @property string $name
 */
class AddressFormat extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'addAllCountries' => 'boolean',
        'countryIds' => 'array',
        'defaultFlag' => 'boolean',
        'format' => 'string',
        'id' => 'integer',
        'name' => 'string',
        'removeAllCountries' => 'boolean'
    ];
}
