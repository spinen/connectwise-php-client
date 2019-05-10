<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Order Version v2018_4
 *
 * Model for Order
 *
 * @property Carbon\Carbon $dueDate
 * @property Carbon\Carbon $orderDate
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\MemberReference $salesRep
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\OrderStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\TaxCodeReference $taxCode
 * @property array $configIds
 * @property array $documentIds
 * @property array $invoiceIds
 * @property array $productIds
 * @property boolean $billClosedFlag
 * @property boolean $billShippedFlag
 * @property boolean $bottomCommentFlag
 * @property boolean $restrictDownpaymentFlag
 * @property boolean $topCommentFlag
 * @property float $taxTotal
 * @property float $total
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Sales\Metadata',
        'billClosedFlag' => 'boolean',
        'billShippedFlag' => 'boolean',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_4\Sales\BillingTermsReference',
        'bottomCommentFlag' => 'boolean',
        'businessUnitId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference',
        'configIds' => 'array',
        'contact' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_4\Sales\CurrencyReference',
        'description' => 'string',
        'documentIds' => 'array',
        'dueDate' => 'Carbon\Carbon',
        'email' => 'string',
        'id' => 'integer',
        'invoiceIds' => 'array',
        'locationId' => 'integer',
        'notes' => 'string',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_4\Sales\OpportunityReference',
        'orderDate' => 'Carbon\Carbon',
        'phone' => 'string',
        'phoneExt' => 'string',
        'poNumber' => 'string',
        'productIds' => 'array',
        'restrictDownpaymentFlag' => 'boolean',
        'salesRep' => 'Spinen\ConnectWise\Models\v2018_4\Sales\MemberReference',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2018_4\Sales\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2018_4\Sales\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference',
        'site' => 'Spinen\ConnectWise\Models\v2018_4\Sales\SiteReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Sales\OrderStatusReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Sales\TaxCodeReference',
        'taxTotal' => 'float',
        'topCommentFlag' => 'boolean',
        'total' => 'float',
    ];
}
