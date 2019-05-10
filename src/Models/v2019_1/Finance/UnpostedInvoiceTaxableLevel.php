<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class UnpostedInvoiceTaxableLevel Version v2019_1
 *
 * Model for UnpostedInvoiceTaxableLevel
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 * @property float $taxAmount
 * @property integer $id
 * @property integer $taxLevel
 * @property string $taxCodeXref
 */
class UnpostedInvoiceTaxableLevel extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
        'id' => 'integer',
        'taxAmount' => 'float',
        'taxCodeXref' => 'string',
        'taxLevel' => 'integer',
    ];
}
