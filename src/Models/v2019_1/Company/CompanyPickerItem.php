<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyPickerItem Version v2019_1
 *
 * Model for CompanyPickerItem
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyStatusReference $companyStatus
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyTypeReference $companyType
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CountryReference $companyCountry
 * @property Spinen\ConnectWise\Models\v2019_1\Company\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Company\SiteReference $companySite
 * @property Spinen\ConnectWise\Models\v2019_1\Company\SystemLocationReference $companyLocation
 * @property boolean $vendorPickerFlag
 * @property integer $id
 */
class CompanyPickerItem extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyReference',
        'companyCountry' => 'Spinen\ConnectWise\Models\v2019_1\Company\CountryReference',
        'companyLocation' => 'Spinen\ConnectWise\Models\v2019_1\Company\SystemLocationReference',
        'companySite' => 'Spinen\ConnectWise\Models\v2019_1\Company\SiteReference',
        'companyStatus' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyStatusReference',
        'companyType' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyTypeReference',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Company\MemberReference',
        'vendorPickerFlag' => 'boolean',
    ];
}
