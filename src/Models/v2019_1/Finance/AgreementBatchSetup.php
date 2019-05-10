<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementBatchSetup Version v2019_1
 *
 * Model for AgreementBatchSetup
 *
 * @property integer $id
 * @property Carbon\Carbon $nextRunDate
 * @property integer $daysInAdvance
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 */
class AgreementBatchSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nextRunDate' => 'Carbon\Carbon',
        'daysInAdvance' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
    ];
}
