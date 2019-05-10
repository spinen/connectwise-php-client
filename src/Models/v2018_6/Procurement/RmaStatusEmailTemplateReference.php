<?php

namespace Spinen\ConnectWise\Models\v2018_6\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class RmaStatusEmailTemplateReference Version v2018_6
 *
 * Model for RmaStatusEmailTemplateReference
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata $_info
 * @property integer $id
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Procurement\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
