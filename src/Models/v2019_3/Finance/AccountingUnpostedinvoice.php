<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingUnpostedinvoice
 *
 * @property integer $id
 * @property integer $billingLogId
 * @property integer $locationId
 * @property integer $departmentId
 * @property string $accountNumber
 * @property string $invoiceNumber
 * @property carbon $invoiceDate
 * @property string $invoiceType
 * @property string $description
 * @property string $dueDays
 * @property carbon $dueDate
 * @property double $subTotal
 * @property double $total
 * @property boolean $invoiceTaxableFlag
 * @property boolean $avalaraTaxFlag
 * @property boolean $itemTaxableFlag
 * @property double $salesTaxAmount
 * @property boolean $stateTaxFlag
 * @property string $stateTaxXref
 * @property double $stateTaxAmount
 * @property boolean $countyTaxFlag
 * @property string $countyTaxXref
 * @property double $countyTaxAmount
 * @property boolean $cityTaxFlag
 * @property string $cityTaxXref
 * @property double $cityTaxAmount
 * @property boolean $countryTaxFlag
 * @property string $countryTaxXref
 * @property double $countryTaxAmount
 * @property boolean $compositeTaxFlag
 * @property string $compositeTaxXref
 * @property double $compositeTaxAmount
 * @property boolean $levelSixTaxFlag
 * @property string $levelSixTaxXref
 * @property double $levelSixTaxAmount
 * @property string $createdBy
 * @property carbon $dateClosed
 */
class AccountingUnpostedinvoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'billingLogId' => 'integer',
        'locationId' => 'integer',
        'departmentId' => 'integer',
        'accountNumber' => 'string',
        'invoiceNumber' => 'string',
        'invoiceDate' => 'carbon',
        'invoiceType' => 'string',
        'description' => 'string',
        'dueDays' => 'string',
        'dueDate' => 'carbon',
        'subTotal' => 'double',
        'total' => 'double',
        'invoiceTaxableFlag' => 'boolean',
        'avalaraTaxFlag' => 'boolean',
        'itemTaxableFlag' => 'boolean',
        'salesTaxAmount' => 'double',
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
        'createdBy' => 'string',
        'dateClosed' => 'carbon',
    ];
}
