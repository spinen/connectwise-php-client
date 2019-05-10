<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkType Version v2019_1
 * 
 * Model for AgreementWorkType
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\WorkTypeReference $workType
 * @property integer $locationId
 * @property string $rateType
 * @property string $billTime
 * @property float $rate
 * @property float $hoursMax
 * @property float $hoursMin
 * @property float $roundBillHours
 * @property float $overageRate
 * @property string $overageRateType
 * @property float $agreementLimit
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference $site
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property integer $agreementId
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
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
        'workType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\WorkTypeReference',
        'locationId' => 'integer',
        'rateType' => 'string',
        'billTime' => 'string',
        'rate' => 'float',
        'hoursMax' => 'float',
        'hoursMin' => 'float',
        'roundBillHours' => 'float',
        'overageRate' => 'float',
        'overageRateType' => 'string',
        'agreementLimit' => 'float',
        'site' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference',
        'effectiveDate' => 'Carbon\Carbon',
        'endingDate' => 'Carbon\Carbon',
        'agreementId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
