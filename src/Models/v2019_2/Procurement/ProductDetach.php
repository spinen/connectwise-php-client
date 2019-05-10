<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductDetach Version v2019_2
 *
 * Model for ProductDetach
 *
 * @property boolean $removeFromInvoice
 * @property boolean $removeFromOpportunity
 * @property boolean $removeFromProject
 * @property boolean $removeFromSalesOrder
 * @property boolean $removeFromTicket
 */
class ProductDetach extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'removeFromInvoice' => 'boolean',
        'removeFromOpportunity' => 'boolean',
        'removeFromProject' => 'boolean',
        'removeFromSalesOrder' => 'boolean',
        'removeFromTicket' => 'boolean'
    ];
}
