<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExternalIntegrationStatusReference Version v2018_5
 *
 * Model for ExternalIntegrationStatusReference
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class ExternalIntegrationStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
