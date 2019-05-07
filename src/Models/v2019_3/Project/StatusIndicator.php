<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class StatusIndicator
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property string $color
 * @property string $icon
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
    ];
}
