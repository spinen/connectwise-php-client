<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class AgreementAddition extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'quantity' => 'double',
        'lessIncluded' => 'double',
        'unitPrice' => 'double',
        'unitCost' => 'double',
        'billCustomer' => 'string',
        'effectiveDate' => 'carbon',
        'cancelledDate' => 'carbon',
        'taxableFlag' => 'boolean',
        'serialNumber' => 'string',
        'invoiceDescription' => 'string',
        'purchaseItemFlag' => 'boolean',
        'specialOrderFlag' => 'boolean',
        'agreementId' => 'integer',
        'description' => 'string',
        'billedQuantity' => 'double',
        'uom' => 'string',
        'extPrice' => 'double',
        'extCost' => 'double',
        'sequenceNumber' => 'double',
        'margin' => 'double',
        'prorateCost' => 'double',
        'proratePrice' => 'double',
        'extendedProrateCost' => 'double',
        'extendedProratePrice' => 'double',
        'prorateCurrentPeriodFlag' => 'boolean',
    ];
}
