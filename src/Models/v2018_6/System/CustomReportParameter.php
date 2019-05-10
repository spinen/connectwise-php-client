<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomReportParameter Version v2018_6
 *
 * Model for CustomReportParameter
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\CustomReportReference $customReport
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'captionName' => 'string',
        'customReport' => 'Spinen\ConnectWise\Models\v2018_6\System\CustomReportReference',
        'id' => 'integer',
        'name' => 'string',
    ];
}
