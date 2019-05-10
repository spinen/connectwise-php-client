<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomReportReference Version v2019_2
 *
 * Model for CustomReportReference
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
