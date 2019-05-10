<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkRole Version v2019_3
 *
 * Model for AgreementTypeWorkRole
 *
 * @property AgreementTypeReference $type
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property Metadata $_info
 * @property WorkRoleReference $workRole
 * @property float $limitTo
 * @property float $rate
 * @property integer $id
 * @property string $rateType
 */
class AgreementTypeWorkRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'effectiveDate' => Carbon\Carbon::class,
        'endingDate' => Carbon\Carbon::class,
        'id' => 'integer',
        'limitTo' => 'float',
        'rate' => 'float',
        'rateType' => 'string',
        'type' => AgreementTypeReference::class,
        'workRole' => WorkRoleReference::class,
    ];
}
