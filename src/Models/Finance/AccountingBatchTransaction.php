<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class AccountingBatchTransaction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'billingLogId' => 'integer',
        'invoiceNumber' => 'string',
        'type' => 'string',
        'description' => 'string',
        'cost' => 'double',
        'item' => 'string',
        'inventory' => 'string',
        'salesCode' => 'string',
        'cogs' => 'string',
        'glAccount' => 'string',
        'debitAmount' => 'double',
        'creditAmount' => 'double',
        'balance' => 'string',
        'quantity' => 'double',
        'serializedFlag' => 'boolean',
        'serialNumber' => 'string',
        'packingSlip' => 'string',
        'expenseClass' => 'string',
        'segment1' => 'string',
        'segment2' => 'string',
        'segment3' => 'string',
        'segment4' => 'string',
        'segment5' => 'string',
        'segment6' => 'string',
        'segment7' => 'string',
        'segment8' => 'string',
        'segment9' => 'string',
        'segment10' => 'string',
        'avalaraTaxFlag' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'stateTaxFlag' => 'boolean',
        'stateTaxXref' => 'string',
        'stateTaxAmount' => 'double',
        'countyTaxFlag' => 'boolean',
        'countyTaxXref' => 'string',
        'countyTaxAmount' => 'double',
        'cityTaxFlag' => 'boolean',
        'cityTaxXref' => 'string',
        'cityTaxAmount' => 'double',
        'countryTaxFlag' => 'boolean',
        'countryTaxXref' => 'string',
        'countryTaxAmount' => 'double',
        'compositeTaxFlag' => 'boolean',
        'compositeTaxXref' => 'string',
        'compositeTaxAmount' => 'double',
        'taxTotal' => 'double',
    ];
}
