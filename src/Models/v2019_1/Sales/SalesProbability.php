<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SalesProbability Version v2019_1
 *
 * Model for SalesProbability
 *
 * @property Metadata $_info
 * @property integer $id
 * @property integer $probability
 */
class SalesProbability extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'probability' => 'integer',
    ];
}
