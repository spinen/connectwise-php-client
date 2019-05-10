<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomReportParameter Version v2019_1
 *
 * Model for CustomReportParameter
 *
 * @property CustomReportReference $customReport
 * @property Metadata $_info
 * @property integer $id
 * @property string $captionName
 * @property string $name
 */
class CustomReportParameter extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'captionName' => 'string',
        'customReport' => CustomReportReference::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
