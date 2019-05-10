<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatus Version v2019_2
 *
 * Model for PurchaseOrderStatus
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\PurchaseOrderStatusEmailTemplateReference $emailTemplate
 * @property boolean $closedFlag
 * @property boolean $defaultClosedFlag
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property integer $sortOrder
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
        'closedFlag' => 'boolean',
        'defaultClosedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\PurchaseOrderStatusEmailTemplateReference',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
