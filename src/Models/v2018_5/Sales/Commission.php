<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Commission Version v2018_5
 *
 * Model for Commission
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\AgreementTypeReference $agreementType
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\BoardReference $serviceBoard
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\IvItemReference $item
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ProductCategoryReference $productCategory
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ProductSubCategoryReference $productSubCategory
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ProjectBoardReference $projectBoard
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ProjectReference $project
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ProjectTypeReference $projectType
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ServiceTypeReference $serviceType
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SystemLocationReference $location
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\SystemLocationReference $territory
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\TicketReference $ticket
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_5\Sales\AgreementReference',
        'agreementType' => 'Spinen\ConnectWise\Models\v2018_5\Sales\AgreementTypeReference',
        'agreementsFlag' => 'boolean',
        'billingMethod' => 'string',
        'commissionBasis' => 'string',
        'commissionPercent' => 'float',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference',
        'dateEnd' => 'Carbon\Carbon',
        'dateStart' => 'Carbon\Carbon',
        'department' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SystemDepartmentReference',
        'id' => 'integer',
        'invoiceOption' => 'string',
        'item' => 'Spinen\ConnectWise\Models\v2018_5\Sales\IvItemReference',
        'location' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SystemLocationReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference',
        'myOpportunitiesFlag' => 'boolean',
        'numberOfMonths' => 'integer',
        'productCategory' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ProductCategoryReference',
        'productSubCategory' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ProductSubCategoryReference',
        'productsFlag' => 'boolean',
        'project' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ProjectReference',
        'projectBoard' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ProjectBoardReference',
        'projectType' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ProjectTypeReference',
        'serviceBoard' => 'Spinen\ConnectWise\Models\v2018_5\Sales\BoardReference',
        'serviceType' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ServiceTypeReference',
        'servicesFlag' => 'boolean',
        'site' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SiteReference',
        'territory' => 'Spinen\ConnectWise\Models\v2018_5\Sales\SystemLocationReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2018_5\Sales\TicketReference',
    ];
}
