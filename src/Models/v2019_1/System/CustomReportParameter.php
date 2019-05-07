<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomReportParameter
 *
 * @property integer $id
 * @property string $name
 * @property string $captionName
 */
class CustomReportParameter extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'captionName' => 'string',
    ];
}
