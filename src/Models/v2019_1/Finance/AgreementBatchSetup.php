<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementBatchSetup Version v2019_1
 *
 * Model for AgreementBatchSetup
 *
 * @property Carbon\Carbon $nextRunDate
 * @property Metadata $_info
 * @property integer $daysInAdvance
 * @property integer $id
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
        'nextRunDate' => Carbon\Carbon::class,
    ];
}
