<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StatusIndicatorReference Version v2018_6
 *
 * Model for StatusIndicatorReference
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class StatusIndicatorReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
