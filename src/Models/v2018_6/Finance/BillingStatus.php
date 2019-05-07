<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingStatus
 *
 * @property string $type
 * @property integer $count
 * @property integer $id
 * @property string $description
 * @property string $hyperlink
 */
class BillingStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'type' => 'string',
        'count' => 'integer',
        'id' => 'integer',
        'description' => 'string',
        'hyperlink' => 'string',
    ];
}
