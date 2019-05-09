<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StatusIndicator Version v2019_2
 * 
 * Model for StatusIndicator
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property string $color
 * @property string $icon
 * @property Spinen\ConnectWise\Models\v2019_2\Project\Metadata $_info
 */
class StatusIndicator extends Model
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
        'color' => 'string',
        'icon' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Project\Metadata',
    ];
}
