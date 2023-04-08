<?php

namespace Spinen\ConnectWise\Models\v2019_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatusEmailTemplateReference Version v2019_4
 *
 * Model for RmaStatusEmailTemplateReference
 *
 * @property Metadata $_info
 * @property int $id
 * @property string $name
 */
class RmaStatusEmailTemplateReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string',
    ];
}
