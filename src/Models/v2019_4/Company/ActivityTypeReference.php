<?php

namespace Spinen\ConnectWise\Models\v2019_4\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class ActivityTypeReference Version v2019_4
 *
 * Required when acceptanceCreateActivityFlag is true
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ActivityTypeReference extends Model
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
