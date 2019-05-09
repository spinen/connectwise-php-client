<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Adjustment Version v2018_4
 * 
 * Model for Adjustment
 *
 * @property integer $id
 * @property number $amount
 * @property string $description
 * @property string $effectiveDate
 * @property integer $agreementId
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 * @property array $customFields
 */
class Adjustment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amount' => 'number',
        'description' => 'string',
        'effectiveDate' => 'string',
        'agreementId' => 'integer',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
        'customFields' => 'array',
    ];
}
