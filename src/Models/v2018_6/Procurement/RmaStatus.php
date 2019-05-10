<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatus Version v2018_6
 *
 * Model for RmaStatus
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\RmaStatusEmailTemplateReference $emailTemplate
 * @property boolean $closedFlag
 * @property boolean $defaultFlag
 * @property integer $id
 * @property integer $sortOrder
 * @property string $name
 */
class RmaStatus extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
        'closedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'emailTemplate' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\RmaStatusEmailTemplateReference',
        'id' => 'integer',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
