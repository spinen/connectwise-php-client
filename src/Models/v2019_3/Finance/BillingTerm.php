<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingTerm Version v2019_3
 *
 * Model for BillingTerm
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $dueDays
 * @property integer $id
 * @property string $name
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'defaultFlag' => 'boolean',
        'dueDays' => 'integer',
        'id' => 'integer',
        'name' => 'string',
        'termsXref' => 'string',
    ];
}
