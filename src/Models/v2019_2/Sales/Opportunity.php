<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Opportunity Version v2019_2
 *
 * Model for Opportunity
 *
 * @property integer $id
 * @property string $name
 * @property Carbon\Carbon $expectedCloseDate
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityStageReference $stage
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityPriorityReference $priority
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityProbabilityReference $probability
 * @property string $source
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityRatingReference $rating
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CampaignReference $campaign
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference $primarySalesRep
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference $secondarySalesRep
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference $site
 * @property string $customerPO
 * @property Carbon\Carbon $pipelineChangeDate
 * @property Carbon\Carbon $dateBecameLead
 * @property Carbon\Carbon $closedDate
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference $closedBy
 * @property float $totalSalesTax
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\CurrencyReference $currency
 * @property integer $companyLocationId
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\Metadata $_info
 * @property array $customFields
 */
class Opportunity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'expectedCloseDate' => 'Carbon\Carbon',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityTypeReference',
        'stage' => 'Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityStageReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityStatusReference',
        'priority' => 'Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityPriorityReference',
        'notes' => 'string',
        'probability' => 'Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityProbabilityReference',
        'source' => 'string',
        'rating' => 'Spinen\ConnectWise\Models\v2019_2\Sales\OpportunityRatingReference',
        'campaign' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CampaignReference',
        'primarySalesRep' => 'Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference',
        'secondarySalesRep' => 'Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference',
        'customerPO' => 'string',
        'pipelineChangeDate' => 'Carbon\Carbon',
        'dateBecameLead' => 'Carbon\Carbon',
        'closedDate' => 'Carbon\Carbon',
        'closedBy' => 'Spinen\ConnectWise\Models\v2019_2\Sales\MemberReference',
        'totalSalesTax' => 'float',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_2\Sales\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_2\Sales\SiteReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_2\Sales\BillingTermsReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Sales\TaxCodeReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_2\Sales\CurrencyReference',
        'companyLocationId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Sales\Metadata',
        'customFields' => 'array',
    ];
}
