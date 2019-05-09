<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceEmailTemplate Version v2018_5
 * 
 * Model for InvoiceEmailTemplate
 *
 * @property integer $id
 * @property string $name
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\ServiceSurveyReference $serviceSurvey
 * @property boolean $useSenderFlag
 * @property string $firstName
 * @property string $lastName
 * @property string $emailAddress
 * @property string $subject
 * @property string $body
 * @property boolean $copySenderFlag
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\BillingStatusReference $invoiceStatus
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 */
class InvoiceEmailTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'serviceSurvey' => 'Spinen\ConnectWise\Models\v2018_5\Finance\ServiceSurveyReference',
        'useSenderFlag' => 'boolean',
        'firstName' => 'string',
        'lastName' => 'string',
        'emailAddress' => 'string',
        'subject' => 'string',
        'body' => 'string',
        'copySenderFlag' => 'boolean',
        'invoiceStatus' => 'Spinen\ConnectWise\Models\v2018_5\Finance\BillingStatusReference',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
    ];
}
