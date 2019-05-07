<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AccountingUnpostedProcurement
 *
 * @property integer $id
 * @property string $description
 * @property integer $locationId
 * @property integer $departmentId
 * @property string $procurementType
 * @property carbon $purchaseDate
 * @property string $trackingNumber
 * @property double $total
 * @property boolean $avalaraTaxFlag
 * @property boolean $itemTaxableFlag
 * @property boolean $purchaseOrderTaxableFlag
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
 * @property double $taxTotal
 * @property string $vendorAccountNumber
 * @property string $vendorInvoiceNumber
 * @property carbon $vendorInvoiceDate
 * @property boolean $taxFreightFlag
 * @property double $freightTaxTotal
 * @property double $freightCost
 * @property carbon $dateClosed
 */
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
