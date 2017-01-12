<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class AgreementType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'                         => 'integer',
        'name'                       => 'string',
        //        'prefixSuffixOption'         => 'Enum',
        'defaultFlag'                => 'boolean',
        'inactiveFlag'               => 'boolean',
        'prePaymentFlag'             => 'boolean',
        'invoicePreSuffix'           => 'string',
        'locationId'                 => 'integer',
        'businessUnitId'             => 'integer',
        'restrictLocationFlag'       => 'boolean',
        'restrictDepartmentFlag'     => 'boolean',
        'slaId'                      => 'integer',
        //        'applicationUnits'           => 'Enum',
        'applicationLimit'           => 'double',
        //        'applicationCycle'           => 'Enum',
        'applicationUnlimitedFlag'   => 'boolean',
        'oneTimeFlag'                => 'boolean',
        'coverAgreementTimeFlag'     => 'boolean',
        'coverAgreementProductFlag'  => 'boolean',
        'coverAgreementExpenseFlag'  => 'boolean',
        'coverSalesTaxFlag'          => 'boolean',
        'carryOverUnusedFlag'        => 'boolean',
        'allowOverrunsFlag'          => 'boolean',
        'expiredDays'                => 'integer',
        'limit'                      => 'integer',
        'expireWhenZero'             => 'boolean',
        'chargeToFirmFlag'           => 'boolean',
        //        'employeeCompRate'           => 'Enum',
        //        'employeeCompNotExceed'      => 'Enum',
        'compHourlyRate'             => 'double',
        'compLimitAmount'            => 'double',
        'billCycleId'                => 'integer',
        'billOneTimeFlag'            => 'boolean',
        'billTermsId'                => 'integer',
        //        'invoicingCycle'             => 'Enum',
        'billAmount'                 => 'double',
        'taxableFlag'                => 'boolean',
        'restrictDownPaymentFlag'    => 'boolean',
        'invoiceDescription'         => 'string',
        'topCommentFlag'             => 'boolean',
        'bottomCommentFlag'          => 'boolean',
        //        'workRole'                   => 'WorkRoleReference',
        //        'workType'                   => 'WorkTypeReference',
        'projectTypeId'              => 'integer',
        'invoiceTemplateSetupId'     => 'integer',
        //        'billTime'                   => 'Enum',
        //        'billExpenses'               => 'Enum',
        //        'billProducts'               => 'Enum',
        'billableTimeInvoiceFlag'    => 'boolean',
        'billableExpenseInvoiceFlag' => 'boolean',
        'billableProductInvoiceFlag' => 'boolean',
        'copyWorkRolesFlag'          => 'boolean',
        'copyWorkTypesFlag'          => 'boolean',
        //        '_info'                      => 'Metadata',
    ];
}
