<?php

namespace Spinen\ConnectWise\Models\v2018_5\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplateReference Version v2018_5
 * 
 * Model for ServiceTemplateReference
 *
 * @property integer $id
 * @property string $name
 * @property string $summary
 * @property Spinen\ConnectWise\Models\v2018_5\Service\Metadata $_info
 */
class ServiceTemplateReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'summary' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Service\Metadata',
    ];
}