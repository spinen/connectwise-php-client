<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Order Version v2018_6
 *
 * Model for Order
 *
 * @property BillingTermsReference $billingTerms
 * @property Carbon $dueDate
 * @property Carbon $orderDate
 * @property CompanyReference $billToCompany
 * @property CompanyReference $company
 * @property CompanyReference $shipToCompany
 * @property ContactReference $billToContact
 * @property ContactReference $contact
 * @property ContactReference $shipToContact
 * @property CurrencyReference $currency
 * @property MemberReference $salesRep
 * @property Metadata $_info
 * @property OpportunityReference $opportunity
 * @property OrderStatusReference $status
 * @property SiteReference $billToSite
 * @property SiteReference $shipToSite
 * @property SiteReference $site
 * @property TaxCodeReference $taxCode
 * @property array $configIds
 * @property array $documentIds
 * @property array $invoiceIds
 * @property array $productIds
 * @property bool $billClosedFlag
 * @property bool $billShippedFlag
 * @property bool $bottomCommentFlag
 * @property bool $restrictDownpaymentFlag
 * @property bool $topCommentFlag
 * @property float $taxTotal
 * @property float $total
 * @property int $businessUnitId
 * @property int $id
 * @property int $locationId
 * @property string $description
 * @property string $email
 * @property string $notes
 * @property string $phone
 * @property string $phoneExt
 * @property string $poNumber
 */
class Order extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'billClosedFlag' => 'boolean',
        'billShippedFlag' => 'boolean',
        'billToCompany' => CompanyReference::class,
        'billToContact' => ContactReference::class,
        'billToSite' => SiteReference::class,
        'billingTerms' => BillingTermsReference::class,
        'bottomCommentFlag' => 'boolean',
        'businessUnitId' => 'integer',
        'company' => CompanyReference::class,
        'configIds' => 'array',
        'contact' => ContactReference::class,
        'currency' => CurrencyReference::class,
        'description' => 'string',
        'documentIds' => 'array',
        'dueDate' => Carbon::class,
        'email' => 'string',
        'id' => 'integer',
        'invoiceIds' => 'array',
        'locationId' => 'integer',
        'notes' => 'string',
        'opportunity' => OpportunityReference::class,
        'orderDate' => Carbon::class,
        'phone' => 'string',
        'phoneExt' => 'string',
        'poNumber' => 'string',
        'productIds' => 'array',
        'restrictDownpaymentFlag' => 'boolean',
        'salesRep' => MemberReference::class,
        'shipToCompany' => CompanyReference::class,
        'shipToContact' => ContactReference::class,
        'shipToSite' => SiteReference::class,
        'site' => SiteReference::class,
        'status' => OrderStatusReference::class,
        'taxCode' => TaxCodeReference::class,
        'taxTotal' => 'float',
        'topCommentFlag' => 'boolean',
        'total' => 'float',
    ];
}
