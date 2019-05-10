<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportVendor Version v2019_1
 *
 * Model for GLExportVendor
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\BillingTermsReference $billingTerms
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeReference $taxCode
 * @property integer $dueDays
 * @property string $accountNumber
 * @property string $vendorNumber
 */
class GLExportVendor extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'accountNumber' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_1\Finance\BillingTermsReference',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_1\Finance\ContactReference',
        'dueDays' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_1\Finance\MemberReference',
        'site' => 'Spinen\ConnectWise\Models\v2019_1\Finance\SiteReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_1\Finance\TaxCodeReference',
        'vendor' => 'Spinen\ConnectWise\Models\v2019_1\Finance\CompanyReference',
        'vendorNumber' => 'string',
    ];
}
