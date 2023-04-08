<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementBatchSetup Version v2019_2
 *
 * Model for AgreementBatchSetup
 *
 * @property Carbon $nextRunDate
 * @property Metadata $_info
 * @property int $daysInAdvance
 * @property int $id
 */
class AgreementBatchSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'daysInAdvance' => 'integer',
        'id' => 'integer',
        'nextRunDate' => Carbon::class,
    ];
}
