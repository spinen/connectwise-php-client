<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

class AccountingUnpostedProcurement extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'locationId' => 'integer',
        'departmentId' => 'integer',
        'procurementType' => 'string',
        'purchaseDate' => 'carbon',
        'trackingNumber' => 'string',
        'total' => 'double',
        'avalaraTaxFlag' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'purchaseOrderTaxableFlag' => 'boolean',
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
        'levelSixTaxFlag' => 'boolean',
        'levelSixTaxXref' => 'string',
        'levelSixTaxAmount' => 'double',
        'taxTotal' => 'double',
        'vendorAccountNumber' => 'string',
        'vendorInvoiceNumber' => 'string',
        'vendorInvoiceDate' => 'carbon',
        'taxFreightFlag' => 'boolean',
        'freightTaxTotal' => 'double',
        'freightCost' => 'double',
        'dateClosed' => 'carbon',
    ];
}
