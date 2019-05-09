<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkType Version v2018_4
 * 
 * Model for AgreementWorkType
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\WorkTypeReference $workType
 * @property integer $locationId
 * @property string $rateType
 * @property string $billTime
 * @property number $rate
 * @property number $hoursMax
 * @property number $hoursMin
 * @property number $roundBillHours
 * @property number $overageRate
 * @property string $overageRateType
 * @property number $agreementLimit
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference $site
 * @property string $effectiveDate
 * @property string $endingDate
 * @property integer $agreementId
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 */
class AgreementWorkType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'workType' => 'Spinen\ConnectWise\Models\v2018_4\Finance\WorkTypeReference',
        'locationId' => 'integer',
        'rateType' => 'string',
        'billTime' => 'string',
        'rate' => 'number',
        'hoursMax' => 'number',
        'hoursMin' => 'number',
        'roundBillHours' => 'number',
        'overageRate' => 'number',
        'overageRateType' => 'string',
        'agreementLimit' => 'number',
        'site' => 'Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference',
        'effectiveDate' => 'string',
        'endingDate' => 'string',
        'agreementId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
    ];
}
