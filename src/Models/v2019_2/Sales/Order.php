<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Order Version v2019_2
 * 
 * Model for Order
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference $contact
 * @property string $phone
 * @property string $phoneExt
 * @property string $email
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\OrderStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityReference $opportunity
 * @property Carbon\Carbon $orderDate
 * @property Carbon\Carbon $dueDate
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\TaxCodeReference $taxCode
 * @property string $poNumber
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference $salesRep
 * @property string $notes
 * @property boolean $billClosedFlag
 * @property boolean $billShippedFlag
 * @property boolean $restrictDownpaymentFlag
 * @property string $description
 * @property boolean $topCommentFlag
 * @property boolean $bottomCommentFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference $billToSite
 * @property array $productIds
 * @property array $documentIds
 * @property array $invoiceIds
 * @property array $configIds
 * @property float $total
 * @property float $taxTotal
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CurrencyReference $currency
 * @property integer $companyLocationId
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\Metadata $_info
 * @property array $customFields
 */
class Order extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference',
        'phone' => 'string',
        'phoneExt' => 'string',
        'email' => 'string',
        'site' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_2\Sales\OrderStatusReference',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityReference',
        'orderDate' => 'Carbon\Carbon',
        'dueDate' => 'Carbon\Carbon',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_2\Sales\BillingTermsReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Sales\TaxCodeReference',
        'poNumber' => 'string',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'salesRep' => 'Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference',
        'notes' => 'string',
        'billClosedFlag' => 'boolean',
        'billShippedFlag' => 'boolean',
        'restrictDownpaymentFlag' => 'boolean',
        'description' => 'string',
        'topCommentFlag' => 'boolean',
        'bottomCommentFlag' => 'boolean',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference',
        'productIds' => 'array',
        'documentIds' => 'array',
        'invoiceIds' => 'array',
        'configIds' => 'array',
        'total' => 'float',
        'taxTotal' => 'float',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CurrencyReference',
        'companyLocationId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Sales\Metadata',
        'customFields' => 'array',
    ];
}
