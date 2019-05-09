<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Addition Version v2018_4
 * 
 * Model for Addition
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\IvItemReference $product
 * @property number $quantity
 * @property number $lessIncluded
 * @property number $unitPrice
 * @property number $unitCost
 * @property string $billCustomer
 * @property string $effectiveDate
 * @property string $cancelledDate
 * @property boolean $taxableFlag
 * @property string $serialNumber
 * @property string $invoiceDescription
 * @property boolean $purchaseItemFlag
 * @property boolean $specialOrderFlag
 * @property integer $agreementId
 * @property string $description
 * @property number $billedQuantity
 * @property string $uom
 * @property number $extPrice
 * @property number $extCost
 * @property number $sequenceNumber
 * @property number $margin
 * @property number $prorateCost
 * @property number $proratePrice
 * @property number $extendedProrateCost
 * @property number $extendedProratePrice
 * @property boolean $prorateCurrentPeriodFlag
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 * @property array $customFields
 */
class Addition extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product' => 'Spinen\ConnectWise\Models\v2018_4\Finance\IvItemReference',
        'quantity' => 'number',
        'lessIncluded' => 'number',
        'unitPrice' => 'number',
        'unitCost' => 'number',
        'billCustomer' => 'string',
        'effectiveDate' => 'string',
        'cancelledDate' => 'string',
        'taxableFlag' => 'boolean',
        'serialNumber' => 'string',
        'invoiceDescription' => 'string',
        'purchaseItemFlag' => 'boolean',
        'specialOrderFlag' => 'boolean',
        'agreementId' => 'integer',
        'description' => 'string',
        'billedQuantity' => 'number',
        'uom' => 'string',
        'extPrice' => 'number',
        'extCost' => 'number',
        'sequenceNumber' => 'number',
        'margin' => 'number',
        'prorateCost' => 'number',
        'proratePrice' => 'number',
        'extendedProrateCost' => 'number',
        'extendedProratePrice' => 'number',
        'prorateCurrentPeriodFlag' => 'boolean',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_4\Finance\OpportunityReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
        'customFields' => 'array',
    ];
}
