<?php

namespace Spinen\ConnectWise\Models\v2019_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanySite Version v2019_5
 *
 * Model for CompanySite
 *
 * @property CalendarReference $calendar
 * @property CompanyReference $company
 * @property CountryReference $country
 * @property EntityTypeReference $entityType
 * @property Guid $mobileGuid
 * @property Metadata $_info
 * @property StateReference $stateReference
 * @property TaxCodeReference $taxCode
 * @property TimeZoneSetupReference $timeZone
 * @property bool $defaultBillingFlag
 * @property bool $defaultMailingFlag
 * @property bool $defaultShippingFlag
 * @property bool $inactiveFlag
 * @property bool $primaryAddressFlag
 * @property float $expenseReimbursement
 * @property int $id
 * @property string $addressFormat
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $city
 * @property string $faxNumber
 * @property string $name
 * @property string $phoneNumber
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
        '_info' => Metadata::class,
        'addressFormat' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'calendar' => CalendarReference::class,
        'city' => 'string',
        'company' => CompanyReference::class,
        'country' => CountryReference::class,
        'defaultBillingFlag' => 'boolean',
        'defaultMailingFlag' => 'boolean',
        'defaultShippingFlag' => 'boolean',
        'entityType' => EntityTypeReference::class,
        'expenseReimbursement' => 'float',
        'faxNumber' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'mobileGuid' => Guid::class,
        'name' => 'string',
        'phoneNumber' => 'string',
        'primaryAddressFlag' => 'boolean',
        'stateReference' => StateReference::class,
        'taxCode' => TaxCodeReference::class,
        'timeZone' => TimeZoneSetupReference::class,
        'zip' => 'string',
    ];
}
