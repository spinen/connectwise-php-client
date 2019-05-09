<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingTerm Version v2018_5
 * 
 * Model for BillingTerm
 *
 * @property integer $id
 * @property string $name
 * @property boolean $defaultFlag
 * @property integer $dueDays
 * @property string $termsXref
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
