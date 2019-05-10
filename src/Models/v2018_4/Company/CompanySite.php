<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanySite Version v2018_4
 *
 * Model for CompanySite
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CalendarReference $calendar
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Company\TimeZoneSetupReference $timeZone
 * @property boolean $defaultBillingFlag
 * @property boolean $defaultMailingFlag
 * @property boolean $defaultShippingFlag
 * @property boolean $inactiveFlag
 * @property boolean $primaryAddressFlag
 * @property float $expenseReimbursement
 * @property integer $id
 * @property integer $taxCodeId
 * @property string $addressFormat
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $faxNumber
 * @property string $name
 * @property string $phoneNumber
 * @property string $state
 * @property string $zip
 */
class CompanySite extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
        'addressFormat' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'calendar' => 'Spinen\ConnectWise\Models\v2018_4\Company\CalendarReference',
        'city' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference',
        'country' => 'Spinen\ConnectWise\Models\v2018_4\Company\CountryReference',
        'defaultBillingFlag' => 'boolean',
        'defaultMailingFlag' => 'boolean',
        'defaultShippingFlag' => 'boolean',
        'expenseReimbursement' => 'float',
        'faxNumber' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_4\Company\Guid',
        'name' => 'string',
        'phoneNumber' => 'string',
        'primaryAddressFlag' => 'boolean',
        'state' => 'string',
        'taxCodeId' => 'integer',
        'timeZone' => 'Spinen\ConnectWise\Models\v2018_4\Company\TimeZoneSetupReference',
        'zip' => 'string',
    ];
}
