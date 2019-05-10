<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketDescriptionReference Version v2018_6
 *
 * Model for MarketDescriptionReference
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $name
 */
class MarketDescriptionReference extends Model
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
