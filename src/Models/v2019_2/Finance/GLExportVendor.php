<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportVendor Version v2019_2
 *
 * Model for GLExportVendor
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $vendor
 * @property string $vendorNumber
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\ContactReference $contact
 * @property string $accountNumber
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\BillingTermsReference $billingTerms
 * @property integer $dueDays
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference $taxCode
 */
class GLExportVendor extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Finance\MemberReference',
        'vendor' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'vendorNumber' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Finance\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Finance\ContactReference',
        'accountNumber' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2019_2\Finance\BillingTermsReference',
        'dueDays' => 'integer',
        'site' => 'Spinen\ConnectWise\Models\v2019_2\Finance\SiteReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2019_2\Finance\TaxCodeReference',
    ];
}
