<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkType Version v2018_6
 *
 * Model for AgreementWorkType
 *
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property CompanyReference $company
 * @property Metadata $_info
 * @property SiteReference $site
 * @property WorkTypeReference $workType
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
        '_info' => Metadata::class,
        'agreementId' => 'integer',
        'agreementLimit' => 'float',
        'billTime' => 'string',
        'company' => CompanyReference::class,
        'effectiveDate' => Carbon\Carbon::class,
        'endingDate' => Carbon\Carbon::class,
        'hoursMax' => 'float',
        'hoursMin' => 'float',
        'id' => 'integer',
        'locationId' => 'integer',
        'overageRate' => 'float',
        'overageRateType' => 'string',
        'rate' => 'float',
        'rateType' => 'string',
        'roundBillHours' => 'float',
        'site' => SiteReference::class,
        'workType' => WorkTypeReference::class,
    ];
}
