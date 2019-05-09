<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConnectWiseHostedScreen Version v2019_2
 * 
 * Model for ConnectWiseHostedScreen
 *
 * @property integer $id
 * @property string $screenId
 * @property string $name
 */
class ConnectWiseHostedScreen extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'screenId' => 'string',
        'name' => 'string',
    ];
}
