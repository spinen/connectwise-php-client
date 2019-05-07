<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementAddition
 *
 * @property integer $id
 * @property double $quantity
 * @property double $lessIncluded
 * @property double $unitPrice
 * @property double $unitCost
 * @property string $billCustomer
 * @property carbon $effectiveDate
 * @property carbon $cancelledDate
 * @property boolean $taxableFlag
 * @property string $serialNumber
 * @property string $invoiceDescription
 * @property boolean $purchaseItemFlag
 * @property boolean $specialOrderFlag
 * @property integer $agreementId
 * @property string $description
 * @property double $billedQuantity
 * @property string $uom
 * @property double $extPrice
 * @property double $extCost
 * @property double $sequenceNumber
 * @property double $margin
 * @property double $prorateCost
 * @property double $proratePrice
 * @property double $extendedProrateCost
 * @property double $extendedProratePrice
 * @property boolean $prorateCurrentPeriodFlag
 * @property array $customFields
 */
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
        'customFields' => 'array',
    ];
}
