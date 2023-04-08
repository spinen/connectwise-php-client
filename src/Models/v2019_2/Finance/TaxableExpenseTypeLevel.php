<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableExpenseTypeLevel Version v2019_2
 *
 * Model for TaxableExpenseTypeLevel
 *
 * @property Metadata $_info
 * @property TaxCodeLevelReference $taxCodeLevel
 * @property int $id
 */
class TaxableExpenseTypeLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'taxCodeLevel' => TaxCodeLevelReference::class,
    ];
}
