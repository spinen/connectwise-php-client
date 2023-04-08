<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class GLExportVendor Version v2018_5
 *
 * Model for GLExportVendor
 *
 * @property BillingTermsReference $billingTerms
 * @property CompanyReference $company
 * @property CompanyReference $vendor
 * @property ContactReference $contact
 * @property MemberReference $member
 * @property SiteReference $site
 * @property TaxCodeReference $taxCode
 * @property int $dueDays
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
        'billingTerms' => BillingTermsReference::class,
        'company' => CompanyReference::class,
        'contact' => ContactReference::class,
        'dueDays' => 'integer',
        'member' => MemberReference::class,
        'site' => SiteReference::class,
        'taxCode' => TaxCodeReference::class,
        'vendor' => CompanyReference::class,
        'vendorNumber' => 'string',
    ];
}
