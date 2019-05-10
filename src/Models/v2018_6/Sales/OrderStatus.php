<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatus Version v2018_6
 *
 * Model for OrderStatus
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\OrderStatusEmailTemplateReference $emailTemplate
 * @property boolean $closedFlag
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property integer $sortOrder
 * @property string $name
 */
class OrderStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Sales\Metadata',
        'closedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2018_6\Sales\OrderStatusEmailTemplateReference',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
