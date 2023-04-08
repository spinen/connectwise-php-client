<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkRole Version v2018_6
 *
 * Model for AgreementTypeWorkRole
 *
 * @property AgreementTypeReference $type
 * @property Carbon $effectiveDate
 * @property Carbon $endingDate
 * @property Metadata $_info
 * @property WorkRoleReference $workRole
 * @property float $rate
 * @property int $id
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
        'effectiveDate' => Carbon::class,
        'endingDate' => Carbon::class,
        'id' => 'integer',
        'rate' => 'float',
        'rateType' => 'string',
        'type' => AgreementTypeReference::class,
        'workRole' => WorkRoleReference::class,
    ];
}
