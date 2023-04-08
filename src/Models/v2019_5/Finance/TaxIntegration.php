<?php

namespace Spinen\ConnectWise\Models\v2019_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxIntegration Version v2019_5
 *
 * Model for TaxIntegration
 *
 * @property Metadata $_info
 * @property bool $accountingIntegrationFlag
 * @property bool $commitTransactionsFlag
 * @property bool $enabledFlag
 * @property bool $salesInvoiceFlag
 * @property bool $taxLineFlag
 * @property int $id
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
        '_info' => Metadata::class,
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
