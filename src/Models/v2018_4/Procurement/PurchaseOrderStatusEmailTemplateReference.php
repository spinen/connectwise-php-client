<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PurchaseOrderStatusEmailTemplateReference Version v2018_4
 *
 * Model for PurchaseOrderStatusEmailTemplateReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class PurchaseOrderStatusEmailTemplateReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
