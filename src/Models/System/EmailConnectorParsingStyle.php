<?php

namespace Spinen\ConnectWise\Models\System;

use Spinen\ConnectWise\Support\Model;

class EmailConnectorParsingStyle extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parseRule' => 'string',
        'priority' => 'integer',
    ];
}
