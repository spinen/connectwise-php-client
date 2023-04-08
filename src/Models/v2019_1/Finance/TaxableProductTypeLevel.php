<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableProductTypeLevel Version v2019_1
 *
 * Model for TaxableProductTypeLevel
 *
 * @property Metadata $_info
 * @property TaxCodeLevelReference $taxCodeLevel
 * @property int $id
 */
class TaxableProductTypeLevel extends Model
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
