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
 * @property float $quantity
 * @property float $lessIncluded
 * @property float $unitPrice
 * @property float $unitCost
 * @property string $billCustomer
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $cancelledDate
 * @property boolean $taxableFlag
 * @property string $serialNumber
 * @property string $invoiceDescription
 * @property boolean $purchaseItemFlag
 * @property boolean $specialOrderFlag
 * @property integer $agreementId
 * @property string $description
 * @property float $billedQuantity
 * @property string $uom
 * @property float $extPrice
 * @property float $extCost
 * @property float $sequenceNumber
 * @property float $margin
 * @property float $prorateCost
 * @property float $proratePrice
 * @property float $extendedProrateCost
 * @property float $extendedProratePrice
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
        'quantity' => 'float',
        'lessIncluded' => 'float',
        'unitPrice' => 'float',
        'unitCost' => 'float',
        'billCustomer' => 'string',
        'effectiveDate' => 'Carbon\Carbon',
        'cancelledDate' => 'Carbon\Carbon',
        'taxableFlag' => 'boolean',
        'serialNumber' => 'string',
        'invoiceDescription' => 'string',
        'purchaseItemFlag' => 'boolean',
        'specialOrderFlag' => 'boolean',
        'agreementId' => 'integer',
        'description' => 'string',
        'billedQuantity' => 'float',
        'uom' => 'string',
        'extPrice' => 'float',
        'extCost' => 'float',
        'sequenceNumber' => 'float',
        'margin' => 'float',
        'prorateCost' => 'float',
        'proratePrice' => 'float',
        'extendedProrateCost' => 'float',
        'extendedProratePrice' => 'float',
        'prorateCurrentPeriodFlag' => 'boolean',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_4\Finance\OpportunityReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
        'customFields' => 'array',
    ];
}
