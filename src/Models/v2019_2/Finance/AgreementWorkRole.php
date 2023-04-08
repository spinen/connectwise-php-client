<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkRole Version v2019_2
 *
 * Model for AgreementWorkRole
 *
 * @property Carbon $effectiveDate
 * @property Carbon $endingDate
 * @property Metadata $_info
 * @property WorkRoleReference $workRole
 * @property float $limitTo
 * @property float $rate
 * @property int $agreementId
 * @property int $id
 * @property int $locationId
 * @property string $rateType
 */
class AgreementWorkRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreementId' => 'integer',
        'effectiveDate' => Carbon::class,
        'endingDate' => Carbon::class,
        'id' => 'integer',
        'limitTo' => 'float',
        'locationId' => 'integer',
        'rate' => 'float',
        'rateType' => 'string',
        'workRole' => WorkRoleReference::class,
    ];
}
