<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Commission
 *
 * @property integer $id
 * @property double $commissionPercent
 * @property carbon $dateStart
 * @property carbon $dateEnd
 * @property string $billingMethod
 * @property integer $numberOfMonths
 * @property string $commissionBasis
 * @property string $invoiceOption
 * @property boolean $servicesFlag
 * @property boolean $agreementsFlag
 * @property boolean $productsFlag
 * @property boolean $myOpportunitiesFlag
 */
class Commission extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'commissionPercent' => 'double',
        'dateStart' => 'carbon',
        'dateEnd' => 'carbon',
        'billingMethod' => 'string',
        'numberOfMonths' => 'integer',
        'commissionBasis' => 'string',
        'invoiceOption' => 'string',
        'servicesFlag' => 'boolean',
        'agreementsFlag' => 'boolean',
        'productsFlag' => 'boolean',
        'myOpportunitiesFlag' => 'boolean',
    ];
}
