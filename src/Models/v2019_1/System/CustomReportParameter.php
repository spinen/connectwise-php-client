<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomReportParameter Version v2019_1
 *
 * Model for CustomReportParameter
 *
 * @property integer $id
 * @property string $name
 * @property string $captionName
 * @property Spinen\ConnectWise\Models\v2019_1\System\CustomReportReference $customReport
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
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
        'customReport' => 'Spinen\ConnectWise\Models\v2019_1\System\CustomReportReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
    ];
}
