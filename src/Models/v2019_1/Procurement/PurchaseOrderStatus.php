<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatus Version v2019_1
 *
 * Model for PurchaseOrderStatus
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property boolean $closedFlag
 * @property boolean $inactiveFlag
 * @property boolean $defaultClosedFlag
 * @property integer $sortOrder
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\PurchaseOrderStatusEmailTemplateReference $emailTemplate
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 */
class PurchaseOrderStatus extends Model
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
        'closedFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'defaultClosedFlag' => 'boolean',
        'sortOrder' => 'integer',
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\PurchaseOrderStatusEmailTemplateReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
    ];
}
