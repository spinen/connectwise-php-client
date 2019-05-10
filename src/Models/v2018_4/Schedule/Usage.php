<?php

namespace Spinen\ConnectWise\Models\v2018_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Usage Version v2018_4
 *
 * Model for Usage
 *
 * @property integer $count
 * @property integer $id
 * @property string $description
 * @property string $type
 */
class Usage extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'description' => 'string',
        'id' => 'integer',
        'type' => 'string',
    ];
}
