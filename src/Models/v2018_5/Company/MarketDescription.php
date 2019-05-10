<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketDescription Version v2018_5
 *
 * Model for MarketDescription
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class MarketDescription extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
