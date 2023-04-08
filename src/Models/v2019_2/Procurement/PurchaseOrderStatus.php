<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatus Version v2019_2
 *
 * Model for PurchaseOrderStatus
 *
 * @property Metadata $_info
 * @property PurchaseOrderStatusEmailTemplateReference $emailTemplate
 * @property bool $closedFlag
 * @property bool $defaultClosedFlag
 * @property bool $defaultFlag
 * @property bool $inactiveFlag
 * @property int $id
 * @property int $sortOrder
 * @property string $name
 */
class PurchaseOrderStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'closedFlag' => 'boolean',
        'defaultClosedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'emailTemplate' => PurchaseOrderStatusEmailTemplateReference::class,
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
