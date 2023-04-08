<?php

namespace Spinen\ConnectWise\Models\v2019_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ConnectWiseHostedScreen Version v2019_4
 *
 * Model for ConnectWiseHostedScreen
 *
 * @property int $id
 * @property string $name
 * @property string $screenId
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
        'name' => 'string',
        'screenId' => 'string',
    ];
}
