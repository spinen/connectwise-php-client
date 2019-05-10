<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Opportunity Version v2019_2
 *
 * Model for Opportunity
 *
 * @property BillingTermsReference $billingTerms
 * @property CampaignReference $campaign
 * @property Carbon\Carbon $closedDate
 * @property Carbon\Carbon $dateBecameLead
 * @property Carbon\Carbon $expectedCloseDate
 * @property Carbon\Carbon $pipelineChangeDate
 * @property CompanyReference $billToCompany
 * @property CompanyReference $company
 * @property CompanyReference $shipToCompany
 * @property ContactReference $billToContact
 * @property ContactReference $contact
 * @property ContactReference $shipToContact
 * @property CurrencyReference $currency
 * @property MemberReference $closedBy
 * @property MemberReference $primarySalesRep
 * @property MemberReference $secondarySalesRep
 * @property Metadata $_info
 * @property OpportunityPriorityReference $priority
 * @property OpportunityProbabilityReference $probability
 * @property OpportunityRatingReference $rating
 * @property OpportunityStageReference $stage
 * @property OpportunityStatusReference $status
 * @property OpportunityTypeReference $type
 * @property SiteReference $billToSite
 * @property SiteReference $shipToSite
 * @property SiteReference $site
 * @property TaxCodeReference $taxCode
 * @property array $customFields
 * @property float $totalSalesTax
 * @property integer $businessUnitId
 * @property integer $companyLocationId
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
        '_info' => Metadata::class,
        'billToCompany' => CompanyReference::class,
        'billToContact' => ContactReference::class,
        'billToSite' => SiteReference::class,
        'billingTerms' => BillingTermsReference::class,
        'businessUnitId' => 'integer',
        'campaign' => CampaignReference::class,
        'closedBy' => MemberReference::class,
        'closedDate' => Carbon\Carbon::class,
        'company' => CompanyReference::class,
        'companyLocationId' => 'integer',
        'contact' => ContactReference::class,
        'currency' => CurrencyReference::class,
        'customFields' => 'array',
        'customerPO' => 'string',
        'dateBecameLead' => Carbon\Carbon::class,
        'expectedCloseDate' => Carbon\Carbon::class,
        'id' => 'integer',
        'locationId' => 'integer',
        'name' => 'string',
        'notes' => 'string',
        'pipelineChangeDate' => Carbon\Carbon::class,
        'primarySalesRep' => MemberReference::class,
        'priority' => OpportunityPriorityReference::class,
        'probability' => OpportunityProbabilityReference::class,
        'rating' => OpportunityRatingReference::class,
        'secondarySalesRep' => MemberReference::class,
        'shipToCompany' => CompanyReference::class,
        'shipToContact' => ContactReference::class,
        'shipToSite' => SiteReference::class,
        'site' => SiteReference::class,
        'source' => 'string',
        'stage' => OpportunityStageReference::class,
        'status' => OpportunityStatusReference::class,
        'taxCode' => TaxCodeReference::class,
        'totalSalesTax' => 'float',
        'type' => OpportunityTypeReference::class,
    ];
}
