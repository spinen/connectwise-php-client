<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkType Version v2019_2
 *
 * Model for AgreementWorkType
 *
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\WorkTypeReference $workType
 * @property float $agreementLimit
 * @property float $hoursMax
 * @property float $hoursMin
 * @property float $overageRate
 * @property float $rate
 * @property float $roundBillHours
 * @property integer $agreementId
 * @property integer $id
 * @property integer $locationId
 * @property string $billTime
 * @property string $overageRateType
 * @property string $rateType
 */
class AgreementWorkType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Finance\Metadata',
        'agreementId' => 'integer',
        'agreementLimit' => 'float',
        'billTime' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'effectiveDate' => 'Carbon\Carbon',
        'endingDate' => 'Carbon\Carbon',
        'hoursMax' => 'float',
        'hoursMin' => 'float',
        'id' => 'integer',
        'locationId' => 'integer',
        'overageRate' => 'float',
        'overageRateType' => 'string',
        'rate' => 'float',
        'rateType' => 'string',
        'roundBillHours' => 'float',
        'site' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_2\Finance\WorkTypeReference',
    ];
}
