<?php

namespace Spinen\ConnectWise\Models\v2019_1\Time;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkTypeExternalIntegrationReference Version v2019_1
 *
 * Model for WorkTypeExternalIntegrationReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class WorkTypeExternalIntegrationReference extends Model
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
        'name' => 'string'
    ];
}
