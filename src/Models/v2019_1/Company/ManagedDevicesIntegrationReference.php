<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationReference Version v2019_1
 *
 * Model for ManagedDevicesIntegrationReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ManagedDevicesIntegrationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
