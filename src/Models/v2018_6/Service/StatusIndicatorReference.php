<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StatusIndicatorReference Version v2018_6
 *
 * Model for StatusIndicatorReference
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 */
class StatusIndicatorReference extends Model
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
    ];
}
