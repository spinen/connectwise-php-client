<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Opportunity Version v2019_1
 * 
 * Model for Opportunity
 *
 * @property integer $id
 * @property string $name
 * @property string $expectedCloseDate
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityStageReference $stage
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityStatusReference $status
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityPriorityReference $priority
 * @property string $notes
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityProbabilityReference $probability
 * @property string $source
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityRatingReference $rating
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CampaignReference $campaign
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference $primarySalesRep
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference $secondarySalesRep
 * @property integer $locationId
 * @property integer $businessUnitId
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\SiteReference $site
 * @property string $customerPO
 * @property string $pipelineChangeDate
 * @property string $dateBecameLead
 * @property string $closedDate
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference $closedBy
 * @property number $totalSalesTax
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference $shipToCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference $shipToContact
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\SiteReference $shipToSite
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference $billToContact
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\TaxCodeReference $taxCode
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
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
        'expectedCloseDate' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityTypeReference',
        'stage' => 'Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityStageReference',
        'status' => 'Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityStatusReference',
        'priority' => 'Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityPriorityReference',
        'notes' => 'string',
        'probability' => 'Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityProbabilityReference',
        'source' => 'string',
        'rating' => 'Spinen\ConnectWise\Models\v2019_1\Sales\OpportunityRatingReference',
        'campaign' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CampaignReference',
        'primarySalesRep' => 'Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference',
        'secondarySalesRep' => 'Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference',
        'locationId' => 'integer',
        'businessUnitId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_1\Sales\SiteReference',
        'customerPO' => 'string',
        'pipelineChangeDate' => 'string',
        'dateBecameLead' => 'string',
        'closedDate' => 'string',
        'closedBy' => 'Spinen\ConnectWise\Models\v2019_1\Sales\MemberReference',
        'totalSalesTax' => 'number',
        'shipToCompany' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference',
        'shipToContact' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference',
        'shipToSite' => 'Spinen\ConnectWise\Models\v2019_1\Sales\SiteReference',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CompanyReference',
        'billToContact' => 'Spinen\ConnectWise\Models\v2019_1\Sales\ContactReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2019_1\Sales\SiteReference',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_1\Sales\BillingTermsReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_1\Sales\TaxCodeReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Sales\CurrencyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
        'customFields' => 'array',
    ];
}
