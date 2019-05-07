<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanySite
 *
 * @property integer $id
 * @property string $name
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $addressFormat
 * @property string $phoneNumber
 * @property string $faxNumber
 * @property integer $taxCodeId
 * @property double $expenseReimbursement
 * @property boolean $primaryAddressFlag
 * @property boolean $defaultShippingFlag
 * @property boolean $defaultBillingFlag
 * @property boolean $defaultMailingFlag
 * @property boolean $inactiveFlag
 */
class CompanySite extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'addressFormat' => 'string',
        'phoneNumber' => 'string',
        'faxNumber' => 'string',
        'taxCodeId' => 'integer',
        'expenseReimbursement' => 'double',
        'primaryAddressFlag' => 'boolean',
        'defaultShippingFlag' => 'boolean',
        'defaultBillingFlag' => 'boolean',
        'defaultMailingFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
    ];
}
