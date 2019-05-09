<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportVendor Version v2018_4
 * 
 * Model for GLExportVendor
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference $vendor
 * @property string $vendorNumber
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\ContactReference $contact
 * @property string $accountNumber
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\BillingTermsReference $billingTerms
 * @property integer $dueDays
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference $taxCode
 */
class GLExportVendor extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Finance\MemberReference',
        'vendor' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference',
        'vendorNumber' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Finance\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_4\Finance\ContactReference',
        'accountNumber' => 'string',
        'billingTerms' => 'Spinen\ConnectWise\Models\v2018_4\Finance\BillingTermsReference',
        'dueDays' => 'integer',
        'site' => 'Spinen\ConnectWise\Models\v2018_4\Finance\SiteReference',
        'taxCode' => 'Spinen\ConnectWise\Models\v2018_4\Finance\TaxCodeReference',
    ];
}