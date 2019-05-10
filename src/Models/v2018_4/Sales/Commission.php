<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Commission Version v2018_4
 *
 * Model for Commission
 *
 * @property AgreementReference $agreement
 * @property AgreementTypeReference $agreementType
 * @property BoardReference $serviceBoard
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property CompanyReference $company
 * @property IvItemReference $item
 * @property MemberReference $member
 * @property Metadata $_info
 * @property ProductCategoryReference $productCategory
 * @property ProductSubCategoryReference $productSubCategory
 * @property ProjectBoardReference $projectBoard
 * @property ProjectReference $project
 * @property ProjectTypeReference $projectType
 * @property ServiceTypeReference $serviceType
 * @property SiteReference $site
 * @property SystemDepartmentReference $department
 * @property SystemLocationReference $location
 * @property SystemLocationReference $territory
 * @property TicketReference $ticket
 * @property boolean $agreementsFlag
 * @property boolean $myOpportunitiesFlag
 * @property boolean $productsFlag
 * @property boolean $servicesFlag
 * @property float $commissionPercent
 * @property integer $id
 * @property integer $numberOfMonths
 * @property string $billingMethod
 * @property string $commissionBasis
 * @property string $invoiceOption
 */
class Commission extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreement' => AgreementReference::class,
        'agreementType' => AgreementTypeReference::class,
        'agreementsFlag' => 'boolean',
        'billingMethod' => 'string',
        'commissionBasis' => 'string',
        'commissionPercent' => 'float',
        'company' => CompanyReference::class,
        'dateEnd' => Carbon\Carbon::class,
        'dateStart' => Carbon\Carbon::class,
        'department' => SystemDepartmentReference::class,
        'id' => 'integer',
        'invoiceOption' => 'string',
        'item' => IvItemReference::class,
        'location' => SystemLocationReference::class,
        'member' => MemberReference::class,
        'myOpportunitiesFlag' => 'boolean',
        'numberOfMonths' => 'integer',
        'productCategory' => ProductCategoryReference::class,
        'productSubCategory' => ProductSubCategoryReference::class,
        'productsFlag' => 'boolean',
        'project' => ProjectReference::class,
        'projectBoard' => ProjectBoardReference::class,
        'projectType' => ProjectTypeReference::class,
        'serviceBoard' => BoardReference::class,
        'serviceType' => ServiceTypeReference::class,
        'servicesFlag' => 'boolean',
        'site' => SiteReference::class,
        'territory' => SystemLocationReference::class,
        'ticket' => TicketReference::class,
    ];
}
