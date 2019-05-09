<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductDetach Version v2018_4
 * 
 * Model for ProductDetach
 *
 * @property boolean $removeFromTicket
 * @property boolean $removeFromInvoice
 * @property boolean $removeFromOpportunity
 * @property boolean $removeFromSalesOrder
 * @property boolean $removeFromProject
 */
class ProductDetach extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'removeFromTicket' => 'boolean',
        'removeFromInvoice' => 'boolean',
        'removeFromOpportunity' => 'boolean',
        'removeFromSalesOrder' => 'boolean',
        'removeFromProject' => 'boolean',
    ];
}
