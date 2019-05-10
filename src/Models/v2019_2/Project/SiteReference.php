<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class SiteReference Version v2019_2
 *
 * Model for SiteReference
 *
 * @property Metadata $_info
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
        '_info' => Metadata::class,
        'id' => 'integer',
        'name' => 'string'
    ];
}
