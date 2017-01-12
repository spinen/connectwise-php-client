<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class AccountingUnpostedExpense extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'                     => 'integer',
        'locationId'             => 'integer',
        'departmentId'           => 'integer',
        //        'company'                => 'CompanyReference',
        'accountNumber'          => 'string',
        'creditAccount'          => 'string',
        'expenseDetailId'        => 'integer',
        //        'expenseType'            => 'ExpenseTypeReference',
        //        'classification'         => 'Enum',
        //        'glType'                 => 'Enum',
        //        'member'                 => 'MemberReference',
        'dateExpense'            => 'carbon',
        //        'chargeCode'             => 'ChargeCodeReference',
        'chargeDescription'      => 'string',
        'inPolicy'               => 'boolean',
        //        'paymentMethod'          => 'PaymentMethodReference',
        //        'currency'               => 'CurrencyReference',
        'total'                  => 'double',
        'billableAmount'         => 'double',
        'nonBillableAmount'      => 'double',
        //        'agreement'              => 'AgreementReference',
        'agreementAmountCovered' => 'double',
        //        'ticket'                 => 'TicketReference',
        //        'project'                => 'ProjectReference',
        //        'projectPhase'           => 'ProjectPhaseReference',
        //        'taxCode'                => 'TaxCodeReference',
        'avalaraTaxFlag'         => 'boolean',
        'itemTaxableFlag'        => 'boolean',
        'salesTaxAmount'         => 'double',
        'stateTaxFlag'           => 'boolean',
        'stateTaxXref'           => 'string',
        'stateTaxAmount'         => 'double',
        'countyTaxFlag'          => 'boolean',
        'countyTaxXref'          => 'string',
        'countyTaxAmount'        => 'double',
        'cityTaxFlag'            => 'boolean',
        'cityTaxXref'            => 'string',
        'cityTaxAmount'          => 'double',
        'countryTaxFlag'         => 'boolean',
        'countryTaxXref'         => 'string',
        'countryTaxAmount'       => 'double',
        'compositeTaxFlag'       => 'boolean',
        'compositeTaxXref'       => 'string',
        'compositeTaxAmount'     => 'double',
        'dateClosed'             => 'carbon',
        //        '_info'                  => 'Metadata',
    ];
}
