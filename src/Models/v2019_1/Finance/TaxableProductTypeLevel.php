<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxableProductTypeLevel
 *
 * @property integer $id
 */
class TaxableProductTypeLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
