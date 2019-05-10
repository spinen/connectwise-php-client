<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomReportReference Version v2019_3
 *
 * Model for CustomReportReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class CustomReportReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
