<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanySite Version v2019_2
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
 * @property Spinen\ConnectWise\Models\v2019_2\Company\CountryReference $country
 * @property string $addressFormat
 * @property string $phoneNumber
 * @property string $faxNumber
 * @property integer $taxCodeId
 * @property Spinen\ConnectWise\Models\v2019_2\Company\EntityTypeReference $entityType
 * @property number $expenseReimbursement
 * @property boolean $primaryAddressFlag
 * @property boolean $defaultShippingFlag
 * @property boolean $defaultBillingFlag
 * @property boolean $defaultMailingFlag
 * @property boolean $inactiveFlag
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_2\Company\CalendarReference $calendar
 * @property Spinen\ConnectWise\Models\v2019_2\Company\TimeZoneSetupReference $timeZone
 * @property Spinen\ConnectWise\Models\v2019_2\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
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
        'country' => 'Spinen\ConnectWise\Models\v2019_2\Company\CountryReference',
        'addressFormat' => 'string',
        'phoneNumber' => 'string',
        'faxNumber' => 'string',
        'taxCodeId' => 'integer',
        'entityType' => 'Spinen\ConnectWise\Models\v2019_2\Company\EntityTypeReference',
        'expenseReimbursement' => 'number',
        'primaryAddressFlag' => 'boolean',
        'defaultShippingFlag' => 'boolean',
        'defaultBillingFlag' => 'boolean',
        'defaultMailingFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_2\Company\Guid',
        'calendar' => 'Spinen\ConnectWise\Models\v2019_2\Company\CalendarReference',
        'timeZone' => 'Spinen\ConnectWise\Models\v2019_2\Company\TimeZoneSetupReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Company\CompanyReference',
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
    ];
}
