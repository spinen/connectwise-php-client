<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxIntegration Version v2018_5
 *
 * Model for TaxIntegration
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property boolean $accountingIntegrationFlag
 * @property boolean $commitTransactionsFlag
 * @property boolean $enabledFlag
 * @property boolean $salesInvoiceFlag
 * @property boolean $taxLineFlag
 * @property integer $id
 * @property string $accountNumber
 * @property string $companyCode
 * @property string $expenseTaxCode
 * @property string $freightTaxCode
 * @property string $invoiceAmountTaxCode
 * @property string $licenseKey
 * @property string $productTaxCode
 * @property string $serviceUrl
 * @property string $taxIntegrationType
 * @property string $timeTaxCode
 */
class TaxIntegration extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'accountNumber' => 'string',
        'accountingIntegrationFlag' => 'boolean',
        'commitTransactionsFlag' => 'boolean',
        'companyCode' => 'string',
        'enabledFlag' => 'boolean',
        'expenseTaxCode' => 'string',
        'freightTaxCode' => 'string',
        'id' => 'integer',
        'invoiceAmountTaxCode' => 'string',
        'licenseKey' => 'string',
        'productTaxCode' => 'string',
        'salesInvoiceFlag' => 'boolean',
        'serviceUrl' => 'string',
        'taxIntegrationType' => 'string',
        'taxLineFlag' => 'boolean',
        'timeTaxCode' => 'string',
    ];
}
