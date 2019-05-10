<?php

namespace Spinen\ConnectWise\Models\v2018_6\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Opportunity Version v2018_6
 *
 * Model for Opportunity
 *
 * @property Carbon\Carbon $closedDate
 * @property Carbon\Carbon $dateBecameLead
 * @property Carbon\Carbon $expectedCloseDate
 * @property Carbon\Carbon $pipelineChangeDate
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\CampaignReference $campaign
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference $closedBy
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference $primarySalesRep
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference $secondarySalesRep
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityPriorityReference $priority
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityProbabilityReference $probability
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityRatingReference $rating
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityStageReference $stage
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2018_6\Sales\TaxCodeReference $taxCode
 * @property array $customFields
 * @property float $totalSalesTax
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 * @property string $customerPO
 * @property string $name
 * @property string $notes
 * @property string $source
 */
class Opportunity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Sales\Metadata',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_6\Sales\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2018_6\Sales\SiteReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_6\Sales\BillingTermsReference',
        'businessUnitId' => 'integer',
        'campaign' => 'Spinen\ConnectWise\Models\v2018_6\Sales\CampaignReference',
        'closedBy' => 'Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference',
        'closedDate' => 'Carbon\Carbon',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ContactReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Sales\CurrencyReference',
        'customFields' => 'array',
        'customerPO' => 'string',
        'dateBecameLead' => 'Carbon\Carbon',
        'expectedCloseDate' => 'Carbon\Carbon',
        'id' => 'integer',
        'locationId' => 'integer',
        'name' => 'string',
        'notes' => 'string',
        'pipelineChangeDate' => 'Carbon\Carbon',
        'primarySalesRep' => 'Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference',
        'priority' => 'Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityPriorityReference',
        'probability' => 'Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityProbabilityReference',
        'rating' => 'Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityRatingReference',
        'secondarySalesRep' => 'Spinen\ConnectWise\Models\v2018_6\Sales\MemberReference',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2018_6\Sales\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2018_6\Sales\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2018_6\Sales\SiteReference',
        'site' => 'Spinen\ConnectWise\Models\v2018_6\Sales\SiteReference',
        'source' => 'string',
        'stage' => 'Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityStageReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityStatusReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_6\Sales\TaxCodeReference',
        'totalSalesTax' => 'float',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Sales\OpportunityTypeReference',
    ];
}
