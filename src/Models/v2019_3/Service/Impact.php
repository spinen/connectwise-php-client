<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Impact Version v2019_3
 *
 * Model for Impact
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $description
 * @property string $name
 */
class Impact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'defaultFlag' => 'boolean',
        'description' => 'string',
        'id' => 'integer',
        'name' => 'string',
    ];
}
