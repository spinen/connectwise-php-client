<?php

namespace Spinen\ConnectWise\Models\v2019_4\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WidgetViewResponse Version v2019_4
 *
 * Model for WidgetViewResponse
 *
 * @property JObject $widget_data
 */
class WidgetViewResponse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'widget_data' => JObject::class,
    ];
}
