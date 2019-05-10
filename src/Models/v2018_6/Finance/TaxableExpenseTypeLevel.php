<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableExpenseTypeLevel Version v2018_6
 *
 * Model for TaxableExpenseTypeLevel
 *
 * @property integer $id
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeLevelReference $taxCodeLevel
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 */
class TaxableExpenseTypeLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'taxCodeLevel' => 'Spinen\ConnectWise\Models\v2018_6\Finance\TaxCodeLevelReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
    ];
}
