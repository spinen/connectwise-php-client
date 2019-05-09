<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatus Version v2018_5
 * 
 * Model for OrderStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $sortOrder
 * @property boolean $closedFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\OrderStatusEmailTemplateReference $emailTemplate
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 */
class OrderStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'sortOrder' => 'integer',
        'closedFlag' => 'boolean',
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2018_5\Sales\OrderStatusEmailTemplateReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
    ];
}
