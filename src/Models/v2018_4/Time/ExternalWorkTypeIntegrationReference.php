<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExternalWorkTypeIntegrationReference Version v2018_4
 *
 * Model for ExternalWorkTypeIntegrationReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Time\Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class ExternalWorkTypeIntegrationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Time\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
