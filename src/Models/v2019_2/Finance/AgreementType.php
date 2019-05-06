<?php

namespace Spinen\ConnectWise\Models\v2019_2\Finance;

use Spinen\ConnectWise\Support\Model;

class AgreementType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'prefixSuffixOption' => 'string',
        'defaultFlag' => 'boolean',
        'inactiveFlag' => 'boolean',
        'prePaymentFlag' => 'boolean',
        'invoicePreSuffix' => 'string',
        'restrictLocationFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'applicationUnits' => 'string',
        'applicationLimit' => 'double',
        'applicationCycle' => 'string',
        'applicationUnlimitedFlag' => 'boolean',
        'oneTimeFlag' => 'boolean',
        'coverAgreementTimeFlag' => 'boolean',
        'coverAgreementProductFlag' => 'boolean',
        'coverAgreementExpenseFlag' => 'boolean',
        'coverSalesTaxFlag' => 'boolean',
        'carryOverUnusedFlag' => 'boolean',
        'allowOverrunsFlag' => 'boolean',
        'expiredDays' => 'integer',
        'limit' => 'integer',
        'expireWhenZero' => 'boolean',
        'chargeToFirmFlag' => 'boolean',
        'employeeCompRate' => 'string',
        'employeeCompNotExceed' => 'string',
        'compHourlyRate' => 'double',
        'compLimitAmount' => 'double',
        'billOneTimeFlag' => 'boolean',
        'invoicingCycle' => 'string',
        'billAmount' => 'double',
        'taxableFlag' => 'boolean',
        'restrictDownPaymentFlag' => 'boolean',
        'invoiceDescription' => 'string',
        'topCommentFlag' => 'boolean',
        'bottomCommentFlag' => 'boolean',
        'billTime' => 'string',
        'billExpenses' => 'string',
        'billProducts' => 'string',
        'billableTimeInvoiceFlag' => 'boolean',
        'billableExpenseInvoiceFlag' => 'boolean',
        'billableProductInvoiceFlag' => 'boolean',
        'copyWorkRolesFlag' => 'boolean',
        'copyWorkTypesFlag' => 'boolean',
        'exclusionWorkRoleIds' => 'array',
        'addAllWorkRoleExclusions' => 'boolean',
        'removeAllWorkRoleExclusions' => 'boolean',
        'exclusionWorkTypeIds' => 'array',
        'addAllWorkTypeExclusions' => 'boolean',
        'removeAllWorkTypeExclusions' => 'boolean',
        'integrationXRef' => 'string',
        'prorateFlag' => 'boolean',
    ];
}
