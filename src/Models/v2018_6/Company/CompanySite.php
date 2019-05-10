<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanySite Version v2018_6
 *
 * Model for CompanySite
 *
 * @property integer $id
 * @property string $name
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property Spinen\ConnectWise\Models\v2018_6\Company\CountryReference $country
 * @property string $addressFormat
 * @property string $phoneNumber
 * @property string $faxNumber
 * @property integer $taxCodeId
 * @property float $expenseReimbursement
 * @property boolean $primaryAddressFlag
 * @property boolean $defaultShippingFlag
 * @property boolean $defaultBillingFlag
 * @property boolean $defaultMailingFlag
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_6\Company\CalendarReference $calendar
 * @property Spinen\ConnectWise\Models\v2018_6\Company\TimeZoneSetupReference $timeZone
 * @property Spinen\ConnectWise\Models\v2018_6\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
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
        'country' => 'Spinen\ConnectWise\Models\v2018_6\Company\CountryReference',
        'addressFormat' => 'string',
        'phoneNumber' => 'string',
        'faxNumber' => 'string',
        'taxCodeId' => 'integer',
        'expenseReimbursement' => 'float',
        'primaryAddressFlag' => 'boolean',
        'defaultShippingFlag' => 'boolean',
        'defaultBillingFlag' => 'boolean',
        'defaultMailingFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_6\Company\Guid',
        'calendar' => 'Spinen\ConnectWise\Models\v2018_6\Company\CalendarReference',
        'timeZone' => 'Spinen\ConnectWise\Models\v2018_6\Company\TimeZoneSetupReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Company\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
    ];
}
