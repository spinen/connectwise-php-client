<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatus Version v2019_2
 *
 * Model for RmaStatus
 *
 * @property Metadata $_info
 * @property RmaStatusEmailTemplateReference $emailTemplate
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
        '_info' => Metadata::class,
        'closedFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'emailTemplate' => RmaStatusEmailTemplateReference::class,
        'id' => 'integer',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
