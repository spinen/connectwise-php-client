<?php

namespace Spinen\ConnectWise\Models\v2019_4\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Usage Version v2019_4
 *
 * Model for Usage
 *
 * @property int $count
 * @property int $id
 * @property string $description
 * @property string $hyperlink
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
        'hyperlink' => 'string',
        'id' => 'integer',
        'type' => 'string',
    ];
}
