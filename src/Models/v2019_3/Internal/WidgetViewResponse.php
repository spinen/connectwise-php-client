<?php

namespace Spinen\ConnectWise\Models\v2019_3\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WidgetViewResponse Version v2019_3
 * 
 * Model for WidgetViewResponse
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Internal\JObject $widget_data
 */
class WidgetViewResponse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'widget_data' => 'Spinen\ConnectWise\Models\v2019_3\Internal\JObject',
    ];
}
