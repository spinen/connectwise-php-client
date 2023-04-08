<?php

namespace Spinen\ConnectWise\Models\v2019_1\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExternalIntegrationStatusReference Version v2019_1
 *
 * Model for ExternalIntegrationStatusReference
 *
 * @property Metadata $_info
 * @property int $id
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
