<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxIntegration Version v2018_5
 * 
 * Model for TaxIntegration
 *
 * @property string $taxIntegrationType
 * @property integer $id
 * @property string $accountNumber
 * @property string $licenseKey
 * @property string $serviceUrl
 * @property string $companyCode
 * @property string $timeTaxCode
 * @property string $expenseTaxCode
 * @property string $productTaxCode
 * @property string $invoiceAmountTaxCode
 * @property boolean $enabledFlag
 * @property boolean $commitTransactionsFlag
 * @property boolean $salesInvoiceFlag
 * @property string $freightTaxCode
 * @property boolean $accountingIntegrationFlag
 * @property boolean $taxLineFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 */
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
