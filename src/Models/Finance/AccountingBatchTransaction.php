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
        'id'                 => 'integer',
        //        'batch'              => 'BatchReference',
        'billingLogId'       => 'integer',
        'invoiceNumber'      => 'string',
        //        'type'               => 'Enum',
        'description'        => 'string',
        'cost'               => 'double',
        'item'               => 'string',
        'inventory'          => 'string',
        'salesCode'          => 'string',
        'cogs'               => 'string',
        'glAccount'          => 'string',
        //        'currency'           => 'CurrencyReference',
        'debitAmount'        => 'double',
        'creditAmount'       => 'double',
        'balance'            => 'string',
        //        'product'            => 'ProductReference',
        'quantity'           => 'double',
        //        'unitOfMeasure'      => 'UnitOfMeasureReference',
        'serializedFlag'     => 'boolean',
        'serialNumber'       => 'string',
        //        'shipmentMethod'     => 'ShipmentMethodReference',
        'packingSlip'        => 'string',
        //        'ticket'             => 'TicketReference',
        //        'project'            => 'ProjectReference',
        //        'phase'              => 'ProjectPhaseReference',
        //        'expenseClass'       => 'Enum',
        //        'expenseType'        => 'ExpenseTypeReference',
        //        'timeEntry'          => 'TimeEntryReference',
        //        'activity'           => 'ActivityReference',
        'segment1'           => 'string',
        'segment2'           => 'string',
        'segment3'           => 'string',
        'segment4'           => 'string',
        'segment5'           => 'string',
        'segment6'           => 'string',
        'segment7'           => 'string',
        'segment8'           => 'string',
        'segment9'           => 'string',
        'segment10'          => 'string',
        'avalaraTaxFlag'     => 'boolean',
        'itemTaxableFlag'    => 'boolean',
        //        'taxCode'            => 'TaxCodeReference',
        'stateTaxFlag'       => 'boolean',
        'stateTaxXref'       => 'string',
        'stateTaxAmount'     => 'double',
        'countyTaxFlag'      => 'boolean',
        'countyTaxXref'      => 'string',
        'countyTaxAmount'    => 'double',
        'cityTaxFlag'        => 'boolean',
        'cityTaxXref'        => 'string',
        'cityTaxAmount'      => 'double',
        'countryTaxFlag'     => 'boolean',
        'countryTaxXref'     => 'string',
        'countryTaxAmount'   => 'double',
        'compositeTaxFlag'   => 'boolean',
        'compositeTaxXref'   => 'string',
        'compositeTaxAmount' => 'double',
        'taxTotal'           => 'double',
        //        '_info'              => 'Metadata',
    ];
}
