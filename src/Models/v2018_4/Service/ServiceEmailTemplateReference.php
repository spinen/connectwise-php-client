<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceEmailTemplateReference Version v2018_4
 * 
 * Model for ServiceEmailTemplateReference
 *
 * @property integer $id
 * @property string $identifier
 * @property string $name
 * @property string $type
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 */
class ServiceEmailTemplateReference extends Model
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
        'type' => 'string',
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
    ];
}
