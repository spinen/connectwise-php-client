<?php

namespace Spinen\ConnectWise\Models\Expense;

use Spinen\ConnectWise\Support\Model;

class ExpenseEntry extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'             => 'integer',
        //        'company'        => 'CompanyReference',
        'chargeToId'     => 'integer',
        //        'chargeToType'   => 'Enum',
        //        'type'           => 'ExpenseTypeReference',
        //        'member'         => 'MemberReference',
        //        'paymentMethod'  => 'PaymentMethodReference',
        //        'classification' => 'ClassificationReference',
        'amount'         => 'double',
        //        'billableOption' => 'Enum',
        'date'           => 'string',
        'locationId'     => 'integer',
        'businessUnitId' => 'integer',
        'notes'          => 'string',
        //        'agreement'      => 'AgreementReference',
        'invoiceAmount'  => 'double',
        //        'taxes'          => 'ExpenseTax[]',
        //        'invoice'        => 'InvoiceReference',
        //        '_info'          => 'Metadata',
    ];
}
