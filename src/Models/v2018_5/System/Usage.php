<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Usage Version v2018_5
 *
 * Model for Usage
 *
 * @property integer $count
 * @property integer $id
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
        'type' => 'string'
    ];
}
