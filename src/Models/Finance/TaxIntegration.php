<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class TaxIntegration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'taxIntegrationType' => 'string',
        'id' => 'integer',
        'accountNumber' => 'string',
        'licenseKey' => 'string',
        'serviceUrl' => 'string',
        'companyCode' => 'string',
        'timeTaxCode' => 'string',
        'expenseTaxCode' => 'string',
        'productTaxCode' => 'string',
        'invoiceAmountTaxCode' => 'string',
        'enabledFlag' => 'boolean',
        'commitTransactionsFlag' => 'boolean',
        'salesInvoiceFlag' => 'boolean',
        'freightTaxCode' => 'string',
        'accountingIntegrationFlag' => 'boolean',
        'taxLineFlag' => 'boolean',
    ];
}
