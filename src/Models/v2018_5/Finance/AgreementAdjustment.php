<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementAdjustment
 *
 * @property integer $id
 * @property double $amount
 * @property string $description
 * @property carbon $effectiveDate
 * @property integer $agreementId
 * @property array $customFields
 */
class AgreementAdjustment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amount' => 'double',
        'description' => 'string',
        'effectiveDate' => 'carbon',
        'agreementId' => 'integer',
        'customFields' => 'array',
    ];
}
