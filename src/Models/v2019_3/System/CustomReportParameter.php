<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CustomReportParameter Version v2019_3
 *
 * Model for CustomReportParameter
 *
 * @property integer $id
 * @property string $name
 * @property string $captionName
 * @property Spinen\ConnectWise\Models\v2019_3\System\CustomReportReference $customReport
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
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
        'customReport' => 'Spinen\ConnectWise\Models\v2019_3\System\CustomReportReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
    ];
}
