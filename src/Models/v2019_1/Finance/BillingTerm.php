<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingTerm
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property integer $dueDays
 * @property string $termsXref
 */
class BillingTerm extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'defaultFlag' => 'boolean',
        'dueDays' => 'integer',
        'termsXref' => 'string',
    ];
}
