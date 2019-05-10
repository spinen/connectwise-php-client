<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Addition Version v2018_5
 *
 * Model for Addition
 *
 * @property Carbon\Carbon $cancelledDate
 * @property Carbon\Carbon $effectiveDate
 * @property IvItemReference $product
 * @property Metadata $_info
 * @property OpportunityReference $opportunity
 * @property array $customFields
 * @property boolean $prorateCurrentPeriodFlag
 * @property boolean $purchaseItemFlag
 * @property boolean $specialOrderFlag
 * @property boolean $taxableFlag
 * @property float $billedQuantity
 * @property float $extCost
 * @property float $extPrice
 * @property float $extendedProrateCost
 * @property float $extendedProratePrice
 * @property float $lessIncluded
 * @property float $margin
 * @property float $prorateCost
 * @property float $proratePrice
 * @property float $quantity
 * @property float $sequenceNumber
 * @property float $unitCost
 * @property float $unitPrice
 * @property integer $agreementId
 * @property integer $id
 * @property string $billCustomer
 * @property string $description
 * @property string $invoiceDescription
 * @property string $serialNumber
 * @property string $uom
 */
class Addition extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreementId' => 'integer',
        'billCustomer' => 'string',
        'billedQuantity' => 'float',
        'cancelledDate' => Carbon\Carbon::class,
        'customFields' => 'array',
        'description' => 'string',
        'effectiveDate' => Carbon\Carbon::class,
        'extCost' => 'float',
        'extPrice' => 'float',
        'extendedProrateCost' => 'float',
        'extendedProratePrice' => 'float',
        'id' => 'integer',
        'invoiceDescription' => 'string',
        'lessIncluded' => 'float',
        'margin' => 'float',
        'opportunity' => OpportunityReference::class,
        'product' => IvItemReference::class,
        'prorateCost' => 'float',
        'prorateCurrentPeriodFlag' => 'boolean',
        'proratePrice' => 'float',
        'purchaseItemFlag' => 'boolean',
        'quantity' => 'float',
        'sequenceNumber' => 'float',
        'serialNumber' => 'string',
        'specialOrderFlag' => 'boolean',
        'taxableFlag' => 'boolean',
        'unitCost' => 'float',
        'unitPrice' => 'float',
        'uom' => 'string',
    ];
}
