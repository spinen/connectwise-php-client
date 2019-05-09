<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ClosedInvoice Version v2018_4
 * 
 * Model for ClosedInvoice
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\BillingStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 */
class ClosedInvoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Finance\BillingStatusReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
    ];
}
