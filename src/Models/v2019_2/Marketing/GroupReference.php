<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class GroupReference Version v2019_2
 *
 * Model for GroupReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class GroupReference extends Model
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
