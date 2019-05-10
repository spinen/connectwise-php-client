<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class QuoteLink Version v2019_2
 *
 * Model for QuoteLink
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $location
 * @property boolean $allLocationsFlag
 * @property boolean $newWindowFlag
 * @property integer $id
 * @property string $link
 */
class QuoteLink extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
        'allLocationsFlag' => 'boolean',
        'id' => 'integer',
        'link' => 'string',
        'location' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'newWindowFlag' => 'boolean',
    ];
}
