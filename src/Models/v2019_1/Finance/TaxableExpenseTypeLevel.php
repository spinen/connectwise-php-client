<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableExpenseTypeLevel Version v2019_1
 *
 * Model for TaxableExpenseTypeLevel
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeLevelReference $taxCodeLevel
 * @property integer $id
 */
class TaxableExpenseTypeLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
        'id' => 'integer',
        'taxCodeLevel' => 'Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeLevelReference',
    ];
}
