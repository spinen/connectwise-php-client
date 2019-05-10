<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class NotificationRecipient Version v2019_2
 *
 * Model for NotificationRecipient
 *
 * @property Metadata $_info
 * @property boolean $agreementFlag
 * @property boolean $configFlag
 * @property boolean $externalFlag
 * @property boolean $invoiceFlag
 * @property boolean $knowledgeBaseFlag
 * @property boolean $memberFlag
 * @property boolean $mspFlag
 * @property boolean $procurementFlag
 * @property boolean $projectFlag
 * @property boolean $salesFlag
 * @property boolean $serviceFlag
 * @property boolean $trackFlag
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class NotificationRecipient extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'agreementFlag' => 'boolean',
        'configFlag' => 'boolean',
        'externalFlag' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'invoiceFlag' => 'boolean',
        'knowledgeBaseFlag' => 'boolean',
        'memberFlag' => 'boolean',
        'mspFlag' => 'boolean',
        'name' => 'string',
        'procurementFlag' => 'boolean',
        'projectFlag' => 'boolean',
        'salesFlag' => 'boolean',
        'serviceFlag' => 'boolean',
        'trackFlag' => 'boolean'
    ];
}
