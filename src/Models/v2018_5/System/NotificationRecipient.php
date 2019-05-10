<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class NotificationRecipient Version v2018_5
 *
 * Model for NotificationRecipient
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property boolean $externalFlag
 * @property boolean $serviceFlag
 * @property boolean $salesFlag
 * @property boolean $invoiceFlag
 * @property boolean $agreementFlag
 * @property boolean $memberFlag
 * @property boolean $configFlag
 * @property boolean $mspFlag
 * @property boolean $trackFlag
 * @property boolean $projectFlag
 * @property boolean $procurementFlag
 * @property boolean $knowledgeBaseFlag
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 */
class NotificationRecipient extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
        'externalFlag' => 'boolean',
        'serviceFlag' => 'boolean',
        'salesFlag' => 'boolean',
        'invoiceFlag' => 'boolean',
        'agreementFlag' => 'boolean',
        'memberFlag' => 'boolean',
        'configFlag' => 'boolean',
        'mspFlag' => 'boolean',
        'trackFlag' => 'boolean',
        'projectFlag' => 'boolean',
        'procurementFlag' => 'boolean',
        'knowledgeBaseFlag' => 'boolean',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
    ];
}
