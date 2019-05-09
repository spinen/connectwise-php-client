<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedExpenseTaxableLevel Version v2018_5
 * 
 * Model for UnpostedExpenseTaxableLevel
 *
 * @property integer $id
 * @property integer $taxLevel
 * @property string $taxCodeXref
 * @property number $taxAmount
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 */
class UnpostedExpenseTaxableLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'taxLevel' => 'integer',
        'taxCodeXref' => 'string',
        'taxAmount' => 'number',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}