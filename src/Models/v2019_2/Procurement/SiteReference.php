<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SiteReference Version v2019_2
 *
 * Model for SiteReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class SiteReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
