<?php

namespace Spinen\ConnectWise\Models\v2019_4\Service;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplateReference Version v2019_4
 *
 * Model for ServiceTemplateReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 * @property string $summary
 */
class ServiceTemplateReference extends Model
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
        'summary' => 'string'
    ];
}
