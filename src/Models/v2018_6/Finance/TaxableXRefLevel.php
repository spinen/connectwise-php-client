<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableXRefLevel Version v2018_6
 *
 * Model for TaxableXRefLevel
 *
 * @property Metadata $_info
 * @property TaxCodeLevelReference $taxCodeLevel
 * @property int $id
 */
class TaxableXRefLevel extends Model
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
