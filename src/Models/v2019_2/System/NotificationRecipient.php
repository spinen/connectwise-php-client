<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class NotificationRecipient Version v2019_2
 *
 * Model for NotificationRecipient
 *
 * @property Metadata $_info
 * @property bool $agreementFlag
 * @property bool $configFlag
 * @property bool $externalFlag
 * @property bool $invoiceFlag
 * @property bool $knowledgeBaseFlag
 * @property bool $memberFlag
 * @property bool $mspFlag
 * @property bool $procurementFlag
 * @property bool $projectFlag
 * @property bool $salesFlag
 * @property bool $serviceFlag
 * @property bool $trackFlag
 * @property int $id
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
        'trackFlag' => 'boolean',
    ];
}
