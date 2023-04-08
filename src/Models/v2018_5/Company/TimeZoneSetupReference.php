<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZoneSetupReference Version v2018_5
 *
 * The specified system time zone for the Company
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class TimeZoneSetupReference extends Model
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
