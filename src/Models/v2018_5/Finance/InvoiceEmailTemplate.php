<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceEmailTemplate Version v2018_5
 *
 * Model for InvoiceEmailTemplate
 *
 * @property BillingStatusReference $invoiceStatus
 * @property Metadata $_info
 * @property ServiceSurveyReference $serviceSurvey
 * @property bool $copySenderFlag
 * @property bool $useSenderFlag
 * @property int $id
 * @property string $body
 * @property string $emailAddress
 * @property string $firstName
 * @property string $lastName
 * @property string $name
 * @property string $subject
 */
class InvoiceEmailTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'body' => 'string',
        'copySenderFlag' => 'boolean',
        'emailAddress' => 'string',
        'firstName' => 'string',
        'id' => 'integer',
        'invoiceStatus' => BillingStatusReference::class,
        'lastName' => 'string',
        'name' => 'string',
        'serviceSurvey' => ServiceSurveyReference::class,
        'subject' => 'string',
        'useSenderFlag' => 'boolean',
    ];
}
