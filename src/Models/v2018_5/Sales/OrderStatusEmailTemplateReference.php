<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class OrderStatusEmailTemplateReference Version v2018_5
 *
 * Model for OrderStatusEmailTemplateReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class OrderStatusEmailTemplateReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
