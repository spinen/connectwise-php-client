<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Severity Version v2018_6
 *
 * Model for Severity
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $description
 * @property string $name
 */
class Severity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
        'defaultFlag' => 'boolean',
        'description' => 'string',
        'id' => 'integer',
        'name' => 'string',
    ];
}
