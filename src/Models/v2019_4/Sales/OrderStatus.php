<?php

namespace Spinen\ConnectWise\Models\v2019_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatus Version v2019_4
 *
 * Model for OrderStatus
 *
 * @property Metadata $_info
 * @property OrderStatusEmailTemplateReference $emailTemplate
 * @property bool $closedFlag
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property int $id
 * @property int $sortOrder
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
        '_info' => Metadata::class,
        'closedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'emailTemplate' => OrderStatusEmailTemplateReference::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
