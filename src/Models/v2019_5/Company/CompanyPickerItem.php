<?php

namespace Spinen\ConnectWise\Models\v2019_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyPickerItem Version v2019_5
 *
 * Model for CompanyPickerItem
 *
 * @property CompanyReference $company
 * @property CompanyStatusReference $companyStatus
 * @property CompanyTypeReference $companyType
 * @property CountryReference $companyCountry
 * @property MemberReference $member
 * @property Metadata $_info
 * @property SiteReference $companySite
 * @property SystemLocationReference $companyLocation
 * @property bool $vendorPickerFlag
 * @property int $id
 */
class CompanyPickerItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'company' => CompanyReference::class,
        'companyCountry' => CountryReference::class,
        'companyLocation' => SystemLocationReference::class,
        'companySite' => SiteReference::class,
        'companyStatus' => CompanyStatusReference::class,
        'companyType' => CompanyTypeReference::class,
        'id' => 'integer',
        'member' => MemberReference::class,
        'vendorPickerFlag' => 'boolean',
    ];
}
